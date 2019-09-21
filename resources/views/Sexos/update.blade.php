@extends("Layouts.layout")
@section("title","Tipo de Registro")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("sexos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("sexos")}}">regresar</a>

    <h3 class="text-primary">Modificar Registro</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("sexos.update",$sexo->id_sexo)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control"  placeholder="Descripcion" value="{{$sexo->descripcion}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection