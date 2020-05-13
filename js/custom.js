jQuery.fn.blindLeftToggle = function (duration, easing, complete) {
    return this.animate({
        marginLeft: parseFloat(this.css('marginLeft')) < 0 ? 0 : -this.outerWidth()
    }, jQuery.speed(duration, easing, complete));
};

$(function() {
    setTimeout(function(){

        var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);

        console.log(pgurl)

        $(".sidebar a").each(function(){
              var _this = this;
              console.log(_this)
            if($(_this).attr("href") == pgurl || $(_this).attr("href") == '' ) {
                $(_this).addClass("active"); 
                console.log(_this)
            }
    });

}, 50); });

$(document).ready(function() {

    $('.mobile-nav').click(function() {
        var nav = $('.sidebar');
        var icon = $('.mobile-nav i');
    
        nav.blindLeftToggle(500);
    
    });

    $('.scroll-to').click(function() {
        $('html, body').animate({scrollTop: $('#goto').offset().top}, 1000)
    });

    $('#goto').waypoint(function(direction) {
        if (direction == "down") {
            $('nav').addClass('sticky-nav');
        } 
        else {
            $('nav').removeClass('sticky-nav');
        }
    }, {
          offset: '60px'
    });

});