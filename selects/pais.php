<script>
    var valor2 = '';
    $(document).ready(function() {

        $.ajax({
            url: "api/pais.php",
            type: "GET",
            data: {
                type: 0,
            },
            DataType: 'json',
            success: function(dataResult) {
                var result = JSON.parse(dataResult);
                if (dataResult.statusCode != 201) {
                    for (const [id, data_1] of Object.entries(result)) {
                        valor2 += `<option value="${data_1.id}">${data_1.nombre }</option>`;
                    }
                } else {
                    for (const [id, data_1] of Object.entries(result)) {
                        valor2 += `<option>Error Al obtener datos
                                                                </option>`;
                    }
                }
                $("#pais").html(valor2);
                $("#nacion").html(valor2);

            },
        });
    });
</script>