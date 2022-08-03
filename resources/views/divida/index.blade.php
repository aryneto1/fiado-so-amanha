<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de Dividas') }}
        </h2>
    </x-slot>

    <form method="post" action="{{ route('addDividas') }}">
        <div class="form-group">
            <label for="cliente" id="textoCliente">Escolha o cliente para adicionar uma dívida a ele</label>
            <select name="cliente" id="selecao" required class="form-group">
                <option value="" selected disabled hidden>Selecionar cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">Cliente: {{ $cliente->nome }}; Dívida total: {{ $cliente->divida }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="divida">Informe o valor da dívida que será somada com a dívida total do cliente</label>
            <input type="text" name="divida" id="divida" class="form-control" placeholder="Valor em R$ (ex: 480,25)" required>
        </div>
        @csrf
        <div class="btn btn-outline-primary" id="botao">
            <i class="fas fa-plus-circle"> Adicionar dívida</i>
        </div>
    </form>
</x-app-layout>
