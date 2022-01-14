<?php

namespace App\Http\Controllers;

use App\Models\Terreno;
use Illuminate\Http\Request;

class TerrenosController extends Controller
{
    public function list()
    {
        return Terreno::all();
    }

    public function detail($id)
    {
        return Terreno::find($id);
    }

    public function create(Request $req)
    {
        $terrenoData = json_decode($req->getContent());

        $terreno = new Terreno();
        $terreno->task = $terrenoData->task;
        $terreno->save();
    }

    public function delete($id)
    {
        return Terreno::destroy($id);
    }
}
