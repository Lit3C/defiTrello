<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To Do</title>
  </head>
  <body>
    <div id="taskForm">
      <input type="text" id="myTask" placeholder="Ajouter une tâche">
      <button type="button" name="button" onclick="recupTask()">Ajouter</button>
    </div>
    <div>listes des tâches</div>
    <div id="listTasks">ma tâche </div>

  <script>
    function affiche(){
      document.getElementById('listTasks').innerHTML="<ul>"+this.responseText+"</ul>";
    }

    function recupTask(){
      var myTask = document.getElementById('myTask').value;

      var requete = new XMLHttpRequest();
      requete.onload = affiche;
      requete.open("GET",'requestTask.php?task='+myTask, true);
      requete.send();

      console.log("resultat: ", requete.responseText);
    }
  </script>
  </body>
</html>
