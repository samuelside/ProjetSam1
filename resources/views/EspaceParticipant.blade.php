<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Esapce du participant </title>
    <link rel="stylesheet" href={{asset('css/EspaceParticipant.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    

    
</head>
<body>

<nav class="cc-navbar navbar navbar-expand-lg navbar-light">
<div class="container-fluid">
<a class="navbar-brand test-uppercase mx-3 py-2"  href="#"> <img src="images/logo_artci.jpg" width="100" height="70" alt=""> </a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
</button>


 <ul class="nav justify-content-end">
  <li class="nav-item pe-4">
    <a class="c-nav-link active" href="#">Accueil</a>
  </li>

  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nos services 
          </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('post.create')}}">Acccéder au formulaire </a></li>
            <li><a class="dropdown-item" href="#">Accéder à l'annuaire</a></li>
            <li><a class="dropdown-item" href="#">Accéder à la liste des certificats révoqués</a></li>
          </ul>
    </li>


  
  <li class="nav-item pe-4">
    <a class="c-nav-link" href="#">A propos de nous </a>
  </li>

  <li class="nav-item pe-4">
  <a class=" btn btn-primary  rounded-0" href="{{}}" role="button">Se deconnecter  </a>
  </li>





  
  
 </ul>

</nav>
 
</br>
</br>
</br>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>