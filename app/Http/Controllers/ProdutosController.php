<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    protected $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;

        // Certifique-se de que $pesquisar não seja nulo antes de chamar o método
        $findProduto = $pesquisar
            ? $this->produto->getProdutosPesquisarIndex($pesquisar)
            : $this->produto->getProdutosPesquisarIndex(); // Se $pesquisar for nulo, chama sem argumento

        return view('pages.produtos.paginacao', compact('findProduto'));
    }

    public function delete(Request $request)
    {
        // Lógica para excluir um produto com base nos dados do $request
        // ...

        return redirect()->route('produtos.delete'); // Redireciona para uma rota após a exclusão
    }
}
