<script>
    var valo = '';
    $(document).ready(function() {

        $.ajax({
            url: "api/municipio.php",
            type: "GET",
            data: {
                type: 0,
            },
            DataType: 'json',
            success: function(dataResult) {
                var result = JSON.parse(dataResult);
                if (dataResult.statusCode != 201) {
                    for (const [id, data_1] of Object.entries(result)) {
                        valo += `<option value="${data_1.id}">${data_1.nombre }</option>`;
                    }
                } else {
                    for (const [id, data_1] of Object.entries(result)) {
                        valo += `<option>Error Al obtener datos
                                                                </option>`;
                    }
                }
                $("#municipio").html(valo);
                $("#municipioR").html(valo);

            },
        });
    });
</script>