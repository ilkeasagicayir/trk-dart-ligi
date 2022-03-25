
$(function () {
    $("#save").click(function () {
        var isValid = true;
        $('.textInput').each(function (event) {
            if ($(this).val() == '') {

                Swal.fire('Lütfen boş bırakmayınız!');
                isValid = false;
                event.preventDefault();
                return false;

            }
        });

        if (isValid) {
            $('.textInput').each(function () {
                console.log($(this).val());
                $.ajax({
                    url: "save.php",
                    type: "POST",
                    data: {
                        isim: $(this).val()
                    },
                    cache: false,
                    success: function (dataResult, event) {

                        if (dataResult.contains = ('200')) {
                            Swal.fire('Bilgiler kaydedilmiştir.');
                            event.preventDefault();

                        }
                        else {
                            event.preventDefault();
                            return false;
                            Swal.fire('İşlem Başarısız Oldu!');
                        }

                    }
                });
            });
        }

    });
});
