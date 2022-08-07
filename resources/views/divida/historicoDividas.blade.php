<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Histórico de Dívidas') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white w-96 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="example" class=" tabela table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr class="titulos">
                            <th>ID</th>
                            <th>Valor Divida</th>
                            <th>Nome do devedor</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dividas as $divida)
                            <tr>
                                <td class="idTabela">{{ $divida->id }}</td>
                                <td>R$ {{ $divida->divida }}</td>
                                <td>{{ $divida->cliente }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(document).ready( function () {
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
