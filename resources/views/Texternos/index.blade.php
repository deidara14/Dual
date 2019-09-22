@extends("layouts.layout")
@section("title","Tutores Externos")

@section("content")

    <h1 class="text-center">Tutores Externos</h1>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("texternos/create")}}"><i class="fa fa-plus"></i></a>
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

                    @foreach($texternos as $texterno)

                        <tr>
                            <td>{{$texterno->nombre_te}}</td>
                            <td>{{$texterno->ap_te}}</td>
                            <td>{{$texterno->am_te}}</td>
                            <td>{{isset($texterno->getSexo[0])?$texterno->getSexo[0]->descripcion:""}}</td>
                            <td>{{$texterno->telefono}}</td>
                            <td>
                                <form action="{{route("texternos.destroy",$texterno->id_tutorext)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url("texternos",$texterno->id_tutorext)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>
@endsection
