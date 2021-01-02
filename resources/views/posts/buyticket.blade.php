@extends('layouts.app')

@section('content')
    <div class="container">
        <form action='/kupbilet' method='post'>
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-4"><h4>{{ __('Szukaj przelotu:') }}</h4></div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-md-3 mb-4 mt-1">
                                    <label for="arrival" class="ml-4">Miejsce wylotu</label>
                                    <select id="arrival" name="arrival" class="form-control">
                                        <option value="Warszawa">Warszawa (WAW)</option>
                                        <option value="Krakow">Kraków (KRK)</option>
                                        <option value="Katowice">Katowice (KTW)</option>
                                        <option value="Lublin">Lublin (LUZ)</option>
                                        <option value="Gdansk">Gdańsk (GDA)</option>
                                        <option value="Berlin">Berlin (BER)</option>
                                        <option value="Berlin">Barcelona (BAR)</option>
                                        <option value="Berlin">Londyn (LON)</option>
                                        <option value="Berlin">Paryż (PAR)</option>
                                        <option value="Berlin">Moskwa (MOS)</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4 mt-1">
                                    <label for="departure" class="ml-4">Miejsce przylotu</label>
                                    <select id="departure" name="departure" class="form-control">
                                        <option value="Warszawa">Warszawa (WAW)</option>
                                        <option value="Krakow">Kraków (KRK)</option>
                                        <option value="Katowice">Katowice (KTW)</option>
                                        <option value="Lublin">Lublin (LUZ)</option>
                                        <option value="Gdansk">Gdańsk (GDA)</option>
                                        <option value="Berlin">Berlin (BER)</option>
                                        <option value="Berlin">Barcelona (BAR)</option>
                                        <option value="Berlin">Londyn (LON)</option>
                                        <option value="Berlin">Paryż (PAR)</option>
                                        <option value="Berlin">Moskwa (MOS)</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="start" class="mt-1">Wylot:</label> <br/>
                                    <input type="date" id="start" name="start"
                                           value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" class="w-100 h-50">
                                </div>
                                <div class="col-md-3 mb-4 mt-1">
                                    <label for="flightClass" class="ml-4">Klasa lotu:</label>
                                    <select id="flightClass" name="flightClass" class="form-control">
                                        <option value="business">Business</option>
                                        <option value="standard">Standard</option>
                                        <option value="normal">Normal</option>
                                    </select>
                                </div>
                                <div class="col-12 ">
                                    <button type="submit" class="btn btn-primary">Szukaj</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection
