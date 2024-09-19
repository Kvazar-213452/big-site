let play_list_div = $('#play_list_div1');

function play_list_f() {
    play_list_div.html("");

    let i = 0;
    while (i < play_list_data.length) {
        let a = 0;
        let file = "";
        while (a < play_list_data[i][3].length) {
            if (a === play_list_data[i][3].length - 1) {
                file += "'" + play_list_data[i][3][a] + "'";
            } else {
                file += "'" + play_list_data[i][3][a] + "'" + ", ";
            }
            a++;
        }
        let appHtml = `
        <div class="game_div">
            <p class="game_name">${play_list_data[i][0]}</p>
            <p class="game_name">${play_list_data[i][1]}</p>
            <p class="game_name">${play_list_data[i][2]}</p>
            <p onclick="play_list_open_modal([${file}])" class="game_name">ttttt</p>
        </div>
        `;
        play_list_div.append(appHtml);
        i++;
    }
}

function play_list_open_modal(file) {
    let modal_html = `
        <div class="modal">
            <div class="modal-content">
            <span class="close" onclick="app_closeModal()">&times;</span>
                ${file}
            </div>
        </div>
    `;

    $('body').append(modal_html);

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