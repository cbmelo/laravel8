@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">

                <h1>{{ $title}}</h1>

                @if (count($categorias)> 0)

                    @foreach ($categorias as $categoria)

                        <li>{{ $categoria }}</li>

                    @endforeach

                @endif

            </div>
        </div>
    </div>

@endsection
