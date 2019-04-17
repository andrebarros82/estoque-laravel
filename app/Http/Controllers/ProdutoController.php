<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

/**
 * Description of ProdutoController
 *
 * @author root
 */
class ProdutoController extends Controller {

    public function lista() {
        $produtos = DB::select('SELECT * FROM produtos');

        return view('produto/listagem')->with('produtos', $produtos);
    }

    public function mostra($id) {
        $produtos = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

        return view("produto/detalhes")->with('produto', $produtos[0]);
    }

    public function novo() {
        return view('produto/formulario');
    }

    public function adiciona() {
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson() {
        $produtos = DB::select('select * from produtos');
        
        return $produtos;
        //return response()->json($produtos);
    }

}
