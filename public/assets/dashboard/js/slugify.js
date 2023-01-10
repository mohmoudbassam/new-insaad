$(document).ready(function () {
    function generateSlug(str) {
        //replace all special characters | symbols with a space
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();

        // trim spaces at start and end of string
        str = str.replace(/^\s+|\s+$/gm,'');

        // replace space with dash/hyphen
        str = str.replace(/\s+/g, '-');

        return str
    }

    $("#slug-source-ar").on("keyup", function () {
        $("#slug-target-ar").val(generateSlug($(this).val()));
    });

    $("#slug-source-en").on("keyup", function () {
        $("#slug-target-en").val(generateSlug($(this).val()));
    });

    $("#slug-source-tr").on("keyup", function () {
        $("#slug-target-tr").val(generateSlug($(this).val()));
    });

    $("#slug-source-fr").on("keyup", function () {
        $("#slug-target-fr").val(generateSlug($(this).val()));
    });
});
