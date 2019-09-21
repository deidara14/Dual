@extends("Layouts.layout")
@section("title","Semestres")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("semestres/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("semestres/create")}}">nuevo</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Semestres</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($semestres as $semestre)
                    <tr>
                        <td>{{$semestre->id_semestre}}</td>
                        <td>{{$semestre->descripcion_semestre}}</td>
                        <td>
                            <form action="{{route("semestres.destroy",$semestre->id_semestre)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("semestres",$semestre->id_semestre)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection