@extends('layouts.master')
@section('content')
       <table>
        <thead>
          <tr>
              <th>Tasks</th>
              
              @isAdmin
              <th>Assigned to</th>
              @endisAdmin

              <th>Edit</th>
              <th>Delete</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Go to college</td>
            @isAdmin
            <td>Eclair</td>
            @endisAdmin
            <td><a href="" title="edit"><i class="small material-icons">edit</i></a></td>

            <td><a href="" title="delete"><i class="small material-icons">delete</i></a></td>
          </tr>

          <tr>
            <td><strike> have a breakfast</strike></td>
            @isAdmin
            <td>none</td>
            @endisAdmin
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
                <a class="waves-effect waves-light btn">Add task</a>    
  
      </div>
    
    
    </form>

          <form action="" method="post" class="col s12" accept-charset="utf-8">
             
        <div class="input-field col s12">
      <select>
        <option value="" disabled selected>Send invitation to</option>
        <option value="1">My self</option>
        <option value="2">Parent</option>
        <option value="3">Lecture</option>
      </select>
      <label>Assigned to</label>
    </div> 
    <a class="waves-effect waves-light btn">Add task</a>    

      </form>
    @include('partials.coworkers')    

  </div>
 </div>
    
@endsection