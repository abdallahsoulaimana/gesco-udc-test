<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function showVoitures()
    {
        return view('voitures', [
            'voitures'=>Voiture::latest()->paginate('12'),
        ]);
    }
}
