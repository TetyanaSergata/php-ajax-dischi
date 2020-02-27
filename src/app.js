const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax( {
    url: 'http://localhost/php-ajax-dischi/server.php',
    method: 'GET',
    success: function(data) {
      if (data.length > 0) {
        printData(data);
      } else{
        alert('Non ci sono risultati');
      }
    },
    error: function() {
      alert('Si è verificato un errore');
    }


  });
});
// Funzioni
function printData(data) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < data.length; i++) {
    var cd = data[i];
    var html = template(cd);
    $('.cd_container').append(html);
  }
}
