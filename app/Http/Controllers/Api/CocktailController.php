<?php

namespace App\Http\Controllers\Api;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CocktailController extends Controller
{
    public function index(Request $request)
    {

        $cocktails = Cocktail::all();

        return response()->json([
            'success'    => true,
            'results'    => $cocktails,
        ]);
    }

    public function show(Cocktail $cocktail)
    {
        return response()->json([
            'success'    => $cocktail ? true : false,
            'results'    => $cocktail,
        ]);
    }

    public function random()
    {
        $cocktails = Cocktail::inRandomOrder()->limit(9)->get();

        return response()->json([
            'success'    => true,
            'results'    => $cocktails,
        ]);
    }
}
