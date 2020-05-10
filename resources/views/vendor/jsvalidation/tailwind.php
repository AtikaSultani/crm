<script>
    jQuery(document).ready(function () {

        $("<?= $validator['selector']; ?>").each(function () {
            $(this).validate({
                errorElement: 'span',
                errorClass: 'mt-1 text-red-darker text-xs block',

                errorPlacement: function (error, element) {
                    if (element.parent('.form-input').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                        error.appendTo(element.parent());
                        //  w se just place the validation message immediately after the input
                    } else {
                        error.appendTo(element.parent());
                    }
                },
                highlight: function (element) {
                    $(element).addClass('border border-red'); // add the Bootstrap error class to the control group
                },

                <?php if (isset($validator['ignore']) && is_string($validator['ignore'])): ?>

                ignore: "<?= $validator['ignore']; ?>",
                <?php endif; ?>


                unhighlight: function (element) {
                    $(element).removeClass('border border-red');
                },

                success: function (element) {
                     $(element).removeClass('border border-red');
                },

                focusInvalid: true, // do not focus the last invalid input
                <?php if (Config::get('jsvalidation.focus_on_error')): ?>
                invalidHandler: function (form, validator) {

                    if (!validator.numberOfInvalids())
                        return;

                    $('html, body').animate({
                        scrollTop: $(validator.errorList[0].element).offset().top
                    }, <?= Config::get('jsvalidation.duration_animate') ?>);
                    $(validator.errorList[0].element).focus();

                },
                <?php endif; ?>

                rules: <?= json_encode($validator['rules']); ?>
            });
        });
    });
</script>
