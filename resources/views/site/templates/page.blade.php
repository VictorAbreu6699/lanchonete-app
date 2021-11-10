<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">

        <title>@yield('title') - Lanchonete</title>
    </head>
<body>
    <header>        
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
            <a class="navbar-brand" href="/">
              <img src="/assets/img/logo-generica.png" width="90" height="90" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a href="/quem-somos" class="nav-link">Quem Somos</a>                  
                </li>
                <li class="nav-item">
                    <a href="/cardapio" class="nav-link">Cardapio</a>                  
                </li>
                <li class="nav-item">
                    <a href="/contato" class="nav-link">Contato</a>                  
                </li>                              
              </ul>
              <form class="d-flex">
                <input class="form-control mr-2" type="search" placeholder="Digite aqui..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>        
            </div>
            </nav>        
    </header>
    
    @yield('content')

    <footer>
        <div class="row fixed-bottom ">
            <div class="col-12">
                <div class="direitos pb-4 pt-4 text-center bg-primary">
                    Desenvolvido por <a href="https://www.linkedin.com/in/victor-abreu-b44b92199/" target="_blank">Victor Abreu</a> | {{strftime("%Y")}}
                </div>                
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>