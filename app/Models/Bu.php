<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Bu extends Model
{
    use HasFactory;
    protected $fillable = ['codeagence', 'marque', 'codebus', 'places'];
    public $timestamps = false;


    public function create_bus(Request $request)
    {
        try {
            $bus = new Bu();
            $bus->codeagence = $request->input('codeagence');
            $bus->codebus = $request->input('codebus');
            $bus->marque = $request->input('marque');
            $bus->places = $request->input('places');
            $bus->status = 1;
            $bus->save();
            return $bus;
        } catch (\Throwable $th) {
            return back()->with('error', 'error, refaresh and try again');
        }
    }
    public function update_bus($id, Request $request)
    {
        try {
            $bus = Bu::findOrFail($id);
            $bus->codeagence = $request->input('codeagence');
            $bus->codebus = $request->input('codebus');
            $bus->marque = $request->input('marque');
            $bus->places = $request->input('places');
            $bus->update();
        } catch (\Throwable $th) {
            return back()->with('status', 'error refresh and try again');
        }
    }
}
