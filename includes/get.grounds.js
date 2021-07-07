$(document).ready(function() {
    $.getJSON("data/grounds.json", function(data) {
        console.log(data);
    })
})
$(document).ready(function(){
    $.getJSON("data/grounds.json", function(data) {
        var filterDiv = "filterDiv";
        var icons = "";
        var smallIcons = "";
        $.each(data.products, function() {
            filterDiv = "filterDiv";
            icons = "";
            smallIcons = "";
            if (this.football){
                filterDiv += " soccer"
                icons += '<span class="material-icons md-48">sports_soccer</span>';
                smallIcons +='<span class="material-icons md-24">sports_soccer</span>';
            }
            if (this.basketball){
                filterDiv += " basketball"
                icons += '<span class="material-icons md-48">sports_basketball</span>';
                smallIcons +='<span class="material-icons md-24">sports_basketball</span>';
            }
            if (this.tennis){
                filterDiv += " tennis"
                icons += '<span class="material-icons md-48">sports_tennis</span>';
                smallIcons +='<span class="material-icons md-24">sports_tennis</span>';
            }
            if (this.gym){
                filterDiv += " fitness"
                icons += '<span class="material-icons md-48">fitness_center</span>';
                smallIcons +='<span class="material-icons md-24">fitness_center</span>';
            }
            $('.groundsList').append('<div class="'+filterDiv+'">'+
                        '<a href="ground.php?id='+this.id+'">'+
                        '<h4>'+this.name+'</h4>'+
                        '<span id="icons">'+icons+
                        '</span><span id="small-icons">'+smallIcons+
                        ' </span></a></div>');
        });
    });
});