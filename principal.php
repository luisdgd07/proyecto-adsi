<?php include_once("includes/header.php");
include_once("includes/sidebar.php");
?>
<main class="main-content position-relative border-radius-lg ">
    <?php include_once("includes/navbar.php") ?>
    <div class="container-fluid ">
        <div class="row">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="row ">
                        <div class="card ">
                            <div class="card-header pb-0 p-3">
                                <div class="d-flex justify-content-between">
                                    <h3 class="mb-2" id="clientsCount">Pacientes</h3>

                                    <div class="">

                                        <button class="btn btn-success" onclick="toggleModalclient()">
                                            <i class="ni ni-fat-add text-white fs-4 opacity-10"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="table-responsive mx-4">
                                <table id="example" class="table align-items-center ">
                                    <thead>
                                        <tr>
                                            <th>Apellido</th>
                                            <th>Nombre</th>
                                            <th>Documento</th>
                                            <th>N Doc</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodyProducto">
                                        <?php

                                        $lista = include_once("api/listaPacientes.php");
                                        foreach ($resultados as $res) {
                                            // var_dump($resultados);
                                        ?>
                                            <tr>

                                                <td><?php echo $res->apellido ?></td>
                                                <td><?php echo $res->nombre ?></td>
                                                <td><?php echo $res->tipo_doc ?></td>
                                                <td><?php echo $res->n_doc ?></td>
                                                <td> <button class="btn btn-success" onclick="toggleModalHistoria('<?php echo $res->apellido ?>','<?php echo $res->nombre ?>','<?php echo $res->tipo_doc ?>','<?php echo $res->n_doc ?>',<?php echo $res->id ?>)">Historia</button>
                                                    <button onclick="toggleModalAntecedentes('<?php echo $res->apellido ?>','<?php echo $res->nombre ?>','<?php echo $res->tipo_doc ?>','<?php echo $res->n_doc ?>',<?php echo $res->id ?>)" class="btn btn-warning">Antecedentes</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once("modals/pacientes.php");
        include_once("selects/etnias.php");
        include_once("selects/pais.php");
        include_once("selects/entidad.php");
        include_once("selects/municipio.php");
        include_once("selects/parroquia.php");
        include_once("selects/localidad.php");
        include_once("selects/tipoPaciente.php");
        include_once("selects/mision.php");
        include_once("selects/antecedentes.php");
        ?>

</main>
<script>
    $(document).ready(function() {
        idEdit = 0;
        idDelete = 0;
        var visibleEdit = false;
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<script>
    $(document).ready(function() {

        $('#example').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': false,
            'autoWidth': true
        });
    });
    $(document).ready(function() {

    });
</script>

<?php include_once("includes/footer.php");
