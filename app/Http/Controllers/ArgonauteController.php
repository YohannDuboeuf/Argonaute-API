<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Argonaute;

class ArgonauteController extends Controller
{
    public function create(Request $request) 
    {
        if($argonaute = Argonaute::create([
            'name' => $request->input('name'),
        ]))
        {
            return response()->json([
                'message' => 'création d\'un argonaute',
                'argonaute' => $argonaute,
                ] , 200);
        }

        return response()->json([
            'message' => 'Erreur lors de la création de l\'argonaute'
            ] , 500);
    }
    
    public function getAll()
    {
        return Argonaute::get();
    }
}