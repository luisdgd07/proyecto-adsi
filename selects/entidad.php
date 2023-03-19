<script>
    var valor3 = '';
    $(document).ready(function() {

        $.ajax({
            url: "api/entidad.php",
            type: "GET",
            data: {
                type: 0,
            },
            DataType: 'json',
            success: function(dataResult) {
                var result = JSON.parse(dataResult);
                if (dataResult.statusCode != 201) {
                    for (const [id, data_1] of Object.entries(result)) {
                        valor3 += `<option value="${data_1.id}">${data_1.nombre }</option>`;
                    }
                } else {
                    for (const [id, data_1] of Object.entries(result)) {
                        valor3 += `<option>Error Al obtener datos
                                                                </option>`;
                    }
                }
                $("#entidad").html(valor3);
                $("#entidadR").html(valor3);

            },
        });
    });
</script>