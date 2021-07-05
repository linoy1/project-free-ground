var groundName, groundAdress, groundFootball, groundBasketball, groundTennis, groundGym;

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
                groundAdress = obj.address;
                groundFootball = obj.football;
                groundBasketball = obj.basketball;
                groundTennis = obj.tennis;
                groundGym = obj.gym;
            }
        });
        $('h1').html(groundName);
        $('#groundAdress').html(groundAdress);
        $('#groundFotball').html(groundFootball);
        $('#groundBasketball').html(groundBasketball);
        $('#groundTennis').html(groundTennis);
        $('#groundGym').html(groundGym);
    })
})