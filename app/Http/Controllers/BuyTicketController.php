<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BuyTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.buyticket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->has('data')){
            $data = session('data');
            var_dump($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $request->validate([
            'arrival' => 'required',
            'departure' => 'required',
            'start' => 'required',
            'flightClass' => 'required',

        ]);

        $arrival = $request['arrival'];
        $departure = $request['departure'];
        $start =  $request['start'];
        $flightClass = $request['flightClass'];

        $tickets = DB::table('tickets')
            ->where('arrival', "$arrival")
            ->where('departure', "$departure")
            ->where('startDate', "$start")
            ->where('flightClass', "$flightClass")
            ->get();
        echo $tickets;
       /*if ($tickets->isEmpty())
            return view('searchticket', ["tickets" => null ]);
        session()->put('data', $tickets);
        return view('searchticket', ["tickets" => $tickets ]);
    */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
