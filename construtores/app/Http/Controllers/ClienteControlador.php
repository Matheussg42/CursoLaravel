<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return "Lista de todos os Clientes - Raiz";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return "Formulário de cadastro de CLiente";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $s = "Armazenar: \n";
        $s .= "Nome: " . $request->input('nome') . " \n";
        $s .= "Idade: " . $request->input('idade') . " ";

        return response($s, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $v = ["Mario", "Edson", "Roberto", "Jean"];
        if ($id >= 0 && $id < count($v)) {
            return $v[$id];
        } else {
            return "Não encontrado!";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return "Formulário para editar Cliente com ID " . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $s = "Atualizar Cliente com ID {$id}: \n";
        $s .= "Nome: " . $request->input('nome') . " \n";
        $s .= "Idade: " . $request->input('idade') . " ";

        return response($s, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        return response("Apagado cliente com o ID $id", 200);
    }

    public function requisitar(Request $request) {
        echo "Nome: " . $request->input('nome');
    }

}
