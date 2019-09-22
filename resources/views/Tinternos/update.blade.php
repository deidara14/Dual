@extends("layouts.layout")
@section("title","Registro de Tutores Internos")

@section("content")
    <h1 class="text-center">Registro de Tutores Internos</h1>

    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("tinternos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{route("tinternos.update",$tinterno->id_tutorint)}}" method="post">
                @csrf
                @method("PUT")

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right" for="id_user">Usuario</label>
                    <div class="col-md-6">
                        <select name="id_user" id="id_user" class="form-control">
                            <option value="">Selecciona uno</option>
                            @foreach($userss=\App\User::all() as $user)
                                <option value="{{$user->id_user}}" {{$user->id_user=$user->id_user?"selected":""}}>{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nombre_ti" class="col-md-4 col-form-label text-md-right">{{ __('Nombre(s)') }}</label>

                    <div class="col-md-6">
                        <input value="{{$tinterno->nombre_ti}}" id="nombre_ti" type="text" class="form-control" name="nombre_ti" required autocomplete="new-nombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ap_ti" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                    <div class="col-md-6">
                        <input id="ap_ti" type="text" class="form-control" name="ap_ti" required autocomplete="new-ap" value="{{$tinterno->ap_ti}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="am_ti" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                    <div class="col-md-6">
                        <input id="am_ti" type="text" class="form-control" name="am_ti" required autocomplete="new-am" value="{{$tinterno->am_ti}}">
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
                    <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono" required autocomplete="new-telefono" value="{{$tinterno->telefono}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
