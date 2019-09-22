@extends("layouts.layout")
@section("title","Coordinadores")

@section("content")

    <h1 class="text-center">Coordinadores</h1>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("coordinadores/create")}}"><i class="fa fa-plus"></i></a>
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

                    @foreach($coordinadores as $coordinadore)

                        <tr>
                            <td>{{$coordinadore->nombre_c}}</td>
                            <td>{{$coordinadore->ap_c}}</td>
                            <td>{{$coordinadore->am_c}}</td>
                            <td>{{isset($coordinadore->getSexo[0])?$coordinadore->getSexo[0]->descripcion:""}}</td>
                            <td>{{$coordinadore->telefono}}</td>
                            <td>
                                <form action="{{route("coordinadores.destroy",$coordinadore->id_coordinador)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url("coordinadores",$coordinadore->id_coordinador)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>
@endsection
