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
                    ?>
                    <form action="" method="POST" autocomplete="off">

                        <div class="form-row">
                            <div class="row">
                                <div class="col-md-5">
                                    <label class="d-block font-weight-bold">Fullname</label>
                                    <span class="d-block mb-3"><?= $applicant['app_fullname'] ?></span>
                                </div>
                                <div class="col-md-5">
                                    <label class="d-block font-weight-bold">NRIC</label>
                                    <span class="d-block mb-3"><?= $applicant['app_nric'] ?></span>
                                </div>
                            </div>

                        </div>
                        <hr class="border border-info mb-3 mt-4">

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-80">
                                    <i class="far fa-save fa-lg"></i>
                                </span>
                                <span class="text">Approve</span>
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