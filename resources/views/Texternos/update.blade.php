@extends("layouts.layout")
@section("title","Actualizar Tutor Externo")

@section("content")
    <h1 class="text-center">Actualizar Registro de Tutor Externos</h1>

    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("texternos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{route("texternos.update",$texterno->id_tutorext)}}" method="post">
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
                    <label for="nombre_te" class="col-md-4 col-form-label text-md-right">{{ __('Nombre(s)') }}</label>

                    <div class="col-md-6">
                        <input value="{{$texterno->nombre_te}}" id="nombre_te" type="text" class="form-control" name="nombre_te" required autocomplete="new-nombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ap_te" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                    <div class="col-md-6">
                        <input id="ap_te" type="text" class="form-control" name="ap_te" required autocomplete="new-ap" value="{{$texterno->ap_te}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="am_te" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                    <div class="col-md-6">
                        <input id="am_te" type="text" class="form-control" name="am_te" required autocomplete="new-am" value="{{$texterno->am_te}}">
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
                        <input id="telefono" type="text" class="form-control" name="telefono" required autocomplete="new-telefono" value="{{$texterno->telefono}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
