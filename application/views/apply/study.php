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
                        <h5 class="m-0 font-weight-bold text-primary mb-4">C. Particular of Study/Course</h5>
                        <form action="" method="POST" autocomplete="off">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="duration_study">Duration of Study/Course</label>
                                    <input type="text" class="form-control text-uppercase" id="duration_study"
                                        name="duration_study" value="<?= set_value('duration_study') ?>"> years
                                    <?= form_error('duration_study', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="level_course">Level of Course</label>
                                    <select id="level_course" name="level_course" class="form-control">
                                        <option value="" selected>Choose</option>
                                        <option value="Phd" <?= set_value('level_course') == 'Phd' ? 'selected' : '' ?>>
                                            Phd
                                        </option>
                                        <option value="Master"
                                            <?= set_value('level_course') == 'Master' ? 'selected' : '' ?>>
                                            Master
                                        </option>
                                        <option value="Degree"
                                            <?= set_value('level_course') == 'Degree' ? 'selected' : '' ?>>
                                            Degree
                                        </option>
                                        <option value="Diploma"
                                            <?= set_value('level_course') == 'Diploma' ? 'selected' : '' ?>>
                                            Diploma
                                        </option>
                                        <option value="School"
                                            <?= set_value('level_course') == 'School' ? 'selected' : '' ?>>
                                            School
                                        </option>
                                    </select>
                                    <?= form_error('type_travel', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="type_institution">Type of Institution</label>
                                    <select id="type_institution" name="type_institution" class="form-control">
                                        <option value="" selected>Choose</option>
                                        <option value="Government"
                                            <?= set_value('type_institution') == 'Government' ? 'selected' : '' ?>>
                                            Government
                                        </option>
                                        <option value="Private"
                                            <?= set_value('type_institution') == 'Private' ? 'selected' : '' ?>>
                                            Private
                                        </option>
                                    </select>
                                    <?= form_error('type_institution', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="name_institution">Institution Name</label>
                                <input type="text" class="form-control text-uppercase" id="name_institution"
                                    name="name_institution" value="<?= set_value('name_institution') ?>">
                                <?= form_error('name_institution', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group ">
                                <label for="name_course">Name of Course</label>
                                <input type="text" class="form-control text-uppercase" id="name_course"
                                    name="name_course" value="<?= set_value('name_course') ?>">
                                <?= form_error('name_course', '<small class="text-danger">', '</small>') ?>
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