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
                                <input type="text" placeholder="buscar" onkeyup="table()" id="search" class="form-control">
                                <table class="table align-items-center ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Dni</th>
                                            <th>Telefono</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodyProducto">
                                        <script>
                                            function table(page) {
                                                var valor = '';
                                                currentPage = page;
                                                var search = $('#search').val();
                                                $(document).ready(function() {

                                                    $.ajax({
                                                        url: "api/client.php",
                                                        type: "GET",
                                                        data: {
                                                            type: -1,
                                                            search: search,
                                                        },
                                                        DataType: 'json',
                                                        success: function(dataResult) {
                                                            var result = JSON.parse(dataResult);
                                                            $("#clientsCount").text(`Clientes: ${result}`)
                                                            pages = result[0] / 10;
                                                            pagination = ` <li class="page-item"><a class="page-link" href="#" onclick="page(${currentPage-1})">
                                                            <i class="ni ni-bold-left text-dark text-sm opacity-10"></i>
                                                            </a>
                                                        </li>`
                                                            for (var i = 0; i < result[0] / 10; i++) {
                                                                if (currentPage == i) {
                                                                    pagination += `<li class="page-item active"><a class="page-link"  onclick="page(${i})" href="#">${i+1}</a></li>`;

                                                                } else {
                                                                    pagination += `<li class="page-item"><a class="page-link"  onclick="page(${i})" href="#">${i+1}</a></li>`;
                                                                }
                                                            }
                                                            pagination += `<li class="page-item">
                                                            <a class="page-link" onclick="page(currentPage+1)" href="#">
                                                            <i class="ni ni-bold-right text-dark text-sm opacity-10"></i>
                                                            </a>
                                                            </li>`
                                                            $("#pagination").html(pagination);

                                                        },
                                                    });
                                                    $.ajax({
                                                        url: "api/client.php",
                                                        type: "GET",
                                                        data: {
                                                            type: 0,
                                                            search: search,
                                                            page: page * 10
                                                        },
                                                        DataType: 'json',
                                                        success: function(dataResult) {
                                                            var result = JSON.parse(dataResult);
                                                            if (dataResult.statusCode != 201) {
                                                                for (const [id, data_1] of Object.entries(result)) {

                                                                    valor += `<tr><td> ${(parseInt(id)+1)}</td><td> ${data_1.name}</td><td> ${data_1.last_name }</td><td> ${data_1.dni }</td><td> ${data_1.phone }</td><td><button class="mx-1 btn btn-warning" onclick="toggleModalEditclient(${data_1.id},'${data_1.name}','${data_1.last_name}','${data_1.dni}','${data_1.phone}')"><i class="ni ni-settings text-white fs-6 opacity-10"></i></button><a class="btn btn-info" href="./contractclient.php?id=${data_1.id}">Ver contratos</button></td></tr>`;
                                                                }
                                                            } else {
                                                                for (const [id, data_1] of Object.entries(result)) {
                                                                    valor += `<tr>Error Al obtener datos
                                                                </tr>`;
                                                                }
                                                            }
                                                            $("#tbodyProducto").html(valor);
                                                        },
                                                    });
                                                });
                                            }
                                        </script>

                                    </tbody>
                                </table>
                                <ul class="pagination" id="pagination">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                idEdit = 0;
                idDelete = 0;
                var visibleEdit = false;
                table(0);
                $("form").submit(function(event) {
                    create();
                });
            });

            function page(pag) {
                if (pag == -1) {
                    pag = 0;
                }
                if (pag == Math.ceil(pages)) {
                    pag = (Math.ceil(pages) - 1);
                }
                currentPage = pag;
                table(pag)
            }
        </script>
        <?php include_once("modals/pacientes.php")
        ?>

</main>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<?php include_once("includes/footer.php");
