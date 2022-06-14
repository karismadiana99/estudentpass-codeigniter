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
                        </div>

                        <hr class="border border-info mb-3 mt-4">
                        <br>
                        <div class="row">
                            <div class="text-center col-md-6">

                                <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal"
                                    data-target="#approveModal" data-id="<?php echo $user['user_id']; ?>">
                                    <span class="icon text-white-80">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <span class="text">Approve Application</span>
                                </button>
                            </div>
                            <div class="text-center col-md-6">

                                <button type="button" class="btn btn-danger btn-icon-split" data-toggle="modal"
                                    data-target="#rejectModal" data-id="<?php echo $user['user_id']; ?>">
                                    <span class="icon text-white-80">
                                        <i class="fa fa-times"></i>
                                    </span>
                                    <span class="text">Reject Application</span>
                                </button>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal Approval -->
<div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Approve Application
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/approveApp/'); ?>" method="POST" autocomplete="off">
                    <input type="hidden" name="user_id" value="<?php echo $applicant['user_id']; ?>">
                    <div class="form-group">
                        <label>Fullname:</label>
                        <input type="text" name="app_fullname" class="form-control"
                            value="<?php echo $applicant['app_fullname']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>IC Number:</label>
                        <input type="text" name="app_nric" class="form-control"
                            value="<?php echo $applicant['app_nric']; ?>" readonly>
                    </div>
                    <div class=" form-group">
                        <label>Issued Date:</label>
                        <input type="date" name="issued_date" class="form-control"
                            value="<?php echo $applicant['issued_date']; ?>">
                        <div class="form-group">
                            <label>Expired Date:</label>
                            <input type="date" name="expired_date" class="form-control"
                                value="<?php echo $applicant['expired_date']; ?>">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-80">
                                <i class="fa fa-check"></i>
                            </span>
                            <span class="text">Approve</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- End Modal -->


<!-- Modal Rejection -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reject Application
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/rejectApp/'); ?>" method="POST" autocomplete="off">
                    <input type="hidden" name="user_id" value="<?php echo $applicant['user_id']; ?>">

                    <div class="form-group">
                        <label>Fullname:</label>
                        <input type="text" name="app_fullname" class="form-control"
                            value="<?php echo $applicant['app_fullname']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>IC Number:</label>
                        <input type="text" name="app_nric" class="form-control"
                            value="<?php echo $applicant['app_nric']; ?>" readonly>
                    </div>
                    <div class=" form-group">
                        <label>Reason of Rejection:</label>
                        <input type="text" name="reason_reject" class="form-control"
                            value="<?php echo $applicant['reason_reject']; ?>">

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-80">
                                <i class="fa fa-times"></i>
                            </span>
                            <span class="text">Reject</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Modal -->