function getFileName() {
//this gets the full url
var url = document.location.href;
//this removes the anchor at the end, if there is one
url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
//this removes the query after the file name, if there is one
url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
//this removes everything before the last slash in the path
url = url.substring(url.lastIndexOf("/") + 1, url.length);
//return
return url;
}

$(function() {
  if(url = 'index.html'){
    $(".navbar-nav a:contains('About Us')").parent().addClass('active');
    $(".navbar-nav a:contains('Events')").parent().removeClass('active');
    $(".navbar-nav a:contains('News')").parent().removeClass('active');
    $(".navbar-nav a:contains('Promote Your Band')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sponsors')").parent().removeClass('active');
    $(".navbar-nav a:contains('Contact')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sign Up')").parent().removeClass('active');
  }
  if(url = 'events.html'){
    $(".navbar-nav a:contains('Events')").parent().addClass('active');
    $(".navbar-nav a:contains('About Us')").parent().removeClass('active');
    $(".navbar-nav a:contains('News')").parent().removeClass('active');
    $(".navbar-nav a:contains('Promote Your Band')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sponsors')").parent().removeClass('active');
    $(".navbar-nav a:contains('Contact')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sign Up')").parent().removeClass('active');
  }
  if(url = 'news.html'){
    $(".navbar-nav a:contains('News')").parent().addClass('active');
    $(".navbar-nav a:contains('About Us')").parent().removeClass('active');
    $(".navbar-nav a:contains('Events')").parent().removeClass('active');
    $(".navbar-nav a:contains('Promote Your Band')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sponsors')").parent().removeClass('active');
    $(".navbar-nav a:contains('Contact')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sign Up')").parent().removeClass('active');
  }
  if(url = 'promote.html'){
    $(".navbar-nav a:contains('Promote Your Band')").parent().addClass('active');
    $(".navbar-nav a:contains('About Us')").parent().removeClass('active');
    $(".navbar-nav a:contains('Events')").parent().removeClass('active');
    $(".navbar-nav a:contains('News')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sponsors')").parent().removeClass('active');
    $(".navbar-nav a:contains('Contact')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sign Up')").parent().removeClass('active');
  }
  if(url = 'sponsors.html'){
    $(".navbar-nav a:contains('Sponsors')").parent().addClass('active');
    $(".navbar-nav a:contains('About Us')").parent().removeClass('active');
    $(".navbar-nav a:contains('Events')").parent().removeClass('active');
    $(".navbar-nav a:contains('News')").parent().removeClass('active');
    $(".navbar-nav a:contains('Promote Your Band')").parent().removeClass('active');
    $(".navbar-nav a:contains('Contact')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sign Up')").parent().removeClass('active');
  }
  if(url = 'contact.html'){
    $(".navbar-nav a:contains('Contact')").parent().addClass('active');
    $(".navbar-nav a:contains('About Us')").parent().removeClass('active');
    $(".navbar-nav a:contains('Events')").parent().removeClass('active');
    $(".navbar-nav a:contains('News')").parent().removeClass('active');
    $(".navbar-nav a:contains('Promote Your Band')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sponsors')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sign Up')").parent().removeClass('active');
  }
  if(url = 'signup.html'){
    $(".navbar-nav a:contains('Sign Up')").parent().addClass('active');
    $(".navbar-nav a:contains('About Us')").parent().removeClass('active');
    $(".navbar-nav a:contains('Events')").parent().removeClass('active');
    $(".navbar-nav a:contains('News')").parent().removeClass('active');
    $(".navbar-nav a:contains('Promote Your Band')").parent().removeClass('active');
    $(".navbar-nav a:contains('Sponsors')").parent().removeClass('active');
    $(".navbar-nav a:contains('Contact')").parent().removeClass('active');
  }
});
