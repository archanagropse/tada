<div class="container_full">
    <main class="content_wrapper">
        <div class="page-heading">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="page-breadcrumb">
                            <h1>Edit Question</h1>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-md-end d-md-flex">
                        <div class="breadcrumb_nav">
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <a class="parent-item" href="<?= base_url(); ?>Admin/dashboard">Home</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">
                                    Edit Question
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
                                                    <option value="<?= $level['level_id'] ?>" <?php if ($quiz['level_id'] == $level['level_id']): echo "selected";
                                                endif;
                                                    ?>><?= $level['level'] ?></option>
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
                                                    <option value="<?= $country['country_id'] ?>" <?php if ($quiz['country_id'] == $country['country_id']): echo "selected";
                                                        endif;
                                                            ?>><?= $country['country_name'] ?></option>
                                                            <?php endforeach; ?>

                                            </select>
                                        </div>
                                            <?= form_error('country') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Question : </label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="5" name="question" ><?= $quiz['question'] ?></textarea>
                                            <?= form_error('question') ?>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Type of Option : </label>
                                    <div class="col-sm-7">

                                        <div class="form-group">
                                            <select class="form-control" name="type" onchange="selectType(this)" readonly>
                                                <option disabled selected>Select Type</option>
                                                <option value="1" <?php if ($quiz['type'] == '1'): echo "selected";
                                                    endif;
                                                    ?>>Text</option>
                                                <option value="2" <?php if ($quiz['type'] == '2'): echo "selected";
                                                        endif;
                                                    ?>>Images</option>

                                            </select>
                                        </div>
                                        <?= form_error('type') ?>
                                    </div>
                                </div>
                                    <div class="question">
                                    <?php if ($quiz['type'] == '1'): ?>
                                        <div class="form-group row questionmain">
                                            <div class="col-sm-2">
                                                <div class="questitle">
                                                    <h3>Option 1 : </h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="quespart">
                                                    
                                                    <textarea class="form-control" rows="5" name="option[]"  required><?= $quiz['option_1']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row questionmain">
                                            <div class="col-sm-2">
                                                <div class="questitle">
                                                    <h3>Option 2 : </h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="quespart">
                                                    
                                                    <textarea class="form-control" rows="5" name="option[]" required><?= $quiz['option_2']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row questionmain">
                                            <div class="col-sm-2">
                                                <div class="questitle">
                                                    <h3>Option 3 : </h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="quespart">
                                                    
                                                    <textarea class="form-control" rows="5" name="option[]"  required><?= $quiz['option_3']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row questionmain">
                                            <div class="col-sm-2">
                                                <div class="questitle">
                                                    <h3>Option 4 : </h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="quespart">
                                                    
                                                    <textarea class="form-control" rows="5" name="option[]"  required><?= $quiz['option_4']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                            <?php else: ?>
                                        <div class="form-group row img-option">
                                            <label class="col-sm-2 control-label">Option 1 : </label>
                                            <div class="col-sm-3 titleeventimage">
                                                <div class="file-upload">
                                                    <img id="blah1" src="<?php if($quiz['option_1']=='') {echo base_url('assets/images/logo/dummy.jpg');}else{ echo $quiz['option_1'];} ?>" alt="image 1" />
                                                    <label for="upload1" class="file-upload__label">Add Image </label>
                                                    <input id="upload1" class="file-upload__input" type="file" name="file-upload[]" onchange="readURL(this, 1);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row img-option">
                                            <label class="col-sm-2 control-label">Option 2 : </label>
                                            <div class="col-sm-3 titleeventimage">
                                                <div class="file-upload">
                                                    <img id="blah2" src="<?php if($quiz['option_2']=='') {echo base_url('assets/images/logo/dummy.jpg');}else{ echo $quiz['option_2'];} ?>" alt="image 2" />
                                                    <label for="upload2" class="file-upload__label">Add Image </label>
                                                    <input id="upload2" class="file-upload__input" type="file" name="file-upload[]" onchange="readURL(this, 2);" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row img-option">
                                            <label class="col-sm-2 control-label">Option 3 : </label>
                                            <div class="col-sm-3 titleeventimage">
                                                <div class="file-upload">
                                                    <img id="blah3" src="<?php if($quiz['option_3']=='') {echo base_url('assets/images/logo/dummy.jpg');}else{ echo $quiz['option_3'];} ?>" alt="image 3" />
                                                    <label for="upload3" class="file-upload__label">Add Image </label>
                                                    <input id="upload3" class="file-upload__input" type="file" name="file-upload[]" onchange="readURL(this, 3);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row img-option">
                                            <label class="col-sm-2 control-label">Option 4 : </label>
                                            <div class="col-sm-3 titleeventimage">
                                                <div class="file-upload">
                                                    <img id="blah4" src="<?php if($quiz['option_4']=='') {echo base_url('assets/images/logo/dummy.jpg');}else{ echo $quiz['option_4'];} ?>" alt="image 4" />
                                                    <label for="upload4" class="file-upload__label">Add Image </label>
                                                    <input id="upload4" class="file-upload__input" type="file" name="file-upload[]" onchange="readURL(this, 4);">
                                                </div>
                                            </div>
                                        </div>

                                        <?php endif; ?>

                                </div>
                                

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Correct Answer : </label>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="correct_answer">
                                                <option disabled selected>Select Correct Option</option>
                                                <option value="option_1" <?php if ($quiz['answer'] == 'option_1'): echo "selected";
                                                        endif;
                                                        ?>>Option 1</option>
                                                <option value="option_2" <?php if ($quiz['answer'] == 'option_2'): echo "selected";
                                                        endif;
                                                    ?>>Option 2</option>
                                                <option value="option_3" <?php if ($quiz['answer'] == 'option_3'): echo "selected";
                                                        endif;
                                                    ?>>Option 3</option>
                                                <option value="option_4" <?php if ($quiz['answer'] == 'option_4'): echo "selected";
                                                        endif;
                                                    ?>>Option 4</option>
                                            </select>
                                        </div>
                                        <?= form_error('correct_answer') ?>
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 ml-auto addmore">
                                        <button class="btn btn-info btn-lg"  type="submit">Update Question</button>
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



</script>    


