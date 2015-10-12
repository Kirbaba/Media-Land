
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

    jQuery('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        jQuery('html,body').animate({
            scrollTop: top
        }, 1000);
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