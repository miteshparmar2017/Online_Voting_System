<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Candidate Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		<script  type="text/javascript">
		//Validation using Javascript
		        function validForm(){
				      //name
				       var eNm=document.getElementById("fullname").value;
					   if(eNm=="" || eNm==" "){
					         alert("Enter Name");
					        document.getElementById("fullname").focus();
							return false; 
					   }
					   if(!isNaN(eNm)){
					   
					        alert("Enter characters only");
							document.getElementById("fullname").focus();
							return false;
					   }
					   
					   //address
					   var eAddr=document.getElementById("addr").value;
					   if(eAddr=="" || eAddr==" "){
					         alert("Enter Address");
					        document.getElementById("addr").focus();
							return false; 
					   }
					   
					   
					   //DOB
					   var eDate=document.getElementById("DoB").value;
					   if(eDate=="" || eDate==" "){
					         alert("Enter Date Of Birth (DoB)");
					        document.getElementById("DoB").focus();
							return false; 
					   }
					   
					    if(!isNaN(eDate)){
					   
					        alert("Enter characters only");
							document.getElementById("DoB").focus();
							return false;
					   }
					   
					   //Adhar no
					   var eAdhr=document.getElementById("Adhr").value;
					   if(eAdhr=="" || eAdhr==" "){
					         alert("Enter Aadharr No.");
					        document.getElementById("Adhr").focus();
							return false; 
					   }
					  
					  
					   if(isNaN(eAdhr)){
					         alert("Enter  digits only!");
					        document.getElementById("Adhr").focus();
							return false; 
					   }
					    
					   if(eAdhr.length!=12){
					         alert("Enter 12 digits only!");
					        document.getElementById("Adhr").focus();
							return false; 
					   }
					   
					   
					   //Contact
					   var eConno=document.getElementById("Contact").value;
					   if(eConno=="" || eConno==" "){
					        alert("Enter Contact No.");
					        document.getElementById("eConno").focus();
							return false; 
					   }
					  
					  
					   if(isNaN(eConno)){
					         alert("Enter  digits only!");
					        document.getElementById("Contact").focus();
							return false; 
					   }
					    
					   if(eConno.length!=10){
					         alert("Enter 10 digits only!");
					        document.getElementById("Contact").focus();
							return false; 
					   }
					   
					   
					   //Gender
					   var eGen=document.getElementById("gen").value;
					   if(eGen=="Select"){
					        alert("Enter Gender");
					        document.getElementById("gen").focus();
							return false; 
					   }
					   
					   //Political Party
				       var eParty=document.getElementById("Party").value;
					   if(eParty=="" || eParty==" "){
					         alert("Enter Political Party");
					        document.getElementById("Party").focus();
							return false; 
					   }
					   if(!isNaN(eParty)){
					   
					        alert("Enter characters only");
							document.getElementById("Party").focus();
							return false;
					   }
					   
					    //Set Passwd
					   var eSPass=document.getElementById("Spassword").value;
					   if(eSPass==""||eSPass==" "){
					        alert("Enter Password");
					        document.getElementById("SPassword").focus();
							return false; 
					   }
					   
					   if(eSPass.length!=6){
					         alert("Password should be of length 6!");
					        document.getElementById("Spassword").focus();
							return false; 
					   }
					   
					   
					    //Confirm Passwd
					   var eCPass=document.getElementById("Cpassword").value;
					   if(eCPass==""||eCPass==" "){
					        alert("Confirm entered Password");
					        document.getElementById("CPassword").focus();
							return false; 
					   }
					   
					   if(eCPass.length!=6){
					         alert("Password should be of length 6!");
					        document.getElementById("Cpassword").focus();
							return false; 
					   }
					  
					  /*if(eCPass.value=eSpass.value){
					         alert("Entered password does not match!");
					        document.getElementById("Cpassword").focus();
							return false; 
					   }*/
					   
					   var password = document.getElementById("Spassword").value;
        var confirmPassword = document.getElementById("Cpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    
					   return true;
				
				}//end func
		
		</script>
   
    </head>
    <body>
        <div class="container">
          
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="cregcomp.php" method="POST" autocomplete="on"> 
                                <h1>Candidate Registration</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="" >  Full Name </label>
                                    <input id="fullname" name="fullname" required="required" type="text" placeholder="Full Name"/>
                                </p>
								
								<p> 
                                    <label for="address" class="address" data-icon="" >  Address </label>
                                    <input id="addr" name="addr" required="required" type="text" placeholder="Address"/>
                                </p>
								
								<p> 
                                    <label for="dob" class="dob" data-icon="" > Date of Birth(DoB) </label>
                                    <input id="DoB" name="DoB" required="required" type="date" placeholder="DoB"/>
                                </p>
								
								<p> 
                                    <label for="email" class="email" data-icon="" >  E-mail Id</label>
                                    <input id="EmailId" name="EmailId" required="" type="text" placeholder="Email Id"/>
                                </p>
								
								<p> 
                                    <label for="addhar" class="addhar" data-icon="" > Aadhar No.</label>
                                    <input id="Adhr" name="Adhr" required="" type="text" placeholder="Aadhar No"/>
                                </p>
								
								<p> 
                                    <label for="contact" class="contact" data-icon="" > Contact no</label>
                                    <input id="Contact" name="Contact" required="required" type="text" placeholder="Contact No"/>
                                </p>
								
								<p> 
                                    <label for="gender" class="gender" > Gender</label>
                                   <!-- <input id="gen" name="gen" required="" type="radio"/>Male
									 <input id="gen" name="gen" required="" type="radio"/>Female-->
									 <select id="gen" name="gen"> 
									 <option>Select</option>
									 <option>Male</option>
									 <option>Female</option>
							         </select>
									
                                </p>
								
								<p> 
                                    <label for="party" class="party" data-icon="" > Political Party</label>
                                
									 <select id="Party" name="Party"> 
									 <option>Select</option>
									 <option>BJP</option>
									 <option>Congress</option>
									 <option>ShivSena</option>
									 <option>NCP</option>
									 <option>AAP</option>
									 <option>Others</option>
							         </select>
                                </p>
								
																
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="">Set Password </label>
                                    <input id="Spassword" name="Spassword" required="required" type="password" placeholder="Password" /> 
                                </p>
								
								<p> 
                                    <label for="password" class="youpasswd" data-icon="">Confirm Password </label>
                                    <input id="Cpassword" name="Cpassword" required="required" type="password" placeholder="Password" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" value="Register" OnClick ="return validForm();"  /> 
								</p>
                                
                            </form>
                        </div>

                    
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>

