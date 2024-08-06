@extends('index')

@section('title', 'Gestão')
@section('content')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produtos</h1>
</div>
<div>
    <form action="" method="get">
        <input type="text" name="pesquisar" placeholder="Digite o nome" />
        <button> Pesquisar </button>
        <a type="button" href="" class="btn btn-success float-end">
            Incluir Produto
        </a>
    </form>
        <div class="table-responsive">
            @if ($findProduto->isEmpty())
            <p></br>Não existe dados</p>
            @else
            <table class="table table-striped table-sm">
               <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($findProduto as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.') }}</td>
                        <td>
                            <a href="" class="btn btn-light btn-sm">
                                Editar
                            </a>
                            {{-- o meta abaixo deve ser posto antes do botão excluir porque o meta que vai
                            passar um token da sessão para o laravel autorizar requisição externa com ajax. 
                            Sempre que usar ajax, deve se fazer esse fluxo. Deve-se colocar este token no header
                            da seção, que no nosso caso está no arquivo public->js->projeto.js para o laravel
                            poder autorizar. o laravel traz um token aleatório através da funcão que está
                            dentro de content, content=" {{ csrf_token() }} --}}
                            <meta name='csrf-token' content=" {{ csrf_token() }} "/>
                            <a onclick="deleteRegistroPaginacao( ' {{ route('produto.delete') }} ', {{ $produto->id }} )"
                            class="btn btn-danger btn-sm">
                                Excluir
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
</div>
@endsection
