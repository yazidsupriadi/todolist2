@extends('layouts.master')
@section('content')
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input value=" task to edit"id="task2" type="text" class="validate">
          <label for="task">Tasks</label>
          @include('partials.coworkers')
          <a class="waves-effect waves-light btn">Edit task</a>    
      
      </div>

  
    </form>
@endsection