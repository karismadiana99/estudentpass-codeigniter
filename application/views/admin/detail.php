<!-- Begin Page Content -->
<div class="container-fluid">

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
            <div class="col-md-8 mx-auto">
                <div class="card shadow mb-4">
                    <div class="card-body mx-4">
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
                        <h5 class="font-weight-bold text-primary">B. Particular of Passport/Travel Document</h5>
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
                                <span class="d-block mb-3"><?= $study['duration_study'] ?> &nbsp;years</span>
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
                            <div class="form-group col-md-4">
                                <label class="d-block font-weight-bold">Status Application</label>
                                <span class="d-block mb-3"><?= $applicant['app_status'] ?></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>