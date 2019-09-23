@extends("layouts.layout")
@section("title","Agregar Domicilio")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("domicilios")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("domicilios")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("domicilios")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="descripcion">Domicilio</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control"  placeholder="Domicilio">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
