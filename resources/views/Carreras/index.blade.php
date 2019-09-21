@extends("Layouts.layout")
@section("title","Carreras")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("carreras/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("carreras/create")}}">nuevo</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Carreras</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carreras as $carrera)
                    <tr>
                        <td>{{$carrera->id_carrera}}</td>
                        <td>{{$carrera->nombre_carrera}}</td>
                        <td>
                            <form action="{{route("carreras.destroy",$carrera->id_carrera)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("carreras",$carrera->id_carrera)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection