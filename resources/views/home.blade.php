@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-4"><h4>{{ __('Witaj '.Auth::user()->name.'! Co chcesz dzisiaj zrobić?') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Kup bilet</h2>
                                        <p class="card-text">Przejdź za pomocą przycisku poniżej lub wybierz z menu zakładkę kup bilet a następnie wypełnij formularz aby wyszukać wymarzonego lotu.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('buyticket')}}" class="btn btn-primary btn-sm">Przejdź do formularza</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Historia</h2>
                                        <p class="card-text">Masz dosyć szukania biletów na skrzynce mailowej? Kliknij w historię a pokażą się wszystkie zakupione u nas bilety.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary btn-sm">Zobacz historię</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Wypożyczalnia</h2>
                                        <p class="card-text">Przejdź do naszej wypożyczalni aby za pomocą jednego formularza skorzystać z naszej floty aut, a nastepnie przemieszczać się wygodnie w miejscu podróży.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary btn-sm">Zobacz możliwości</a>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
