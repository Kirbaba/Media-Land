
/*-------------GOOGLE MAPS-----------------*/

function initialize() {

    var myLatlng = new google.maps.LatLng(55.738689,37.6402820);
    var mapOptions = {
        center: new google.maps.LatLng(55.738649,37.6379400),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ditlogistic"
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;

jQuery(function() {
     jQuery('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=jQuery(this).attr('href');
        var target=jQuery(href);
        var top=target.offset().top;
        jQuery('html,body').animate({
            scrollTop: top
        }, 1000);
    });
 });


jQuery(function() {

    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() != 0) {
            jQuery('#toTop').fadeIn();
        } else {
            jQuery('#toTop').fadeOut();
        }
    });
    jQuery('#toTop').click(function() {
        jQuery('body,html').animate({scrollTop: 0}, 1000);
    });
   
});

jQuery(function () {

    jQuery('.responsive').slick({
        dots: true,
        infinite: false,
        autoplay: true,
        speed: 300,
        arrows: false,        
        slidesToShow: 1,
        slidesToScroll: 1
    });

});

jQuery(document).ready(function($) {    
  $('.responsive').css({'height':$('.responsive img:first').height()})       
   

    $('.license__item').each(function(){
        $(this).css('height',$(this).width());
       $(this).css('line-height', $(this).width() + 'px');
    });
     $('.license__item').each(function(){
        $(this).css('height',$(this).width());
       $(this).css('line-height', $(this).width() + 'px');
    });
     $('.channels__item').each(function(){
        $(this).css('height', $(this).width() * 0.66 );
       $(this).css('line-height', $(this).height() + 'px');
    });

     $('.workers__item--avatar').each(function(){
        $(this).css('height', $(this).width() );
    });


    $('.production__item').each(function(){
        $(this).css('height', $(this).width()); 
        $(this).css('line-height', $(this).width() + 'px');       
    });

  // $('.responsive').each(function(){        
  //       $(this).css('height', $('.responsive img:first').height());             
  //   });


    $(document).on('click', '.production__item--showmore', function(){
        var type = $(this).attr('data-type');
        var num = $(this).attr('data-page');
        var button = $(this);
        console.log(type);
        console.log(num);
        $.ajax({
            url: ajaxurl,
            type: "POST",
            data: "action=show_more_"+type+"&num=" +num,
            success: function(data){
                num = parseInt(num)+1;
                $('.'+type+'__block').append(data);
                button.attr('data-page', num);
                $('.production__item').each(function(){
                $(this).css('height', $(this).width()); 
                $(this).css('line-height', $(this).width() + 'px');       
    });
            }
        });
        return false;
    });

    $(document).on('click', '.about_product', function(){
        var id = $(this).attr('data-id');
        $.ajax({
            url: ajaxurl,
            type: "POST",
            data: "action=about_product&id=" +id,
            success: function(data){
                $('.modal-content').html(data);
            }
        });
        return false;
    });
});

// jQuery(window).resize(function(){
// jQuery('.responsive').css({'height':jQuery('.responsive img:first').height()})       
   

//     jQuery('.license__item').each(function(){
//         jQuery(this).css('height',jQuery(this).width());
//        jQuery(this).css('line-height', jQuery(this).width() + 'px');
//     });
//      jQuery('.license__item').each(function(){
//         jQuery(this).css('height',jQuery(this).width());
//        jQuery(this).css('line-height', jQuery(this).width() + 'px');
//     });
//      jQuery('.channels__item').each(function(){
//         jQuery(this).css('height', jQuery(this).width() * 0.66 );
//        jQuery(this).css('line-height', jQuery(this).height() + 'px');
//     });

//      jQuery('.workers__item--avatar').each(function(){
//         jQuery(this).css('height', jQuery(this).width() );
//     });


//     jQuery('.production__item').each(function(){
//         jQuery(this).css('height', jQuery(this).width()); 
//         jQuery(this).css('line-height', jQuery(this).width() + 'px');       
//     });

// });

jQuery(document).on('click', "a[data-toggle='tab']", function(){ 
        jQuery('.production__item').each(function(){ 
        jQuery(this).css('height', jQuery(this).width()); 
        jQuery(this).css('line-height', jQuery(this).width() + 'px'); 
    }); 
});