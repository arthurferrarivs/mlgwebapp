@extends('layouts.public')
@section('title', 'Registro')
@section('content')
<form method="POST" action=“/register">
	{!! csrf_field() !!}
	<div class="row">
		<div class="col-md-2"><p class="pull-right">Nome</p></div>
		<div class="col-md-10"><input type="text" name="name" value="{{ old('name') }}"></div>
	</div>
	<div class="row">
		<div class="col-md-2"><p class="pull-right">E-mail</p></div>
		<div class="col-md-10"><input type="email" name="email" value="{{ old('email') }}"></div>
	</div>
	<div class="row">
		<div class="col-md-2"><p class="pull-right">Senha</p></div>
		<div class="col-md-10"><input type="password" name="password"></div>
	</div>
	<div class="row">
		<div class="col-md-2"><p class="pull-right">Confirmar Senha</p></div>
		<div class="col-md-10"><input type="password" name="password_confirmation"></div>
	</div>
	<div class="row">
		<div class="col-md-offset-2 col-md-10"><button type="submit">Registrar</button></div>
	</div>
</form>
@stop