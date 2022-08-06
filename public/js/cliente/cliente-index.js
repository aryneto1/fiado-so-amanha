$(".botEditar").click(function () {
    // ajax
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: window.urlListagem,
        data: { id: $(this).data('id') },
        cache: false,
        type: "POST",
        success: function (data) {
            $("#modalAdicionar").modal({backdrop: 'static', keyboard: false});
            $("#id").val(data.id);
            $("#tituloModal").html("Editar Cliente");
            $("#idEdicao").html("ID: " + data.id);
            $("#nome").val(data.nome);
            $("#telefone").val(data.telefone);
            $("#endereco").val(data.endereco);

        },
    })

});
