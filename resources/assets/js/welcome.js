/**
 * Created by michaelshi on 6/14/15.
 */
$(function(){

    //TODO: Break mobile detection out of scroll event handler
    $(window).scrolled(100, function(){
        if(findBootstrapEnvironment() == 'xs'){
            //Disable animations on mobile
            activateAllAnimations();
        }else{
            watchAnimations();
            watchSections();
            watchNavBar();
        }
    });

    console.log(findBootstrapEnvironment());

    //Watch and trigger animation
    var watchAnimationsSeletors = ['.bar'];
    function watchAnimations(){
        for(var es in watchAnimationsSeletors){
            var elements = $(watchAnimationsSeletors[es]);

            for(var i=0; i<elements.length; i++){
                var element = elements.eq(i);

                if(isElementInViewport(element))
                    element.addClass('active');
                else
                    element.removeClass('active');
            }
        }
    }
    function activateAllAnimations(){
        for(var es in watchAnimationsSeletors){
            var elements = $(watchAnimationsSeletors[es]);
            elements.addClass('active');
        }
    }

    //Watch Section for nav bar
    var sectionSelectors = ['#splash', '#overview', '#faq', '#sponsors', '#presented'];
    function watchSections(){
        var visSections = [];
        for(var s in sectionSelectors){
            var element = $(sectionSelectors[s]);
            var navElement = $('.dot' + sectionSelectors[s].replace('#', '.'));
            if(isElementInViewport(element)){
                visSections.push(navElement);
            }
        }
        $('.dot').removeClass('active');
        visSections[Math.floor((visSections.length-1)/2)].addClass('active');
    }

    function watchNavBar(){
        $('#nav-bar').affix({
            offset:{
                //Assumes overview is the first section after splash
                top: $('#overview').offset().top - $('#nav-bar').height()
            }
        });
    }


});