$(document).ready(function () {
    data ={
        "accion":"list",
    }
    $.ajax({
        type: "POST",
        url: "http://oscar.pruebacano.co/crea_obj.php",
        data: data,
        dataType: "json",
        success: function (response) {
            data=response
            table=''
          data.forEach(element => {
                
                table +=`
                    <tr>
                        <th>${element['idarticulo']}</th>
                        <th>${element['nombre_articulo']}</th>
                        <th>${element['precio']}</th>
                    </tr>
                `
                $('#cuerpo-tabla').html(table);
          });
          $('#cuerpo-tabla').html(table);
          
        }
    });
});