@extends('layouts.app')

@section('page-title', 'Treni')

@section('main')
    <main>
        <div class="container">
            <div class="row">
                <div class="container">
                    stai visualizzando i treni: ciao
                </div>
                <hr>
                <div class="container">
                    <a href="{{ route('home') }}"> Torna alla home </a>
                </div>
            </div>
        </div>
    </main>    
@endsection
