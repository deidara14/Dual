@extends("layouts.layout")
@section("title","Agregar municipio")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("municipios")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("municipios")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("municipios")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="descripcion_mun">Municipio</label>
                    <input type="text" id="descripcion_mun" name="descripcion_mun" class="form-control"  placeholder="Municipio">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
