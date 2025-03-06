@extends('layouts.master')

@section('title', 'HomePage')

@section('content')
    <div class="container-fluid position-">
        <img src="{{ asset('img/jumbotron.jpg') }}" class="dimension">
        <button type="button" class="btn btn-primary position">
            CURRENT SERIES
        </button>
        <div class="row bg-dark">

            @if (isset($comics) && count($comics) > 0)
                @foreach ($comics as $comic)
                    <div class="col-2 mb-3 mt-5">
                        <x-comic-card :comic="$comic" />
                    </div>
                @endforeach
            @else
                <p>Nessun fumetto disponibile.</p>
            @endif

            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary mb-4">
                    LOAD MORE
                </button>
            </div>

        </div>
    </div>
@endsection

{{-- CSS --}}
<style>
    .dimension {
        height: 300px;
        width: 100%;
        object-fit: fill;
    }

    .position {
        position: absolute;
        left: 80px;
        top: 350px;
    }
</style>
