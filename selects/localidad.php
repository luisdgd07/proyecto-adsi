<script>
    var valor4 = '';
    $(document).ready(function() {

        $.ajax({
            url: "api/localidad.php",
            type: "GET",
            data: {
                type: 0,
            },
            DataType: 'json',
            success: function(dataResult) {
                var result = JSON.parse(dataResult);
                if (dataResult.statusCode != 201) {
                    for (const [id, data_1] of Object.entries(result)) {
                        valor4 += `<option value="${data_1.id}">${data_1.nombre }</option>`;
                    }
                } else {
                    for (const [id, data_1] of Object.entries(result)) {
                        valor4 += `<option>Error Al obtener datos
                                                                </option>`;
                    }
                }
                $("#localidad").html(valor4);
                $("#ciudad").html(valor4);
            },
        });
    });
</script>