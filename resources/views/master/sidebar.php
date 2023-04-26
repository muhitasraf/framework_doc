<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background: rgb(245,245,250);
background: linear-gradient(90deg, rgba(245,245,250,1) 0%, rgba(240,240,255,1) 100%);">
    <div class="sidebar-sticky">
        
        <ul class="nav flex-column" id="menu">
            <?php foreach($category as $cat){?>
            <li class="nav-item">
                <a class="nav-link active" style="color:black;" href="<?php echo route('doc/datails/').$cat['id']; ?>">
                    <?php echo $cat['name']; ?>
                </a>
            </li>
            <?php } ?>
        </ul>
        
    </div>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3><?php echo $title;?></h3>
    </div>