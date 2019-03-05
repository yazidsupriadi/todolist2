
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


  <form  action="{{ route('logout') }}" method="POST">
                                        @csrf
    
  <div class="container">
      <p> Logged as <b>{{Auth::user()->name}}</b> 
</p>
  <button type="submit" class="waves-effect waves-light btn">Log Out</button>
  </form>


  @isAdmin
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
@endisAdmin

    <h1 class="text center green-text text-darken-4"> To Do List </h1>
    
    @yield('content')


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
