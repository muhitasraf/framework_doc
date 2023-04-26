
<div class="col col-md-8 pt-4">
    <a class="btn btn-primary ml-2" href="<?php echo route('category');?>">
        Category
    </a>
    <a class="btn btn-primary ml-2" href="<?php echo route('category/create');?>">
        Create Category
    </a>
    <a class="btn btn-primary ml-2" href="<?php echo route('description');?>">
        Description
    </a>
    <a class="btn btn-primary ml-2" href="<?php echo route('description/create');?>">
        Create Description
    </a>
</div>
<div class="col-md-6 pt-4">
    <form action="<?php echo route('category/update');?>" method="post">
    <?php echo _csrf();?>
    <div class="form-content">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-bold" for="cat_name">Category Name :</label>
                    <input type="text" class="form-control form-control-sm cat_name" name="cat_name" value="<?php echo $category_name['name']; ?>" id="cat_name">
                    <input type="hidden" name="cat_id" value="<?php echo $category_name['id']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-bold" for="status">Status :</label>
                    <select class="form-control select2" name="status" id="status">
                        <option value="1" <?php echo ($category_name['status']==1 ? 'selected' : ''); ?>>Active</option>
                        <option value="0" <?php echo ($category_name['status']==0 ? 'selected' : ''); ?>>In-Active</option>
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