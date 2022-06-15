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
                        <h5 class="m-0 font-weight-bold text-primary mb-4">B. Particular of Passport/Travel Document
                        </h5>
                        <form action="" method="POST" autocomplete="off">
                            <div class="form-group">
                                <label for="type_travel">Type of Travel Document</label>
                                <select id="type_travel" name="type_travel" class="form-control">
                                    <option value="" selected>Choose</option>
                                    <option value="PASSPORT"
                                        <?= set_value('type_travel') == 'PASSPORT' ? 'selected' : '' ?>>
                                        PASSPORT
                                    </option>
                                    <option value="RESTRICTED TRAVEL DOCUMENT"
                                        <?= set_value('type_travel') == 'RESTRICTED TRAVEL DOCUMENT' ? 'selected' : '' ?>>
                                        RESTRICTED TRAVEL DOCUMENT
                                    </option>
                                </select>
                                <?= form_error('type_travel', '<small class="text-danger">', '</small>') ?>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="no_passport">Number Passport/Travel Document</label>
                                    <input type="text" class="form-control text-uppercase" id="no_passport"
                                        name="no_passport" value="<?= set_value('no_passport') ?>">
                                    <?= form_error('no_passport', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="place_issue">Place/Country of Issue</label>
                                    <input type="text" class="form-control text-uppercase" id="place_issue"
                                        name="place_issue" value="<?= set_value('place_issue') ?>">
                                    <?= form_error('place_issue', '<small class="text-danger">', '</small>') ?>
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
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- End of Main Content -->