@extends("layouts.layout")
@section("title","Institucion Modificar")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("instituciones")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("instituciones")}}">regresar</a>

    <h3 class="text-primary">Modificar Institucion</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("instituciones.update",$institucione->id_institucion)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="descripcion">Municipio</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control"  placeholder="" value="{{$institucione->descripcion}}">
                </div>
                <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" id="domicilio" name="domicilio" class="form-control"  placeholder="Domicilio" value="{{$institucione->domicilio}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection