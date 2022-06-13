<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

</div>

<!-- /.container-fluid -->
<!-- Begin Page Content -->
<div class="text-right col-md-8 mx-auto mb-4">
    <a href="<?= base_url('apply/renewApplicant') ?>" class="btn btn-info"><span><i class="bi bi-plus-circle-fill"></i>
        </span>Renew Application</a>
</div>
<br>
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
                    <br>
                    <h2 class="text-center m-0 font-weight-bold text-primary mb-4">Digital Student Pass</h2>
                    <hr class="border border-info mb-3 mt-4">
                    <br>
                    <form action="" method="POST" autocomplete="off">



                        <h5 class="font-weight-bold text-primary">A. Particular of Applicant</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="d-block font-weight-bold">Fullname</label>
                                <span class="d-block mb-3"><?= $applicant['app_fullname'] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="d-block font-weight-bold">NRIC</label>
                                <span class="d-block mb-3"><?= $applicant['app_nric'] ?></span>
                            </div>
                            <div class="col-md-3">
                                <label class="d-block font-weight-bold">Gender</label>
                                <span class="d-block mb-3"><?= $applicant['app_gender'] ?></span>
                            </div>
                            <div class="col-md-3">
                                <label class="d-block font-weight-bold">Nationality</label>
                                <span class="d-block mb-3"><?= $applicant['app_nationality'] ?></span>
                            </div>
                            <div class="col-md-3">
                                <label class="d-block font-weight-bold">Place/Country of Birth</label>
                                <span class="d-block mb-3"><?= $applicant['app_placebirth'] ?></span>
                            </div>
                        </div>
                        <br>
                        <h5 class="font-weight-bold text-primary">B. Particular of Passport/Travel
                            Document</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="d-block font-weight-bold">Type of Travel Document</label>
                                <span class="d-block mb-3"><?= $passport['type_travel'] ?></span>
                            </div>
                            <div class="col-md-4">
                                <label class="d-block font-weight-bold">Passport Number</label>
                                <span class="d-block mb-3"><?= $passport['no_passport'] ?></span>
                            </div>
                            <div class="col-md-4">
                                <label class="d-block font-weight-bold">Place/Country of Issue</label>
                                <span class="d-block mb-3"><?= $passport['place_issue'] ?></span>
                            </div>
                        </div>
                        <br>
                        <h5 class="font-weight-bold text-primary">C. Particular of Study/Course</h5>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="d-block font-weight-bold">Duration of Study/Course</label>
                                <span class="d-block mb-3"><?= $study['duration_study'] ?>
                                    &nbsp;years</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="d-block font-weight-bold">Level of Course</label>
                                <span class="d-block mb-3"><?= $study['level_course'] ?></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="d-block font-weight-bold">Type of Institution</label>
                                <span class="d-block mb-3"><?= $study['type_institution'] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="d-block font-weight-bold">Institution Name</label>
                                <span class="d-block mb-3"><?= $study['name_institution'] ?></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="d-block font-weight-bold">Name of Course</label>
                                <span class="d-block mb-3"><?= $study['name_course'] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="d-block font-weight-bold">Issued Date</label>
                                <span class="d-block mb-3"><?= $applicant['issued_date'] ?></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="d-block font-weight-bold">Expired Date</label>
                                <span class="d-block mb-3"><?= $applicant['expired_date'] ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="text-center col-md-12">
                                <a href="<?= base_url('Apply/statusAppApprove') ?>" class="btn btn-primary"><span><i
                                            class="bi bi-plus-circle-fill"></i>
                                    </span>Go Back</a>
                            </div>

                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- End of Main Content -->