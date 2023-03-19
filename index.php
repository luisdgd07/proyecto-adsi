<?php include_once("includes/header.php") ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo $name ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-6 mt-4 mx-auto">
            <div class="card">


                <h3 class="text-center py-2 text-white bg-primary">Iniciar sesión</h3>
                <div class="card-body">
                    <form id="login">
                        <label for="username" class="form-label mt-2 "><i class="fa fa-user-circle mx-2"></i>Usuario</label>
                        <input type="text" name="username" id="email" class="form-control mt-2" required>
                        <label for="password" class="form-label mt-2"><i class="fa fa-key mx-2"></i>Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control mt-2" required>
                        <button type="submit" id="btnLogin" class="btn btn-success mt-3 mx-auto">Iniciar sesión</button>
                    </form>

                    <div class="alert alert-danger alert-dismissible text-white" id="error" style="display:none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("form").submit(function(event) {
            var email = $('#email').val();
            var password = $('#password').val();
            if (email != "" && password != "") {
                $.ajax({
                    url: "api/user.php",
                    type: "POST",
                    data: {
                        type: 1,
                        email: email,
                        password: password
                    },
                    cache: false,
                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            location.href = "principal.php";
                        } else {
                            $("#error").show();
                            $('#error').html('¡Usuario o contraseña incorrecta!');
                        }

                    }
                });
            } else {
                alert('Please fill all the field !');
            }
            event.preventDefault();
        });
    });
</script>
<?php include_once("includes/footer.php");
