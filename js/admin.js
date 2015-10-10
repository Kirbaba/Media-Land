jQuery(document).ready(function ($) {
    $('.custom_media_upload').click(function() {
        var send_attachment_bkp = wp.media.editor.send.attachment;
        wp.media.editor.send.attachment = function(props, attachment) {
            jQuery('.custom_media_image').attr('src', attachment.url);
            jQuery('.custom_media_url').val(attachment.url);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open();
        return false;
    });

    $(document).on('click', '.media-upload', function() {
        var par = $(this).parent();
        var send_attachment_bkp = wp.media.editor.send.attachment;
        wp.media.editor.send.attachment = function(props, attachment) {
            par.children('.media').attr('src', attachment.url);
            par.children('.media-img').val(attachment.url);
//                jQuery('.custom_media_id').val(attachment.id);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open();
        return false;
    });
    //добавить партнера
    $(document).on('click', '.add-channel', function(){
        $('.channels-list').append('<li class="list-group-item"> ' +
            '<div class="row"> ' +
            '<div class="col-lg-5"> ' +
            '<img src="" alt="" class="channel-img media"> ' +
            '<button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button> ' +
            '<input type="hidden" class="media-img" name="channel-img"> ' +
            '</div> ' +
            '<div class="col-lg-5"> ' +
            '<input type="text" placeholder="Ссылка на канал" name="channel-link"> ' +
            '</div> ' +
            '<div class="col-lg-1"> ' +
            '<button class="btn btn-success save-channel"><span class="glyphicon glyphicon-floppy-disk"></span></button> ' +
            '</div> ' +
            '<div class="col-lg-1"> ' +
            '</div> ' +
            '</div> ' +
            '</li>');
    });
    //сохранениа партнера
    $(document).on('click', '.save-channel', function(){
        var block = $(this).parent().parent();

        var num = block.parent().attr('data-num');
        var link = block.children().children('[name="channel-link"]').val();
        var img = block.children().children('[name="channel-img"]').val();

        console.log(link);
        console.log(img);
        console.log(num);

        if(num == null){
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=save_channel&link='+link+'&img='+img,
                success:function(data){
                    console.log(data);
                    alert("Канал сбыта добавлен и сохранен!");
                    location.reload();
                }
            });
        }else{
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=update_channel&link='+link+'&img='+img+'&num='+num,
                success:function(data){
                    console.log(data);
                    alert("Канал сбыта обновлен!");
                }
            });
        }
    });
    //удаление слайда
    $(document).on('click', '.del-channel', function(){
        var num = $(this).attr('data-num');
        if(num != undefined){
            var block = $(this).parent().parent().parent();
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=delete_channel&num='+num,
                success:function(data){
                    console.log(data);
                    alert("Канал сбыта удален!");
                }
            });
            block.remove();
        }

    });
    //добавить партнера
    $(document).on('click', '.add-license', function(){
        $('.license-list').append('<li class="list-group-item"> ' +
            '<div class="row"> ' +
            '<div class="col-lg-5"> ' +
            '<img src="" alt="" class="license-img media"> ' +
            '<button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button> ' +
            '<input type="hidden" class="media-img" name="license-img"> ' +
            '</div> ' +
            '<div class="col-lg-5"> ' +
            '<input type="text" placeholder="Ссылка на лицензиара" name="license-link"> ' +
            '</div> ' +
            '<div class="col-lg-1"> ' +
            '<button class="btn btn-success save-license"><span class="glyphicon glyphicon-floppy-disk"></span></button> ' +
            '</div> ' +
            '<div class="col-lg-1"> ' +
            '</div> ' +
            '</div> ' +
            '</li>');
    });
    //сохранениа партнера
    $(document).on('click', '.save-license', function(){
        var block = $(this).parent().parent();

        var num = block.parent().attr('data-num');
        var link = block.children().children('[name="license-link"]').val();
        var img = block.children().children('[name="license-img"]').val();

        console.log(link);
        console.log(img);
        console.log(num);

        if(num == null){
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=save_license&link='+link+'&img='+img,
                success:function(data){
                    console.log(data);
                    alert("Лицензиар добавлен и сохранен!");
                    location.reload();
                }
            });
        }else{
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=update_license&link='+link+'&img='+img+'&num='+num,
                success:function(data){
                    console.log(data);
                    alert("Лицензиар обновлен!");
                }
            });
        }
    });
    //удаление слайда
    $(document).on('click', '.del-license', function(){
        var num = $(this).attr('data-num');
        if(num != undefined){
            var block = $(this).parent().parent().parent();
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=delete_license&num='+num,
                success:function(data){
                    console.log(data);
                    alert("Лицензиар удален!");
                }
            });
            block.remove();
        }
    });

});
