<style>
    #thumbnail_preview, #top_background_preview, #banner_preview {
        width: 100%;
        background: no-repeat;
    }
    .show-placeholder div:first-child {
        display: none
    }
</style>
<script>
    $('input[name="thumbnail_url"]').on('change', function () {
        console.log(this.files);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            reader.onloadend = function () { // set image data as background of div
                $('#thumbnail_preview').html('<img src="'+this.result + '" alt="" style="width:100%">');
            }
        }
    });
    $('input[name="thumbnail_url_2"]').on('change', function () {
        console.log(this.files);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            reader.onloadend = function () { // set image data as background of div
                $('#thumbnail_preview_2').html('<img src="'+this.result + '" alt="" style="width:100%">');
            }
        }
    });
    $('input[name="top_background_url"]').on('change', function () {
        console.log(this.files);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            reader.onloadend = function () { // set image data as background of div
                $('#top_background_preview').css({'background-image': 'url("' + this.result + '")', 'height': '300px'});
            }
        }
    });
    $('input[name="banner"], input[name="banner_image"]').on('change', function () {
        console.log(this.files);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            reader.onloadend = function () { // set image data as background of div
                $('#banner_preview').css({'background-image': 'url("' + this.result + '")', 'height': '300px'});
            }
        }
    });
    $('input[name="icon"]').on('change', function () {
        console.log(this.files);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            reader.onloadend = function () { // set image data as background of div
                $('#icon_preview').css({'background-image': 'url("' + this.result + '")', 'height': '100px'});
            }
        }
    });
</script>
