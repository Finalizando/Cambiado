@extends('plantillas.plantilla_sin_columna')
@section('fecha_sistema')
<p ALIGN=left>Fecha:<?=date('d/m/Y g:ia');?></p>
@stop 
@section('usuario_sesion')
<p ALIGN=right>Usuario:{{ Auth::user()->nombre_usuario }}</p>
@stop 
@section('nombre_pantalla')
<h4 class="text-center">Pantalla principal</h4>
@stop 
@section('contenido')
<div class="panel panel-default">
    <div class="panel-heading">Inicio</div>
    <div class="panel-body">You are using bootstrap</div>
</div>
@stop   
