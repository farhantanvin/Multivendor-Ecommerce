$(document).ready(function () {
// Cancel
$(".cancel").click(function () {
    history.back();
});
// Delete Confirm
$(document).ready(function() {
    $('.delete').on('click', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            cancelButtonColor: '#d33',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            showCancelButton: true,
        }).then((result) => {
            if (result.value) {
                form.submit();
            }
        });
    });

    $('.single-select2').select2();


    $('.image').change(function () {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    tinymce.init({
        selector: '.txt-editor',
        menubar: true,

        plugins: [
                "link image code fullscreen imageupload",
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify |forecolor|bullist numlist outdent indent | link image',
       // toolbar2: 'print visualblocks',

        images_upload_url: 'postAcceptor.php',
        automatic_uploads: false,
        file_picker_types: 'file image media',
        image_caption: true,
        min_height: 450,
        lineheight_formats: "8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 36pt",
        importcss_append: true,
        fullpage_hide_in_source_view: true
    });

});

    $(document).on('change','#upload_file',function () {
        var total_file=document.getElementById("upload_file").files.length;
        $('#gallery-holder').html('');
        for(var i=0;i<total_file;i++)
        {
            $('#gallery-holder').append("<div class='col-md-2'><img src='"+URL.createObjectURL(event.target.files[i])+"' style='width: 100%;height:100;margin-bottom:5px'/></div>");
        }
    });


        $("#variable_product").change(function() {
            if($(this).prop('checked')) {
                $('#inside_mquantity').remove();
                $('#variable_row_holder').append('<div id="variable_rows">\n' +
                    '                                    <div class="row">\n' +
                    '\n' +
                    '                                        <div class="col-md-4">\n' +
                    '                                            <div class="form-group row">\n' +
                    '                                                <label class="col-md-12 col-form-label">Product Varient<span class="text-danger">*</span></label>\n' +
                    '                                                <div class="col-md-12">\n' +
                    '                                                    <input type="text" autocomplete="off" name="product_varient[]" class="form-control" placeholder="S|Red or M|Green" value="" required>\n' +
                    '                                                </div>\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '\n' +
                    '                                        <div class="col-md-4">\n' +
                    '                                            <label class="col-md-12 col-form-label">Product Varient Quantity<span class="text-danger">*</span></label>\n' +
                    '                                            <div class="col-md-12">\n' +
                    '                                                <input type="text" autocomplete="off" name="product_quantity[]" class="form-control" placeholder="Product Varient Quantity" value="" required data-parsley-type="number" data-parsley-min="1"  step="any">\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '\n' +
                    '                                        <div class="col-md-4">\n' +
                    '                                            <label class="col-md-12 col-form-label">Product Varient Price</label>\n' +
                    '                                            <div class="col-md-12">\n' +
                    '                                                <input type="text" autocomplete="off" name="product_price[]" class="form-control" placeholder="Product Varient Price" value="" data-parsley-type="number" data-parsley-min="0.01"  step="any">\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                </div>\n' +
                    '                                <div class="col-md-12 text-right">\n' +
                    '                                    <button id="add_row" type="button" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button>\n' +
                    '                                </div>');
            } else {
                $('#mquantity').append('<div class="form-group row" id="inside_mquantity">\n' +
                    '                                                    <label class="col-md-4 col-form-label">Quantity<span class="text-danger">*</span></label>\n' +
                    '                                                    <div class="col-md-8">\n' +
                    '                                                        <input type="text" autocomplete="off" name="product_quantity[]" class="form-control" placeholder="Product Quantity" value="" required data-parsley-type="number" data-parsley-min="1"  step="any">\n' +
                    '\n' +
                    '                                                        <input type="hidden" name="product_varient[]" value="" >\n' +
                    '                                                        <input type="hidden"  name="product_price[]" value="">\n' +
                    '                                                        \n' +
                    '                                                    </div>\n' +
                    '                                                </div>');
                $('#variable_row_holder').empty();
            }
        });


    $(document).on('click','#add_row',function () {
        $('#variable_rows').append('<div class="row">\n' +
            '                                       <div class="col-md-4">\n' +
            '                                            <div class="form-group row">\n' +
            '                                                <label class="col-md-12 col-form-label">Product Varient<span class="text-danger">*</span></label>\n' +
            '                                                <div class="col-md-12">\n' +
            '                                                    <input type="text" autocomplete="off" name="product_varient[]" class="form-control" placeholder="S|Red or M|Green" value="" required>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '\n' +
            '                                        <div class="col-md-4">\n' +
            '                                            <label class="col-md-12 col-form-label">Product Varient Quantity<span class="text-danger">*</span></label>\n' +
            '                                            <div class="col-md-12">\n' +
            '                                                <input type="text" autocomplete="off" name="product_quantity[]" class="form-control" placeholder="Product Varient Quantity" value="" required data-parsley-type="number" data-parsley-min="1"  step="any">\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '\n' +
            '                                        <div class="col-md-3">\n' +
            '                                            <label class="col-md-12 col-form-label">Product Varient Price</label>\n' +
            '                                            <div class="col-md-12">\n' +
            '                                                <input type="text" autocomplete="off" name="product_price[]" class="form-control" placeholder="Product Varient Price" value="" data-parsley-type="number" data-parsley-min="0.01"  step="any">\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '                                        <div class="col-md-1">\n' +
            '                                            <button type="button" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></button>\n' +
            '                                        </div>\n' +
            '                                    </div>');
    });

    $(document).on('click','.remove',function () {
        $(this).closest('div.row').remove();
    });
});
