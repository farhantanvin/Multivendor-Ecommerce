$(document).ready(function () {
    $(document).on('click','.copy-url',function () {

        var copyUrl = $(this).closest('tr').find('.url-holder');

            /* Select the text field */
            copyUrl.select();
            /* Copy the text inside the text field */
            document.execCommand("copy");
        $('#productAdd').text('Url Copied').fadeIn(500).delay(1000).fadeOut("slow");
    })
});


