
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>My To Do List</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
  <div class="container">
      <p> Logged as <b>Me</b> 
<a class="waves-effect waves-light btn">Log Out</a></p>

      <ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">person_add</i>
      Invitations
      <span class="new badge green">4</span></div>
    <div class="collapsible-body"><p><span class="red-text"><b>someone i loved</b></span></p>
      <a href="" title="">accept</a> | <a href="" title="">deny</a>
    </div>
  </li>
</ul>

    <h1 class="text center green-text text-darken-4"> To Do List </h1>

       <table>
        <thead>
          <tr>
              <th>Tasks</th>
              <th>Assigned to</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Go to college</td>
            <td>Eclair</td>
            <td><a href="" title="edit"><i class="small material-icons">edit</i></a></td>

            <td><a href="" title="delete"><i class="small material-icons">delete</i></a></td>
          </tr>

          <tr>
            <td><strike> have a breakfast</strike></td>
            <td>none</td>
            <td><a href="" title="edit"><i class="small material-icons">edit</i></a></td>

            <td><a href="" title="delete"><i class="small material-icons">delete</i></a></td>
          </tr>
        </tbody>
      </table>

  <ul class="pagination center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
  

    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="task" id="task" type="text" class="validate">
          <label for="task">Tasks</label>
      
      </div>

        <div class="input-field col s12">
      <select>
        <option value="" disabled selected>Assigned to</option>
        <option value="1">My self</option>
        <option value="2">Parent</option>
        <option value="3">Lecture</option>
      </select>
      <label>Assigned to</label>
<a class="waves-effect waves-light btn">Add task</a>    
</div>
  
    </form>


      <ul class="collection with-header">
        <li class="collection-header"><h4>My coworkers</h4></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
      </ul>
    

    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input value=" task to edit"id="task2" type="text" class="validate">
          <label for="task">Tasks</label>
          <a class="waves-effect waves-light btn">Edit task</a>    
      
      </div>

  
    </form>
            
  </div>
 </div>
    

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script >
         document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var options;
    var instances = M.Collapsible.init(elems, options);
  });
    var elems2 = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems2);     



    </script>        
  </body>
</html>
