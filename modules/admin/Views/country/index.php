    <div class="container_full">
      <main class="content_wrapper">
        <div class="page-heading">
          <div class="container-fluid">
            <div class="row d-flex align-items-center">
              <div class="col-md-6">
                <div class="page-breadcrumb">
                  <h1>Add Country </h1>
                </div>
              </div>
              <div class="col-md-6 justify-content-md-end d-md-flex">
                <div class="breadcrumb_nav">
                  <ol class="breadcrumb">
                    <li>
                      <i class="fa fa-home"></i>
                      <a class="parent-item" href="<?= base_url();?>Admin/dashboard">Home</a>
                      <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">
                      Add Country
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <div class="card card-shadow mb-4">
                      <div class="card-body">
                        <form id="addcoupon" method="post" class=" right-text-label-form">
                          <div class="form-group row">
                            <label class="col-sm-4 control-label">Add Country : </label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" placeholder="Country Name" name="country_name" required/>
                              <?php echo form_error('country_name');?>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-8 ml-auto">
                              <button type="submit" class="btn btn-primary">
                                Submit 
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-md-6">
                    <div class="container-fluid">
                        <!-- state start-->
                        <div class="row">
                            <div class=" col-sm-12">
                                <div class="card card-shadow mb-4">
                                    <div class="card-body">
                                        <?= $this->session->flashdata('response'); ?>
                                        <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Country Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                <?php $count=1;foreach($country_list as $country): ?>
                                            <tr>
                                                <td><?= $count;?></td>
                                                <td><?= $country['country_name'];?></td>
                                                <td class="mytd">
                                                      <a href="#" onclick="deleteData(<?=$country['country_id'] ?>);"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                                <?php $count++;endforeach;?>
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


      </main>
    </div>






<style type="text/css">
  div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;

    width: 75%;
}
</style>
<script>
    function deleteData(id) {
        var check=confirm('Do you really want to delete country?');
        if (id && check) {
       
            $.ajax({
                url: "<?= base_url(); ?>admin/Admin/ajax",
                type: 'post',
                data: 'method=delete_country&id=' + id,
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
            return false;
        }
    }
    
    </script>