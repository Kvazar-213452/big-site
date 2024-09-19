function reg_user_stage_1() {
    let name = $('#name_reg').val();
    let pasw = $('#pasw_reg').val();

    const url = 'db/lisen_db'; 
    const data = {
        type: 4,
        name: name,
        pasw: pasw,
    };

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function(response) {
            if (response == 1){
                console.log("you reg");
            } else if (response == 2) {
                $('.idfghjb').text("A user with that name exists");
                togglePopup();
            } else {
                clos('modal4');
                openModal('modal5');
            }
        },
    });
}


function reg_user_stage_2() {
    let gmail = $('#gmail_reg').val();

    clos('modal5');
    openModal('modal6');

    const url = 'db/lisen_db'; 
    const data = {
        type: 5,
        gmail: gmail
    };

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function(response) {
            if (response == 0){
                console.log("ddd");
            } else{
                console.log("w2222");
            }
        },
    });
}


function reg_user_stage_3() {
    let code = $('#code_reg').val();

    const url = 'db/lisen_db'; 
    const data = {
        type: 6,
        code: code
    };

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function(response) {
            if (response == 0){
                $('.idfghjb').text("You are registered!");
                togglePopup();
                clos('modal6');
            } else if (response == 21){
                $('.idfghjb').text("There are still chances 2");
                togglePopup();
            } else if (response == 22){
                $('.idfghjb').text("There are still chances 1");
                togglePopup();
            } else if (response == 23){
                $('.idfghjb').text("There are still chances 0");
                togglePopup();
            } else if (response == 24){
                $('.idfghjb').text("No chance");
                togglePopup();
                clos('modal6');
            }
        }
    });
}


function log_user_stage_1() {
    let name = $('#name_log').val();
    let pasw = $('#pasw_log').val();

    const url = 'db/lisen_db'; 
    const data = {
        type: 1,
        name: name,
        pasw: pasw
    };

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function(response) {
            response = JSON.parse(response);
            console.log(response);
            if (response[0] === 0) {
                clos('modal7');
                openModal('modal10');
                $("#user_gmail_l").text(response[1]);
                $("#user_teleg_l").text(response[2]);
                $("#user_discord_l").text(response[3]);
            } else {
                $('.idfghjb').text("User not found");
                togglePopup();
            }
        }
    });
}

function log_user_stage_2() {
    let code = $('#code_log').val();

    const url = 'db/lisen_db'; 
    const data = {
        type: 2,
        code: code
    };

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function(response) {
            if (response == 0) {
                clos('modal7');
                $('.idfghjb').text("You are logged in");
                togglePopup();
            } else if (response == 21){
                $('.idfghjb').text("There are still chances 2");
                togglePopup();
            } else if (response == 22){
                $('.idfghjb').text("There are still chances 1");
                togglePopup();
            } else if (response == 23){
                $('.idfghjb').text("There are still chances 0");
                togglePopup();
            } else if (response == 24){
                $('.idfghjb').text("No chance");
                togglePopup();
                clos('modal6');
            }
        }
    });
}

function log_user_stage_3(type_v) {
    const url = 'db/lisen_db'; 
    const data = {
        type: 3,
        type_v: type_v
    };

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function(response) {
            console.log(response);
            if (response == 0) {
                clos('modal10');
                openModal('modal9');
            } else if (response == 20) {
                $('.idfghjb').text("You have not connected this network");
                togglePopup();
            } else if (response == 21) {
                $('.idfghjb').text("You have not connected this network");
                togglePopup();
            } else if (response == 22) {
                $('.idfghjb').text("You have not connected this network");
                togglePopup();
            }
        }
    });
}

function reg_log(name, name_1) {
    clos(name);
    openModal(name_1);
}