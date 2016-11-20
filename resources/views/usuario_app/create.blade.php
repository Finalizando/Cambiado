@extends('plantillas.plantilla_base')
@section('fecha_sistema')
<p ALIGN=left>Fecha:<?=date('d/m/Y g:ia');?></p>
@stop 
@section('usuario_sesion')
<p ALIGN=right>Usuario:{{ Auth::user()->nombre_usuario }}</p>
@stop
@section('nombre_pantalla')
<h4 class="text-center">Pantalla nuevo usuario</h4>
@stop 
@section('menu_lateral')
<div class="list-group">
    <a href="#" class="list-group-item">Buscar usuarios</a>
    <a class="list-group-item active">Nuevo usuario</a>
    <a href="#" class="list-group-item">Cambio de contraseña</a>
    <a href="#" class="list-group-item">Nuevo rol</a>
    <a href="#" class="list-group-item">Editar rol</a>
    <a href="#" class="list-group-item">Consultar bitacora</a>
    <a href="#" class="list-group-item">Catalogos</a>
</div>
@stop
@section('contenido')
<div class="panel panel-default">
    <div class="panel-heading">Inicio</div>
    <div class="panel-body">You are using bootstrap</div>
</div>
@stop   
