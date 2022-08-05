<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    @include('mensagem', ['mensagem' => $mensagem])
    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="tabela">
                        <thead>
                        <tr class="titulos">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Dívida</th>
                            <th>Botão</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td class="idTabela">{{ $cliente->id }}</td>
                                <td>{{ $cliente->nome }}</td>
                                <td>R$ {{ $cliente->divida }}</td>
                                <td class="bot">
                                    <button class="btn btn-outline-info btn-sm mr-1 botEditar" data-id="{{$cliente->id}}">
                                        <i class="fas fa-edit"> Ver Perfil</i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <button type="button" class="btn btn-outline-primary btn-sm mr-1" id="adicionar">
                        <i class="fa fa-plus-circle"> Adicionar Cliente</i>
                    </button>

                    @include('cliente.create')

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
