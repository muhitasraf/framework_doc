
<div class="col col-md-8 pt-4">
    <a class="btn btn-primary ml-2" href="<?php echo route('category/create');?>">
        Create Category
    </a>
    <a class="btn btn-primary ml-2" href="<?php echo route('category');?>">
        Category
    </a>
    <a class="btn btn-primary ml-2" href="<?php echo route('description/create');?>">
        Create Description
    </a>
    <a class="btn btn-primary ml-2" href="<?php echo route('description');?>">
        Description
    </a>
</div>
<div class="col-md-6 pt-4">
    <form action="<?php echo route('category/store');?>" method="post">
    <?php echo _csrf();?>
    <div class="form-content">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-bold" for="cat_name">Category Name :</label>
                    <input type="text" class="form-control form-control-sm cat_name" name="cat_name" id="cat_name">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-bold" for="status">Status :</label>
                    <select class="form-control select2" name="status" id="status">
                        <option value="1">Active</option>
                        <option value="0">De-Active</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 text-right">
                <button type="submit" class="btnSubmit">Submit</button>
            </div>
        </div>
    </div>
    </form>
</div>