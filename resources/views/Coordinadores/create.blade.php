@extends("layouts.layout")
@section("title","Registro de Coordinadores")

@section("content")
    <h1 class="text-center">Registro de Coordiadores</h1>

    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("coordinadores")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("coordinadores")}}" method="post">
                @csrf

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
                    <label for="nombre_c" class="col-md-4 col-form-label text-md-right">{{ __('Nombre(s)') }}</label>

                    <div class="col-md-6">
                        <input id="nombre_c" type="text" class="form-control" name="nombre_c" required autocomplete="new-nombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ap_c" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                    <div class="col-md-6">
                        <input id="ap_c" type="text" class="form-control" name="ap_c" required autocomplete="new-ap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="am_c" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                    <div class="col-md-6">
                        <input id="am_c" type="text" class="form-control" name="am_c" required autocomplete="new-am">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_genero">Sexo</label>
                    <div class="col-md-6">
                        <select name="id_genero" id="id_genero" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($sexos=\App\Sexos::all() as $sexo)
                                <option value="{{$sexo->id_sexo}}" >{{$sexo->descripcion}}</option>
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

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
