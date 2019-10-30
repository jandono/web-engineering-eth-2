(function($) {
    
var ajax_calls = 0;
    
window.onpopstate = function(){
    if(window.history.state != null){
        $('#upcoming-events, #past-events, #pe-see-more').removeClass('hidden');
        $('#single-event').remove();
        window.location = "#our-events";
    }
}
    
$(document).ready(function() {
    fromLeft();
    fromBot();
    
    if ($(window).width() > 768) {
        inCenter();
    }
    
    $(document.body).on('click', '#see-more', function(){
        console.log('clicked');
        var date_f = $('.past-event h4').filter(':last')[0].innerText.split('-')[0].trim();
        
        $.ajax({
            url : '/laplace/wp-admin/admin-ajax.php',
            type : 'post',
            data : {
                action: 'get_events_after_date',
                date_from : date_f
            },
            success : function( response ) {
                $('#past-events')[0].innerHTML += response;
                ajax_calls++;
            }
        });
        
        return false;
    });
    
    $(document.body).on('click', '.ajax-event, .read-more', function(){
        var id = -1;
        if($(this)[0].innerText == ' [Read More]')
            id = $(this).attr('id');
        else
            id = $(this).parent().attr('id');
        
        window.history.pushState(new Object(), "", "http://localhost:8888/laplace/");
        
        $.ajax({
            url : '/laplace/wp-admin/admin-ajax.php',
            type : 'post',
            data : {
                action: 'get_event_info',
                id : id
            },
            success : function( response ) {
                //console.log(response);
                
                $('#upcoming-past-wrapper')[0].innerHTML += response;
                $('#upcoming-events, #past-events, #pe-see-more').addClass('hidden');
                window.location = "#our-events";
            }
        });
    });
    
    $(document.body).on('click', '.upcoming-event a', function(){
        return false;
    });
    
    $(document.body).on('click', '.past-event a', function(){
        return false;
    });
    
    
});
    
$(document).scroll(function() {
    fromLeft();
    fromBot();
    if ($(window).width() > 768) {
        inCenter();
    }
});

function fromLeft(){
    $(".jq-from-left:in-viewport").each(function(){
        $(this).animate({
            marginLeft: '0px',
            marginRight: '0px'
        }, 1000);
        
        $(this).removeClass("jq-from-left");
    });
}

function fromBot(){
    $(".jq-from-bottom:in-viewport").each(function(){
        $(this).animate({
            marginTop: '0px'
        }, 1000);
        
        $(this).removeClass("jq-from-bottom");
    });
}

function inCenter(){
    
    var minHeight = $(window).scrollTop()
    var maxHeight = $(window).height()
    var middleHeight = minHeight + maxHeight / 2.0;
    var midElement = null;
    var minDistanceFromMid = Number.MAX_VALUE;
    
    $(".in-center:in-viewport").each(function(){
        
        $(this).removeClass('green-background');
        var pos = $(this).offset().top + $(this).height();
        var currDistanceFromMid = Math.abs(pos - middleHeight);
        
        if(currDistanceFromMid < minDistanceFromMid){
            midElement = $(this);
            minDistanceFromMid = currDistanceFromMid;
        }
    });
    
    if(midElement != null){
        
        midElement.addClass('green-background');
        var type = midElement.attr('id');
        
        $('.menu-item').addClass('hidden');
        $('.' + type).removeClass('hidden');
    }
}
})( jQuery );