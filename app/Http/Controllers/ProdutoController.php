<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * Description of ProdutoController
 *
 * @author root
 */
class ProdutoController extends Controller {

    public function lista() {
        $produtos = DB::select('SELECT * FROM produtos');

        $html = '<h1>Produtos</h1>';
        $html .= '<ul>';

        foreach ($produtos as $produto) {
            $html .= '<li> Nome: ' . $produto->nome . ', Descrição: ' . $produto->descricao . '</li>';
        }

        $html .= '</ul>';

        return $html;
    }

}
