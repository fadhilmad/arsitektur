// ==> Image Uploads
$("#image-file").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".image-preview").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    }
});

$(".card-upload-image").click(function () {
    $("#image-file").trigger("click");
});

// ==> Form Submit
$("#form-data").formSubmit((response) => {
    if (response.statusCode == 200) {
        Swal.fire("Success", response.message, "success");
    }
});