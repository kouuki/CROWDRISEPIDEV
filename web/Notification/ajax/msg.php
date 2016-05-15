<?php
    include '../config.php';
    extract($_POST);

    if( ($act == 'addmsg') and (isset($_POST['msgcnt'])) and (isset($_POST['sendto'])) ):

    	//cleaning entries
    	$msgcnt = mysql_real_escape_string($msgcnt);
    	$sendto = ($sendto);

    	// Add the message to the database
    	$sql_msg = 'INSERT INTO wcd_notif_msg (msg, msg_from, msg_to) VALUES ("'.$msgcnt.'", "'.$_SERVER['REMOTE_ADDR'].'", "'.$sendto.'")';
    	mysql_query($sql_msg);

    	//get the id of the added message 
    	 $last_id_message = mysql_insert_id();

    	 if($last_id_message > 0){
    	//create a notification line for the receiver
    	$sql_notif = 'INSERT INTO wcd_notif_msg_user (id_msg, receiver) VALUES ( "'.$last_id_message.'", "'.$sendto.'" )';
    	mysql_query($sql_notif);

    	//create a new message block to add in the message list
    	if($_SERVER['REMOTE_ADDR'] == $sendto){ $sender = 'me'; }else{ $sender = $_SERVER['REMOTE_ADDR'];}
    	?>
    	<div class="amsg-cnt">
     			<div class="sender">From <span><?php echo $sender; ?></span> to <span><?php echo $sendto; ?></span></div>
     			<div class="amsg">
     				<?php echo $msgcnt; ?>
     			</div>
     		</div>
    	<?php
    	}




    endif;
?>