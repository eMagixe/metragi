<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment;

class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Apartment::with('images')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apartment = Apartment::create([
            'name' => $request->name,
            'object_type' => $request->object_type,
            'housing_type' => intval($request->housing_type),
            'apartment_type' => $request->apartment_type,
            'count_room' => intval($request->count_room),
            'price' => intval($request->price),
            'square' => intval($request->square),
            'floor' => intval($request->floor)
        ]);

        foreach ($request->images as $image) {
            $apartment->images()->create(['url' => $image]);
        }

        return [
            'status' => true,
            "data" => $apartment
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Apartment::find($id);
    }

    /**
     * Filters a list
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {

        $prices = [ intval($request->price_start), intval($request->price_final) ];
        $object_types = ($request->object_type == 'all') ? ['new', 'old'] : [ $request->object_type ];
        $apartment_types = ($request->apartment_type == 'all') ? ['flat', 'apartment'] : [ $request->apartment_type ];
        $squares = [ intval($request->square_start), intval($request->square_final) ];
        $floors = [ intval($request->floor_start), intval($request->floor_final) ];


        return Apartment::whereIn('count_room', $request->count_room)
                        ->whereBetween('price', $prices)
                        ->whereIn('object_type', $object_types)
                        ->whereBetween('square', $squares)
                        ->whereBetween('floor', $floors)
                        ->whereIn('apartment_type', $apartment_types)
                        ->whereIn('housing_type', $request->housing_type)
                        ->get();
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
