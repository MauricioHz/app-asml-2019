@extends('layouts.compra')

@section('content')  
    <div class="card">
            <div class="card-header header-light">
                    Nuevo cargo
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                      <label for="cargo">Nombre del cargo</label>
                      <input type="text" class="form-control" id="cargo" name="cargo" maxlength="100">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
            </div>
    </div>
@endsection