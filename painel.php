<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Painel</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/drive.png" width="45px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#carros">PRODUTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">CONTATO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cadastro">CADASTRO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carro1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/carro2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item active">
                    <img src="img/carro3.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item active">
                    <img src="img/carro4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item"> <img src="img/carro5.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/carro05.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Venda de Carros</h5>
                        <p class="card-text">R$ 4.800.000,00 à Vista.</p>
                        <a href="#" class="btn btn-danger btn-lg">Compre já</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/carro09.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Venda de Carros</h5>
                        <p class="card-text">R$ 149,900 à Vista.</p>
                        <a href="#" class="btn btn-success btn-lg">Compre já</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/carro07.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-success">Venda de Carros</h5>
                        <p class="card-text">R$ 1.965.258,00 à Vista.</p>
                        <a href="#" class="btn btn-warning btn-lg">Compre já</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/carro08.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-success">Venda de Carros</h5>
                        <p class="card-text">R$ 266.990 à Vista.</p>
                        <a href="#" class="btn btn-warning btn-lg">Compre já</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row mt-5 bg-light">

            <div class="col">

                <h2 class="display-5 text-center" id="cadastro">CADASTRE-SE</h2>

            </div>

        </div>

        <div class="row bg-light">

            <div class="col">

                <div class="mb-3">

                    <label for="nome" class="form-label">Nome</label>

                    <input type="text" class="form-control" id="nome">

                </div>

                <div class="mb-3">

                    <label for="email" class="form-label">E-mail</label>

                    <input type="email" class="form-control" id="email">

                </div>

                <div class="mb-3">

                    <label for="cidade" class="form-label">Cidade</label>

                    <input type="text" class="form-control" id="cidade">

                </div>

                <button class="btn btn-lg btn-primary">SALVAR</button>

            </div>

        </div>
        <br>
        <div class="row">

            <div class="col">
                <div class="row">
                    <div class="col">
                        <h2 class="display6 text-center" id="contato">CONTATO</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.3285286800956!2d-47.331288049406524!3d-22.75318608501699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8998174c896b9%3A0x739b7f99b3323574!2sSenac%20Americana!5e0!3m2!1spt-BR!2sbr!4v1677113284946!5m2!1spt-BR!2sbr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container bg-success p-3">
        <div class="row">
            <div class="col">
                <img src="img/drive.png" width="50px">
            </div>
            <div class="col text-end">
                <img src="img/icon-insta.png" width="40px">
                <img src="img/icon-face.png" width="40px">
                <img src="img/icon-zap.png" width="40px">
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>