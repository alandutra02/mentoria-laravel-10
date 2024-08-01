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
    public function index (Request $request)
    {
        $pesquisar = $request->pesquisar;
        // abaixo está um ORM Eloquent para buscar dados
        $findProduto = $this->produto->getProdutosPesquisarIndex($pesquisar ? $pesquisar : '');
        /* também pode ser usando da forma abaixo ao inves da forma acima:
        $findProduto = $this->produto->getProdutosPesquisarIndex(search : $pesquisar ?? '');
        */
        //dd($findProduto);
        return view('pages.produtos.paginacao', compact('findProduto'));
    }
}