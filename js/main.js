function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}     

function validateContactForm(){
    var check = true;
    var form = $('form[name=contactForm]');
    form.find('.wrong').removeClass('wrong');
    
    var name = form.find('input[name=name]');
    var email = form.find('input[name=email]');
    var text = form.find('textarea[name=text]');
    var captcha_code = form.find('input[name=captcha_code]');
    
    if(name.val().length == 0){
        name.addClass('wrong');
        check = false;
    }
    
    if(!validateEmail(email.val())){
        email.addClass('wrong');
        check = false;
    }
    
    if(text.val().length == 0){
        text.addClass('wrong');
        check = false;
    }
    
    if(captcha_code.val().length == 0){
        captcha_code.addClass('wrong');
        check = false;
    }
    
    return check;

}

function activateReloadCaptchaImage(){
    $('.refresh').on('click',function(){
        $('#captcha').attr('src','securimage/securimage_show.php?'+ Math.random());
    });
}

$( document ).ready(function() {

    $('.footable').footable({
	});

	$('.carousel').carousel({
    pause: true,
    interval: false
});


});
