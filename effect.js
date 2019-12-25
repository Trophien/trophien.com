// NAVBAR COLOR CHANGE
function checkScroll(){
  var startY = $('.navbar').height() * 2;
    if($(window).scrollTop() > startY){
      $('.navbar').addClass("scrolled");
      $('.btn-outline-trophien-navbar').addClass("scrolled");
    }
    else{
      $('.navbar').removeClass("scrolled");
      $('.btn-outline-trophien-navbar').removeClass("scrolled");
    }
  }
  if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
      checkScroll();
  });
}


// FADE-IN-OUT
$(window).on("load",function() {
  $(window).scroll(function() {
    //var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fade").each(function() {
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      if (objectBottom < windowBottom + 400) {
        if ($(this).css("opacity")==0) {$(this).fadeTo(50,1);}
      } else {
        if ($(this).css("opacity")==1) {$(this).fadeTo(50,0);}
      }
    });
  }).scroll();
});


// DROPDOWN MENU AUTO CLOSE
$(document).ready(function(){
  $('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
  });
});

//ALERT
function comingSoonAlert(){
  alert("Coming soon!");
}

// COUNTING
/*$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $("#counter").each(function() {
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      if (objectBottom < windowBottom) {

        $('#counter').each(function() {
          var $this = $(this),
          countTo = $this.attr('data-count');
          $({ countNum: $this.text()}).animate({
            countNum: countTo
          },{
            duration: 4000,
            easing:'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
            }
          });
        });

      }
    });
  }).scroll();
});*/

/*$(document).ready(function(){
  $(window).scroll(startCounter);
  function startCounter(){
    if ($(window).scrollTop() > 200) {
        $(window).off("scroll", startCounter);
        $('#counter').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 1000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
  }
});*/
$(window).scroll(startCounter);
function startCounter() {
    if ($(window).scrollTop() > 100) {
        $(window).off("scroll", startCounter);
        $('.Count').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
}


  

// SOCIAL ICON CHANGES
  //facebook
$(document).ready(function(){
  $('#facebook_icon_front').hover(function(){
    $('#facebook_icon_back').css('opacity', '1');
    $('#facebook_icon_front').css('opacity', '0');
  },function(){
    $('#facebook_icon_back').css('opacity', '0');
    $('#facebook_icon_front').css('opacity', '1');
  });
});
  //twitter
$(document).ready(function(){
  $('#twitter_icon_front').hover(function(){
    $('#twitter_icon_back').css('opacity', '1');
    $('#twitter_icon_front').css('opacity', '0');
  },function(){
    $('#twitter_icon_back').css('opacity', '0');
    $('#twitter_icon_front').css('opacity', '1');
  });
});
  //instagram
$(document).ready(function(){
  $('#instagram_icon_front').hover(function(){
    $('#instagram_icon_back').css('opacity', '1');
    $('#instagram_icon_front').css('opacity', '0');
  },function(){
    $('#instagram_icon_back').css('opacity', '0');
    $('#instagram_icon_front').css('opacity', '1');
  });
});
  //youtube
$(document).ready(function(){
  $('#youtube_icon_front').hover(function(){
    $('#youtube_icon_back').css('opacity', '1');
    $('#youtube_icon_front').css('opacity', '0');
  },function(){
    $('#youtube_icon_back').css('opacity', '0');
    $('#youtube_icon_front').css('opacity', '1');
  });
});
  //email
$(document).ready(function(){
  $('#email_icon_front').hover(function(){
    $('#email_icon_back').css('opacity', '1');
    $('#email_icon_front').css('opacity', '0');
  },function(){
    $('#email_icon_back').css('opacity', '0');
    $('#email_icon_front').css('opacity', '1');
  });
});

// ACTUAL YEAR
function dateYear(){
  var d = new Date();
  var year = d.getFullYear();
  document.getElementById('dateYear').innerHTML = year;
}

// REGISTRATION MAX DATE
function birthDate()
{
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1;
  var yyyy = today.getFullYear();
  if (dd < 10)
  {
    dd = '0' + dd;
  }
  if (mm < 10)
  {
    mm = '0' + mm;
  }
  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById('birthDate').setAttribute("max", today);
}

// REGIST MODAL
$(document).ready(function(){
  $('#errorModal').modal('show');
});
$(document).ready(function(){
  $('#successModal').modal('show');
});