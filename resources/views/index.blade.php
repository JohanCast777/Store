@extends('layouts.structure')

@section('title', 'Products')

@section('content')
    <h1>Bienvenidos a la pagina del sitio wed desde la vista</h1>
    <h2>Listado de categorias</h2>
    <table align="center" border="1">
        <thead>
            <tr>
                <th>ID SALE</th>
                <th>DATE SALE</th>
                <th>ID PRODUCT</th>
                <th>ID CUSTOMER</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sale as $elem)
                <tr>
                    <th>{{$elem->id}}</th>
                    <th>{{$elem->created_at}}</th>
                    <th>{{$elem->id_product}}</th>
                    <th>{{$elem->id_custom}}</th>
            @empty
                <h1>There isn't dates</h1>
            @endforelse
                </tr>
        </tbody>
    </table>
@endsection