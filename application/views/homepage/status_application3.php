<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

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
        <div class="col-md-8 mx-auto mb-4">
            <div class="card shadow">
                <div class="card-body mx-4">

                    <h5 class="m-0 font-weight-bold text-primary mb-4">Status of Application</h5>
                    <form action="" method="POST" autocomplete="off">

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="app_fullname" class="d-block font-weight-bold">Fullname</label>
                                <span class="d-block mb-3"><?= $applicant['app_fullname'] ?></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="app_nric" class="d-block font-weight-bold">IC NUmber</label>
                                <span class="d-block mb-3"><?= $applicant['app_nric'] ?></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="app_gender" class="d-block font-weight-bold">Gender</label>
                                <span class="d-block mb-3"><?= $applicant['app_gender'] ?></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="app_nationality" class="d-block font-weight-bold">Nationality</label>
                                <span class="d-block mb-3"><?= $applicant['app_nationality'] ?></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="app_placebirth" class="d-block font-weight-bold">Place/Country of
                                    Birth</label>
                                <span class="d-block mb-3"><?= $applicant['app_placebirth'] ?></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="app_status" class="d-block font-weight-bold">Status of Application</label>
                                <span class="d-block mb-3"><?= $applicant['app_status'] ?></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="app_status" class="d-block font-weight-bold">Reason</label>
                                <span class="d-block mb-3"><?= $applicant['reason_reject'] ?></span>
                            </div>
                        </div>
                        <hr class="border border-info mb-3 mt-4">

                        <div class="text-center">
                            <a href="<?= base_url('apply/reapplyApplicant') ?>" class="btn btn-primary"><span><i
                                        class="bi bi-plus-circle-fill"></i>
                                    &nbsp;&nbsp;</span>
                                Reapply Application</a>
                        </div>

                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- End of Main Content -->