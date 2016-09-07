@extends('website.app')

@section('body')
<div class="container">

    {!! Form::open(['url' => 'foo/bar']) !!}
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputPassword1" autofocus>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Acepto los términos y condiciones del servicio.
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    {!! Form::close() !!}
</div>
@endsection