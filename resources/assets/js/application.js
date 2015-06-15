/**
 * Created by michaelshi on 6/15/15.
 */

$(function(){

    var questionElements = $('.form-group');

    var questionIndex = -1;

    var cd = false;
    $(document).scroll(function() {
        if (cd)
            return;

        //Focus element that's currently highlighted
        for(var i=0; i<questionElements.length; i++){
            var question = questionElements.eq(i);
            if(isElementInCenter(question)){
                questionIndex = i;
                question.addClass('active');
                question.children('textarea, input').focus();
            }else{
                question.removeClass('active');
            }
        }

        cd = true;
        return setTimeout(function() {
            cd = false;}, 100);
    });

    $(document).on('keydown', function(e){
        console.log(e);
        console.log(questionIndex);

        var scrollDelay = 200;

        //If Shift + Tab, go back one question
        if(e.which === 9 && event.shiftKey){

            e.preventDefault();

            if(questionIndex < 0)
                return;
            var nextQuestion = questionElements.eq(questionIndex-1);
            scrollToElement(nextQuestion,-(document.documentElement.clientHeight/2)+nextQuestion.outerHeight()/2, scrollDelay);
        }
        else if(e.which == 13 || e.which == 9){

            e.preventDefault();

            var nextQuestion = questionElements.eq(questionIndex+1);
            scrollToElement(nextQuestion,-(document.documentElement.clientHeight/2)+nextQuestion.outerHeight()/2, scrollDelay);
        }
    });

});