@extends("layouts.layout")
@section("title","Municipios")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("municipios/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("municipios/create")}}">nuevo</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Municipio</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($municipios as $municipio)
                    <tr>
                        <td>{{$municipio->id_municipio}}</td>
                        <td>{{$municipio->descripcion_mun}}</td>
                        <td>
                            <form action="{{route("municipios.destroy",$municipio->id_municipio)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("municipios",$municipio->id_municipio)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
