<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use Illuminate\Http\Request;

class ProprietariosController extends Controller
{
    public function list()
    {
        return Proprietario::all();
    }

    public function detail($id)
    {
        return Proprietario::find($id);
    }

    public function create(Request $req)
    {
        $proprietarioData = json_decode($req->getContent());

        $proprietario = new Proprietario();
        $proprietario->task = $proprietarioData->task;
        $proprietario->save();
    }

    public function delete($id)
    {
        return Proprietario::destroy($id);
    }
}
