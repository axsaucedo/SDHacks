/**
 * Created by michaelshi on 6/14/15.
 */
$(function(){

    //TODO: Break mobile detection out of scroll event handler
    //TODO: Mobile detection on resize
    var cd = false;
    $(document).scroll(function() {
        if (cd)
            return;

        //TODO: DEBUG THIS
        if(findBootstrapEnvironment() == 'xs'){
            //Disable animations on mobile
            activateAllAnimations();
        }else{
            watchAnimations();
            watchSections();
            watchNavBar();
        }

        cd = true;
        return setTimeout((function() {
            cd = false;
        }), 100);
    });

    //Watch and trigger animation
    var watchAnimationsSeletors = ['.bar'];
    function watchAnimations(){
        for(var es in watchAnimationsSeletors){
            var elements = $(watchAnimationsSeletors[es]);
            for(var i=0; i<elements.length; i++){
                var element = elements.eq(i);
                if(isElementInViewport(element))
                    element.addClass('active');
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
    var sectionSelectors = ['#splash', '#innovation', '#overview', '#faq', '#sponsors', '#presented'];
    function watchSections(){
        for(var s in sectionSelectors){
            var element = $(sectionSelectors[s]);
            var navElement = $('.dot' + sectionSelectors[s].replace('#', '.'));
            if(isElementInCenter(element)){
                $('.dot').removeClass('active');
                navElement.addClass('active');
            }
        }
    }

    function watchNavBar(){
        $('#nav-bar').affix({
            offset:{
                //Assumes overview is the first section after splash
                top: $('#innovation').offset().top - $('#nav-bar').height()
            }
        });
    }

});