<?php $__env->startSection('content'); ?>
<div class ="container">
        <div class="jumbotron">
            <h2>Administrator</h2>
            
            <form action = "posting.php" method = "post" class = "form">
                <div class="row">
                    <div class="form-group col-xs-5 col-sm-8">
                        <label>Title</label>
                        <input type = "text" class = "form-control" name = "title">
                    </div>
                </div>
                      
                <div class="row">
                    <div class="form-group col-xs-6 col-sm-10">
                        <label>Article</label>
                        <textarea type = "text" class = "form-control"  name = "article-ckeditor" ></textarea>
                    </div>
                </div>
                  
                <button type="submit" class="btn btn-primary btn-lg">Publish</button>
                
            </form>
                            
        </div>
    </div>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>