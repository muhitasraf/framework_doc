
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
        <!-- company details content -->
        <form action="<?php echo route('description/update'); ?>" method="post">
            <?php echo _csrf(); ?>
            <div class="col col-md-12">
                <hr class="col-md-12 float-left" style="padding: 0px; width: 95%; border-top: 2px solid  #02b6ff;">
            </div>
            <!-- company name control -->
            <div class="row col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="title">Title :</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $description['title']; ?>" placeholder="Title" id="title">
                    <input type="hidden" value="<?php echo  $description['id'];?>" name="description_id">
                    <code class="text-danger small font-weight-bold float-right" id="title_error" style="display: none;"></code>
                </div>
            </div>

            <!-- company name control -->
            <div class="row col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="category">Category :</label>
                    <select name="category" class="form-control" id="category">
                        <?php 
                        foreach($category as $cat){ 
                        $selected ='';
                        if($description['cat_id'] == $cat['id']){
                            $selected = 'selected';
                        }   
                        echo "<option value=".$cat['id']." $selected>".$cat['name']."</option>";
                        ?> 
                        <?php } ?>
                    </select>
                    <code class="text-danger small font-weight-bold float-right" id="category_error" style="display: none;"></code>
                </div>
            </div>
            
            <!-- company address control -->
            <div class="row col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="description">Description :</label>
                    <textarea class="form-control description" name="description" placeholder="Description" id="summernote"><?php echo $description['details'];?></textarea>
                    <code class="text-danger small font-weight-bold float-right" id="description_error" style="display: none;"></code>
                </div>
            </div>
            
            <!-- horizontal line -->
            <div class="col col-md-12">
                <hr class="col-md-12 float-left" style="padding: 0px; width: 95%; border-top: 1px solid  #02b6ff;">
            </div>
            <!-- form submit button -->
            <div class="row col col-md-12">
                &emsp;
                <div class="form-group m-auto">
                    <button class="btn btn-primary">ADD Company</button>
                </div>
            </div>
        </form>
    </div>
