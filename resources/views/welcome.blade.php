@extends('plantillas.plantilla_base')
@section('fecha_sistema')
<p ALIGN=left>Fecha:<?=date('m/d/Y g:ia');?></p>

@stop 
  
@section('nombre_pantalla')
<h4 class="text-center">Nombre pantalla</h4>
@stop 

@section('filtros_consulta')
<p ALIGN=center>Filtros</p>
@stop 
@section('contenido')
<div class="panel panel-default">
    <div class="panel-heading">Inicio</div>
    <div class="panel-body">You are using bootstrap</div>
</div>
@stop   
@section('botones')
<p ALIGN=center>botones</p>
@stop 