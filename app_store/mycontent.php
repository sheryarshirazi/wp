<?php 
 	include('config.inc.php');
	$query="SELECT * FROM apps order by app_id desc limit 5";
	$index=mysql_query($query) or die('db not connect');
?>
<div class="center_content">
       	<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Featured books</div>
        
        	<div class="feat_prod_box">
            
            	<div class="prod_img"><a href="details.php"><img src="images/prod1.jpg" alt="" width="97" height="149" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">Speed moto</div>
                    <p class="details">This is a unique racing game, Enjoy feeling super speedy moto racing !.Tilt the phone or tablet to control the motor turn right or left, Tap the screen to accelerate the moto</p>
                    <a href="details.php" class="more">- more details -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	
            
            
        	<div class="feat_prod_box">
            
            	<div class="prod_img"><a href="details.php"><img src="images/prod2.jpg" alt="" width="102" height="121" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">Angry Bird</div>
                    <p class="details">The survival of the Angry Birds is at stake.Dish out revenge on the greedy pigs who stole their eggs. Use the unique powers of each bird to destroy the pigs&rsquo; defenses..</p>
                    <a href="details.php" class="more">- more details -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>      
            
            
            
           <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title="" /></span>New books</div> 
           
           <div class="new_products">
           
                    <div class="new_prod_box">
                        <a href="details.php">runbut</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href="details.php"><img src="images/thumb1.jpg" alt="" width="90" height="90" class="thumb" title="" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="details.php">go chat for facebook</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href="details.php"><img src="images/thumb2.jpg" alt="" width="90" height="90" class="thumb" title="" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.php">dictionary english to urdu</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href="details.php"><img src="images/thumb3.jpg" alt="" width="90" height="91" class="thumb" title="" border="0" /></a>
                        </div>           
                    </div>          
            
            </div> 
          
            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <?php include'rightcontent.php';?>
        
        
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
		<?php include 'footer.php' ?>
    

</div>

</body>
</html>