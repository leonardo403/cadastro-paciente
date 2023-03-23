<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use ArrayObject;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllPacientes()
    {
        $pacientes = Paciente::get()->toJson(JSON_PRETTY_PRINT);
        return response($pacientes, 200);
    }
    public function createPaciente(Request $request)
    {
        $request->validate([
            'foto_paciente' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $dados_paciente = $request->all();

        if( $foto = $request->file('foto_paciente')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Paciente::create($dados_paciente);
        return response()->json('Paciente cadastrado com sucesso!');
    }
    public function getPaciente($id)
    {
        $paciente = Paciente::find($id);
        return response()->json($paciente);
    }
    public function updatePaciente($id, Request $request)
    {
        $paciente = Paciente::find($id);
        $paciente->update($request->all());
        return response()->json('Paciente atualizado com sucesso!');
    }
    public function deletePaciente($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
        return response()->json('Paciente deletado!');
    }
}
