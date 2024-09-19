let dataStorage = [];
let historyIndex = -1;

function rest(functionReference) {
    let data = {
        functionName: functionReference
    };

    const existingIndex = dataStorage.findIndex(item => item.functionName === functionReference);
    
    if (existingIndex !== -1) {
        historyIndex = existingIndex;
    } else {
        dataStorage.push(data);
        historyIndex = dataStorage.length - 1;
    }
}

function goBack() {
    if (historyIndex > 0) {
        historyIndex--;
        let targetData = dataStorage[historyIndex];
        if (typeof targetData.functionName === "function") {
            targetData.functionName();
        }
    }
}

function goForward() {
    if (historyIndex < dataStorage.length - 1) {
        historyIndex++;
        let targetData = dataStorage[historyIndex];
        if (typeof targetData.functionName === "function") {
            targetData.functionName();
        }
    }
}

function histyr(name, functionName, customclass, furc_b) {
  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = currentTime.getMinutes();
  var seconds = currentTime.getSeconds();
  var formattedTime = hours + ":" + minutes + ":" + seconds;

  var newText = `<div class="yy5" onclick="${functionName}(${furc_b})"><span class="name_hist">Page: ${name}</span><span class="time_hist">Time: ${formattedTime}</span><span class="id_hist">ID: ${customclass}</span></div>`;
  var existingContent = localStorage.getItem('histContent') || '';
  var updatedContent = newText + existingContent;
  document.getElementById("hist").innerHTML = updatedContent;

  localStorage.setItem('histContent', updatedContent);
}


document.addEventListener('DOMContentLoaded', function() {
  var savedContent = localStorage.getItem('histContent') || '';
  document.getElementById('hist').innerHTML = savedContent;
});

function goToIframe(iframeName) {
  var iframes = document.querySelectorAll('iframe');
  for (var i = 0; i < iframes.length; i++) {
      if (iframes[i].name === iframeName) {
          iframes[i].style.display = 'block';
      } else {
          iframes[i].style.display = 'none';
      }
  }
}

window.addEventListener('message', function(event) {
  if (event.data === 'app_add') {
    yhg('/page/add_app', '228936721', 'add_app', 'yhg', `'/page/add_app', '228936721', 'yhg', '', '#div_url_b4'`, '#div_url_b4', '1', 'The article site has everything!');
  }
});

function yhg(url, id, name, func, furc_b, color, type, text) {
  $("#musx").attr("src", domen + url);
  $("#musx").attr("name", domen + url);
  $('#tetx_iframe_desc').text(text);

  histyr(name, func, id, furc_b);
  rest(yhg);  
  color_ch(color, type);
}

function deleteTextFromCache() {
  $("#hist").empty();

  localStorage.removeItem('histContent');
  $('.idfghjb').text("History deleted successfully.");
  togglePopup();
}

function color_ch(name, type) {
  if (type === "1") {
    let div_url1 = $('#div_url_b1');
    let div_url2 = $('#div_url_b2');
    let div_url3 = $('#div_url_b3');
    let div_url4 = $('#div_url_b4');
    let div_url5 = $('#div_url_b5');
    let div_url6 = $('#div_url_b6');
  
    if (div_url1.hasClass('color_a')) {
      div_url1.toggleClass('color_a');
    }
    if (div_url2.hasClass('color_a')) {
      div_url2.toggleClass('color_a');
    }
    if (div_url3.hasClass('color_a')) {
      div_url3.toggleClass('color_a');
    }
    if (div_url4.hasClass('color_a')) {
      div_url4.toggleClass('color_a');
    }
    if (div_url5.hasClass('color_a')) {
      div_url5.toggleClass('color_a');
    }
    if (div_url6.hasClass('color_a')) {
      div_url6.toggleClass('color_a');
    }
    
    let div_url_a = $(name);
    div_url_a.toggleClass('color_a');
  }
}