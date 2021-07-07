var groundName, groundAddress, groundFootball, groundBasketball, groundTennis, groundGym;

function getGroundId() {
    var akeyValue = window.location.search.substring(1).split('&'),
        groundId = akeyValue[0].split("=")[1];
    return groundId;
}
// "id": "1",
// "name": "אפקה",
// "address": "השלום 1 תל אביב",
// "football": true,
// "basketball": true,
// "tennis": false,
// "gym": true
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
        if(groundFootball == true){
            $('#groundFootball').html('<span class="material-icons md-48>sports_soccer"</span>');
        }
        $('#groundBasketball').html(groundBasketball);
        $('#groundTennis').html(groundTennis);
        $('#groundGym').html(groundGym);
    })
})