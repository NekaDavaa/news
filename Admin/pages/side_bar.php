<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>

           <li class="">
            <a class="" href="profile.php?user_id=<?php echo $user_obj->getID();?>">
                          <i class="icon_profile"></i>
                          <span>Profile</span>
                      </a>
          </li>

            <li class="">
            <a class="" href="category.php">
                          <i class="fa fa-suitcase"></i>
                          <span>Category</span>
                      </a>
          </li>
          
         <?php 
            $role = $user_obj->getRole();
            if ($role === 'Admin'):
           ?>
           <li class=''>
            <a class='' href='add_category.php'>
                          <i class='fa fa-folder'></i>
                          <span>Add Category</span>
                      </a>
          </li>
        <?php endif;?>

            <?php 
            $role = $user_obj->getRole();
            if ($role === 'Admin'):
           ?>
           <li class=''>
            <a class='' href='add_post.php'>
                          <i class='fa fa-globe'></i>
                          <span>Add News</span>
                      </a>
          </li>
        <?php endif;?>

          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>