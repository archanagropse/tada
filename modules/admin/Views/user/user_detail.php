    <div class="container_full">
      <main class="content_wrapper">
        <div class="page-heading">
          <div class="container-fluid">
            <div class="row d-flex align-items-center">
              <div class="col-md-6">
                <div class="page-breadcrumb">
                  <h1> User Detail </h1>
                </div>
              </div>
              <div class="col-md-6 justify-content-md-end d-md-flex">
                <div class="breadcrumb_nav">
                  <ol class="breadcrumb">
                    <li>
                      <i class="fa fa-home"></i>
                      <a class="parent-item" href="index.html">Home</a>
                      <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">
                      User Detail
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid Franchieseedetail">
          <div class="row">
           
            <div class="col-md-6">
                <div class="detailbox">
                   <h3>User Name</h3>
                   <h4><?= $user_info['name'] ?></h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailbox">
                   <h3>Email Id</h3>
                   <h4><?= $user_info['email'] ?></h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailbox">
                   <h3>Phone No</h3>
                   <h4><?= $user_info['mobile'] ?></h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailbox">
                   <h3>Date of Birth</h3>
                   <h4><?= $user_info['dob'] ?></h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailbox">
                   <h3>Gender</h3>
                   <h4><?php if($user_info['gender']=='1'):echo "male";else: if($user_info['gender']=='2'):echo "female";else: echo "others"; endif;endif; ?></h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailbox">
                   <h3>Profile Picture</h3>
                   <?php if($user_info['image'] != ''): ?>
                   <a href="<?= $user_info['image'] ?>" target="_blank">View Image</a>
                   <?php else: ?>
                   <h4>No Image Found</h4>
                   <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailbox">
                   <h3>Steet Address</h3>
                     <h4><?= $user_info['address1'] ?></h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detailbox">
                   <h3>City</h3>
                     <h4><?= $user_info['address2'] ?></h4>
                </div>
            </div>
           
          </div>
        </div>
      </main>
    </div>
