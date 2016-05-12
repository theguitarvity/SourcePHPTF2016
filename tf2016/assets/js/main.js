/*
 Alpha by HTML5 UP
 html5up.net | @n33co
 Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
 */

(function ($) {

    skel.breakpoints({
        wide: '(max-width: 1680px)',
        normal: '(max-width: 1280px)',
        narrow: '(max-width: 980px)',
        narrower: '(max-width: 840px)',
        mobile: '(max-width: 736px)',
        mobilep: '(max-width: 480px)'
    });

    $(function () {

        var $window = $(window),
                $body = $('body'),
                $header = $('#header'),
                $banner = $('#banner');

        // Fix: Placeholder polyfill.
        $('form').placeholder();

        // Prioritize "important" elements on narrower.
        skel.on('+narrower -narrower', function () {
            $.prioritize(
                    '.important\\28 narrower\\29',
                    skel.breakpoint('narrower').active
                    );
        });

        // Dropdowns.
        $('#nav > ul').dropotron({
            alignment: 'right'
        });

        // Off-Canvas Navigation.

        // Navigation Button.
        $(
                '<div id="navButton">' +
                '<a href="#navPanel" class="toggle"></a>' +
                '</div>'
                )
                .appendTo($body);

        // Navigation Panel.
        $(
                '<div id="navPanel">' +
                '<nav>' +
                $('#nav').navList() +
                '</nav>' +
                '</div>'
                )
                .appendTo($body)
                .panel({
                    delay: 500,
                    hideOnClick: true,
                    hideOnSwipe: true,
                    resetScroll: true,
                    resetForms: true,
                    side: 'left',
                    target: $body,
                    visibleClass: 'navPanel-visible'
                });

        // Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
        if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
            $('#navButton, #navPanel, #page-wrapper')
                    .css('transition', 'none');

        // Header.
        // If the header is using "alt" styling and #banner is present, use scrollwatch
        // to revert it back to normal styling once the user scrolls past the banner.
        // Note: This is disabled on mobile devices.
        if (!skel.vars.mobile
                && $header.hasClass('alt')
                && $banner.length > 0) {

            $window.on('load', function () {

                $banner.scrollwatch({
                    delay: 0,
                    range: 0.5,
                    anchor: 'top',
                    on: function () {
                        $header.addClass('alt reveal');
                    },
                    off: function () {
                        $header.removeClass('alt');
                    }
                });

            });

        }

    });

})(jQuery);


function calculateAge(dobString) {
    var dob = new Date(dobString);
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var birthdayThisYear = new Date(currentYear, dob.getMonth(), dob.getDate());
    var age = currentYear - dob.getFullYear();
    if (birthdayThisYear > currentDate) {
        age--;
    }
    return age;
}
function calcular(data) {
    if (data != "yyyy-mm-dd") {
        //var data = document.form.data.value;
        var partes = data.split("/");
        var junta = partes[2] + "-" + partes[1] + "-" + partes[0];
        document.form.idade.value = (calculateAge(junta));
    }
}

function cpfValidate(data) {

//    if (data != "") {
//        var _data = data.substring(0, 3) + "." + data.substring(3, 6) +
//                "." + data.substring(6, 9) + "-" + data.substring(9, 11);
//        document.form.cpf.value = _data;
        validacpf();
//    }

}

function validacpf() {
    var cpf = document.form.cpf.value;
    cpf = cpf.replace('.', '');
    cpf = cpf.replace('.', '');
    cpf = cpf.replace('-', '');
    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;
    if (cpf.length < 11) {
//                    return false;
        alert("CPF Inválido.");
        document.form.cpf.value = "";
    }
    for (i = 0; i < cpf.length - 1; i++)
        if (cpf.charAt(i) != cpf.charAt(i + 1))
        {
            digitos_iguais = 0;
            break;
        }
    if (!digitos_iguais)
    {
        numeros = cpf.substring(0, 9);
        digitos = cpf.substring(9);
        soma = 0;
        for (i = 10; i > 1; i--)
            soma += numeros.charAt(10 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)) {
            alert("CPF Inválido.");
            document.form.cpf.value = "";
        }
        numeros = cpf.substring(0, 10);
        soma = 0;
        for (i = 11; i > 1; i--)
            soma += numeros.charAt(11 - i) * i;
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1)) {
            alert("CPF Inválido.");
            document.form.cpf.value = "";
        }
//                    return true;
    }
    else {
        alert("CPF Inválido.");
        document.form.cpf.value = "";
    }
}