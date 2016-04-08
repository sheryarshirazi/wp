 <?php 
 	include('config.inc.php');
	$query="SELECT * FROM apps order by app_id desc limit 5";
	$index=mysql_query($query) or die('db not connect');
	//$apps=mysql_fetch_assoc($index);
	 //echo $apps['app_img'];
	 ?>
 
 
       <div class="center_content">
       	<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Featured Apps</div>
          <?php 
		  while($apps=mysql_fetch_assoc($index)){
        	echo "
        	<div class='feat_prod_box'>
            
            	<div class='prod_img'><a href='details.php?id=".$apps['app_id']."'><img src='".$apps["app_img"]."' alt='' title='' border='0' width='98' height='150' /></a></div>
               
                <div class='prod_det_box'>
                	<div class='box_top'></div>
                    <div class='box_center'>
                    <div class='prod_title'>".$apps["app_name"]."</div>
                    <p class='details'>".$apps['app_desc']."</p>
                    <a href='details.php?id=".$apps['app_id']."' class='more'>- more details -</a>
                    <div class='clear'></div>
                    </div>
                   
                    <div class='box_bottom'></div>
                </div>    
            <div class='clear'></div>
            </div>";	
			}//while 
            ?>
        
            <?php 
			
				$gQuery="SELECT * FROM apps where app_cat= 'Games' limit 1";
				$gIndex=mysql_query($gQuery) or mysql_error();
				$game=mysql_fetch_assoc($gIndex);
				
				
				$edQuery="SELECT * FROM apps where app_cat= 'Education' limit 1";
				$edIndex=mysql_query($edQuery) or mysql_error();
				$educate=mysql_fetch_assoc($edIndex);
				
				$etQuery="SELECT * FROM apps where app_cat= 'Entertainment' limit 1";
				$etIndex=mysql_query($etQuery) or mysql_error();
				$enter=mysql_fetch_assoc($etIndex);
				
				
				
			
			?>
            
           <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title="" /></span>New Apps</div> 
           
           <div class="new_products">
           
                    <div class="new_prod_box">
                        <a href="details.php">Game</a>
                        <div class="new_prod_bg">
                        
                        <a href="details.php?id=<?php echo $game['app_id']?>"> <img width="60" height=90 src="<?php echo $game['app_img']?>"alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="details.php">Education</a>
                        <div class="new_prod_bg">
                        
                        <a href="details.php?id=<?php echo $educate['app_id']?>"><img src="<?php echo $educate['app_img']; ?>" width ='60' height="90"  class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.php">Education</a>
                        <div class="new_prod_bg">
                        
                        <a href="details.php?id=<?php echo $enter['app_id']?>"><img src="<?php echo $enter['app_img']; ?>" width ='60' height="90"  class="thumb" border="0" /></a>
                        </div>           
                    </div>       
            
            </div> 
          
            
        <div class="clear"></div>
        </div><!--end of left content-->			