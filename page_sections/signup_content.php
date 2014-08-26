<div id="home-content" class="left mobile-collapse">
    
    <h2 class="replace">Member Registration</h2>
    
    <div class="intro mobile-collapse">
        <div id="errorDiv" class="red page_title round_6" style="display: none"></div>
        <div id="successDiv" class="green page_title round_6" style="display: none">pymt</div>
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
                        <label><strong>Organization</strong></label>
                        <input type="text" name="txtorganization" id="txtorganization" class="text round_6" size="100%" />
                </div>
                <div class="form_field">
                        <label><strong>Description</strong> </label>
                        <textarea name="cform_message" id="textareadescription" style="width:100%" rows="8" class="textarea round_6"></textarea>
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
            
            if(firstName == ""){
                $('#errorDiv').html('Please enter your first name');
                $('#errorDiv').show();
                $('#txtfirstname').focus();
            }else if(lastName == ""){
                $('#errorDiv').html('Please enter your last name');
                $('#txtlastname').focus();
            }else if(email == ""){
                $('#errorDiv').html('Please enter your email');
                $('#txtemail').focus();
            }else{
                //validation has passed...
                var organization = $('#txtorganization').val();
                var description = $('#textareadescription').val();
                var dataString = "firstName="+firstName+"&lastName="+lastName+
                        "&email="+email+"&organization="+organization+"&description="+
                        description;
                //now do the ajax call...
                $.ajax({
                    url: 'register_member.php',		
                    data: dataString,
                    type:'POST',
                    success:function(response){
                        $('#errorDiv').html('');
                        $('#successDiv').html(response);                        
                    },
                    error:function(error){
                        alert(error);
                    }
                });
            }//end else condition...
            
        });//end btn.click function
        
        $('#txtfirstname').change(function(){
            
        });
    });//end document.ready function
</script>