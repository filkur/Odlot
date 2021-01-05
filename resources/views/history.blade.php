@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Zakupione bilety:</h3>
                <div class="row mt-4 ml-1" >
                    <div class="col"><h5>#Id<br> lotu:</h5></div>
                    <div class="col"><h5>Miejsce wylotu:</h5></div>
                    <div class="col"><h5>Miejsce docelowe:</h5></div>
                    <div class="col"><h5>Start:</h5></div>
                    <div class="col"><h5>Godz.:</h5></div>
                    <div class="col"><h5>Klasa:</h5></div>
                    <div class="col"><h5>Linia:</h5></div>
                    <div class="col"><h5>Cena [zł]:</h5></div>
                </div>
            </div>

            <div class="card-body">
                @if($tickets != null)
                    @foreach($tickets as $ticket)
                    <div class="row mt-4 border-bottom">
                        @foreach($ticket as $item => $key)
                            <div class="col"><h4>{{$key}}</h4></div>
                        @endforeach
                    </div>
                    @endforeach
                @else
                    Nie zakupiono jeszcze żadnego biletu
                @endif
            </div>
        </div>
    </div>

@endsection
