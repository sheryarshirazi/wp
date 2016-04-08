<?php 
	$id=$_GET['id'];
	//echo $id;
	include('config.inc.php');
	$query="SELECT * FROM apps WHERE app_id=".$id;
	$index=mysql_query($query);
	$apps=mysql_fetch_assoc($index);
	$cat=array("Games"=>0,"Education"=>1,"Entertainment"=>2);
?>

<?php
include("header.php"); 
//echo $view;
?>
       
       <div class="center_content">
       	<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
            <?php echo $apps['app_name']?></div>
        
        	<div class="feat_prod_box_details">
            
            	<div class="prod_img"><a href="details.html">
                <img width="98" height="150" src="<?php echo $apps['app_img'] ?>" alt="" title="" border="0" /></a>
                <br /><br />
                <a href="<?php echo $apps['app_screen']?>" rel="lightbox"><img src="images/zoom.gif" alt="" title="" border="0" /></a>
          </div>
                
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">Details</div>
                    <p class="details"><?php echo $apps['app_desc']?></p>
                    
                    
                    <a href="<?php 
							
							if($num2==1){
								echo $apps['app_link'];
							} 
							else{
								echo header("location: myaccount.php");	
							}
					?>" class="more"><img src="images/download3.jpg" alt="" width="130" height="53" border="0" title="" /></a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	
            
              
            <div id="demo" class="demolayout">

                <ul id="demo-nav" class="demolayout">
                <li><a class="active" href="#tab1">More details</a></li>
                <li><a class="" href="category.php?cat=<?php echo $cat[$apps['app_cat']];?>">Related books</a></li>
                </ul>
    
            <div class="tabs-container">
            
                    <div style="display: block;" class="tab" id="tab1">
                                        <p class="more_details"><?php echo $apps['more_desc']?></p>                           
                    </div>	
                    
                            <div style="display: none;" class="tab" id="tab2">
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb2.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>    

                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb2.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>  


                   
                    <div class="clear"></div>
                            </div>	
            
            </div>


			</div>
            

            
        <div class="clear"></div>
        </div><!--end of left content-->
            
<?php 
include("sidebar.php");
include("footer.php") ?>
<script type="text/javascript">

var tabber1 = new Yetii({
id: 'demo'
});

</script>
</html>