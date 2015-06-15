//Check if an element is in the viewport
//By: Dan http://stackoverflow.com/users/139361/dan
//Sauce: http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport/7557433#7557433
function isElementInViewport (el) {

    //special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }

    var rect = el.getBoundingClientRect();

    return (
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left >= 0 &&
    rect.bottom >= 0 && /*or $(window).height() */
    rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
}

//Check if an element is in the middle of the screen
//Adopted from isElementInViewport
function isElementInCenter (el) {
    //special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight || document.documentElement.clientHeight)/2 &&
        rect.bottom >= (window.innerHeight || document.documentElement.clientHeight)/2
    );
}

//jQuery Plugin for On Scrolled Event Delay
//By: jfriend00 http://stackoverflow.com/users/816620/jfriend00
//Sauce: http://stackoverflow.com/questions/7392058/more-efficient-way-to-handle-window-scroll-functions-in-jquery
(function($) {
    var uniqueCntr = 0;
    $.fn.scrolled = function (waitTime, fn) {
        if (typeof waitTime === "function") {
            fn = waitTime;
            waitTime = 500;
        }
        var tag = "scrollTimer" + uniqueCntr++;
        this.scroll(function () {
            var self = $(this);
            var timer = self.data(tag);
            if (timer) {
                clearTimeout(timer);
            }
            timer = setTimeout(function () {
                self.removeData(tag);
                fn.call(self[0]);
            }, waitTime);
            self.data(tag, timer);
        });
    }
})(jQuery);

//Return what bootstrap environment we're in currently
//By: Raphael_ http://stackoverflow.com/users/1661358/raphael
//Sauce: http://stackoverflow.com/questions/14441456/how-to-detect-which-device-view-youre-on-using-twitter-bootstrap-api
function findBootstrapEnvironment() {
    var envs = ['xs', 'sm', 'md', 'lg'];

    $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envs.length - 1; i >= 0; i--) {
        var env = envs[i];

        $el.addClass('hidden-'+env);
        if ($el.is(':hidden')) {
            $el.remove();
            return env
        }
    };
}

//Smooth scroll to any link
//Sauce: https://css-tricks.com/snippets/jquery/smooth-scrolling/
//TODO: Implement offset and timer through data- attributes
$(function(){
    $('a[href*=#]:not([href=#])').on('click', function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            console.log(this);
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
})