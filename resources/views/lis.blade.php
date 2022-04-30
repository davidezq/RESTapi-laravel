<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Manejo de datos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    async function obtenerLibros(){
        const res = await fetch('http://127.0.0.1:8000/api/libros');
        const data = await res.json();
        return data;
    }

</script>
<style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Varela Round', sans-serif;
        font-size: 13px;
    }
    .table-responsive {
        margin: 30px 0;
    }
    .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        border-radius: 3px;
        min-width: 1000px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {        
        padding-bottom: 15px;
        background: #435d7d;
        color: #fff;
        padding: 16px 30px;
        min-width: 100%;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
    .table-title .btn-group {
        float: right;
    }
    .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }
    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }
    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
        padding: 12px 15px;
        vertical-align: middle;
    }
    table.table tr th:first-child {
        width: 60px;
    }
    table.table tr th:last-child {
        width: 100px;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
    }
    table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
    }
    table.table td a:hover {
        color: #2196F3;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
    .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
    /* Custom checkbox */
    .custom-checkbox {
        position: relative;
    }
    .custom-checkbox input[type="checkbox"] {    
        opacity: 0;
        position: absolute;
        margin: 5px 0 0 3px;
        z-index: 9;
    }
    .custom-checkbox label:before{
        width: 18px;
        height: 18px;
    }
    .custom-checkbox label:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        background: white;
        border: 1px solid #bbb;
        border-radius: 2px;
        box-sizing: border-box;
        z-index: 2;
    }
    .custom-checkbox input[type="checkbox"]:checked + label:after {
        content: '';
        position: absolute;
        left: 6px;
        top: 3px;
        width: 6px;
        height: 11px;
        border: solid #000;
        border-width: 0 3px 3px 0;
        transform: inherit;
        z-index: 3;
        transform: rotateZ(45deg);
    }
    .custom-checkbox input[type="checkbox"]:checked + label:before {
        border-color: #03A9F4;
        background: #03A9F4;
    }
    .custom-checkbox input[type="checkbox"]:checked + label:after {
        border-color: #fff;
    }
    .custom-checkbox input[type="checkbox"]:disabled + label:before {
        color: #b8b8b8;
        cursor: auto;
        box-shadow: none;
        background: #ddd;
    }
    /* Modal styles */
    .modal .modal-dialog {
        max-width: 400px;
    }
    .modal .modal-header, .modal .modal-body, .modal .modal-footer {
        padding: 20px 30px;
    }
    .modal .modal-content {
        border-radius: 3px;
        font-size: 14px;
    }
    .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
    }
    .modal .modal-title {
        display: inline-block;
    }
    .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
    }
    .modal textarea.form-control {
        resize: vertical;
    }
    .modal .btn {
        border-radius: 2px;
        min-width: 100px;
    }	
    .modal form label {
        font-weight: normal;
    }	
</style>

<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
    
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manejo de <b>Libros</b></h2>
					</div>
					<div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar un libro</span></a>
                        <button class="btn btn-info" onclick="mostrarLibros()"><i class="material-icons">refresh</i>Actualizar</button>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover" >
				<thead>
					<tr>
						<th>Autor</th>
						<th>Titulo</th>
						<th>Precio</th>
						<th>ISBN</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody id="tabla-libros">
					<!-- <tr>
						<td>Thomas Hardy</td>
						<td>thomashardy@mail.com</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
						<td>(171) 555-2222</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr> -->
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="agregar">
				<div class="modal-header">						
					<h4 class="modal-title">Agregar Libro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Autor</label>
						<input type="text" name="autor" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Titulo</label>
						<input type="text" name="titulo" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Precio</label>
						<input type="number" name="precio" class="form-control" required step=".01">
					</div>
					<div class="form-group">
						<label>ISBN</label>
						<input type="text" name="isbn" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="editar">
				<div class="modal-header">						
					<h4 class="modal-title">Editar Libro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Autor</label>
						<input type="text" class="form-control" name="autor" required>
					</div>
					<div class="form-group">
						<label>Titulo</label>
						<input type="text" class="form-control" name="titulo" required>
					</div>
					<div class="form-group">
						<label>Precio</label>
						<input type="number" class="form-control" name="precio" required step=".01">
					</div>
					<div class="form-group">
						<label>ISBN</label>
						<input type="text" class="form-control" name="isbn" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name='eliminar'>
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar Libro</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p id="advertencia__eliminar">¿Esta seguro que desea eliminar #libro# ?</p>
					<p class="text-warning"><small>Esta acción no se puede deshacer</small></p>
				</div>
				<div class="modal-footer">
                    <input type="hidden" name="isbn">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
    <script>
        function mostrarLibros(){
            const tabla = document.querySelector('#tabla-libros');
            tabla.innerHTML = '';
            obtenerLibros().then(data=>{
                data.forEach(({autor,titulo,precio,isbn},i) => {
                    tabla.innerHTML += `<tr id='libro-${i}'>
                            <td>${autor}</td>
                            <td>${titulo}</td>
                            <td>${precio}</td>
                            <td>${isbn}</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i  onclick="tomarDatos('#libro-${i}')" class="material-icons"  title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i onclick="tomarDatosEliminar('#libro-${i}')" class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                    </tr>`;
                });
            })
        }
        mostrarLibros();
    </script>
    <script>
        function tomarDatos(id){
            const campos = document.querySelectorAll(id.concat('>td'));
            const formularioEditar = document.forms['editar'];
            formularioEditar['autor'].value = campos[0].textContent;
            formularioEditar['titulo'].value = campos[1].textContent;
            formularioEditar['precio'].value = campos[2].textContent;
            formularioEditar['isbn'].value = campos[3].textContent;

        }
        function tomarDatosEliminar(id){
            const campos = document.querySelectorAll(id.concat('>td'));
            const formularioEliminar = document.forms['eliminar'];
            formularioEliminar['isbn'].value = campos[3].textContent;
            const mensaje = document.querySelector("#advertencia__eliminar");
            mensaje.textContent = mensaje.textContent.replace("#libro#",campos[1].textContent);
        }
        //Agregando un libro
        document.forms["agregar"].addEventListener('submit', e =>{
            e.preventDefault();
            const data = Object.fromEntries(
                new FormData(e.target)
            );
            fetch('http://127.0.0.1:8000/api/libros',{
                method:'post',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(res=>res.json()).then(function (data) {
                if(data.ok){
                    $('#addEmployeeModal').modal('hide');
                    mostrarLibros();
                }
            }).catch(function (error){
                console.alert(error);
            });
        })
        //Editando el libro
        document.forms["editar"].addEventListener('submit', e =>{
            e.preventDefault();
            const data = Object.fromEntries(
                new FormData(e.target)
            );
            fetch('http://127.0.0.1:8000/api/libros/'+data.isbn,{
                method:'put',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(res=>res.json()).then(function (data) {
                if(data.ok){
                    $('#editEmployeeModal').modal('hide');
                    mostrarLibros();
                }
            }).catch(function (error){
                console.alert(error);
            });
        })
        //Eliminando Libro
        document.forms['eliminar'].addEventListener('submit',e=>{
            e.preventDefault();
            const data = Object.fromEntries(
                new FormData(e.target)
            );
            fetch('http://127.0.0.1:8000/api/libros/'+data.isbn,{
                method:'delete',
                header:{
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(res=>res.json()).then(function(data){
                if(data.ok){
                    $(deleteEmployeeModal).modal('hide');
                    mostrarLibros();
                }
            }).catch(function(error){
                console.alert(error);
            });
        })
    </script>
</body>
</html>