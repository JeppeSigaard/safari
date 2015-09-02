var formSubmit = function(form, cb){
    
    var valid = true;
    
    form.find('input').each(function(){
        if($(this).is(':required') && $(this).val() === ''){
            $(this).addClass('error');
            valid = false;
        }
        if($(this).is('input[type=email]') && !validateEmail($(this).val())){
            $(this).addClass('error');
            valid = false;
        }
    
    });
    
    if(valid){
        $.ajax({
            url : form.attr('action'),
            type : 'POST',
            data : form.serialize(),
            dataType : 'json',
            success : function(response){

                form.removeClass('loading');

                if(response.success){
                    form.replaceWith(response.successMessage);

                }

                else if(response.error){
                    if(!form.find('.error').length){
                        var errorBox = $('<span class="error errormsg"></span>');
                        form.append(errorBox);
                    }
                    
                    $('.errormsg').html(response.error);
                }
            },
        });
    }
    else{
        form.removeClass('loading');
    }
    

}


var checkSuccess = function(target){
    
    if(target.val() === ''){

        
            target.removeClass('success').next('label').removeClass('stayup');
            
        }
    
    else if(target.is('input[type="checkbox"], input[type="radio"]')){console.log('not valid field type');}
    
    else{
        
        target.addClass('success').next('label').addClass('stayup');
    }

}

var validateEmail = function(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

var formJsInit = function(){
    
    $('form input, form textarea').each(function(){
        checkSuccess($(this));
    });
    
    autosize($('form textarea:not(.no-autosize)'));

    // Check for allerede udfyldt felter ved sideload
    $('form input, form textarea').each(function(){
        var target = $(this);
        checkSuccess(target);
    });
    
    // Kosmetisk opdatering ved blur
    $('form input, form textarea').off().on('blur',function(e){
        var target = $(e.target);
        
        // Fjern error
        target.removeClass('error');
        
        // Check om feltet er tomt
        checkSuccess(target);
        
        if(target.is('input[type="email"]') && target.val() !== ''){
        
            if(!validateEmail(target.val())){
            
                target.addClass('error');
            }
            
        
        }

    });
    
    // Keyup validering
    $('form').off().on({
            
        'keyup':function(e){
    
            var target = $(e.target);

            // Fjern error og success
            target.removeClass('error').removeClass('success');

            if(target.is('input[type="number"]')){

                var value = target.val().replace(/[^0-9]/g, '');

                target.val(value);

            }
        
        },
        
        'click': function(e){
            var t = $(e.target),
                form = t.parents('form'),
                action = form.attr('action');
            if(t.is('a.submit, input[type=submit]')){
                
                e.preventDefault();
                
                form.addClass('loading');
                
                formSubmit(form);
                
            }
            
            
        }
    }
    );

}

$(function(){
    
    formJsInit();
    
});