@extends("layouts.layout")
@section("title","Domicilios")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("domicilios/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("domicilios/create")}}">nuevo</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Calle y Numero</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($domicilios as $domicilio)
                    <tr>
                        <td>{{$domicilio->id_domicilio}}</td>
                        <td>{{$domicilio->descripcion}}</td>

                        <td>
                            <form action="{{route("domicilios.destroy",$domicilio->id_domicilio)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url("domicilios",$domicilio->id_domicilio)}}/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
