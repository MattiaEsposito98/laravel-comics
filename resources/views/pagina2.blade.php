@extends('layouts/master')

@section('title', 'Pagina 2')

@section('content')
    <div class="container">
        <h1 class="text-center">Pagina2</h1>
        <ul>
            @for ($i = 0; $i < count($data); $i++)
                <li> {{ $data[$i] }} </li>
            @endfor

            @foreach ($persona1 as $key => $value)
                <li> Proprietà: {{ $key }} <br>
                    Valore: {{ $value }}
                </li>
            @endforeach
        @endsection
