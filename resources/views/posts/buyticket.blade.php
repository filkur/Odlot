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
                            <div class="row m-3">
                                <input type="checkbox" id="powrotny" name="powrotny"
                                       checked class="mt-1" onclick="hide()">
                                <label for="powrotny" class="ml-1 font-weight-bold">W dwie strony</label>
                            </div>

                            <div class="row">
                                <div class="col-md-3 mb-4 mt-1">
                                    <label for="country" class="ml-4">Miejsce wylotu</label>
                                    <select id="country" name="country" class="form-control">
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
                                    <label for="country" class="ml-4">Miejsce przylotu</label>
                                    <select id="country" name="country" class="form-control">
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
                                    <input type="date" id="start" name="trip-start"
                                           value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" class="w-100 h-50">
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="end" class="mt-1">Powrót:</label> <br/>
                                    <input type="date" id="end" name="trip-end"
                                           value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" class="w-100 h-50">
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
    <script>
        isDisabled = false;
        function hide(){
            if (isDisabled == true){
                document.getElementById('end').disabled = false;
                isDisabled = false;
            }
            else {
                document.getElementById('end').disabled = true;
                isDisabled = true;
            }
        }
    </script>


@endsection
