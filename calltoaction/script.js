jQuery(document).ready(function($){


    if ($(".phone").length) {
        $(".phone").inputmask({
            "mask": "+7 (999) 999-99-99",
            showMaskOnHover: false,
            showMaskOnFocus: true,
        });
    }

    var $form = $('.js--checkup-call-to-action-form');

    $form.each(function () {
        var $form = $(this),
            $inputs = $('input:not([type=hidden]), textarea', $form),
            $submit = $('[type=submit]', $form);

        var formCheck = function () {
            var is_valid = true;

            $inputs.each(function () {
                if ($(this).inputmask("hasMaskedValue")) {
                    if(!$(this).inputmask("isComplete")) {
                        is_valid = false;
                        $(this).addClass('error');
                    }
                } else if (
                    ($(this).attr('name') === 'name' && $(this).val().length < 2)
                    || ($(this).attr('name') === 'message' && $(this).val().length < 2)
                ) {
                    is_valid = false;
                    $(this).addClass('error');
                }
            });

            $submit.attr('disabled', !is_valid);

            return is_valid;
        };

        $inputs.each(function () {
            $(this).on('input', function () {
                $(this).removeClass('error');
                formCheck();
            });
        });

        $submit.on('click', function (e) {
            e.preventDefault();
            if (!$(this).attr('disabled')) {
                $form.submit();
            }
        });
        $form.on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "/local/components/awg/calltoaction/ajax.php",
                data: $form.serialize(),
                success: function (data) {
                    data = data || {};
                    var data_obj = jQuery.parseJSON(data);

                    if (data_obj.success) {
                        $inputs.val('');

                        // Место для попапа

                        // $.magnificPopup.open({
                        //     items: {
                        //         src: '.fsn-call-to-action-popup'
                        //     },
                        //     type: 'inline',
                        //     tClose: 'Закрыть (Esc)',
                        //     fixedContentPos: true,
                        //     fixedBgPos: true,
                        //
                        //     closeBtnInside: false,
                        //     preloader: false,
                        //
                        //     midClick: true,
                        //     removalDelay: 300,
                        //     mainClass: 'my-mfp-slide-bottom'
                        // }, 0);
                    } else {
                        alert('Возникла ошибка');
                    }
                },
                error: function () {
                    alert("Возникла ошибка");
                }
            });
        })
    });
});