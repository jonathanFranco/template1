//Mobile Menu Script
function openNav() {
  document.getElementById("myNav").style.width = "100%";
  document.getElementById("menu-content").style.display = "initial";
  $("#side-menu-nav").css({'display':'block'});
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  document.getElementById("menu-content").style.display = "none";
  $("#side-menu-nav").css({'display':'none'});
}

//Navbar Animation
 $(window).on('scroll', function () {
      if ($(window).scrollTop()) {
        $("#logo").css({ 'transform': 'scale(0.8)','transition':'0.2s'});
        $(".nav-effect").css({ 'transform': 'scale(0.9)' });
        $(".nav-effect").css({ 'transition': '0.3s' });
      } else {
        $("#logo").css({ 'transform': 'scale(1.0)','transition':'0.2s'});
        $(".nav-effect").css({ 'transform': 'scale(1.0)' });
        $(".nav-effect").css({ 'transition': '0.3s' });
      }
    });