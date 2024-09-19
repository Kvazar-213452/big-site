window.addEventListener('message', function(event) {
    if (event.data === 'black') {
        changeThemeToBlack();
    } else if (event.data === 'white') {
        changeThemeToDefault();
    } else if (event.data === 'custom') {
        let customTheme = localStorage.getItem('customTheme');
        if (customTheme) {
            $('#tema').text(customTheme);
        }
    } else if (event.data === 'language') {
        let language = localStorage.getItem('language');
    } else {
        console.log("Received unknown message:", event.data);
    }
});

function changeThemeToBlack() {
    $('#tema').text("");
    document.getElementById('theme').href = "https://article.local//style/topic/black";
}

function changeThemeToDefault() {
    $('#tema').text("");
    document.getElementById('theme').href = "https://article.local//style/topic/white";
}