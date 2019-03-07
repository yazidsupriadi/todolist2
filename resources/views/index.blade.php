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
            @foreach($tasks as $task)
            <td>
              @if(!$task->status)
              {{$task->content}}
              @else
              <strike class='red-text'>{{$task->content}} </strike>
              @endif 
            </td>
            @isAdmin
            <td>{{$task->user ? $task->user->name : '-'}}</td>
            @endisAdmin
            <td><a href="{{route('edit',$task->id)}}" title="edit"><i class="small material-icons">edit</i></a></td>

            <td><a onclick = "return confirm('Delete?');"href="{{route('delete',$task->id)}}" title="delete"><i class="small material-icons">delete</i></a></td>
          </tr>
          @endforeach
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
  

    <form class="col s12" method="post" action="{{route('store')}}">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="task" id="task" type="text" class="validate">
          <label for="task">Tasks</label>
                <button class="waves-effect waves-light btn" type="submit">Add task</button>    
                @csrf
  
      </div>
  
                <button class="waves-effect waves-light btn" type="submit">Add task</button>    
                @csrf
    
    
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