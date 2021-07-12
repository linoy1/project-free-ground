function selectedGround(selected){
    var ground = selected.options[selected.selectedIndex].getAttribute('groundId');
    console.log(ground);
    $.ajax({
        type: 'POST',
        url: './includes/get_selected_ground.php',
        data: { id: ground },
        success: function(html) {
            $("#sport").html(html);
        }
    });
}