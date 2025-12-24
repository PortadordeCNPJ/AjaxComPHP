<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ajax</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toogle="tab" href="#home">Users</a></li>
                <li><a data-toogle="tab" href="#menu1">Cadastrar</a></li>
                <li><a data-toogle="tab" href="#menu2">Busca</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">

                    <br>

                    <button class="btn btn-default">Listar users</button>
                    <button id="btn-users" class="btn btn-primary btn-xs">users</button>
                    <div id="div-users"></div>

                    <hr>
                    <div id="div-users"></div>
                </div>

                <div id="menu1" class="tab-pane fade">

                    <br>

                    <div id="create"></div>
                    <form action="" method="POST" role="form" id="form-cadastrar" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" class="form-control" name="name" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>

                <div id="menu2" class="tab-pane fade in">

                    <br>

                    <form action="" id="form-buscar">
                        <input type="text" name="user">

                        <button type="submit" id="btn-buscar">Buscar</button>

                        <hr>

                        <div id="div-busca"></div>
                    </form>
                </div>
            </div>

            <hr>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="assets/js/user.js"></script>
    <script src="assets/js/xhttp.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
</body>

</html>