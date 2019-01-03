<div class="container_full">
    <main class="content_wrapper">
        <div class="page-heading">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="page-breadcrumb">
                            <h1>Add Question</h1>
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
                                    Add Question
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="addcoupon" method="post" class=" right-text-label-form" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Select Level : </label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="level">
                                                <option disabled selected>Select Level</option>
                                                <?php foreach ($level_list as $level): ?>
                                                    <option value="<?= $level['level_id'] ?>"><?= $level['level'] ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <?= form_error('level') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Select Country : </label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="country">
                                                <option disabled selected>Select Country</option>
                                                <?php foreach ($country_list as $country): ?>
                                                    <option value="<?= $country['country_id'] ?>"><?= $country['country_name'] ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <?= form_error('country') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Question : </label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="5" name="question"></textarea>
                                        <?= form_error('question') ?>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Type of Option : </label>
                                    <div class="col-sm-7">

                                        <div class="form-group">
                                            <select class="form-control" name="type" onchange="selectType(this)">
                                                <option disabled selected>Select Type</option>
                                                <option value="1">Text</option>
                                                <option value="2">Images</option>

                                            </select>
                                        </div>
                                        <?= form_error('type') ?>
                                    </div>


                                </div>
                                <div class="option"></div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Correct Answer : </label>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="correct_answer">
                                                <option disabled selected>Select Correct Option</option>
                                                <option value="option_1">Option 1</option>
                                                <option value="option_2">Option 2</option>
                                                <option value="option_3">Option 3</option>
                                                <option value="option_4">Option 4</option>
                                            </select>
                                        </div>
                                        <?= form_error('correct_answer') ?>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 ml-auto addmore">
                                        <button class="btn btn-info btn-lg"  type="submit">Add Question</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </main>
</div>
<script>
    function readURL(input, countName) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah' + countName)
                        .attr('src', e.target.result)
                        
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    
    
    function selectType(obj){
        var type=obj.value;
        if(type == '1'){
           $(".text-option").remove();
          $(".img-option").remove();
          var html="";
           html+='<div class="form-group row text-option">';
           html+='<label class="col-sm-2 control-label">Option 1 : </label>';
           html+='<div class="col-sm-6">';
           html+='<textarea class="form-control" rows="5" name="option[]" required></textarea>';
           html+='</div>';
                                   
           html+='</div>';
           html+='<div class="form-group row text-option">';
           html+='<label class="col-sm-2 control-label">Option 2 : </label>';
           html+='<div class="col-sm-6">';
           html+='<textarea class="form-control" rows="5" name="option[]"required></textarea>';
           html+='</div>';
                                   
           html+='</div>';
           html+='<div class="form-group row text-option">';
           html+='<label class="col-sm-2 control-label">Option 3 : </label>';
           html+='<div class="col-sm-6">';
           html+='<textarea class="form-control" rows="5" name="option[]" required></textarea>';
           html+='</div>';
                                   
           html+='</div>';
           html+='<div class="form-group row text-option">';
           html+='<label class="col-sm-2 control-label">Option 4 : </label>';
           html+='<div class="col-sm-6">';
           html+='<textarea class="form-control" rows="5"name="option[]" required></textarea>';
           html+='</div>';
                                    
           html+='</div>';
           
           $(".option").append(html);
                              
          
        }
        else{
             $(".text-option").remove();
          $(".img-option").remove();
            var html='';
            html+='<div class="form-group row img-option">';
            html+='<label class="col-sm-2 control-label">Option 1 : </label>';
            html+='<div class="col-sm-3 titleeventimage">';
            html+='<div class="file-upload">';
            html+='<img id="blah1" src="<?php echo base_url(); ?>assets/images/logo/dummy.jpg" alt="your image" />';
            html+='<label for="upload1" class="file-upload__label">Add Image </label>';
            html+='<input id="upload1" class="file-upload__input" type="file" name="file-upload[]" onchange="readURL(this, 1);" required>';
            html+='</div>';
            html+='</div>';
            html+='</div>';
            html+='<div class="form-group row img-option">';
            html+='<label class="col-sm-2 control-label">Option 2 : </label>';
            html+='<div class="col-sm-3 titleeventimage">';
            html+='<div class="file-upload">';
            html+='<img id="blah2" src="<?php echo base_url(); ?>assets/images/logo/dummy.jpg" alt="your image" />';
            html+='<label for="upload2" class="file-upload__label">Add Image </label>';
            html+='<input id="upload2" class="file-upload__input" type="file" name="file-upload[]" onchange="readURL(this, 2);" required>';
            html+='</div>';
            html+='</div>';
            html+='</div>';
            html+='<div class="form-group row img-option">';
            html+='<label class="col-sm-2 control-label">Option 3 : </label>';
                                    
            html+='<div class="col-sm-3 titleeventimage">';
            html+='<div class="file-upload">';
            html+='<img id="blah3" src="<?php echo base_url(); ?>assets/images/logo/dummy.jpg" alt="your image" />';
            html+='<label for="upload3" class="file-upload__label">Add Image </label>';
            html+='<input id="upload3" class="file-upload__input" type="file" name="file-upload[]" onchange="readURL(this, 3);" required>';
            html+='</div>';
            html+='</div>';
            html+='</div>';
            html+='<div class="form-group row img-option">';
            html+='<label class="col-sm-2 control-label">Option 4 : </label>';
                                    
            html+='<div class="col-sm-3 titleeventimage">';
            html+='<div class="file-upload">';
            html+='<img id="blah4" src="<?php echo base_url(); ?>assets/images/logo/dummy.jpg" alt="your image" />';
            html+='<label for="upload4" class="file-upload__label">Add Image </label>';
            html+='<input id="upload4" class="file-upload__input" type="file" name="file-upload[]" onchange="readURL(this, 4);" required>';
            html+='</div>';
            html+='</div>';
            html+='</div>';
            
            $(".option").append(html);
        }
    }
</script>    
