<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
</div>
<!-- /.container-fluid -->
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
            <div class="col-md-12 mx-auto mb-4">
                <div class="card shadow">
                    <div class="card-body mx-4">
                        <h5 class="m-0 font-weight-bold text-primary mb-4">F. Supporting Document</h5>


                        <div class="row">
                            <div class="col-lg-8">

                                <?php echo form_open_multipart('apply/applyDocument'); ?>
                                <div class="form-group row">
                                    <label for="profile_pic" class="col-sm-3 col-form-label">Passport Picture</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="profile_pic"
                                                name="profile_pic">
                                            <label class="custom-file-label" for="profile_pic">Choose File</label>
                                            <?= form_error('profile_pic', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nric_pic" class="col-sm-3 col-form-label">Identification Card</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="nric_pic" name="nric_pic">
                                            <label class="custom-file-label" for="nric_pic">Choose File</label>
                                            <?= form_error('nric_pic', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="passport_pic" class="col-sm-3 col-form-label">Travel Document</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="passport_pic"
                                                name="passport_pic">
                                            <label class="custom-file-label" for="passport_pic">Choose File</label>
                                            <?= form_error('passport_pic', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="letter_pic" class="col-sm-3 col-form-label">Offer Letter</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="letter_pic"
                                                name="letter_pic">
                                            <label class="custom-file-label" for="letter_pic">Choose File</label>
                                            <?= form_error('letter_pic', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save and Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
<!-- End of Main Content -->