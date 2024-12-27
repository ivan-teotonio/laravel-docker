function deleteResgisroPaginacao(rotaUrl, idRegistro) {
    if (confirm("Deseja confirmar a exclusão?")) {
        $.ajax({
            url: rotaUrl,
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                id: idRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: "<h1>Carregando...</h1>",
                    timeout: 2000,
                });
            },
        })
            .done(function (data) {
                $.unblockUI();
                console.log(data);
                if (data.success) {
                    window.location.reload();
                } else {
                    alert("Não foi possível excluir o registro");
                }
            })
            .fail(function (data) {
                $.unblockUI();
                alert("Não foi possível buscar os dados");
            });
    }
}

$("#preco").mask("#.##0,00", { reverse: true });

$("#cep").blur(function () {
    let cep = $(this).val().replace(/\D/g, "");
    if (cep != "") {
        let validacep = /^[0-9]{8}$/;
        if (validacep.test(cep)) {
            $("#logradouro").val(" ");
            $("#bairro").val(" ");
            $("#cidade").val(" ");
            $("#uf").val(" ");
            $("#ibge").val(" ");
            $.getJSON(
                "https://viacep.com.br/ws/" + cep + "/json/",
                function (data) {
                    if (!("erro" in data)) {
                        $("#logradouro").val(data.logradouro);
                        $("#bairro").val(data.bairro);
                        $("#cidade").val(data.localidade);
                        $("#uf").val(data.uf);
                        $("#ibge").val(data.ibge);
                    } else {
                        alert("CEP não encontrado");
                    }
                }
            );
        }
    }
});
