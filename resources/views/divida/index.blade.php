<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de Dívidas') }}
        </h2>
    </x-slot>

    @include('mensagem', ['mensagem' => $mensagem])

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white w-96 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="post" action="{{ route('addDividas') }}">
                        <div class="">
                            <label for="cliente_id" id="">Escolha o cliente para adicionar uma dívida a ele</label>
                            <select name="cliente_id" id="" required 
                                class=" form-select appearance-none
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                            ">
                                <option value="" selected disabled hidden>Selecionar cliente</option>
                                @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="divida">Informe o valor da dívida que será somada com a dívida total do cliente</label>
                            <input type="text" name="divida" id="" class=
                            " 
                                form-select appearance-none
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                            " 
                            placeholder="Valor em R$ (ex: 480.25)" required>
                        </div>
                        @csrf

                        {{-- <button type="submit" class=" btn btn-outline-primary fas fa-plus-circle" id="botao"> Adicionar dívida</button> --}}
                        <button type="submit" class=" btn btn-outline-primary mr-0 ml-auto mt-4" id="botao">
                            <i class="fa fa-plus-circle"> Adicionar dívida</i>
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
