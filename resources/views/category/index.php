
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

        <div class="col col-md-8 table-responsive pt-4">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 5%;">SL.</th>
                            <th style="width: 15%;">Type Name</th>
                            <th style="width: 20%;">Status</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($category as $key=>$cat){ ?>
                        <tr>
                            <td><?php echo ++$key;?></td>
                            <td><?php echo $cat['name'];?></td>
                            <td><?php echo $cat['status']==1 ? 'Active': 'InActive';?></td>
                            <td>
                                <a href="<?php echo route('category/edit/').$cat['id'];?>">
                                    <button href="" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                                <a href="<?php echo route('category/show/').$cat['id'];?>">
                                    <button class="btn btn-success btn-sm" onclick="cancel();">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>
                                <button class="btn btn-danger btn-sm" onclick="cancel();">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>