<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    @include('mensagem', ['mensagem' => $mensagem])
    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white w-96 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="example" class=" tabela table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr class="titulos">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Dívida</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td class="idTabela">{{ $cliente->id }}</td>
                                <td>{{ $cliente->nome }}</td>
                                <td>R$ {{ $cliente->divida }}</td>
                                <td style="max-width: 72px">
                                    <div class="flex flex-wrap items-stretch mx-auto">
                                        <button class="btn btn-outline-info btn-sm mr-1 botEditar" data-id="{{$cliente->id}}">
                                            <i class="fas fa-edit"> Editar</i>
                                        </button>
                                        <button class="btn btn-outline-warning btn-sm mr-1 botAbater" data-id="{{$cliente->id}}">
                                            <i class="fas fa-piggy-bank"> Abater</i>
                                        </button>
                                        <form method="post" action="/listagem/excluir/{{ $cliente->id }}"
                                                onsubmit="return confirm('Tem certeza que deseja excluir {{ addslashes($cliente->nome) }}?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm mr-1 botDeletar">
                                                <i class="far fa-trash-alt"> Excluir</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <button type="button" class=" btn btn-outline-primary mr-0 ml-auto" id="adicionar">
                        <i class="fa fa-plus-circle"> Novo Cliente</i>
                    </button>

                    @include('cliente.create')

                    <script>
                        $(document).ready( function () {
                            window.urlListagem = "/listagem/editar"
                            $('#example').DataTable();
                        });
                    </script>
                    <script src="{{ asset('js/cliente/cliente-index.js') }}"></script>
                    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


