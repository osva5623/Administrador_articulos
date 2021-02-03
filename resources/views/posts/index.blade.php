@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <ul class="list-inline">
                        <li class="list-inline-item col-md-5"></li>

                        <li class="list-inline-item col-md-3">
                            <h3>
                                <i class="fas fa-newspaper"></i> Articulos
                            </h3>
                        </li>
                        <li class="list-inline-item float-right">
                            <a href="{{route('posts.create')}}" class="btn btn-outline-success">
                                <i class="fas fa-plus-circle"></i> Crear
                            </a>
                        </li>
                      </ul>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="{{route('posts.edit',$post)}}" class="btn btn-outline-info">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('posts.destroy',$post)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input
                                            type="submit"
                                            value="Eliminar"
                                            class="btn btn-outline-danger"
                                            onclick="return confirm('Desea eliminar')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
