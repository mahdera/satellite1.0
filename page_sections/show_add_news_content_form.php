<div class="panel-body">
    <div class="tab-pane fade in active">
        <h4>Add News Content</h4>
        <!--the first tab to load is the username setting form...-->                                                            
        <form role="form">            
            <div class="form-group">        
                <label>Title</label>
                <input ng-model="newsContentForm.title" class="form-control" id="title" name="title" type="text" placeholder="Enter the title..." required=""/>
                <input ng-model="newsContentForm.userId" class="form-control" id="userId" name="userId" type="hidden"/>
            </div>            
            <div class="form-group">
                <label>News Detail</label>
                <textarea ng-model="newsContentForm.newsDetail" class="form-control jqte-test" id="newsDetail" name="newsDetail" required=""></textarea>
            </div>
            <div class="error-text" id="processStatusDiv">
                {{message}}
            </div>
            <button type="button" class="btn btn-primary" ng-click="saveNewsContent();"> Save
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

