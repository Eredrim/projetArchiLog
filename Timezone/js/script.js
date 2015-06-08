function charger(){
    $.get("ListeBrute.php", function(e){
        $("#container").html(e);
    });
}