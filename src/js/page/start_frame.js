$(document).ready(function() {
    let language = localStorage.getItem('language');
    let savedTheme = localStorage.getItem('theme');
    
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

    if (language) {

    }
});