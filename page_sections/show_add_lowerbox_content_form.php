<div class="panel-body">
    <div class="tab-pane fade in active">
        <h4>Add Lower Box Content</h4>
        <!--the first tab to load is the username setting form...-->                                                            
        <form role="form">            
            <div class="form-group">        
                <label>Which Column</label>  
                <input type="hidden" name="userId" id="userId" ng-model="lowerBoxForm.userId"/>
                <select ng-model="lowerBoxForm.whichColumn" class="form-control" name="whichColumn" id="whichColumn" style="width:100%">
                    <option value="" selected="selected">--Select--</option>
                    <option value="First Column">First Column</option>
                    <option value="Second Column">Second Column</option>
                    <option value="Third Column">Third Column</option>
                </select>
            </div>            
            <div class="form-group">        
                <label>Title</label>
                <input ng-model="lowerBoxForm.title" class="form-control" id="title" name="title" type="text" placeholder="Enter the title..." required=""/>
            </div>            
            <div class="form-group">
                <label>The Content</label>
                <textarea ng-model="lowerBoxForm.content" class="form-control jqte-test" id="content" name="content" required=""></textarea>
            </div>
            <div class="error-text" id="processStatusDiv">
                {{message}}
            </div>
            <button type="button" class="btn btn-primary" ng-click="saveLowerBoxContent();"> Save
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
    });//end document.ready function
</script>

