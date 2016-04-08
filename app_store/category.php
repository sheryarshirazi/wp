<?php 
	$selectedCat="Games";
	if(!empty($_GET['cat'])){
		$catIndex=$_GET['cat'];
		$category=array("Games","Education","Entertainment");
		$selectedCat=$category[$catIndex];	
	}
	
	//echo $catIndex;
	
	//echo $selectedCat;
	include('config.inc.php');
	$query="SELECT * FROM apps WHERE app_cat='".$selectedCat."'";
	$index=mysql_query($query);

?>
<style> #ref{ color:#036;}</style>
<?php include("header.php"); ?>
       <div class="center_content">
       	<div class="left_content">
        	
            <div class="title">
            <span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Category Apps
            	<a id="ref" href="category.php?cat=0">games</a>
            	<a id="ref" href="category.php?cat=1">education</a>
                <a id="ref" href="category.php?cat=2">entertainment</a>
            </div>
          <div class='new_products'>
		  <?php
           
           			
					
				while(
				$apps=mysql_fetch_assoc($index)){
					echo "
                    
						<div class='new_prod_box'>
							<a href='details.php?id=".$apps['app_id']."'>".$apps['app_name']."</a>
							<div class='new_prod_bg'>
							<a href='details.php?id=".$apps['app_id']."'><img width='60' height='90' src='".$apps['app_img']."' alt='' title='' class='thumb' 
							border='0' /></a>
							</div>           
                    </div><!--end of new product box-->
                    ";
				}//while
                    
			?>
                    
                    

            <div class="pagination">
            <span class="disabled">
            <<
            </span>
            	<span class="current">1
                </span>
                    	<a href="#?page=2">2</a>
                        	<a href="#?page=3">3</a>
                            	…<a href="#?page=199">10</a>
                                	<a href="#?page=200">11</a>
                                    	<a href="#?page=2">>></a>
            </div>  
            
            </div> 
          
            
        
        
</div><!--end of left content-->
<?php include"sidebar.php" ?>
<div class="clear"></div>
  </div><!--end of center content-->
<?php include"footer.php" ?>