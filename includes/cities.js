
window.onload = (event) => {

    $.ajax({
        type: "GET",
        url: "data/cities.json",
        cache: true,
        success: function(cities){
            $.each(cities, function() {
            $("#cities").append("<option>"+this.name+"</option>");
        })  
    }
    });
    
};