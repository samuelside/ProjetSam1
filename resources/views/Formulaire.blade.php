<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <link rel="stylesheet" href={{ asset('css/Formulaire.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>





</head>

<body>
    <nav class="cc-navbar navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand test-uppercase mx-3 py-2" href="#"> <img src="images/logo_artci.jpg" width="100"
                    height="70" alt=""> </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <ul class="nav justify-content-end">
                <li class="nav-item pe-4">
                    <a class="c-nav-link active" href="#">Accueil</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Nos services
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item pe-4">
                    <a class="c-nav-link" href="#">A propos de nous </a>
                </li>

                <li class="nav-item pe-4">
                    <a class=" btn btn-primary  rounded-0" href="{{ route('Connexion') }}" role="button">Se connecter
                    </a>
                </li>
            </ul>
    </nav>

    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
        <h2 class="form-title">Demande de cachet électronique visible CEV </h2>


        <div class="form-group">
            <label for="exampleInputEmail1">Nom de l'Organisation</label>
            <input type="text" class="form-control" id="NomOrga" name="NomOrga" aria-describedby="emailHelp"
                placeholder="ORANGE">

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Identifiant de l'autorité de certification</label>
            <input type="text" class="form-control" id="IDARTCI" name="IDARTCI" aria-describedby="emailHelp"
                placeholder="CI01">

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Lien vers le 2D-DOC</label>
            <input type="text" class="form-control" id="LienDoc" name="LienDoc" aria-describedby="emailHelp"
                placeholder="">

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Numéro du document</label>
            <input type="number" class="form-control" id="NumDoc" name="NumDoc" aria-describedby="emailHelp"
                placeholder="526278">

        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Email de L'usager</label>
            <input type="email" class="form-control" id="EmailUsager" name="EmailUsager"
                placeholder="samuelside8@gmail.com">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Insérer un document </label>
            <input type="file" id="Document" name="Document" accept='.pdf'>
        </div>
        <button type="submit" class="btn btn-primary"> Valider </button>
    </form>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

</body>

</html>
