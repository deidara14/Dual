@extends("Layouts.layout")
@section("title","Modificar Alumnos")

@section("content")

    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("alumnos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("alumnos")}}">regresar</a>

    <h3 class="text-primary">Modificar Registro</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("alumnos.update",$alumno->id_alumno)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group row">
                    <label for="nombre_a" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                    <div class="col-md-6">
                        <input id="ap_a" type="text" class="form-control" name="ap_a" required autocomplete="new-ap" value="{{$alumno->nombre_a}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ap_a" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                    <div class="col-md-6">
                        <input id="ap_c" type="text" class="form-control" name="ap_c" required autocomplete="new-ap" value="{{$alumno->ap_a}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="am_a" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                    <div class="col-md-6">
                        <input id="am_a" type="text" class="form-control" name="am_a" required autocomplete="new-am" value="{{$alumno->am_a}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_sexo">Sexo</label>
                    <div class="col-md-6">
                        <select name="id_sexo" id="id_sexo" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($sexos=\App\Sexos::all() as $sexo)
                                <option value="{{$sexo->id_sexo}}" {{$sexo->id_sexo==$sexo->id_sexo?"selected":""}}>{{$sexo->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fecha_nac" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                    <div class="col-md-6">
                        <input id="fecha_nac" type="text" class="form-control" name="fecha_nac" required autocomplete="new-am" value="{{$alumno->fecha_nac}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_carrera">Carrera</label>
                    <div class="col-md-6">
                        <select name="id_carrera" id="id_carrera" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($carreras=\App\Carreras::all() as $carrera)
                                <option value="{{$carrera->id_carrera}}" {{$carrera->id_carrera==$carrera->id_carrera?"selected":""}}>{{$carrera->nombre_carrera}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_semestre">Semestre</label>
                    <div class="col-md-6">
                        <select name="id_semestre" id="id_semestre" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($semestres=\App\Semestres::all() as $semestre)
                                <option value="{{$semestre->id_semestre}}" {{$semestre->id_semestre==$semestre->id_semestre?"selected":""}}>{{$semestre->descripcion_semestre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_domicilio">Domicilio</label>
                    <div class="col-md-6">
                        <select name="id_domicilio" id="id_domicilio" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($domicilios=\App\Domicilios::all() as $domicilio)
                                <option value="{{$domicilio->id_domicilio}}" {{$domicilio->id_domicilio==$domicilio->id_domicilio?"selected":""}}>{{$domicilio->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_municipio">Municipio</label>
                    <div class="col-md-6">
                        <select name="id_municipio" id="id_municipio" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($municipios=\App\Municipios::all() as $municipio)
                                <option value="{{$municipio->id_municipio}}" {{$municipio->id_municipio==$municipio->id_municipio?"selected":""}}>{{$municipio->descripcion_mun}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="ap_a" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono" required autocomplete="new-tel" value="{{$alumno->telefono}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_municipio">Institucion</label>
                    <div class="col-md-6">
                        <select name="id_institucion" id="id_institucion" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($instituciones=\App\Instituciones::all() as $institucion)
                                <option value="{{$institucion->id_institucion}}" {{$institucion->id_institucion==$institucion->id_institucion?"selected":""}}>{{$institucion->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ap_a" class="col-md-4 col-form-label text-md-right">{{ __('Estatus') }}</label>

                    <div class="col-md-6">
                        <input id="estatus" type="text" class="form-control" name="estatus" required autocomplete="new-tel" value="{{$alumno->estatus}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection