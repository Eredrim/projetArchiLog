function charger(){
    $.get("ListeBrute.php", function(e){
        $("#container").html(e);
    });
}

function supprHorloge(idHorloge){
    $("#hor"+idHorloge).hide();
    $.post("./gestionHorloges.php", {Suppr : idHorloge}, function(response) {
    // Log the response to the console
    console.log("Response: "+response);
});
}