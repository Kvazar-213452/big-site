function changeThemeToBlack() {
    document.getElementById('theme').href = "https://article.local//style/topic/black";
    localStorage.setItem('theme', 'black');
    iframe.contentWindow.postMessage('black', '*');
    $('#tema').text("");
}

function changeThemeToDefault() {
    document.getElementById('theme').href = "https://article.local//style/topic/white";
    localStorage.setItem('theme', 'white');
    iframe.contentWindow.postMessage('white', '*');
    $('#tema').text("");
}

$('#idcaston_style').click(function() {
    $('#fileInput').click();
});

$('#fileInput').change(function() {
    iframe.contentWindow.postMessage('custom', '*');
    $('#tema').text("");
    let file = this.files[0];
    let reader = new FileReader();
    
    reader.onload = function(event) {
        let content = event.target.result;

        $('#tema').text(content);

        localStorage.setItem('theme', 'custom');
        localStorage.setItem('customTheme', content);
    };

    reader.readAsText(file); 
});