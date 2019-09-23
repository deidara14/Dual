@extends("layouts.layout")
@section("title","Domicilio Modificar")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("domicilios")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("domicilios")}}">regresar</a>

    <h3 class="text-primary">Modificar Domicilio</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("domicilios.update",$domicilio->id_domicilio)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="descripcion">Municipio</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control"  placeholder="" value="{{$domicilio->descripcion}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
