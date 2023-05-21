<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function create(Request $request){
        $fillable = $request->validate([
            'name' => 'required',
            'address1' => 'required',
            'address2',
            'address3',
            'town',
            'county',
            'country',
            'landlord_id' => 'required'
        ]);

        $fillable['agent_id'] = Auth::id();
        Property::create($fillable);

        return redirect('/properties');
    }
}
