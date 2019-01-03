<div class="container_full">
    <main class="content_wrapper">
        <div class="page-heading">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="page-breadcrumb">
                            <h1> Question Detail </h1>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-md-end d-md-flex">
                        <div class="breadcrumb_nav">
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <a class="parent-item" href="<?= base_url() ?>Admin/dashboard">Home</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">
                                    Question Detail
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid questiondetail">
            <div class="row questionmain">
                <div class="col-sm-2">
                    <div class="questitle">
                        <h3>Question : </h3>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="quespart">
                        <p><?= $quiz['question']; ?></p>
                    </div>
                </div>
            </div>
            <?php if ($quiz['type'] == '1'): ?>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3>Option 1 : </h3>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="quespart">
                            <p><?= $quiz['option_1']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3>Option 2 : </h3>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="quespart">
                            <p><?= $quiz['option_2']; ?> </p>
                        </div>
                    </div>
                </div>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3>Option 3 : </h3>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="quespart">
                            <p><?= $quiz['option_3']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3>Option 4 : </h3>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="quespart">
                            <p><?= $quiz['option_4']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3> Answer : </h3>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="quespart">
                            <p><?php $option = $quiz['answer'];
            echo $quiz[$option]; ?></p>
                        </div>
                    </div>
                </div>
<?php else: ?>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3>Option 1 : </h3>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quespart">
                            <div class="col-sm-12 titleeventimage">
                                <div class="file-upload">
                                    <img src="<?= $quiz['option_1']; ?>" alt="image 1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3>Option 2 : </h3>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quespart">
                            <div class="col-sm-12 titleeventimage">
                                <div class="file-upload">
                                    <img src="<?= $quiz['option_2']; ?>" alt="image 2">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3>Option 3 : </h3>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quespart">
                            <div class="col-sm-12 titleeventimage">
                                <div class="file-upload">
                                    <img src="<?= $quiz['option_3']; ?>" alt="image 3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3>Option 4 : </h3>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quespart">
                            <div class="col-sm-12 titleeventimage">
                                <div class="file-upload">
                                    <img src="<?= $quiz['option_4']; ?>" alt="image 4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row questionmain">
                    <div class="col-sm-2">
                        <div class="questitle">
                            <h3> Answer : </h3>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quespart">
                            <div class="col-sm-12 titleeventimage">
                                <div class="file-upload">
                                    <img src="<?php $option = $quiz['answer'];
                                         echo $quiz[$option]; ?>" alt="image 4">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

<?php endif; ?>

            <div class="row questionmain">
                <div class="col-sm-12">
                    <div class="col-sm-8 ml-auto addmore">
                        <a href="<?php echo base_url('Admin/edit-question/'.$quiz['id']);?>">Edit Question</a>
                    </div>
                </div>
            </div>
        </div>


</div>
</main>
</div>
