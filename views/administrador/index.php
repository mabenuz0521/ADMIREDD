<!-- <head>-->
<link type="image/x-icon" href="../assets/img/logos/logo.png" rel="icon">
<!--Bootstrap css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--My style css-->
<link href="./assets/css/style.css" rel="stylesheet">
</head>

<!--Container preload-->
<div class="preload" id="preload">
    <div class="spinner-grow text-primary position-absolute top-50 start-50" role="status">
        <span class="visually-hidden">Cargando...</span>
    </div>
</div>
<!--Container preload-->


<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Listado</h4>
                        <div class="col-15">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive mt-2">
                                        <!--btn add-->
                                        <div class="d-flex">
                                            <button type="button" onclick="createUser()" class="btn btn-success"><img
                                                    class="img img-fluid" src="./assets/img/icons/plus-square-fill.svg">
                                                Crear usuario</button>
                                        </div>
                                        <hr>
                                        <table class="table table-dark table-striped table-hover">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>ID</th>
                                                    <th>NOMBRE</th>
                                                    <th>APELLIDO</th>
                                                    <th>USUARIO</th>
                                                    <th>TIPO_DOCUMENTO_ID</th>
                                                    <th>NO_DOCUMENTO</th>
                                                    <th>FECHA_NACIMIENTO</th>
                                                    <th>EMAIL</th>
                                                    <th>CONTRASENA</th>
                                                    <th>TELEFONO</th>
                                                    <th>CARGO_ID</th>
                                                    <th>TORRE</th>
                                                    <th>APTO</th>
                                                </tr>
                                            </thead>

                                            <tbody id="tbody">

                                            <tfoot>
                                                <tr class="text-center">
                                                    <th>ID</th>
                                                    <th>NOMBRE</th>
                                                    <th>APELLIDO</th>
                                                    <th>USUARIO</th>
                                                    <th>TIPO_DOCUMENTO_ID</th>
                                                    <th>NO_DOCUMENTO</th>
                                                    <th>FECHA_NACIMIENTO</th>
                                                    <th>EMAIL</th>
                                                    <th>CONTRASENA</th>
                                                    <th>TELEFONO</th>
                                                    <th>CARGO_ID</th>
                                                    <th>TORRE</th>
                                                    <th>APTO</th>
                                                </tr>
                                            </tfoot>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->

        </div> <!-- end container-fluid -->

        <!--Container modal-->
        <!-- Modal -->
        <div class="modal fade" id="modalApp" tabindex="-1" aria-labelledby="modalAppLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAppLabel">USER</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                        <form action id="formUser">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">NOMBRE</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">APELLIDO</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">USUARIO</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="tipo_documento">
                            <option value="1">C.C.</option>
                            <option value="2">C.E.</option>
                            <option value="3">NIT.</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">NO_DOCUMENTO</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="controls" type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                            placeholder="Ingrese su Fecha de Nacimiento">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">EMAIL</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">CONTRASENA</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">TELEFONO</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="cargo">
                            <option value="1">empleado</option>
                            <option value="3">propietario</option>
                            <option value="3">residente</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">TORRE</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Name" required>
                        <label for="name">APTO</label>
                    </div>
                </div>
                </form>
                <!-- End Form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="btnSubmit" form="formUser" class="btn btn-primary">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<!--Container modal-->

</div> <!-- end content -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<!--Script RFC4122-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/node-uuid/1.4.7/uuid.min.js"></script>
<!--Script my script-->
<script src="./assets/js/FirebaseGame.js"></script>
<!--Script my script-->
<script src="./assets/js/main.js"></script>
</div>