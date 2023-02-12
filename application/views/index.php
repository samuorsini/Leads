<!DOCTYPE html>
<html lang="PT-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Window Icon -->
    <link rel="shortcut icon" href="<?= base_url('assets/img/lead.png') ?>" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>">

    <title>Leads</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">

</head>

<body>

    <nav class="navbar bg-success" data-bs-theme="dark">

        <div class="container-fluid">
            <img src="<?= base_url('assets/img/searchPeople.png') ?>" alt="iconTitle" id="iconTitle">
            <a class="navbar-brand fw-bold text-uppercase text-white fs-3 fst-italic" id="spacingIcon">One To One</a>
            <form class="d-flex" role="search">
                <button class="btn btn-outline-light me-2" type="submit">Login</button>
                <button class="btn btn-outline-warning" type="submit">Sign Up</button>
            </form>
        </div>

    </nav>

    <!-- <div class="position-relative heroesCenter">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="col align-self-center">

                <img src="<?= base_url('assets/img/leadAnimation.gif') ?>" alt="Lead Animaion" id="leadAnimation">
                <p>One of three columns</p>
            </div>
        </div>
    </div> -->
    <div class="position-relative heroesCenter">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="col align-self-center">
                <img src="<?= base_url('assets/img/leadAnimation.gif') ?>" class="card-img-top leadAnimation" alt="...">
            </div>
        </div>
    </div>

    <div class="position-absolute top-50 start-50 translate-middle mt-5">
        <div class="col align-self-center">
            <div class="waviy">
                <span style="--i:1" class="text-uppercase fw-bold fs-3">Tem alguma dúvida sobre um produto?</span>
                <h1>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">Fale</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">com</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">um</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">especialista!</span>
                    <br>
                    <!-- Outra Frase -->
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">E receba</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">em primeira</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">mão</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">o que</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">necessita!</span>
                    <br>
                    <!-- Outra Frase -->
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">Entre com</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">sua</span>
                    <span class="text-uppercase text-center fw-bold fs-4 oneByone">conta ou <a href="#"
                            class="text-decoration-none text-warning">registra-se!</a></span>

                </h1>
            </div>
        </div>
    </div>

    <!-- <div class="container bg-success spacingQuestion">
        <div class="card-header">
            Featured
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('assets/img/marchioretto.jpg') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text fw-bold text-center text-uppercase fs-3">Marchioretto</p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <div class="card text-center">
            <div class="card-header bg-success fw-bold text-white text-uppercase fs-4 fst-italic">
                Parceiros
            </div>

            <div class="row ms-5 align-items-center">
                <div class="col">
                    <div class="card-body">
                        <div style="width: 18rem;">
                            <img src="<?= base_url('assets/img/marchioretto.jpg') ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body">
                        <div style="width: 18rem;">
                            <img src="<?= base_url('assets/img/kanguru.png') ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body">
                        <div style="width: 18rem;">
                            <img src="<?= base_url('assets/img/irmaoDelalana.jpg') ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-footer bg-success"></div>
        </div>
    </div>


    <footer>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b1ae22cfee.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>

        <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/locale/bootstrap-table-pt-BR.min.js"></script>


        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    </footer>
</body>

</html>