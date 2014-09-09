<div class="panel-body">
    <div class="tab-pane fade in active">
        <h4>Add Documents Upload Form</h4>
        <!--the first tab to load is the username setting form...-->                                                            
        <form role="form">            
            <div class="form-group">        
                <label>Title</label>
                <input ng-model="centerBoxForm.title" class="form-control" id="title" name="title" type="text" placeholder="Enter the title..." required=""/>
            </div>            
            <div class="form-group">        
                <label>Prepared By</label>
                <input ng-model="centerBoxForm.preparedBy" class="form-control" id="preparedBy" name="preparedBy" type="text" placeholder="Enter prepared by..." required=""/>
            </div> 
            <div class="form-group">        
                <label>For Category</label>
                <select name="slctforcategory" id="slctforcategory" style="width:100%">
                    <option value="" selected="selected">--Select--</option>
                    <option value="KG">KG</option>
                    <option value="After School">After School</option>
                    <option value="KG and After School">KG and After School</option>
                    <option value="Personnel">Personnel</option>
                </select>
            </div>            
            <div class="form-group">
                <label>Description</label>
                <textarea ng-model="centerBoxForm.description" class="form-control jqte-test" id="description" name="description" required=""></textarea>
            </div>  
            <div class="form-group">        
                <label>Document</label>
                <input ng-model="centerBoxForm.document" class="form-control" id="document" name="document" type="file" required=""/>
            </div> 
            <button type="button" class="btn btn-primary" id="btnsave"> Save
            </button>
            <button type="reset" class="btn btn-primary"> Reset</button>    
        </form>
        
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('.jqte-test').jqte();         
        // settings of status
        var jqteStatus = true;
        $(".status").click(function()
        {
            jqteStatus = jqteStatus ? false : true;
            $('.jqte-test').jqte({"status" : jqteStatus})
        });
        
        $('#btnsave').click(function(){
            alert('button clicked');
        });
        
    });//end document.ready function
</script>

