@extends('layouts.public')
@section('title', 'Entrar')
@section('content')
<form method="POST" action="/login">
	{!! csrf_field() !!}
	<div class="row">
		<div class="col-md-2"><p class="pull-right">E-mail</p></div>
		<div class="col-md-10"><input type="email" name="email" value="{{ old('email') }}"></div>
	</div>
	<div class="row">
		<div class="col-md-2"><p class="pull-right">Senha</p></div>
		<div class="col-md-10"><input type="password" name="password" id="password"></div>
	</div>
	<div class="row">
		<div class="col-md-offset-2 col-md-10">
			<p class=""><input type="checkbox" name="remember"> Lembrar de mim</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-2 col-md-10"><button class="btn btn-default" type="submit">Entrar</button></div>
	</div>
</form>
@stop