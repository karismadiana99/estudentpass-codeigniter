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
                        <form method="POST" autocomplete="off" action='<?php echo base_url(); ?>'
                            enctype='multipart/form-data'>



                            <div class="form-group ">
                                <label for="profile_pic">Passport Picture</label>
                                <br>
                                <input type='file' name='profile_pic' class="form-control" size="20" required="">
                            </div>
                            <br>
                            <!-- <div class="form-group ">
                                <label for="passport_doc">
                                    Passport/Limited Travel Document
                                </label>
                                (Photocopy of entry details either stamped in passport or white slip issued by
                                Immigration
                                Officer at the airport)<br>
                                <input type='file' name='passport_doc' size='20' multiple="">
                            </div>
                            <br>
                            <div class="form-group ">
                                <label for="ic_doc">Malaysian Identification Card</label>
                                (Photocopy of Malaysian Identification Card - Front and Back)<br>
                                <input type='file' name='ic_doc' size='20' multiple="">
                            </div>
                            <br>
                            <div class="form-group ">
                                <label for="offer_doc">Offer Letter</label>
                                (Photocopy of Offer letter that has been confirmed by the IPT/IPTS)<br>
                                <input type='file' name='offer_doc' size='20' multiple="">
                            </div> -->
                            <br>

                            <hr class="border border-info mb-3 mt-4">

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-icon-split" name="document_save">
                                    <span class="icon text-white-80">
                                        <i class="far fa-save fa-lg"></i>
                                    </span>
                                    <span class="text">Save and Submit</span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
<!-- End of Main Content -->