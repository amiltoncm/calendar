<script>
$(document).ready(function() {
    // CARREGA CALENDÁRIO E EVENTOS DO BANCO
    $('#calendario').fullCalendar({
        header: {
            left: 'title, prev, next, today',
            center: '',
            right: ''
        },
        defaultDate: '2016-01-12',
        editable: true,
        defaultView: 'month',
        firstDay: 0,
        events: 'db/events.php',
    });

    // CADASTRA NOVO EVENTO
    $('#newEvent').submit(function() {
        //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
        var dados = jQuery(this).serialize();
        $.ajax({
            type: "POST",
            url: "db/newevent.php",
            data: dados,
            success: function(data) {
                if (data == "1") {
                    alert("Cadastrado com sucesso! ");
                    //atualiza a página!
                    location.reload();
                } else {
                    alert("Houve algum problema ao cadastrar evento!");
                }
            }
        });
        return false;
    });
});
</script>
