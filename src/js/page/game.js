let $appsContainer = $('#game_all_div');
let $appsContainer1 = $('#game_pc_div');

function game() {
    $.each(jsonData, function(app, appData) {
        let appHtml = `
            <div onclick="app_openModal('${appData.url_game}')" class="game_div">
                <img class="game_img" src="${appData.img_url}">
                <p class="game_name">${appData.name}</p>
            </div>
        `;
        $appsContainer.append(appHtml);
    });
}

function game_pc() {
    $.each(jsonData1, function(app, appData1) {
        let appHtml = `
            <div onclick="app_openModal('${appData1.url_game}')" class="game_div">
                <img class="game_img" src="${appData1.img_url}">
                <p class="game_name">${appData1.name}</p>
            </div>
        `;
        $appsContainer1.append(appHtml);
    });
}

function app_openModal(url) {
    let modalHtml = `
        <div class="modal">
            <div class="modal-content">
            <span class="close" onclick="app_closeModal()">&times;</span>
                <iframe class="iframe_game_dis" src="${url}" frameborder="0"></iframe>
            </div>
        </div>
    `;

    $('body').append(modalHtml);

    let modalStyle = `
        .modal {
            display: block;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            overflow-y: hidden; 
            overflow-x: hidden;
            background-color: #202427;
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.5s;
            position: fixed;
            top: 0;
            right: 5px;
            z-index: 100000000000;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    `;

    $('<style>').html(modalStyle).appendTo('head');
}

function app_closeModal() {
    $('.modal').remove();
}

function scrol(name) {
    $('html, body').animate({
        scrollTop: $('#' + name + '_game').offset().top
    }, 'slow');
}
