@extends('layouts.app')

@section('content')
    <div class="container">
        <form action='/kupiony' method='post'>
            @csrf
            <div class="row justify-content-center">
                <form class="col-md-12">
                    <div class="card">
                        <div class="card-header p-4"><h4>{{ __('Wynik wyszukiwania:') }}</h4></div><div class="row mt-4 ml-1" >
                            <div class="col"><h5>#Id<br> lotu:</h5></div>
                            <div class="col"><h5>Miejsce wylotu:</h5></div>
                            <div class="col"><h5>Miejsce docelowe:</h5></div>
                            <div class="col"><h5>Start:</h5></div>
                            <div class="col"><h5>Godz.:</h5></div>
                            <div class="col"><h5>Klasa:</h5></div>
                            <div class="col"><h5>Linia:</h5></div>
                            <div class="col"><h5>Cena [zł]:</h5></div>
                            <div class="col"><h5></h5></div>
                        </div><div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="row">
                                    @if($tickets === null)
                                        <div class="col-md-3 mb-4 mt-1">Nie znaleziono biletów</div>
                                    @else

                                        <div class="row mt-4">
                                            @foreach($tickets as $ticket)
                                                @foreach($ticket as $item => $key)
                                                    <div class="col"><h4>{{$key}}</h4></div>
                                                @endforeach
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary" name="rezerwuj ">Rezerwuj</button>
                                                    </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                    </div>
                </div>
            </form>
        </div>
@endsection
