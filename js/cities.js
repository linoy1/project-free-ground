
window.onload = (event) => {

    var city = $("#city").val();
    $.ajax({
        method: "POST",
        url: "data/cities.json",
        data: {city:city},
        cache: true,
        success: function(cities){
            $.each(cities, function() {
                if(city == this.name){
                    $("#cities").append("<option selected>"+this.name+"</option>");
                    return;
                }
            $("#cities").append("<option>"+this.name+"</option>");
        })  
    }
    });
    
};