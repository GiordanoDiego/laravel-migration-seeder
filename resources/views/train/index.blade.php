@extends('layouts.app')

@section('page-title', 'Treni')

@section('main')
    <main>
        <div class="container">
            <div class="row">
                <div class="container">
                    <h1 class="text-center">
                        Stai visualizzando i treni: 
                    </h1>
                </div>
                <hr>
                <div class="container">
                    <a href="{{ route('home') }}"> Torna alla home </a>
                </div>
                <hr>
                <div>
                    @foreach ($allTrain as $item)
                        <ul>
                            <li>
                                Codice treno: {{ $item->codice }}
                            </li>
                            <li>
                                Azienda: {{ $item->azienda }}
                            </li>
                            <li>
                                Stazione partenza: {{ $item->stazione_partenza }}
                            </li>
                            <li>
                                Stazione arrivo: {{ $item->stazione_arrivo }}
                            </li>
                        </ul>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </main>    
@endsection
