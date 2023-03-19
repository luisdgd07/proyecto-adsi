<div class="modal fade" id="create" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleModaluser()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre del Usuario</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Rol</label>
                        <select name="" class="form-control" id="select">
                            <option value="0">Administrador</option>
                            <option value="1">Usuario</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="toggleModaluser()" data-dismiss="modal">Cerrar</button>
                <button onclick="create()" id="create" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleModalEdituser()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre del Usuario</label>
                        <input type="text" class="form-control" id="namee">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="emaile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="passe">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Rol</label>
                        <select name="" class="form-control" id="selecte">
                            <option value="0">Administrador</option>
                            <option value="1">Usuario</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="toggleModalEdituser()" data-dismiss="modal">Cerrar</button>
                <button onclick="edituser()" class="btn btn-primary">Editar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleModalDelete()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="textDelete">¿Eliminar :?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="toggleModalDelete()" data-dismiss="modal">Cerrar</button>
                <button onclick="delete_item()" id="create" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>
<script>
    var activeuser = false;

    function toggleModaluser() {
        if (activeuser) {
            $('#create').modal('hide');
        } else {
            $('#create').modal('show');

        }
        activeuser = !activeuser;
    }

    currentPageuser = 0;

    function pageuser(pag) {
        if (pag == -1) {
            pag = 0;
        }
        if (pag == Math.ceil(pagesuser)) {
            pag = (Math.ceil(pagesuser) - 1);
        }
        currentPage = pag;
        tableuser(pag)
    }

    function tableuser(page) {
        var valor = '';
        currentPageuser = page;
        var search = $('#searchuser').val();
        $(document).ready(function() {
            $.ajax({
                url: "api/user.php",
                type: "GET",
                data: {
                    type: -1,
                    search: search,
                },
                DataType: 'json',
                success: function(dataResult) {
                    var result = JSON.parse(dataResult);
                    pagesuser = result[0]
                    pagination = ` <li class="page-item"><a class="page-link" href="#" onclick="pageuser(${currentPageuser-1})">
                                                            <i class="ni ni-bold-left text-dark text-sm opacity-10"></i>
                                                            </a>
                                                        </li>`
                    for (var i = 0; i < result[0]; i++) {
                        if (currentPageuser == i) {
                            pagination += `<li class="page-item active"><a class="page-link"  onclick="pageuser(${i})" href="#">${i+1}</a></li>`;

                        } else {
                            pagination += `<li class="page-item"><a class="page-link"  onclick="pageuser(${i})" href="#">${i+1}</a></li>`;
                        }
                    }
                    pagination += `<li class="page-item">
                                                            <a class="page-link" onclick="pageuser(${currentPage+1})" href="#">
                                                            <i class="ni ni-bold-right text-dark text-sm opacity-10"></i>
                                                            </a>
                                                            </li>`
                    $("#paginationuser").html(pagination);

                },
            });
            $.ajax({
                url: "api/user.php",
                type: "GET",
                data: {
                    type: 0,
                    search: search,
                    page: page * 5
                },
                DataType: 'json',
                success: function(dataResult) {
                    var result = JSON.parse(dataResult);
                    if (dataResult.statusCode != 201) {
                        for (const [id, data_1] of Object.entries(result)) {
                            valor += `<tr><td> ${(parseInt(id)+1)}</td><td> ${data_1.title}</td><td> ${data_1.description }</td><td><button class="mx-1 btn btn-warning" onclick="toggleModalEdituser(${data_1.id},'${data_1.title}','${data_1.description}')"><i class="ni ni-settings text-white fs-6 opacity-10"></i></button></tr>`;
                        }
                    } else {
                        for (const [id, data_1] of Object.entries(result)) {
                            valor += `<tr>Error Al obtener datos
                                                                </tr>`;
                        }
                    }
                    $("#tbody").html(valor);
                },
            });
        });
    }
    var idEdituser = 0;
    var activeEdit = false;

    function toggleModalEdituser(id_edit, name, email) {
        idEdituser = id_edit;
        var name = $('#namee').val(name);
        var email = $('#emaile').val(email);

        if (activeEdit) {
            $('#edit').modal('hide');
        } else {
            $('#edit').modal('show');

        }
        activeEdit = !activeEdit;
    }
    var idDeleteuser = 0;

    function create() {

        var name = $('#name').val();
        var email = $('#email').val();
        var pass = $('#pass').val();
        var roluser = $('#select').val();

        if (name != "" && email != "" && pass != "") {
            $.ajax({
                url: "api/user.php",
                type: "POST",
                data: {
                    type: 2,
                    email: email,
                    rol: roluser,
                    name: name,
                    password: pass
                },
                cache: false,
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        toggleModal();
                        table(0);
                        $('#name').val("");
                        $('#email').val("");
                        $('#pass').val("");
                        Swal.fire({
                            title: 'Usuario creado',
                            icon: 'success',
                        })

                    } else if (dataResult.statusCode == 201) {
                        Swal.fire({
                            title: 'Error al crear Usuario',
                            icon: 'error',
                        })
                    }
                }
            });
        } else {
            Swal.fire({
                title: 'Completa todos los campos',
                icon: 'error',
            })
        }
        event.preventDefault();
    }

    function edituser() {

        var name = $('#namee').val();
        var email = $('#emaile').val();
        var pass = $('#passe').val();
        var roluser = $('#selecte').val();

        if (name != "" && email != "" && pass != "") {
            $.ajax({
                url: "api/user.php",
                type: "POST",
                data: {
                    type: 3,
                    email: email,
                    rol: roluser,
                    name: name,
                    password: pass,
                    id: idEdituser
                },
                cache: false,
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        toggleModalEdituser();
                        table(0);
                        $('#namee').val("");
                        $('#emaile').val("");
                        $('#passe').val("");
                        Swal.fire({
                            title: 'Usuario editado',
                            icon: 'success',
                        })

                    } else if (dataResult.statusCode == 201) {
                        Swal.fire({
                            title: 'Error al editar Usuario',
                            icon: 'error',
                        })
                    }
                }
            });
        } else {
            Swal.fire({
                title: 'Completa todos los campos',
                icon: 'error',
            })
        }
        event.preventDefault();
    }
</script>