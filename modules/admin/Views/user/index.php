<div class="container_full">
    <div class="container-fluid">
        <main class="content_wrapper">
            <div class="page-heading">
                <div class="container-fluid">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="page-breadcrumb">
                                <h1>User List</h1>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-end d-flex">
                            <div class="breadcrumb_nav">
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <a class="parent-item" href="<?php echo base_url('Admin/dashboard'); ?>">Home</a>
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">
                                        User List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--page title end-->
            <div class="container-fluid">
                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                
                                <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Name</th>
                                            <th>Email Id</th>
                                            <th>Mobile</th>
                                            <th>Gender</th>
                                            <th>City</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $count1 = 1;
                                        foreach ($user_list as $data):
                                            ?>
                                            <tr>
                                                <td><?= $count1; ?></td>
                                                <td><?= $data['name']; ?></td>
                                                <td><?= $data['email']; ?></td>
                                                <td><?= $data['mobile']; ?></td>
                                                <td><?php if($data['gender']=='1'):echo "male";else: if($data['gender']=='2'):echo "female";else: echo "others"; endif;endif; ?></td>
                                                
                                                <td><?= $data['address1']; ?></td>

                                                <td class="mytd"><a href="<?php echo base_url('Admin/user-detail/'.$data['user_id']); ?>"><i class="fa fa-eye"></i></a>
                                                    <!--<a href="<?php// echo base_url('Provider/edit_provider'.$data['id']); ?>"><i class="fa fa-edit"></i></a>-->
                                                </td>
                                                <td><div class="mytoggle">
                                                        <label class="switch">
                                                            <input type="checkbox" <?php if($data['status']== '1'): echo "checked";endif;?> onchange="checkStatus(this, '<?= $data['user_id']; ?>');" id="switch1-<?= $count1; ?>">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $count1++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    function checkStatus(obj, id) {
        var checked = $(obj).is(':checked');
        if (checked == true) {
            var status = 1;
        } else {
            var status = 0;
        }
        if (id) {
            $.ajax({
                url: "<?= base_url(); ?>admin/Users/ajax",
                type: 'post',
                data: 'method=checkStatus&id=' + id + '&status=' + status,
                success: function (data) {
                    var dt = $.trim(data);
                    var jsonData = $.parseJSON(dt);
                    if (jsonData['error_code'] == "100") {
                        location.reload();
                    } else {
                        alert(jsonData['message']);
                    }
                }
            });
        } else {
            alert("Something Wrong");
        }
    }
    
  </script>