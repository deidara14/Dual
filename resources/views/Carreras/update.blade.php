@extends("Layouts.layout")
@section("title","Modificacion Carreras")

@section("content")

    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("carreras")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("carreras")}}">regresar</a>

    <h3 class="text-primary">Modificar Registro</h3>

    <div class="row justify-content-md-center">

        <div class="col-8">
            <form action="{{route("carreras.update",$carrera->id_carrera)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nombre_carrera">Descripcion</label>
                    <input type="text" id="nombre_carrera" name="nombre_carrera" class="form-control"  placeholder="" value="{{$carrera->nombre_carrera}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection