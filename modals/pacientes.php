<div class="modal fade" id="create" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleModalclient()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Doc:</label>
                                <!-- <input type="text" class="form-control" id="name"> -->
                                <select class="form-control" name="" id="doc">
                                    <option value="cedula">Cedula</option>
                                    <option value="pasaporte">Pasaporte</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nro Doc</label>
                                <input type="text" class="form-control" id="tipoDoc">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fecha de Naci</label>
                                <input type="date" class="form-control" id="fecha">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Sexo</label>
                                <select class="form-control" name="" id="sexo">
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Etnia</label>
                                <select class="form-control" name="" id="etnia"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nacionalidad</label>
                                <select class="form-control" name="" id="nacion"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Situación conyugal </label>
                                <select class="form-control" name="" id="situacion">
                                    <option value="soltero">Soltero</option>
                                    <option value="casado">Casado</option>
                                    <option value="divorciado">Divorciado</option>
                                    <option value="viudo">Viudo</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">¿Es analfabeta?</label>
                                <select class="form-control" name="" id="analfabeta">
                                    <option value="0">no</option>
                                    <option value="1">si</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nivel Educativo</label>
                                <input type="text" class="form-control" id="educacion">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Misión Educativa</label>
                                <select class="form-control" name="" id="mision"></select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Años aprobados</label>
                                <input type="number" value="0" class="form-control" id="anos">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Profesión</label>
                                <input type="text" class="form-control" id="profesion">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">País de nacimiento</label>
                                <select class="form-control" name="" id="pais"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Entidad de Nacimiento</label>
                                <select class="form-control" name="" id="entidad"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Municipio de nacimiento</label>
                                <select class="form-control" name="" id="municipio"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Ciudad de nacimiento</label>
                                <select class="form-control" name="" id="ciudad"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Ocupación</label>
                                <input type="text" class="form-control" id="ocupacion">
                            </div>
                        </div>
                        <!-- <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">¿Tiene seguro social?</label>
                                <br>
                                <input type="radio" class="mx-2" name="analfabeta" placeholder="Si" id="">Si
                                <input type="radio" class="mx-2" name="analfabeta" placeholder="No" id="">No
                            </div>
                        </div> -->
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Entidad de Residencia</label>
                                <select class="form-control" name="" id="entidadR"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Municipio de Residencia</label>
                                <select class="form-control" name="" id="municipioR"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Parroquia de residencia</label>
                                <select class="form-control" name="" id="parroquia"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Localidad de Residencia</label>
                                <select class="form-control" name="" id="localidad"></select>
                            </div>
                        </div>
                        <div class="col-md-2" style="display: none;">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Sector/Urbanización</label>
                                <input type="text" class="form-control" id="sector">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Avenida o Calle</label>
                                <input type="text" class="form-control" id="calle">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Casa #</label>
                                <input type="text" class="form-control" id="casa">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Piso</label>
                                <input type="text" class="form-control" id="piso">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Código Postal</label>
                                <input type="text" class="form-control" id="postal">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telefono Fijo</label>
                                <input type="text" class="form-control" id="telefono">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telefono Celular</label>
                                <input type="text" class="form-control" id="celular">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo Eletrónico</label>
                                <input type="email" class="form-control" id="correo">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Sector/Urbanización</label>
                                <input type="text" class="form-control" id="sector">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tipo de paciente</label>
                                <select class="form-control" name="" id="tpaciente"></select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Apellido de la familia</label>
                                <input type="text" class="form-control" id="apellidoF">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">¿Es jefe de familia?</label>
                                <select class="form-control" name="" id="jefe">
                                    <option value="0">no</option>
                                    <option value="1">si</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="toggleModalclient()" data-dismiss="modal">Cerrar</button>
                <button onclick="create()" id="create" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="antecedentes" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Antecedentes de: <span id="historialA"></span> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleModalAntecedentes()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Agregar Antecedentes</h3>
                <div class="row">
                    <select class="form-control" name="" id="antecedentesPaciente"></select>
                </div>

                <div class="row">
                    <button class="mt-2 btn btn-success" onclick="agregarAntecedente()">Agregar a los antecedentes</button>
                </div>
                <h3 class="mt-4 text-center">Antecedentes</h3>
                <table class="mt-4" style="width: 100%;">
                    <thead>
                        <th>Caso</th>
                    </thead>
                    <tbody id="antecedentesDePaciente">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="toggleModalAntecedentes()" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="historia" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Paciente <span id="historial"></span> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleModalHistoria()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Agregar Historia</h3>
                <div class="row">
                    <textarea name="" placeholder="Ingresa actualización" id="casoH" class="form-control" cols="10" rows="4"></textarea>
                </div>

                <br>
                <div class="row">
                    <p>Fecha:</p>
                </div>
                <div class="row">
                    <input type="date" class="form-control" name="" id="fechaH">
                </div>
                <div class="row">
                    <button class="mt-2 btn btn-success" onclick="agregarHis()">Agregar a la historia</button>
                </div>
                <h3 class="mt-4 text-center">Historia</h3>
                <table class="mt-4" style="
    width: 100%;
">
                    <thead>
                        <th>Caso</th>
                        <th>Fecha</th>

                    </thead>
                    <tbody id="historiaPaciente">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="toggleModalHistoria()" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    var activeclient = false;
    var activeclient2 = false;

    function toggleModalclient() {
        if (activeclient) {
            $('#create').modal('hide');
        } else {
            $('#create').modal('show');

        }
        activeclient = !activeclient;
    }
    toggleModalAntecedentes

    function agregarHis() {
        $.ajax({
            url: "api/historia.php",
            type: "POST",
            data: {
                type: 1,
                id: idPaciente,
                fecha: $("#fechaH").val(),
                caso: $("#casoH").val(),

            },
            cache: false,
            success: function(dataResult) {
                console.log(dataResult)
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $("#fechaH").val('')
                    $("#casoH").val('')
                    Swal.fire({
                        title: 'Historia creada',
                        icon: 'success',
                    })

                } else {
                    Swal.fire({
                        title: 'Error al crear Historia',
                        icon: 'error',
                    })
                }
            }
        });
        event.preventDefault();
    }
    let idPaciente = 0;

    function agregarAntecedente() {
        $.ajax({
            url: "api/antecedentes.php",
            type: "POST",
            data: {
                type: 2,
                id: idPaciente,
                fecha: $("#fechaH").val(),
                antecedente: $("#antecedentesPaciente").val()
            },
            cache: false,
            success: function(dataResult) {
                console.log(dataResult)
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {

                    Swal.fire({
                        title: 'Antecedente agregado',
                        icon: 'success',
                    })

                } else {
                    Swal.fire({
                        title: 'Error al agregar antecedente',
                        icon: 'error',
                    })
                }
            }
        });
        event.preventDefault();
    }

    function toggleModalAntecedentes(apellido, nombre, doc, ndoc, id) {
        if (activeclient2) {
            $('#antecedentes').modal('hide');
        } else {
            $('#antecedentes').modal('show');
            $("#historialA").html(apellido + " " + nombre + " " + doc + " No: " + ndoc)

        }
        idPaciente = id;
        activeclient2 = !activeclient2;
        let his = ""
        $.ajax({
            url: "api/antecedentes.php",
            type: "GET",
            data: {
                type: 1,
                id: id
            },
            DataType: 'json',
            success: function(dataResult) {
                var result = JSON.parse(dataResult);
                if (dataResult.statusCode != 201) {
                    for (const [id, data_1] of Object.entries(result)) {

                        his += `<tr><td> ${data_1.nombre}</td></tr>`;
                    }
                } else {
                    for (const [id, data_1] of Object.entries(result)) {
                        his += `<tr>Error Al obtener datos
                                                                </tr>`;
                    }
                }
                $("#antecedentesDePaciente").html(his);
            },
        });

    }

    function toggleModalHistoria(apellido, nombre, doc, ndoc, id) {
        if (activeclient2) {
            $('#historia').modal('hide');
        } else {
            $('#historia').modal('show');
            $("#historial").html(apellido + " " + nombre + " " + doc + " No: " + ndoc)

        }
        idPaciente = id;
        activeclient2 = !activeclient2;
        let his = ""
        $.ajax({
            url: "api/listaHistoria.php",
            type: "GET",
            data: {
                type: 0,
                id: id
            },
            DataType: 'json',
            success: function(dataResult) {
                var result = JSON.parse(dataResult);
                if (dataResult.statusCode != 201) {
                    for (const [id, data_1] of Object.entries(result)) {

                        his += `<tr><td> ${data_1.caso}</td><td> ${data_1.fecha}</td></tr>`;
                    }
                } else {
                    for (const [id, data_1] of Object.entries(result)) {
                        his += `<tr>Error Al obtener datos
                                                                </tr>`;
                    }
                }
                $("#historiaPaciente").html(his);
            },
        });

    }
    // function toggleModalEditclient(id_edit, name, lname, dni, phone) {
    //     idEditclient = id_edit;
    //     $('#namee').val(name);
    //     $('#lnamee').val(lname);
    //     $('#dnie').val(phone);
    //     $('#phonee').val(dni);

    //     if (activeEdit) {
    //         $('#edit').modal('hide');
    //     } else {
    //         $('#edit').modal('show');

    //     }
    //     activeEdit = !activeEdit;
    // }
    // var idDeleteclient = 0;

    function create() {

        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var doc = $('#doc').val();
        var Tdoc = $('#tipoDoc').val();
        var fecha = $('#fecha').val();
        var sexo = $('#sexo').val();
        var etnia = $('#etnia').val();
        var nacion = $('#nacion').val();
        var situacion = $('#situacion').val();
        var analfabeta = $('#analfabeta').val();
        var educacion = $('#educacion').val();
        var mision = $('#mision').val();
        var anos = $('#anos').val();
        var profesion = $('#profesion').val();
        var pais = $('#pais').val();
        var entidad = $('#entidad').val();
        var municipio = $('#municipio').val();
        var ciudad = $('#ciudad').val();
        var ocupacion = $('#ocupacion').val();
        var entidad = $('#entidadR').val();
        var municipioR = $('#municipioR').val();
        var parroquia = $('#parroquia').val();
        var localidad = $('#localidad').val();
        var sector = $('#sector').val();
        var calle = $('#calle').val();
        var casa = $('#casa').val();
        var piso = $('#piso').val();
        var postal = $('#postal').val();
        var telefono = $('#telefono').val();
        var celular = $('#celular').val();
        var correo = $('#correo').val();
        var tpaciente = $('#tpaciente').val();
        var apellidoF = $('#apellidoF').val();
        var jefe = $('#jefe').val();

        // if (name != "" && lname != "" && dni != "") {
        $.ajax({
            url: "api/paciente.php",
            type: "POST",
            data: {
                type: 1,
                nombre,
                apellido,
                doc,
                Tdoc,
                fecha,
                sexo,
                etnia,
                nacion,
                situacion,
                analfabeta,
                educacion,
                mision,
                anos,
                profesion,
                pais,
                entidad,
                municipio,
                ciudad,
                ocupacion,
                entidad,
                municipioR,
                parroquia,
                localidad,
                sector,
                calle,
                casa,
                piso,
                postal,
                telefono,
                celular,
                correo,
                tpaciente,
                apellidoF
            },
            cache: false,
            success: function(dataResult) {
                console.log(dataResult)
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $('#nombre').val('');
                    $('#apellido').val('');
                    $('#doc').val('');
                    $('#tipoDoc').val('');
                    $('#fecha').val('');
                    $('#sexo').val('');
                    $('#etnia').val('');
                    $('#nacion').val('');
                    $('#situacion').val('');
                    $('#analfabeta').val('')
                    $('#educacion').val('');
                    $('#mision').val('');
                    $('#anos').val('');
                    $('#profesion').val('');
                    $('#pais').val('');
                    $('#entidad').val('');
                    $('#municipio').val('');
                    $('#ciudad').val('');
                    $('#ocupacion').val('');
                    $('#entidadR').val('');
                    $('#municipioR').val('')
                    $('#parroquia').val('');
                    $('#localidad').val('');
                    $('#sector').val('');
                    $('#calle').val('');
                    $('#casa').val('');
                    $('#piso').val('');
                    $('#postal').val('');
                    $('#telefono').val('');
                    $('#celular').val('');
                    $('#correo').val('');
                    $('#tpaciente').val('');
                    $('#apellidoF').val('');
                    $('#jefe').val('');
                    Swal.fire({
                        title: 'Paciente creado',
                        icon: 'success',
                    })

                } else {
                    Swal.fire({
                        title: 'Error al crear paciente',
                        icon: 'error',
                    })
                }
            }
        });
        event.preventDefault();
    }
</script>