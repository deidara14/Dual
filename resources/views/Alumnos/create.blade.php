@extends("layouts.layout")
@section("title","Registro de Coordinadores")

@section("content")
    <h1 class="text-center">Registro de Alumnos</h1>

    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("alumnos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("alumnos")}}" method="post">
                @csrf

                <div class="form-group row">
                    <label for="nombre_a" class="col-md-4 col-form-label text-md-right">{{ __('Nombre(s)') }}</label>

                    <div class="col-md-6">
                        <input id="nombre_a" type="text" class="form-control" name="nombre_a" required autocomplete="nombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ap_a" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                    <div class="col-md-6">
                        <input id="ap_a" type="text" class="form-control" name="ap_a" required autocomplete="new-ap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="am_a" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                    <div class="col-md-6">
                        <input id="am_a" type="text" class="form-control" name="am_a" required autocomplete="new-am">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_genero">Sexo</label>
                    <div class="col-md-6">
                        <select name="id_sexo" id="id_sexo" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($sexos=\App\Sexos::all() as $sexo)
                                <option value="{{$sexo->id_sexo}}" >{{$sexo->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="am_a" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                    <div class="col-md-6">
                        <input id="fecha_nac" type="date" class="form-control" name="fecha_nac" required autocomplete="new-fecha">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_carrea">Carrera</label>
                    <div class="col-md-6">
                        <select name="id_carrera" id="id_carrera" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($carreras=\App\Carreras::all() as $carrera)
                                <option value="{{$carrera->id_carrera}}" >{{$carrera->nombre_carrera}}</option>
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
                                <option value="{{$semestre->id_semestre}}" >{{$semestre->descripcion_semestre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_semestre">Domicilio</label>
                    <div class="col-md-6">
                        <select name="id_domicilio" id="id_domicilio" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($domicilios=\App\Domicilios::all() as $domicilio)
                                <option value="{{$domicilio->id_domicilio}}" >{{$domicilio->descripcion}}</option>
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
                                <option value="{{$municipio->id_municipio}}" >{{$municipio->descripcion_mun}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono" required autocomplete="new-telefono">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_user">Usuario</label>
                    <div class="col-md-6">
                        <select name="id_user" id="id_user" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($userss=\App\User::all() as $user)
                                <option value="{{$user->id_user}}" >{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_institucion">Institucion</label>
                    <div class="col-md-6">
                        <select name="id_institucion" id="id_institucion" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($instituciones=\App\Instituciones::all() as $institucion)
                                <option value="{{$institucion->id_institucion}}" >{{$institucion->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="estatus">Estatus</label>
                    <div class="col-md-6">
                        <select name="estatus" id="estatus" class="form-control">
                            <option value="">Selecciona uno</option>
                                <option value="0" >Alta</option>
                            <option value="1">Baja</option>
                        </select>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection