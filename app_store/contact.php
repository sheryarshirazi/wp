<?php include"header.php" ?> 
<?php
	if(isset($_POST['btnSub'])){
		$name=$_POST['txtName'];
		$email=$_POST['txtEmail'];
		$sub=$_POST['txtSub'];
		$message=$_POST['txtMsg'];
		$from="From: $email";
		$to='sheryarshirazi@gmail.com';
		if(mail($to,$sub,$message,$from)){
			echo 'Email has been send to our Admin';	
		}//if
		else{
			echo 'try again';
		}
	}//
 ?>   
       
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Contact Us</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">all fields are requierd</div>          
                    <form action="contact.php" method="post">
                    <div class="form_row">
                    <label class="contact"><strong>Name:</strong></label>
                    <input type="text" name="txtName" class="contact_input" />
                    </div>  

                    <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input type="text" name="txtEmail" class="contact_input" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Subject:</strong></label>
                    <input type="text" name="txtSub" class="contact_input" />
                    </div>
                    
					<div class="form_row">
                    <label class="contact"><strong>Message:</strong></label>
                    <textarea name="txtMsg" class="contact_textarea" ></textarea>
                    </div>

                    
                    <div class="form_row">
                    <input type="submit" name="btnSub" class="contact" value="send"/></div>      
                </div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
<?php include"sidebar.php" ?> 
             
       <div class="footer">
       <div id="developper">
       <a href="https://www.facebook.com/aavi.khan?fref=ts">	
       	<img src="footer/about.jpg" alt="Mad Scientist" width="189" height="140" style="margin-left:20%;" /> 
       </a>
       <a href="https://www.facebook.com/aavi.khan?fref=ts">
       	<img src="Footer/help.jpg" alt="Mad Scientist" width="189" height="140" /> 
       </a>	
       <a href="https://www.facebook.com/sheryar.shirazi">
       	<img src="Footer/twitter.jpg" alt="Mad Scientist" width="189" height="140" /> 
       </a>
       </div>
       
       	<div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
        <div class="right_footer">
        <a href="#">home</a>
        <a href="#">about us</a>
        <a href="#">services</a>
        <a href="#">privacy policy</a>
        <a href="#">contact us</a>
       
        </div>
        
       
       </div>
    

</div>

</body>
</html>