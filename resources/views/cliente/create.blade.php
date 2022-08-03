<div class="modal fade" id="modalAdicionar" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header" style="padding: 35px 50px;">
                <h4 id="tituloModal">Cadastro Cliente</h4><h4 id="idEdicao"></h4>
            </div>
            <div class="modal-body" style="padding: 40px 50px;">
                <form role="form" action="{{ route('adicionar') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone do cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço do cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="divida">Dívida</label>
                        <input type="text" class="form-control" name="divida" id="divida" placeholder="Valor da dívida do cliente" required>
                    </div>
                    <a class="voltar btn btn-danger" data-title="Deseja realmente voltar?" href="{{ route('listagem') }}">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/cliente/cliente-create.js') }}"></script>


