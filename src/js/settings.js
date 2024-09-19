function change_fon(name, domen) {
    var newSrc = domen + "/fon/" + name;
    $("#fon_chenge").attr("src", newSrc);
    localStorage.setItem("selectedSrc", newSrc);
}

function change_tetx_lang() {
    let language = localStorage.getItem('language');

    $('#selectedlang').text(`Selected color: ${language}`);
    $('input[name="color"][value="' + language + '"]').prop('checked', true);

    iframe.contentWindow.postMessage('language', '*');


}

$('input[name="color"]').on('change', function() {
    let selectedlang = $('input[name="color"]:checked').val();
    localStorage.setItem('language', selectedlang);

    change_tetx_lang();
});

function position() {
    $('.menu_left').css('display', 'block');
    $('#slider').css('display', 'none');
    $('#musx').css('width', 'calc(100% - 60px)');
    $('#musx').css('left', '60px');
    if ($('.hover_img1').hasClass('img_bottom_none')) {
        $('.hover_img1').toggleClass('img_bottom_none img_bottom');
    }
    localStorage.setItem('leftPosition', 'menu_left');
}

function position_1() {
    $('.menu_left').css('display', 'none');
    $('#slider').css('display', 'block');
    $('#musx').css('width', '100%');
    $('#musx').css('left', '0px');
    if ($('.hover_img1').hasClass('img_bottom')) {
        $('.hover_img1').toggleClass('img_bottom img_bottom_none');
    }
    localStorage.setItem('leftPosition', 'menu_left1');
}


function div_select(name){
    if (name === "div1"){
        blok_ch('#div_setings1')
        color_div_chort('#color_b1')
    }

    else if (name === "div2"){
        blok_ch('#div_setings2')
        color_div_chort('#color_b2')
    }

    else if (name === "div3"){
        blok_ch('#div_setings3')
        color_div_chort('#color_b3')
    }

    else if (name === "div4"){
        blok_ch('#div_setings4')
        color_div_chort('#color_b4')
    }

    else if (name === "div5"){
        blok_ch('#div_setings5')
        color_div_chort('#color_b5')
    }

    else if (name === "div6"){
        blok_ch('#div_setings6')
        color_div_chort('#color_b6')
    }
}

function blok_ch(name){
    $('#div_setings1').css('display', 'none');
    $('#div_setings2').css('display', 'none');
    $('#div_setings3').css('display', 'none');
    $('#div_setings4').css('display', 'none');
    $('#div_setings5').css('display', 'none');
    $('#div_setings6').css('display', 'none');

    $(name).css('display', 'block');
}