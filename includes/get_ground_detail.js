var groundName, groundAddress, groundFootball, groundBasketball, groundTennis, groundGym;

function getGroundId() {
    var akeyValue = window.location.search.substring(1).split('&'),
        groundId = akeyValue[0].split("=")[1];
    return groundId;
}
$(document).ready(function() {
    $.getJSON('data/grounds.json', function(data) {
        var groundId = getGroundId();

        $.each(data.products, function(u, obj) {
            if (obj.id == groundId) {
                groundName = obj.name;
                groundAddress = obj.address;
                groundFootball = obj.football;
                groundBasketball = obj.basketball;
                groundTennis = obj.tennis;
                groundGym = obj.gym;
            }
        });
        $('h1').html(groundName);
        $('#groundAddress').html(groundAddress);
        if(groundFootball){
            $('#icons').append('<span class="material-icons md-48">sports_soccer</span>');
            $('#small-icons').append('<span class="material-icons md-24">sports_soccer</span>');
        }
        if(groundBasketball){
            $('#icons').append('<span class="material-icons md-48">sports_basketball</span>');
            $('#small-icons').append('<span class="material-icons md-24">sports_basketball</span>');
        }
        if(groundTennis){
            $('#icons').append('<span class="material-icons md-48">sports_tennis</span>');
            $('#small-icons').append('<span class="material-icons md-24">sports_tennis</span>');
        }
        if(groundGym){
            $('#icons').append('<span class="material-icons md-48"> fitness_center</span>');
            $('#small-icons').append('<span class="material-icons md-24"> fitness_center</span>');
        }
    })
})