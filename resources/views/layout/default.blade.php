<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articles</title>
  
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('bs3/bootstrap.min.css')}}">

</head>
<body>

  <header>

      <nav class="navbar navbar-expand-dark bg-light fixed-top">
        <div class="navbar-text"><a href="{{route('articles.index') }}">Articles_Management</a></div>
           <ul class="nav" class="breadcrumb">

                <li class="navbar"><a href="{{route('articles.index')}}" class="navbar-item"><i class="fa fa-home" style="color: gray"></i>Accueil</a></li>
                <li class="navbar"><a href="#" class="navbar-item"><i class="fa fa-address-book" style="color: gray"></i>A propos</a></li>
                <li class="navbar"><a href="#" class="navbar-item"><i class="fa fa-servicestack" style="color: gray"></i>Services</a></li>
                     <li class="navbar"><a href="#" class="navbar-item"><i class="fa fa-hands-helping" style="color: gray"></i>Partenaires</a></li>
                     <li class="navbar"><a href="#" class="navbar-item"><i class="fa fa-user-edit" style="color: gray"></i>Inscription</a></li>
    </ul>
    
    </nav>  
    
  </header>
  <br><br>

 <main>

   <div class="container">
    @yield('content')
     
   </div>

 </main> <br><br>
 


<footer class="text-muted">
  <div class="container">

    <p class="float-right"><a href="{{route('articles.index')}}">Back</a></p>

    <p>&hearts; JEHDAI developper &copy; {{date('Y')}}</p>
    
  </div>
  
</footer>

<script src="{{asset('js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
 
  
</body>
</html>