<div id="modal2"> 
    <div id="modal-content">
        <span class="close1 dont_translate" onclick="clos('modal2')">&times;</span>
        <div class="settings_menu">
        <div class="settings_menu_top">
            <div id="color_b1" onclick="div_select('div1')" class="settings_menu_page"><img class="modal_menu_settings" src="src/img/9.png"><span id="id_id_langv_vh1" class="modal_menu_settings_tetx">Topic</span></div>
            <div id="color_b2" onclick="div_select('div2')" class="settings_menu_page"><img class="modal_menu_settings" src="src/img/17.png"><span id="id_id_langv_vh2" class="modal_menu_settings_tetx">Position of blocks</span></div>
            <div id="color_b3" onclick="div_select('div3')" class="settings_menu_page"><img class="modal_menu_settings" src="src/img/16.png"><span id="id_id_langv_vh3" class="modal_menu_settings_tetx">Background</span></div>
            <div id="color_b4" onclick="div_select('div4')" class="settings_menu_page"><img class="modal_menu_settings" src="src/img/18.png"><span id="id_id_langv_vh4" class="modal_menu_settings_tetx">Languages</span></div>
            <div id="color_b4" onclick="div_select('div5')" class="settings_menu_page"><img class="modal_menu_settings" src="src/img/18.png"><span id="id_id_langv_vh4" class="modal_menu_settings_tetx">Languages</span></div>
        </div>
    </div>
 
        <div id="div_setings1">
        <p class="setings_head_text">Topic</p>
        <p class="setings_under_text">Here you can change themes - change colors.</p>
        <br>
        <div class="vvv">
        <p class="setings_under_text">Choose a topic:</p>
        <button onclick="changeThemeToBlack()" class="button_seting_color_ch">Black</button>
        <button onclick="changeThemeToDefault()" class="button_seting_color_ch">White</button>
        <input type="file" id="fileInput" accept=".css">
        <button id="idcaston_style" class="button_seting_color_ch">Download yours</button>
        <br>    <br>
        </div>
    <br>
        <div class="vvv">
        <p class="setings_under_text">How to download your theme:</p>
        <br>
        <p class="setings_under_text">You need to have a file with the extension .css and click on Download your to download it.</p>
        <p class="setings_under_text">If you do not have a css file, you will be able to get it in the Story.</p>
        <br>
        <p class="setings_under_text">You can also make <span class="grenn">your</span> own themes.</p>
        <br>    
        <p>
        Guide on how to use Backgrounds / Custom Styles 💫 <br>
    🚀 Elevate your Article experience with our Guide on Backgrounds / Custom styles. 🚀<br>
    <br><br>
    💠 Backgrounds:<br>
    To change your Background, head to Settings, you will appear to be in "Topic" section, scroll down and you are able to choose Backgrounds.
    <br><br>
    💎 Custom Style:<br>
    To set Custom Style, go to "Article Style" in Menu and Download the file, then head to Settings, you will appear in "Topic" section, upload the file here and you are all set!
    <br><br>
    🔗 Stay Connected:<br>
    Don't miss a beat! Follow us on our Social Medias, Join our Discord Server for exclusive updates, exciting content, and a front-row seat to the dynamic journey ahead.
        </p>
        </div>
    </div>

    <div id="div_setings2">
    <p class="setings_head_text">Blocks</p>
        <p class="setings_under_text">Changing the position of blocks.</p>
        <br>
        <div class="vvv">
    <button class="button_langvage" onclick="position()">Type menu 1</button>
    <button class="button_langvage" onclick="position_1()">Type menu 2</button>
    </div>
    </div>

    <div id="div_setings3">
    <p class="setings_head_text">Background</p>
        <p class="setings_under_text">Change your background.</p>
    <div class="dic_fon_cont_change">
    <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/0" frameborder="0"></iframe>
    <button onclick="change_fon('0', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
    </div> 
    <div class="dic_fon_cont_change">
    <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/1" frameborder="0"></iframe>
    <button onclick="change_fon('1', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
    </div>
    <?php
    if ($_SESSION["id_user"]) {
        $aray_fon = fon_check_setings($_SESSION["id_user"], $url_shop_server, $comand_shop_server_fonuser);
        $aray_fon_json = json_encode(array_map('trim', $aray_fon)); 
    }
    else {
        echo "<div class='vvv'><p id='eror_fon' class='setings_under_text red_color'>Register to get more backgrounds.</p></div>";
    }
    ?> 
    <script>
    let aray_fon = <?php echo $aray_fon_json; ?>; 

    if(aray_fon) {
        if (aray_fon.includes('22222')) {
        var html_22222 = `
            <div class="dic_fon_cont_change">
                <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/2" frameborder="0"></iframe>
                <button onclick="change_fon('2', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
            </div>`;
        document.write(html_22222);
    }

    if (aray_fon.includes('33333')) {
        var html_33333 = `
            <div class="dic_fon_cont_change">
                <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/3" frameborder="0"></iframe>
                <button onclick="change_fon('3', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
            </div>`;
        document.write(html_33333);
    }

    if (aray_fon.includes('44444')) {
        var html_44444 = `
            <div class="dic_fon_cont_change">
                <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/4" frameborder="0"></iframe>
                <button onclick="change_fon('4', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
            </div>`;
        document.write(html_44444);
    }

    if (aray_fon.includes('55555')) {
        var html_55555 = `
            <div class="dic_fon_cont_change">
                <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/5" frameborder="0"></iframe>
                <button onclick="change_fon('5', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
            </div>`;
        document.write(html_55555);
    }

    if (aray_fon.includes('66666')) {
        var html_66666 = `
            <div class="dic_fon_cont_change">
                <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/6" frameborder="0"></iframe>
                <button onclick="change_fon('6', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
            </div>`;
        document.write(html_66666);
    }

    if (aray_fon.includes('77777')) {
        var html_77777 = `
            <div class="dic_fon_cont_change">
                <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/7" frameborder="0"></iframe>
                <button onclick="change_fon('7', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
            </div>`;
        document.write(html_77777);
    }

    if (aray_fon.includes('88888')) {
        var html_88888 = `
            <div class="dic_fon_cont_change">
                <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/8" frameborder="0"></iframe>
                <button onclick="change_fon('8', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
            </div>`;
        document.write(html_88888);
    }

    if (aray_fon.includes('99999')) {
        var html_99999 = `
            <div class="dic_fon_cont_change">
                <iframe class="setings_fon_changer" src="<?php echo $domen_name; ?>/fon/9" frameborder="0"></iframe>
                <button onclick="change_fon('9', '<?php echo $domen_name; ?>')" class="set_background">Set background</button>
            </div>`;
        document.write(html_99999);
    }

    }
    </script>

    </div>

    <div id="div_setings4">
    <p class="setings_head_text">Language</p>
        <p class="setings_under_text">Choose your language.</p>
        <br>
        <div class="vvv">
        <p id="selectedlang">Selected color: NULL</p>
        <br>
        <div class="radio_button">
            <input class="lang_color_radio" type="radio" name="color" value="en">
            English
        </div>
        
        <div class="radio_button">
            <input class="lang_color_radio" class="lang_colors" type="radio" name="color" value="uk">
            Українська
        </div>
        
        <div class="radio_button">
            <input class="lang_color_radio" class="lang_colors" type="radio" name="color" value="blue">
            Синій
        </div>
        
        <div class="radio_button">
            <input class="lang_color_radio" class="lang_colors" type="radio" name="color" value="yellow">
            Жовтий
        </div>
        </div>
    </div>

    <div id="div_setings5">
    <div class="img_user_avatar">
    <p class="informanion_user">name: <span class="info_db"><?php echo isset($_SESSION["user_name"]) && !empty($_SESSION["user_name"]) ? $_SESSION["user_name"] : '??'; ?></span></p>
    <p class="informanion_user">password: <span class="info_db"><?php echo isset($_SESSION["user_pasw"]) && !empty($_SESSION["user_pasw"]) ? $_SESSION["user_pasw"] : '??'; ?></span></p>
    <p class="informanion_user">id_discord: <span class="info_db"><?php echo isset($_SESSION["user_gmail"]) && !empty($_SESSION["user_gmail"]) ? $_SESSION["user_gmail"] : '??'; ?></span></p>
    <p class="informanion_user">coin: <span class="info_db"><?php echo isset($_SESSION["user_coin"]) && !empty($_SESSION["user_coin"]) ? $_SESSION["user_coin"] : '??'; ?></span></p>
    <p class="informanion_user">ar: <span class="info_db"><?php echo isset($_SESSION["user_ar"]) && !empty($_SESSION["user_ar"]) ? $_SESSION["user_ar"] : '??'; ?></span></p>
    <p class="informanion_user">dost: <span class="info_db"><?php echo isset($_SESSION["dost_user"]) && !empty($_SESSION["dost_user"]) ? $_SESSION["dost_user"] : '??'; ?></span></p>
    </div>
    <br><br><br><br>
    <div class="img_user_avatar1">
        <p>This is your account information. <span class="red_color">Some of this data is confidential and should not be shared</span>.</p>
        <br>
        <p>Clicking the log out button will log you out of your account.</p>
        <br>
        <button onclick="processData()" class="buttton_acaunt">Sign out of your account</button>
    </div>
    </div>

    <div id="div_setings6">
    <p class="setings_head_text">Main version</p>
        <p class="setings_under_text">Main version.</p>
        <br><br>
        <div class="vvv">
        <p>
        ☄️ Upcoming Article Update 💫 <br>
    Next Article Official Update is Going to be Beta Testing which will include much more features and abilities, it will be the last Update before Main Version releases, so stay Updated and Tuned.
    <br><br>
    🔗 Stay Connected:<br>
    Don't miss a beat! Follow us on our Social Medias, Join our Discord Server for exclusive updates, exciting content, and a front-row seat to the dynamic journey ahead.
        </p>
        </div>
    </div>


    </div>
    </div>
</div> 