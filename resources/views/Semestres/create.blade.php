@extends("Layouts.layout")

@section("title","Agregar Semestre")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("semestres")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("semestres")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("semestres")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="descripcion_semestre">Semestre</label>
                    <input type="text" id="descripcion_semestre" name="descripcion_semestre" class="form-control"  placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection