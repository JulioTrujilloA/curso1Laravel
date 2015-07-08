
@extends('layout.master')

@section('sidebar')
	@parent
	Información de usuario
@stop

@section('content')
	{{HTML::link('usuarios','Volver')}}
	<h1>Usuario {{$usuario->id}}</h1>
	{{ini_set('xdebug.var_display_max_depth', 3)}}
	{{var_dump($usuario2)}}
	{{ $usuario->nombre.' '.$usuario->apellido }}
	<br />
	{{$usuario->created_at}}
@stop