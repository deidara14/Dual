@extends("layouts.layout")
@section("title","Agregar Institucion")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("instituciones")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("instituciones")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("instituciones")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="descripcion">Nombre Institucion</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control"  placeholder="Institucion">
                </div>
                <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" id="domicilio" name="domicilio" class="form-control"  placeholder="Domicilio">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
