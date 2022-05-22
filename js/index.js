$("#requisicao").click(ajaxFunction);
function ajaxFunction(){
    var dd = [];
    var varrayInserir = {
        nome1: "19",
        nome2: "Frase inserida.",
    }

    dd.push(varrayInserir);
    
    var dados = {
        dd: dd
    };
    $.post("api/json.php",dados,function(){
        console.log("Salvou dados");
    });
    // $.ajax({
    //     url: 'api/json.php',
    //     type: 'get',
    //     dataType: 'JSON',
    //     success: function(response){
    //         var aleatorio = Math.floor(Math.random() * response.length);
    //         $("#paragrafo_aleatorio").text(response[aleatorio]["Frase"]);
    //     }
    // });
}