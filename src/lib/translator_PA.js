function post_translate(text, source_lang1, target_lang1, callback) {
    $.ajax({
        url: 'http://127.0.0.1:5000/translate',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            text: text,
            source_lang: source_lang1,
            target_lang: target_lang1
        }),
        success: function(data) {
            callback(data.translated_text);
        },
        error: function(jqXHR, textStatus, errorThrown) {}
    });
}

function post_detect_language(text, callback) {
    $.ajax({
        url: 'http://127.0.0.1:5000/detect_language',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            text: text
        }),
        success: function(data) {
            callback(data.detected_language);
        },
        error: function(jqXHR, textStatus, errorThrown) {}
    });
}

function translate_all(node, lang) {
    if (node.nodeType === 3 && $.trim(node.nodeValue).length > 0) {
        post_translate(node.nodeValue, 'en', lang, function(translatedText) {
            node.nodeValue = translatedText;
        });
    } else {
        $(node).contents().each(function() {
            translate_all(this, lang);
        });
    }
}

function translate_all_none_language(node, lang) {
    let i = 0;
    while (i < dont_translate_mas.length) {
        if ($(node).hasClass(dont_translate_mas[i])) {
            return;
        }
        i++
    }

    if (node.nodeType === 3 && $.trim(node.nodeValue).length > 0) {
        post_detect_language(node.nodeValue, function(language) {
            post_translate(node.nodeValue, language, lang, function(translatedText) {
                node.nodeValue = translatedText;
            });
        });
    } else {
        $(node).contents().each(function() {
            translate_all_none_language(this, lang);
        });
    }
}


// translate_all(document.body);