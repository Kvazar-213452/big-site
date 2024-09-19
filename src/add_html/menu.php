<div class="menu">
  <div class="menu_item">
      <div class="logo_div">
          <img class="logo_img" src="src/img/1.png">
          <p class="name_menu dont_translate">Article site</p>
      </div>
      <div class="conar_menu">
            <div class="menu_set_page">
                <div class="item_menu" onclick="yhg('/page/main', '932132422', 'main', 'yhg', `'/page/main', '932132422', 'yhg', '', '#div_url_b3'`, '#div_url_b3', '1', 'The article site has everything!')"><img class="item_menu_img" src="src/img/15.png"><p class="item_menu_p" id="div_url_b3">Main</p></div>
                <div class="item_menu" onclick="yhg('/page/game', '223456793', 'game', 'yhg', `'/page/game', '223456793', 'yhg', '', '#div_url_b1'`, '#div_url_b1', '1', 'More than 300 games')"><img class="item_menu_img" src="src/img/2.png"><p class="item_menu_p" id="div_url_b1">Game</p></div>
                <div class="item_menu" onclick="yhg('/page/music', '323232434', 'music', 'yhg', `'/page/music', '323232434', 'yhg', '', '#div_url_b2'`, '#div_url_b2', '1')"><img class="item_menu_img" src="src/img/4.png"><p class="item_menu_p" id="div_url_b2">Music</p></div>
                <div class="item_menu" onclick="yhg('/page/app', '223452793', 'application', 'yhg', `'/page/app', '223452793', 'yhg', '', '#div_url_b4'`, '#div_url_b4', '1')"><img class="item_menu_img" src="src/img/5.png"><p class="item_menu_p" id="div_url_b3">Application</p></div>
                <div class="item_menu" onclick="yhg('/page/main', '223456793', 'main', 'yhg', `'/page/main', '223456793', 'yhg', '', '#div_url_b1'`, '#div_url_b1', '1')"><img class="item_menu_img" src="src/img/12.png"><p class="item_menu_p" id="div_url_b5">Music short</p></div>
                <div class="item_menu" onclick="yhg('/page/main', '223456793', 'main', 'yhg', `'/page/main', '223456793', 'yhg', '', '#div_url_b1'`, '#div_url_b1', '1')"><img class="item_menu_img" src="src/img/11.png"><p class="item_menu_p" id="div_url_b6">Broadcasting music</p></div>
            </div>
            <div class="menu_conf_page">
                <div class="item_menu_1"><img class="item_menu_img" src="src/img/6.png"><p class="item_menu_p">Shop</p></div>
                <div class="item_menu_1" onclick="openModal('modal8')"><img class="item_menu_img" src="src/img/7.png"><p class="item_menu_p">Ticket</p></div>
                <div class="item_menu_1" onclick="openModal('modal2')"><img class="item_menu_img" src="src/img/8.png"><p class="item_menu_p">Setting</p></div>
                <div class="item_menu_1" onclick="openModal('modal3')"><img class="item_menu_img" src="src/img/3.png"><p class="item_menu_p">History</p></div>
                <?php 
                    if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
                        
                    } else {
                        echo <<<EOD
                            <span onclick="openModal('modal4')"><div class="item_menu_1"><img class="item_menu_img" src="src/img/10.png"><p class="item_menu_p">Account</p></div></span> 
                            EOD;
                    }
                ?>
            </div>
      </div>
  </div>
</div>
<div class="menu_x">
  <p class="name_frame" id="tetx_iframe_desc"></p>
  <div class="coin_l">
      <p class="ar">0</p>
      <p class="coin">0</p>
  </div>
</div>