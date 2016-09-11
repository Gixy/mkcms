var form = $('.add-post-form');
var data = $('.add-post-file');
var uploadButton = $('.add-post-submit');

form.onsubmit = function(event){
    //  Prevent page to redirect to non-existing upload_file.php.
    event.preventDefault();
    //  Updating status of button.
    uploadButton.innerHTML = 'Working on it';
    //  Get selected files from input field.
    var files = fileSelect.files;
    //  Creating form-data key-value pairs. Still empty.
    var formData = new FormData();
    //  Loop through all files added, checking image type, adding file to request
    for( var i = 0; i < files.length; i++){
        var file = file[i];
        //  Image type checking
        if(!file.type.match('image.*')){
            continue;
        }
        // Adding file to request, and parsing it.
        formData.append('images[]', file, file.name);
    }
};
