@extends("Layouts.layout")

@section("title","Agregar Carrera")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("carreras")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("carreras")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("carreras")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombre_carrera">Semestre</label>
                    <input type="text" id="nombre_carrera" name="nombre_carrera" class="form-control"  placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection