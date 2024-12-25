function deleteResgisroPaginacao(rotaUrl, idRegistro) {
    if (confirm('Deseja confirmar a exclusão?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: idRegistro
            },
            beforeSend: function () {
                $.blockUI({
                    message: '<h1>Carregando...</h1>',
                    timeout: 2000,
                });
            },
        }).done(function (data) {
            $.unblockUI();
            console.log(data);
            if (data.success) {
                window.location.reload();
            } else {
                alert('Não foi possível excluir o registro');
            }
        }).fail(function (data) {
            $.unblockUI();
            alert('Não foi possível buscar os dados');
        });
    }
}
