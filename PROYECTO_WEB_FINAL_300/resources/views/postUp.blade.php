@extends('layouts.app')

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Error:</strong>
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
        <div class="row justify-content-center">
            <div class="col-md-5">
               
            </div>
            <div class=col-md-10>
                <form method="POST" action="{{ route('postGuardar') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name="imagen" id="imagen" class="form-control">
                </div>
                <div class="card">
                    <div class="card-body col-3">
                        <form>
                            <label for="titulo">Titulo de la imagen</label>
                            <input type="text" name=titulo id=titulo class="form-control">
                        </form>
                    </div>
                
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Subir</button>
                </form>
            </div>
        </div>
@endsection







