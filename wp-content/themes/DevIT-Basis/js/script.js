( function( $ ) { 
	$( document ).ready( function() {
        $('.menu-primary-container .menu-item-has-children a').click(function (e) {
            e.preventDefault();
            if ($('.menu-item-has-children .sub-menu').css('display') == 'none') {
                $('.menu-item-has-children .sub-menu').css({ 'display': 'block' });
            } else {
                $('.menu-primary-container > .menu-item-has-children .sub-menu').css({ 'display': 'none' });
            }
        });
        $('#menuToggle > input').click(function () {
            $('.menu-primary-container > .menu-item-has-children .sub-menu').css({ 'display': 'none' });
        });
        $('.hamburger').on('click', function () {
            $(this).parent('#menuToggle').find('.form-section-main').toggleClass('show')
        });
	} );
})(jQuery);
(function ($) {
    $(document).ready(function () {
        console.log('Hi');

        let fieldCounter = 1;
        let allFieldsCorrect = {
            name: false,
            email: false,
            age: false,
            text: false,
            file: false,
            tel: [false]
        };
        const cssError = { 'border-color': '#F73208' };
        const cssNoError = { 'border-color': '#368A02' };

        function validateMail(value) {
            if (value !== '') {
                if (value.match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        function validatePhone(value) {
            if (value !== '' && value.match(/^[0-9]{10,10}$/)) {
                return true;
            } else {
                return false;
            }
        }
        function isAllValid(flags) {
            for (const key in flags) {
                if (key !== 'tel') {
                    if (flags[key] === false) {
                        return false;
                    }
                } else {
                    for (let i = 0; i < flags[key].length; i++) {
                        if (flags[key][i] === false) {
                            return false;
                        }
                    }
                }
            }
            if ($('#name').val() !== 'undefined' && $('#age').val() !== 'undefined' && $('#mail').val() !== 'undefined' && $('textarea').val() !== 'undefined' && $('#file').val() !== 'undefined' && $('#phone').val() !== 'undefined') {
                return true;
            } else {
                return false;
            }
        }

        $('#add-phone-field').on('click', function (e) {
            e.preventDefault();
            const removeButton = $('<input />', {
                class: 'button button-for-delete-phone',
                name: 'remove_phone_field_' + fieldCounter,
                type: 'submit',
                value: 'Remove'
            });
            const phoneField = $('<input />', {
                name: 'phone_' + fieldCounter,
                type: 'tel',
                title: 'Phone number'
            });
            const removeWrapper = $('<div />', {
                class: 'phone-input-remove'
            });
            allFieldsCorrect.tel[fieldCounter] = false;
            if (isAllValid(allFieldsCorrect)) {
                $('input[name=save_form]').prop('disabled', false);
            } else {
                $('input[name=save_form]').prop('disabled', true);
            }
            $('label[for=phone] .phone-wrapper').append(removeWrapper.append(phoneField, removeButton));
            fieldCounter++;
            $('input[name=save_form]').toggle(true);
        });
        $('#form').on('click', 'input[name^=remove_phone_field]', function (e) {
            e.preventDefault();
            let index;
            index = $(this).attr('name').slice(-1);
            allFieldsCorrect.tel[index] = 'deleted';
            $('input[name=phone_' + index).parent().remove();
            $(this).remove();
            $('input[name=save_form]').toggle(false);
        });

        $('#name').on('blur', function (e) {
            if ($(this).val() === '') {
                $(this).css(cssError);
                allFieldsCorrect.name = false;
            } else {
                allFieldsCorrect.name = true;
            }
            if (isAllValid(allFieldsCorrect)) {
                $('input[name=save_form]').prop('disabled', false);
                $('input[name=save_form]').show();
                console.log('1111');
            } else {
                $('input[name=save_form]').prop('disabled', true);
                $('input[name=save_form]').hide();
                console.log('22222');
            }
        });
        $('#name').on('focus', function (e) {
            $(this).css(cssNoError);
        });

        $('#mail').on('blur', function (e) {
            if (!validateMail($(this).val())) {
                $(this).css(cssError);
                allFieldsCorrect.email = false;
            } else {
                allFieldsCorrect.email = true;
            }
            if (isAllValid(allFieldsCorrect)) {
                $('input[name=save_form]').prop('disabled', false);
                $('input[name=save_form]').show();
            } else {
                $('input[name=save_form]').prop('disabled', true);
                $('input[name=save_form]').hide();
            }
        });
        $('#mail').on('focus', function (e) {
            $(this).css(cssNoError);
        });

        $('#age').on('blur', function (e) {
            if ($(this).val() === '') {
                $(this).css(cssError);
                allFieldsCorrect.age = false;
            } else {
                allFieldsCorrect.age = true;
            }
            if (isAllValid(allFieldsCorrect)) {
                $('input[name=save_form]').prop('disabled', false);
                $('input[name=save_form]').show();
            } else {
                $('input[name=save_form]').prop('disabled', true);
                $('input[name=save_form]').hide();
            }
        });
        $('#age').on('focus', function (e) {
            $(this).css(cssNoError);
        });

        $('textarea').on('blur', function (e) {
            if ($(this).val() === '') {
                $(this).css(cssError);
                allFieldsCorrect.text = false;
            } else {
                allFieldsCorrect.text = true;
            }
            if (isAllValid(allFieldsCorrect)) {
                $('input[name=save_form]').prop('disabled', false);
                $('input[name=save_form]').show();
            } else {
                $('input[name=save_form]').prop('disabled', true);
                $('input[name=save_form]').hide();
            }
        });
        $('textarea').on('focus', function (e) {
            $(this).css(cssNoError);
        });

        $('form').on('blur', '.phone-input-remove input[name^=phone], #phone', function (e) {
            let index = $(this).attr('name').slice(-1);
            if (!validatePhone($(this).val())) {
                $(this).css(cssError);
                allFieldsCorrect.tel[index] = false;
            } else {
                allFieldsCorrect.tel[index] = true;
            }
            if (isAllValid(allFieldsCorrect)) {
                $('input[name=save_form]').prop('disabled', false);
                $('input[name=save_form]').show();
            } else {
                $('input[name=save_form]').prop('disabled', true);
                $('input[name=save_form]').hide();
            }
        });
        $('form').on('focus', '.phone-input-remove input[name^=phone], #phone', function (e) {
            $(this).css(cssNoError);
        });


        $('#form').on('change', 'input', function (e) {
            if ($(this).val() !== '') {
                $('.photo-drop').css(cssNoError);
                if (this.files && this.files[0]) {
                    var preview = document.querySelector('img');
                    var file = document.querySelector('input[type=file]').files[0];
                    var reader = new FileReader();
                    reader.onloadend = function () {
                        preview.src = reader.result;
                    }
                    reader.readAsDataURL(file);
                    allFieldsCorrect.file = true;
                    console.log('111');
                }
            }
            if (isAllValid(allFieldsCorrect)) {
                $('input[name=save_form]').prop('disabled', false);
                $('input[name=save_form]').show();
            } else {
                $('input[name=save_form]').prop('disabled', true);
                $('input[name=save_form]').hide();
            }
        });

        $('#form').on('submit', function (e) {
            e.preventDefault();
            $('input[name=save_form]').prop('disabled', true);
            $('input[name=save_form]').hide();
            if (isAllValid(allFieldsCorrect)) {
                const form = $('form');
                let formData = new FormData(form[0]);
                formData.append('save_form', 'save');
                $.ajax({
                    type: 'POST',
                    url: 'wp-content/themes/DevIT-Basis/classes/mail.php',
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response) {
                             alert( 'All was saved' );
                            $('#form input[type=tel], #form input[type=text], #form input[type=email], #form input[type=number], #form textarea').val('');
                            $('.photo-drop img').attr('src', '');
                            allFieldsCorrect.name = false;
                            allFieldsCorrect.email = false;
                            allFieldsCorrect.age = false;
                            allFieldsCorrect.text = false;
                            allFieldsCorrect.file = false;
                            for (let i = 0; i < allFieldsCorrect.tel.length; i++) {
                                allFieldsCorrect.tel[i] = false;
                            }
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });
            } else {
                window.location.reload();
            }
        });
    });
})(jQuery);