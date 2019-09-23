@extends("layouts.layout")
@section("title","Instituciones")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("instituciones/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("instituciones/create")}}">nuevo</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Institucion</th>
                    <th>Domicilio</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($instituciones as $institucion)
                    <tr>
                        <td>{{$institucion->id_institucion}}</td>
                        <td>{{$institucion->descripcion}}</td>
                        <td>{{$institucion->domicilio}}</td>
                        <td>
                            <form action="{{route("instituciones.destroy",$institucion->id_institucion)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("instituciones",$institucion->id_institucion)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection