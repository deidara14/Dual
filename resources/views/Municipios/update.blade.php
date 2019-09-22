@extends("layouts.layout")
@section("title","Tipo de Registro")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("municipios")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("municipios")}}">regresar</a>

    <h3 class="text-primary">Modificar Registro</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("municipios.update",$municipio->id_municipio)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="descripcion_mun">Municipio</label>
                    <input type="text" id="descripcion_mun" name="descripcion_mun" class="form-control"  placeholder="Municipio" value="{{$municipio->descripcion_mun}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
