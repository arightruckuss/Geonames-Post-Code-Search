//postcode from HTML input is sent to php to collect the postcode results
function postcode_search(){
    var postcode=$("#ip_address").val();
    $.get("library/php/geoget.php",{postcode:postcode},
    function(data){
      $("#json_result").html(data);
    });
}