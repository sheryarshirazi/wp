<?php
	include('config.inc.php');
	$query="SELECT * FROM apps order by app_id asc limit 4";
	$index=mysql_query($query) or mysql_query();
 ?>


        <div class="right_content">
             <div class="right_box">
             
             	<div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" title="" /></span>Promotions</div> 
                <form method="post" action="search.php">
                	<input type="search"  name="appSearch" placeholder="type app name"/>
                    <input type="submit" value="search"/>
                </form>
                
                <?php
                    while($apps=mysql_fetch_assoc($index)){
                    	echo"
                    
                    <div class='new_prod_box'>
                        <a href='details.php?id=".$apps['app_id']."'>".$apps['app_name']."</a>
                        <div class='new_prod_bg'>
                        <span class='new_icon'><img src='images/new_icon.gif' alt='' title='' /></span>
                        <a href='details.php?id=".$apps['app_id']."'><img src='".$apps['app_img']."' alt='' title='' class='thumb' border='0' width='60' height='90' /></a>
                        </div>           
                    </div>
						";
					}//while
				?>
        	</div><!--right_box-->
         </div><!--end of right content-->
        
       
       <div class="clear"></div>
       </div><!--end of center content-->