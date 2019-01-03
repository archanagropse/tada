         <div class="container_full">

      <div class="content_wrapper">
        <div class="container-fluid">
          <!-- breadcrumb -->
          <div class="page-heading">
            <div class="row d-flex align-items-center">
              <div class="col-md-6">
                <div class="page-breadcrumb">
                  <h1>Dashboard</h1>
                </div>
              </div>
              <div class="col-md-6 justify-content-md-end d-md-flex">
                <div class="breadcrumb_nav">
                  <ol class="breadcrumb">
                    <li>
                      <i class="fa fa-home"></i>
                      <a class="parent-item" href="<?php echo base_url('Admin/dashboard');?>">Home</a>
                      <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">
                      Dashboard
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- breadcrumb_End -->
         <!-- Site_view_box -->
          <div class="site_view">
            <div class="row">
              <div class="col-xl-3 col-md-6">
                <div class="info_items bg_green d-flex align-items-center">
                  <span class="info_items_icon">
                    <i class="fa fa-users"></i>
                  </span>
                  <div class="info_item_content">
                    <span class="info_items_text">No of Downloads</span>
                    <span class="info_items_number">450</span>
                  </div>
                </div>
              </div>
              <!-- /info-box-content -->
              <div class="col-xl-3 col-md-6">
                <div class="info_items bg_yellow d-flex align-items-center">
                  <span class="info_items_icon">
                    <i class="fa fa-file-video-o"></i>
                  </span>
                  <div class="info_item_content">
                    <span class="info_items_text">No of Video</span>
                    <span class="info_items_number">155</span>
                  </div>
                </div>
              </div>
              <!-- /info-box-content -->
              <div class="col-xl-3 col-md-6">
                <div class="info_items bg_blue d-flex align-items-center">
                  <span class="info_items_icon">
                    <i class="fa fa-user"></i>
                  </span>
                  <div class="info_item_content">
                    <span class="info_items_text">No of People</span>
                    <span class="info_items_number">552</span>
                  </div>
                </div>
              </div>
              <!-- /info-box-content -->
              <div class="col-xl-3 col-md-6">
                <div class="bg_pink info_items d-flex align-items-center">
                  <span class="info_items_icon">
                    <i class="fa fa-usd"></i>
                  </span>
                  <div class="info_item_content">
                    <span class="info_items_text">Total Revenue</span>
                    <span class="info_items_number">15000</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
            </div>
          </div>
          <!-- Site_view_box_End -->
          <!-- Chat -->
          <div class="chart_section">
            <div class="row">
              <div class="col-lg-6">
                <div class="full_chart card">
                  <div class="chart_header">
                    <div class="chart_headibg">
                      <h3>Recently Added User List</h3>
                    </div>
                  </div>
                  <div class="mytablehome">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile No</th>
                              <th>City</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($user_list as $user): ?>
                              <tr>
                                  <td><?= $user['name'] ?></td>
                                  <td><?= $user['email'] ?></td>
                                  <td><?= $user['mobile'] ?></td>
                                  <td><?= $user['address2'] ?></td>
                              </tr>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="full_chart card">
                  <div class="chart_header">
                    <div class="chart_headibg">
                      <h3>Achievement Awards List</h3>
                    </div>
                  </div>
                  <div class="mytablehome">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Achievement</th>
                              <th>Countries</th>
                              <th>Attempt</th>
                              <th>Points</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            
                          </tbody>
                        </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     