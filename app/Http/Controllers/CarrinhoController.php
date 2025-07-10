<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    //

    public function carrinhoList() {
        // dd('estou no carrinho');
        
        $items = \Cart::getContent();

        return view('site.carrinho', compact('items'));
    }

    public function adicionaCarrinho(Request $request) {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qnt),
            'attributes' => array ([
                'image' => $request->img
            ]),
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado no carrinho com sucesso.');
    }

    public function removeCarrinho(Request $request) {
        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('sucesso', 'Item removido com sucesso.'); 
    }

    public function atualizaCarrinho(Request $request) {
        \Cart::update($request->id, [
            'quantity'=> [
                'relative' => false,
                'value' => abs($request->quantity),
            ]
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Item actualizado com sucesso.');
    }


    public function limparCarrinho() {
        \Cart::clear();

        return redirect()->route('site.carrinho')->with('aviso', 'Seu carrinho está vazio.');
    }
}
