@extends("layouts.layout")
@section("title","Alumnos")

@section("content")

    <h1 class="text-center">Alumnos</h1>
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("alumnos/create")}}"><i class="fa fa-plus"></i></a>
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
                <th>Fecha de Nacimiento</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>Domicilio</th>
                <th>Municipio</th>
                <th>Telefono</th>
                <th>Institucion</th>
                <th>Estatus</th>
                <th colspan="2">Acciones</th>

                </thead>
                <tbdoy>

                    @foreach($alumnos as $alumno)

                        <tr>
                            <td>{{$alumno->nombre_a}}</td>
                            <td>{{$alumno->ap_a}}</td>
                            <td>{{$alumno->am_a}}</td>
                            <td>{{isset($alumno->getSexo[0])?$alumno->getSexo[0]->descripcion:""}}</td>
                            <td>{{$alumno->fecha_nac}}</td>
                            <td>{{isset($alumno->getCarrera[0])?$alumno->getCarrera[0]->nombre_carrera:""}}</td>
                            <td>{{isset($alumno->getSemestre[0])?$alumno->getSemestre[0]->descripcion_semestre:""}}</td>
                            <td>{{isset($alumno->getDomicilio[0])?$alumno->getDomicilio[0]->descripcion:""}}</td>
                            <td>{{isset($alumno->getMunicipio[0])?$alumno->getMunicipio[0]->descripcion_mun:""}}</td>
                            <td>{{$alumno->telefono}}</td>
                            <td>{{isset($alumno->getInstitucion[0])?$alumno->getInstitucion[0]->descripcion:""}}</td>
                            <td>{{$alumno->estatus}}</td>
                            <td>
                                <form action="{{route("alumnos.destroy",$alumno->id_alumno)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url("alumnos",$alumno->id_alumno)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>
    
@endsection