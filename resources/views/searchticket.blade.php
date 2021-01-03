@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-4"><h4>{{ __('Znaleziono bilet:') }}</h4></div><div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="row">
                                @if($tickets === null)
                                    <div class="col-md-3 mb-4 mt-1">Nie znaleziono biletów</div>
                                @else
                                    @foreach($tickets as $ticket)
                                        @foreach($ticket as $item => $key)
                                            <div class="col-md-2 mb-4 mt-1">{{$key}}</div>
                                        @endforeach
                                    @endforeach
                                @endif
                            </div>

                </div>
            </div>
        </div>
@endsection
