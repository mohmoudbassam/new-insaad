// $(document).ready(function () {
//     $('.summernote').summernote({
//         toolbar: [
//             // [groupName, [list of button]]
//             ['style', ['bold', 'italic', 'underline', 'clear']],
//             ['font', ['strikethrough', 'superscript', 'subscript']],
//             ['fontsize', ['fontsize']],
//             ['color', ['color']],
//             ['para', ['ul', 'ol', 'paragraph']],
//            [ "backColor",[ "white"]],
//         ],
//         height: 200,
//
//     });
//
//     $('.summernote-image-video').summernote({
//            toolbar: [
//
//                        // [groupName, [list of button]]
//             ['style', ['bold', 'italic', 'underline', 'clear']],
//             ['font', ['strikethrough', 'superscript', 'subscript']],
//             ['fontsize', ['fontsize']],
//             ['color', ['color']],
//             ['para', ['ul', 'ol', 'paragraph']],
//            [ "backColor",[ "white"]],
//
//         //      ['style', ['style']],
//         //   ['font', ['bold', 'underline', 'clear']],
//         //   ['color', ['color']],
//         //   ['para', ['ul', 'ol', 'paragraph']],
//         //   ['table', ['table']],
//         //   ['insert', ['link']],
//         //   ['view', ['fullscreen', 'codeview', 'help']]
//         //              [ 'backColor',[ 'white']],
//
//         ],
//         height: 200,
//
//     });
// });
$(document).ready(function () {
    var languages = ['en'];
    languages.forEach(function (element) {
        ClassicEditor.create(document.querySelector('.editor-' + element));

    });
});
