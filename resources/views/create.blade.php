@extends('layouts.structure')

@section('title', 'Add product')

@section('content')
    <h1>Bienvenidos a la pagina de Creacion y Deportes</h1>
    <h2>Formulario de Creacion y Deportes</h2>
        <form action="" method="post">
            <label>Digite el Deporte</label>
            <input type="text" placeholder="Deporte">
                <select>
                    <option>Futbol</option>
                    <option>Baloncesto</option>
                    <option>Voleibol</option>
                    <option>Golf</option>
                </select>
        </form>
@endsection   