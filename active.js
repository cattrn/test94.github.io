var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);

$(function() {
  $(if(filename = event.html){
    $("a:contains('Events')").parent().addClass('active')
  })
})
