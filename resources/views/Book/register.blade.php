@extends('layouts.layouts')
@section('container')
    
<form class="ml-2" id="formu">
    <div class="form-group">
        <label for="exampleInputEmail1">Autor</label>
        <input type="text" name="autor" class="form-control col-3" id="autor" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Titulo</label>
        <input type="text" name="titulo" class="form-control col-3" id="titulo">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Cantidad</label>
        <input type="number" name="cantidad" class="form-control col-3" id="cantidad">
    </div>
    
    <button type="submit" id="boton" class="btn-secondary col-3">Guardar</button>
</form>

<table class="table table-striped table-inverse table-responsive ">
    <thead class="thead-inverse">
        <tr>
            <th>id</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Cantidad</th>
        </tr>
        </thead>
        <tbody class="body">
           
        </tbody>
</table>
<script >

$(document).ready(function($){

    var book = [];
    $.ajax({
        type: "GET",    
        url: '/books',
    }).done(function(res){
        book=JSON.parse(res);
     
    });
    
 
    
    
    $('#boton').click(function(e){ 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }});   
        $.ajax({
        url:'/register',
        method:"POST",
        data:{
            descripcion:jQuery('#titulo').val(),
            cantidad:jQuery('#cantidad').val(),
            autor:jQuery('#autor').val(),
        },
        succes:function(data){
            console.log(data);
        },
        error:function(data){
            console.log(data);
        }
        });
});
}); 



</script>
@endsection


