<div class="container_full">
    <div class="container-fluid">
        <main class="content_wrapper">
            <div class="page-heading">
                <div class="container-fluid">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="page-breadcrumb">
                                <h1>Question List</h1>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-end d-flex">
                            <div class="breadcrumb_nav">
                                <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Home</a>
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">
                                        Question List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid questionlist">
                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <?php echo $this->session->flashdata('response'); ?>
                                <form class="form-inline" method="post" >
                                    
                                            <div class="form-group">
                                                <select class="form-control" name="level">
                                                    <option disabled selected>Select Level</option>
                                                    <?php foreach ($level_list as $level): ?>
                                                        <option value="<?= $level['level_id'] ?>" <?php if(isset($_POST['level'])== $level['level_id'] ){echo "selected";}?>><?= $level['level'] ?></option>
                                                    <?php endforeach;?>

                                                </select>
                                                
                                            </div>
                                           <div class="form-group">
                                                <select class="form-control" name="country">
                                                    <option disabled selected>Select Country</option>
                                                    <?php foreach ($country_list as $country): ?>
                                                        <option value="<?= $country['country_id'] ?>" <?php if(isset($_POST['country'])== $country['country_id'] ){echo "selected";}?>><?= $country['country_name'] ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                          
                                    <button type="submit" name="searchBtn" class="btn btn-default">Search</button>
                                </form>
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
                                            <th>Sr.No.</th>
                                            <th>Question</th>
                                            <th>No of Option</th>
                                            <th>Level</th>
                                            <th>Country</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $count = 1;
                                        foreach ($questions as $row):
                                            ?>
                                            <tr>
                                                <td><?= $count; ?></td>
                                                <td style="width: 300px;"><?= $row['question']; ?></td>
                                                <td>4</td>
                                                <td><?php
                                                    $level = get_level($row['level_id']);
                                                    if ($level) {
                                                        echo $level[0]['level'];
                                                    } else {
                                                        echo "level unknown";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $country = get_country($row['country_id']);
                                                    if ($country) {
                                                        echo $country[0]['country_name'];
                                                    } else {
                                                        echo "country unknown";
                                                    }
                                                    ?>
                                                </td>
                                                <td class="mytd"><a href="<?php echo base_url('Admin/question-detail/' . $row['id']); ?>"><i class="fa fa-eye"></i></a>
                                                    <a href="<?php echo base_url('Admin/edit-question/' . $row['id']); ?>"><i class="fa fa-edit"></i></a>
                                                    <!--<a href="<?php //echo base_url('Admin/delete-question/' . $row['id']); ?>"><i class="fa fa-trash"></i></a>-->
                                                </td>
                                                <td><div class="mytoggle">
                                                        <label class="switch">
                                                            <input type="checkbox" <?php if ($row['status'] == '1'):echo "checked";
                                                    endif;
                                                    ?> onchange="checkStatus(this, '<?= $row['id']; ?>');" id="switch1-<?= $count; ?>">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $count++;
                                        endforeach;
                                        ?>
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
                url: "<?= base_url(); ?>admin/Quiz/change_status",
                type: 'post',
                data: 'id=' + id + '&status=' + status,
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