@extends('layouts.app')

@section('content')
<form class="form-horizontal" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-6 control-label">Usuario</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('nameUser') ? ' has-error' : '' }}">
        <label for="nameUser" class="col-md-6 control-label">Nombre del usuario</label>
        <div class="col-md-6">
            <input id="nameUser" type="text" class="form-control" name="nameUser" value="{{ old('nameUser') }}" required autofocus>

            @if ($errors->has('nameUser'))
                <span class="help-block">
                    <strong>{{ $errors->first('nameUser') }}</strong>
                </span>
            @endif
        </div>
    </div>                        

    <div class="form-group{{ $errors->has('apellidoPaterno') ? ' has-error' : '' }}">
        <label for="apellidoPaterno" class="col-md-6 control-label">Apellido paterno</label>
        <div class="col-md-6">
            <input id="apellidoPaterno" type="text" class="form-control" name="apellidoPaterno" value="{{ old('apellidoPaterno') }}" required autofocus>
            @if ($errors->has('apellidoPaterno'))
                <span class="help-block">
                    <strong>{{ $errors->first('apellidoPaterno') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('apellidoMaterno') ? ' has-error' : '' }}">
        <label for="apellidoMaterno" class="col-md-6 control-label">Apellido materno</label>
        <div class="col-md-6">
            <input id="apellidoMaterno" type="text" class="form-control" name="apellidoMaterno" value="{{ old('apellidoMaterno') }}" required autofocus>
            @if ($errors->has('apellidoMaterno'))
                <span class="help-block">
                    <strong>{{ $errors->first('apellidoMaterno') }}</strong>
                </span>
            @endif
        </div>
    </div>                        

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-6 control-label">E-Mail</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="rol_id" class="col-md-6 control-label">Rol</label>
        <div class="col-md-4">
            <select class="form-control" id="rol_id" name="rol_id">
            <option value="1">Solicitante</option>
            <option value="2">Jefatura</option>
            <option value="3">Gerencia de Admin. y Finanzas</option>
            <option value="4">Gerencia General</option>
            </select>
        </div>
    </div>

    <div class="form-group">
            <label for="modulo_oc" class="col-md-6 control-label">Módulo órdenes de compra</label>
            <div class="col-md-4">
                <select class="form-control" id="modulo_oc" name="modulo_oc">
                <option value="0">NO</option>
                <option value="1">SÍ</option>
                </select>
            </div>
    </div>    
    <div class="form-group">
            <label for="modulo_ot" class="col-md-6 control-label">Módulo órdenes de trabajo</label>
            <div class="col-md-4">
                <select class="form-control" id="modulo_ot" name="modulo_ot">
                <option value="0">NO</option>
                <option value="1">SÍ</option>
                </select>
            </div>
    </div>     
    <div class="form-group">
            <label for="modulo_nc" class="col-md-6 control-label">Módulo gestión de calidad</label>
            <div class="col-md-4">
                <select class="form-control" id="modulo_nc" name="modulo_nc">
                <option value="0">NO</option>
                <option value="1">SÍ</option>
                </select>
            </div>
    </div>       

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-6 control-label">Clave</label>

        <div class="col-md-4">
            <input id="password" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="password-confirm" class="col-md-6 control-label">Confirmar clave</label>
        <div class="col-md-4">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Registrar usuario
            </button>
        </div>
    </div>
</form>

@endsection