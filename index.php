<?php 
session_start();
  if(!isset($_SESSION['tasks']) ){
    $_SESSION['tasks'] = array();
  }
  if(isset($_GET['task-name']) ){
    array_push($_SESSION['tasks'], $_GET['task-name']);
    unset($_GET['task-name']);
  }
  
  if(isset($_GET['clear']) ) {
    unset($task);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciador de Tarefas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Gerenciador de tarefas</h1>
    </div>
    <div class="form">
        <form action="" method="get">
          <label for="task-name">Tarefa:</label>
          <input type="text" name="task-name" placeholder="Nome da tarefa">
          <button type="submit">Cadastrar</button>
        </form>
        </div>

    <div class="separator">
    </div> 
    <div class="list-tasks">
      <?php
        if(isset($_SESSION['tasks']) ){
          echo "<ul>";
          
          foreach( $_SESSION['tasks'] as $key => $task){
            echo "<li>$task</li>";
          }

          echo "<ul";
        }
      ?>

    <form action="" method="get">
      <input type="hidden" name="clear" value="clear">
      <button class="btn-clear" type="submit">Limpar tarefas</button>
    </form>
    </div>  
    <div class="footer">
        <p>Desenvolvido por @AllanDantas</p>
    </div>
    </div>
  
</body>
</html>