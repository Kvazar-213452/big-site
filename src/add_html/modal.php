<?php require 'modal/hist.html'; ?>
<?php require 'modal/settings.php'; ?>
<?php require 'modal/reg_log.php'; ?>

<div id="modal1"> 
    <div id="modal-content2">
        <div class="modal_ask">
        <span class="close" onclick="clos('modal1')">&times;</span>
            <p class="main_model_p">Are you sure you want to delete history?</p>
        </div>
        <div class="center_ask_modal_div">
            <button onclick="clos('modal1')" class="button_ask_modal color_g color_b_g">Do not delete</button>
            <button onclick="deleteTextFromCache()" class="button_ask_modal color_o color_b_r">Delete</button>
        </div>
    </div>
</div> 


<div id="modal8"> 
    <div id="modal-content2">
        <div class="modal_ask">
        <span class="close" onclick="clos('modal8')">&times;</span>
            <p class="main_model_p">Are you sure you want to delete history?</p>
        </div>
        <br><br>
        <?php echo $_SESSION['user_name']; ?>
        <?php echo $_SESSION['user_coin']; ?>
        <button onclick="go_out_accaunt()">ffffff</button>
    </div>
</div> 