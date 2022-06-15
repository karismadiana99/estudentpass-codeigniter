<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
</div>

<!-- /.container-fluid -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    if ($this->session->flashdata('message')) : ?>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-12 mx-auto mb-4">
            <div class="card shadow">
                <div class="card-body mx-4">
                    <?php
                    // echo count($query);
                    // $i = 1;
                    // foreach ($data as $row) {
                    //     echo $row->user_id;
                    // }
                    ?>

                    <h5 class="m-0 font-weight-bold text-primary mb-4">A. Particular of Applicant</h5>
                    <form action="" method="POST" autocomplete="off">
                        <div class="form-group">
                            <label for="app_fullname">Fullname</label>
                            <input type="text" class="form-control text-uppercase" id="app_fullname" name="app_fullname"
                                value="<?= set_value('app_fullname') ?>">
                            <?= form_error('app_fullname', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="app_nric">IC NUmber</label>
                                <input type="text" class="form-control text-uppercase" id="app_nric" name="app_nric"
                                    maxlength="12" minlength="12" value="<?= set_value('app_nric') ?>">
                                <?= form_error('app_nric', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="app_gender">Gender</label>
                                <select id="app_gender" name="app_gender" class="form-control">
                                    <option value="" selected>Choose</option>
                                    <option value="MALE" <?= set_value('app_gender') == 'MALE' ? 'selected' : '' ?>>
                                        MALE
                                    </option>
                                    <option value="FEMALE" <?= set_value('app_gender') == 'FEMALE' ? 'selected' : '' ?>>
                                        FEMALE
                                    </option>
                                </select>
                                <?= form_error('app_gender', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="app_nationality">Nationality</label>
                                <select id="app_nationality" name="app_nationality" class="form-control">
                                    <option value="" selected>Choose</option>
                                    <option value="MALAYSIA"
                                        <?= set_value('app_nationality') == 'MALAYSIA' ? 'selected' : '' ?>>
                                        MALAYSIA
                                    </option>
                                    <option value="OTHERS"
                                        <?= set_value('app_nationality') == 'OTHERS' ? 'selected' : '' ?>>
                                        OTHERS
                                    </option>
                                </select>
                                <?= form_error('app_nationality', '<small class="text-danger">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="app_placebirth">Place/Country of Birth</label>
                                <input type="text
                                " class="form-control text-uppercase" id="app_placebirth" name="app_placebirth"
                                    value="<?= set_value('app_placebirth') ?>">
                                <?= form_error('app_placebirth', '<small class="text-danger">', '</small>') ?>
                            </div>
                        </div>
                        <hr class="border border-info mb-3 mt-4">

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-80">
                                    <i class="far fa-save fa-lg"></i>
                                </span>
                                <span class="text">Save and Next</span>
                            </button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

</div>


</div>
<!-- End of Main Content -->