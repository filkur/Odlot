@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h3>Gratulacje! Zakupiono bilet</h3></div>
            <div class="card-body">
                <p>Nie czekaj kliknij w przycisk poniżej i sprawdź w swojej historii czy już on jest!</p>
                <a href="{{route('#')}}" class="btn btn-primary btn-sm">Sprawdź</a>
            </div>
        </div>
    </div>

@endsection
