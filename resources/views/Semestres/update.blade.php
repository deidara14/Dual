@extends("Layouts.layout")
@section("title","Tipo de Registro")

@section("content")

    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("semestres")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("semestres")}}">regresar</a>

    <h3 class="text-primary">Modificar Registro</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("semestres.update",$semestre->id_semestre)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="descripcion_semestre">Descripcion</label>
                    <input type="text" id="descripcion_semestre" name="descripcion_semestre" class="form-control"  placeholder="Descripcion" value="{{$semestre->descripcion_semestre}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection