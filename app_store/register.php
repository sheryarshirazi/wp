<?php include"header.php" ?>    
 <script src="js/registerVal.js" type="text/javascript" language="javascript1.5"></script>      
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Register</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 					    		incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">create new account</div>
                 <form name="register" action="insertreg.php" method="post">          
                    <div class="form_row">
                    <label class="contact"><strong>First Name :</strong></label>
                    <input type="text" id="ufName" name="ufName" class="contact_input" onblur="fncheck()" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Last name :</strong></label>
                    <input type="text" id="ulName" name="ulName" class="contact_input" onblur="lncheck()" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Username :</strong></label>
                    <input type="text" id="nUserName" name="nUserName" class="contact_input" onblur="namecheck()" 
                    placeholder="username"/>
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>Password :</strong></label>
                    <input type="password" name="nUserPass1" id="nUserPass1" class="contact_input" />
                    </div> 
					
                    <div class="form_row">
                    <label class="contact"><strong>Password :</strong></label>
                    <input type="password" name="nUserPass2" id="nUserPass2" class="contact_input" placeholder="confirm password" onblur="passCheck()"/>
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Gender :</strong></label>
                    <input type="text" id="nUserGender" name="nUserGender" class="contact_input" onblur="gcheck()" 
                    placeholder="female or Male"/>
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Email :</strong></label>
                    <input type="text" name="nUserEmail" class="contact_input" onblur="emailCheck()" />
                    </div>
					
                    <div class="form_row">
                    <label class="contact"><strong>Date of Birth:</strong></label>
                    <input type="text" id="nUserDOB" name="nUserDOB" class="contact_input" onblur="dobCheck()" 
                    placeholder="25-25-1992"/>
                    </div>

                    
                    
                   	<div class="form_row">
                        <div class="terms">
                        <input type="checkbox" name="terms" />
                        I agree to the <a href="term.txt">terms &amp; conditions</a>                        </div>
                    </div> 

                    
                    <div class="form_row">
                    <input type="submit" name="btnSubmit" class="register" value="register" onclick="validate()" />
                    </div>   
                  </form>     
                </div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
<?php 
include("sidebar.php");
include("footer.php")

 ?>