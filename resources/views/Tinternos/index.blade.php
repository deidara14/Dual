@extends("layouts.layout")
@section("title","Tutores Internos")

@section("content")

    <h1 class="text-center">Tutores Internos</h1>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("tinternos/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-xl-8 col-lg-10 col-sm-12">
            <table class="table">
                <thead>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Sexo</th>

                <th>Telefono</th>

                    <th colspan="2">Acciones</th>

                </thead>
                <tbdoy>

                    @foreach($tinternos as $tinterno)

                        <tr>
                            <td>{{$tinterno->nombre_ti}}</td>
                            <td>{{$tinterno->ap_ti}}</td>
                            <td>{{$tinterno->am_ti}}</td>
                            <td>{{isset($tinterno->getSexo[0])?$tinterno->getSexo[0]->descripcion:""}}</td>
                            <td>{{$tinterno->telefono}}</td>
                            <td>
                                <form action="{{route("tinternos.destroy",$tinterno->id_tutorint)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url("tinternos",$tinterno->id_tutorint)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>
@endsection
