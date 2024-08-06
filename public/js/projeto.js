function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    //alert(rotaUrl);
    //alert(idDoRegistro);
    
    if (confirm('Deseja excluir este registro?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            /* abaixo está o headers que foi definido no arquivo resources->views->pages->produtos->paginação.blade.php
            */
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                id: idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout:2000,
                });
            },
        }).done(function (data){
            $.unblockUI();
            console.log(data);
        }).fail(function (data){
            $.unblockUI();
            alert('Não foi possível buscar os dados');
        })
    }
}