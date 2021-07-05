$(document).ready(function() {
    $.getJSON("data/grounds.json", function(data) {
        console.log(data);
    })
})

$(document).ready(function() {
    $.getJSON("data/grounds.json", function(data) {
        $('h1').html(data.category);
        $('#grounds-list').append("<ul>");
        $.each(data.products, function() {
            $('#grounds-list ul').append("<li><a href='grounds.html?groundId=" +
                this.id + "'>" +
                this.name + "</a></li>");
        });
    });
});