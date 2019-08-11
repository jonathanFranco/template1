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
        $("#logo-span,#logo-span2").css({ 'font-size': '30px','transition': '0.1s' });
        $("#logo-span,#logo-span2").css({ 'color': '#fff' });
        $(".nav-effect").css({ 'transform': 'scale(0.9)' });
        $(".nav-effect").css({ 'transition': '0.3s' });
        $(".navbar").css({ 'box-shadow': '2px 2px 2px black' });
      } else {
        $("#logo-span,#logo-span2").css({ 'font-size': '40px','transition': '0.1s' });
        $("#logo-span").css({ 'color': '#33b5e5' });
        $("#logo-span2").css({ 'color': '#4285F4' });
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