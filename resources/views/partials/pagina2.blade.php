@extends('layouts.master')

@section('title', 'Pagina 2')

@section('content')
    <div class="container">
        <h1 class="text-center">Pagina2</h1>
        <ul>
            @for ($i = 0; $i < count($data); $i++)
                <li> {{ $data[$i] }} </li>
            @endfor
        </ul>
        <ul>
            @foreach ($persona1 as $key => $value)
                <ol> Proprietà: {{ $key }} <br>
                    Valore: {{ $value }}
                </ol>
        </ul>
        @endforeach
    @endsection
