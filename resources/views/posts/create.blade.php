@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear articulo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Titulo *</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="">Imagen</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="file">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="">Contenido *</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Contenido embebido</label>
                            <textarea name="ifrmae" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" class="float-right btn btn-outline-success" value="Crear">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
