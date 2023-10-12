<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
class RestaurantController extends Controller
{
    public function index()
    {
        return Restaurant::all();
    }
    public function show($id)
    {
        return Restaurant::findOrFail($id);
    }
    public function store(Request $request)
    {
    $restaurant = new Restaurant;
    $restaurant->name = $request->input('name');
    $restaurant->address = $request->input('address');
    $restaurant->phone = $request->input('phone');
    $restaurant->save();

    $data = [
        'message' => 'Restaurant created successfully',
        'restaurant' => $restaurant,
    ];

    return response()->json($data);
}   

    public function update(Request $request, $id)
    {
        $restaurant = Restaurant::findOrFail($id);
        
        $restaurant->name = $request->name; 
        $restaurant->address = $request->address; 
        $restaurant->phone = $request->phone; 
        $restaurant->update(); 
        $data = [
            'message' => 'Restaurant updated successfully',
            'restaurant' => $restaurant
        ];
        return response()->json($data); 
    }
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        $data = [
            'message' => 'Restaurant deleted successfully',
            'restaurant' => $restaurant
        ];
        return response()->json($data); 
    }



}
