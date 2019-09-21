@extends("Layouts.layout")
@section("title","Agregar Sexo")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("sexos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("sexos")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("sexos")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="descripcion">Sexo</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control"  placeholder="sexo">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection