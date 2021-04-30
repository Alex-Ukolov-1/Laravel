@extends('layouts.app')

@section('title-block')
    Страница контактов
@endsection

@section('content')
    <h1>Страница контактов</h1>

    <form action="{{route('contact-form')}}" method="post">
    	@csrf

    	<div class="form-group">
    		<label for="name">Введите имя</label>
    		<input type="text" name="name" placeholder="input name" id="name" class="form-control">
    	</div>

    	<div class="form-group">
    		<label for="name">Введите имя</label>
    		<input type="text" name="name" placeholder="input name" id="name" class="form-control">
    	</div>

    	<div class="form-group">
    		<label for="name">Введите имя</label>
    		<input type="text" name="name" placeholder="input name" id="name" class="form-control">
    	</div>

    	<button type="submit" class="btn btn-success"></button>
    </form>
@endsection