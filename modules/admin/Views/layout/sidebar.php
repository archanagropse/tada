

    <div class="container_full">

      <div class="side_bar scroll_auto">

        <div class="user-panel">

          <div class="user_image">

            <img src="<?= base_url().'assets/images/admin/'.$admin_info['image'];?>" class="img-circle" alt="User Image">

          </div>

          <div class="info">

            <p>

              <?= $admin_info['username'];?>

            </p>

            <a href="<?php echo base_url('Admin/dashboard');?>">

              <i class="fa fa-circle text-success"></i> Online</a>

          </div>

        </div>

        <ul id="dc_accordion" class="sidebar-menu tree">

          <li>

            <a href="<?php echo base_url('Admin/dashboard');?>">

              <i class="fa fa-home"></i>

              <span>Dashboard</span>

            </a>

          </li>

          <li class="menu_sub">

            <a href="#">

              <i class="fa fa-user"></i>

              <span>User Management</span>

              <span class="arrow"></span>

            </a>

            <ul class="down_menu">

              <li>

                <a href="<?php echo base_url('Admin/users');?>">User List</a>

              </li>

            </ul>

          </li>
           <li class="menu_sub">
            <a href="#">
              <i class="fa fa-address-book"></i>
              <span>Quiz Management</span>
              <span class="arrow"></span>
            </a>
            <ul class="down_menu">
              <li>
                <a href="<?php echo base_url('Admin/question-list');?>">Question List</a>
              </li>
              <li>
                <a href="<?php echo base_url('Admin/add-question');?>">Add Question</a>
              </li>
            </ul>
          </li>
          <li class="menu_sub">
            <a href="#">
              <i class="fa fa-gear"></i>
              <span>Admin Setting</span>
              <span class="arrow"></span>
            </a>
            <ul class="down_menu">
              <li>
                <a href="<?php echo base_url('Admin/level');?>">Levels</a>
              </li>
              <li>
                <a href="<?php echo base_url('Admin/country');?>">Countries</a>
              </li>
            </ul>
          </li>
        </ul>
          

        </ul>

      </div>
    </div>

      