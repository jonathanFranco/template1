//Mobile Menu Script
function openNav() {
  document.getElementById("myNav").style.width = "100%";
  $("#myNav").fadeIn();
  document.getElementById("menu-content").style.display = "initial";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  document.getElementById("menu-content").style.display = "none";
}

//Navbar Animation
 $(window).on('scroll', function () {
      if ($(window).scrollTop()) {
        $("#nav-logo").css({ 'transform': 'scale(0.9)' });
        $(".nav-effect").css({ 'transform': 'scale(0.9)' });
        $(".nav-effect").css({ 'transition': '0.3s' });
        $(".navbar").css({ 'box-shadow': '2px 2px 2px black' });
      } else {
        $("#nav-logo").css({ 'transform': 'scale(1.3)' });
        $(".nav-effect").css({ 'transform': 'scale(1.0)' });
        $(".nav-effect").css({ 'transition': '0.3s' });
        $(".navbar").css({ 'box-shadow': '2px 2px 2px black' });
      }
      if ($(window).scrollTop() <= 500) {
        $("#btntop").css({ 'display': 'none' });
      }else{
        $("#btntop").css({ 'display': 'block' });
      }
    });