$(document).ready(function() {
    let savedLeftPosition = localStorage.getItem('leftPosition');
    let savedSrc = localStorage.getItem("selectedSrc");
    let language = localStorage.getItem('language');
    let savedTheme = localStorage.getItem('theme');

    div_select("div1")
    yhg('/page/main', '223456793', 'main', 'yhg', `'/page/main', '223456793', 'yhg', '', '#div_url_b3'`, '#div_url_b3', '1', 'The article site has everything!');

    if (savedLeftPosition === 'menu_left') {
        $('.menu_left').css('display', 'block');
        $('#slider').css('display', 'none');
        $('#musx').css('width', 'calc(100% - 60px)');
        $('#musx').css('left', '60px');
        if ($('.hover_img1').hasClass('img_bottom_none')) {
            $('.hover_img1').toggleClass('img_bottom_none img_bottom');
        }
    } else if (savedLeftPosition === 'menu_left1') {
        $('.menu_left').css('display', 'none');
        $('#slider').css('display', 'block');
        $('#musx').css('width', '100%');
        $('#musx').css('left', '0px');
        if ($('.hover_img1').hasClass('img_bottom')) {
            $('.hover_img1').toggleClass('img_bottom img_bottom_none');
        }
    }

    if (language) {
        change_tetx_lang();
    } else {
        $('input[name="color"][value="' + "English" + '"]').prop('checked', true);
    }

    if(savedSrc) {
        $("#fon_chenge").attr("src", savedSrc);
    }

    if (savedTheme === 'black') {
        changeThemeToBlack();   
    } else if (savedTheme === 'white') {
        changeThemeToDefault();
    } else if (savedTheme === 'custom') {
        let customTheme = localStorage.getItem('customTheme');
        if (customTheme) {
            $('#tema').text(customTheme);
        }
    }
});