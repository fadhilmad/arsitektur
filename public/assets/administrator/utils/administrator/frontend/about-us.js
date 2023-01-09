// ==> SummerNote
$('textarea[name="isi"]').summernote({
    height: 270,
    toolbar: [
        ["font", ["bold", "italic", "underline", "clear"]],
        ["fontname", ["fontname"]],
        ["fontsize", ["fontsize"]],
        ["color", ["color"]],
        ["para", ["ol", "ul", "paragraph"]],
        ["insert", ["link"]],
        ["view", ["undo", "redo", "fullscreen", "codeview", "help"]],
    ],
});

// ==> Form Submit
$("#form-data").formSubmit((response) => {
    if (response.statusCode == 200) {
        Swal.fire("Success", response.message, "success");
    }
});