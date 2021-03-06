@extends('layouts.app')
@section('content')
<div class="container padding">
    <div class="row">
        <div class="col-sm-12">
            <h1>Editar Mi Perfil</h1>

            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">

            @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Revisa tus datos:</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{url("/dashboard/editar/update")}}">
                {{ method_field('PUT')}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">*Correo Electrónico:</label>
                    <input class="form-control" type="mail" disabled name="correo_electronico" id="email" value="{{old('email',$user->email)}}">
                </div>
                <div class="form-group">
                    <label for="">*Contraseña:</label>
                    <input class="form-control" type="password" name="password" id="">
                </div>

                <div class="form-group">
                    <label for="">*Nombre:</label>
                    <input class="form-control" type="text" name="name" id="" value="{{old('name',$user->name)}}">
                </div>

                <div class="form-group">
                    <label for="">*Primer Apellido:</label>
                    <input class="form-control" type="text" name="apellido" id="" value="{{old('apellido',$user->apellido)}}">
                </div>
                <div class="form-group">
                    <label for="">Sobre Mí:</label>
                    <textarea class="form-control" rows="5" cols="30" name="about">{{old('about',$user->about)}}</textarea>
                </div>
     
            <div class="form-group">
                <label for="">Precio por Hora en Dolares (USD):</label>
                <input class="form-control" type="number" name="price" id="" value="{{old('price',$user->price)}}">
            </div>
            <div class="form-group">
                <label for="">*Nombre de Invocador:</label>
                <input class="form-control" type="text" name="nombre_de_invocador" id="" value="{{old('nombre_de_invocador',$user->nombre_de_invocador)}}">
            </div>
            <div class="form-group">
                <label for="">*Rol:</label>
                <select class="form-control" name="role_id" id="" value="{{old('role_id',$user->role_id)}}">
                    @foreach ($roles as $item)
                    @if(old('role_id',$user->role_id) == $item->id)
                    <option selected value="{{$item->id}}">{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif

                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">*Liga:</label>
                <select class="form-control" name="league_id" id="" value="{{old('league_id',$user->league_id)}} ">
                    @foreach ($leagues as $item)
                    @if(old('league_id',$user->league_id) == $item->id)
                    <option selected value="{{$item->id}}">{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">*Servidor:</label>
                <select class="form-control" name="server_id" id="" value="{{old('server_id',$user->server_id)}}">
                    @foreach ($servers as $item)
                    @if(old('server_id',$user->server_id) == $item->id)
                    <option selected value="{{$item->id}}">{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="row">
                <div class="col-sm-6"><button class="btn btn-primary btn-block" type="submit">Editar</button></div>
                <div class="col-sm-6"><a href="{{ route('home') }}" class="btn btn-secondary btn-block">Regresar</a></div>
            </form>
            </div>
           
        </div>




    </div>



</div>

@endsection