<div id="home-content" class="left mobile-collapse">
    
    <h2 class="replace">Member Registration</h2>
    
    <div class="intro mobile-collapse">
        <div id="errorDiv" class="red page_title round_6" style="display: none"></div>
        <div id="successDiv" class="green page_title round_6" style="display: none"></div>
        <form action="#.php" id="contact_form" method="post">
                <div class="form_field">
                    <label><strong><font color="red">*</font>First Name</strong> </label>
                        <input type="text" name="txtfirstname" id="txtfirstname" class="text round_6" size="70%" />
                </div>
                <div class="form_field">
                        <label><strong><font color="red">*</font>Last Name</strong> </label>
                        <input type="text" name="txtlastname" id="txtlastname" class="text round_6" size="70%" />
                </div>
                <div class="form_field">
                        <label><strong><font color="red">*</font>Email</strong> </label>
                        <input type="email" name="txtemail" id="txtemail" class="text round_6" size="70%" />
                </div>
                <div class="form_field">
                        <label><strong><font color="red">*</font>Username</strong> </label>
                        <input type="text" name="txtusername" id="txtusername" class="text round_6" size="70%" />
                </div>
                <div class="form_field">
                        <label><strong><font color="red">*</font>Password</strong> </label>
                        <input type="password" name="txtpassword" id="txtpassword" class="text round_6" size="70%" />
                </div>
                <div class="form_field">
                        <label><strong><font color="red">*</font>Confirm Password</strong> </label>
                        <input type="password" name="txtconfirmpassword" id="txtconfirmpassword" class="text round_6" size="70%" />
                </div>
                <div class="form_field">
                        <label><strong><font color="red">*</font>Category</strong> </label>
                        <select name="slctcategory" id="slctcategory" style="width: 60%" class="text round_6">
                            <option value="" selected="selected">--Select--</option>
                            <option value="KG">KG</option>
                            <option value="After School">After School</option>
                            <option value="KG and After School">KG and After School</option>
                            <option value="Personnel">Personnel</option>
                        </select>
                </div>
                <div class="form_field">
                        <label><strong>Organization</strong></label>
                        <input type="text" name="txtorganization" id="txtorganization" class="text round_6" size="94%" />
                </div>
                <div class="form_field">
                        <label><strong>Description</strong> </label>
                        <textarea name="textareadescription" id="textareadescription" style="width:100%" rows="8" class="textarea round_6"></textarea>
                </div>
                <div class="form_field">
                    <input type="button" class="fancy" value="Register" id="btnregister" />
                    <input type="reset" class="fancy" value="Clear" id="btnreset" />
                </div>
        </form>

    </div> 
    
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#btnregister').click(function(){
            var firstName = $('#txtfirstname').val();
            var lastName = $('#txtlastname').val();
            var email = $('#txtemail').val();
            var username = $('#txtusername').val();
            var password = $('#txtpassword').val();
            var confirmPassword = $('#txtconfirmpassword').val();
            var memberCategory = $('#slctcategory').val();
            
                        
            if(firstName === ""){
                $('#errorDiv').html('Please enter your first name');
                $('#errorDiv').show();
                $('#txtfirstname').focus();
            }else if(lastName === ""){
                $('#errorDiv').html('Please enter your last name');
                $('#errorDiv').show();
                $('#txtlastname').focus();
            }else if(email === ""){
                $('#errorDiv').html('Please enter your email');
                $('#errorDiv').show();
                $('#txtemail').focus();
            }else if(username === ""){
                $('#errorDiv').html('Please enter your username');
                $('#errorDiv').show();
                $('#txtemail').focus();
            }else if(password === ""){
                $('#errorDiv').html('Please enter your password');
                $('#errorDiv').show();
                $('#txtemail').focus();
            }else if(confirmPassword === ""){
                $('#errorDiv').html('Please enter the confirmation password');
                $('#errorDiv').show();
                $('#txtemail').focus();
            }else if(password !== confirmPassword){
                $('#errorDiv').html('Password and confirmation password are not identical! Try again!');
                $('#errorDiv').show();
                $('#txtemail').focus();
            }else if(memberCategory === ""){
                $('#errorDiv').html('Please select the member category');
                $('#errorDiv').show();
                $('#slctcategory').focus();
            }else{                
                //validation has passed...
                var organization = $('#txtorganization').val();
                var description = $('#textareadescription').val();
                var dataString = "firstName="+firstName+"&lastName="+lastName+"&email="+email+"&organization="+organization+"&description="+
                        description+"&username="+username+"&password="+password+"&memberCategory="+memberCategory;
                //alert(dataString);
                //now do the ajax call...
                $.ajax({
                    url: 'page_sections/register_member.php',		
                    data: dataString,
                    type:'POST',
                    success:function(response){
                        $('#errorDiv').html('');
                        $('#errorDiv').hide();
                        $('#successDiv').html(response);                        
                        $('#successDiv').show();
                        //now clear the fields
                        clearFormInputFields();
                        
                        setTimeout(function() {
                            $('#successDiv').fadeOut('slow');
                        }, 3000); // <-- time in milliseconds
                        
                    },
                    error:function(error){
                        alert(error);
                    }
                });
                
            }//end else condition...
            
        });//end btn.click function
        
        
        $('#txtfirstname').keyup(function(){
            if($(this).val() !== ""){
                $('#errorDiv').html('');
                $('#errorDiv').hide();
            }
        });
        
        $('#txtlastname').keyup(function(){
            if($(this).val() !== ""){
                $('#errorDiv').html('');
                $('#errorDiv').hide();
            }
        });
        
        $('#txtemail').keyup(function(){
            if($(this).val() !== ""){
                $('#errorDiv').html('');
                $('#errorDiv').hide();
            }
        });
        
        $('#txtusername').keyup(function(){
            if($(this).val() !== ""){
                $('#errorDiv').html('');
                $('#errorDiv').hide();
            }
        });
        
        $('#txtpassword').keyup(function(){
            if($(this).val() !== ""){
                $('#errorDiv').html('');
                $('#errorDiv').hide();
            }
        });
        
        $('#txtconfirmpassword').keyup(function(){
            if($(this).val() !== ""){
                $('#errorDiv').html('');
                $('#errorDiv').hide();
            }
        });
        
        function clearFormInputFields(){
            $('#txtfirstname').val('');
            $('#txtlastname').val('');
            $('#txtemail').val('');
            $('#txtorganization').val('');
            $('#textareadescription').val('');  
            $('#txtusername').val('');
            $('#txtpassword').val('');
            $('#txtconfirmpassword').val('');
        }
        
        $('#txtfirstname').focus();
        
    });//end document.ready function
</script>