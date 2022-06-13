<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header ">
            <div class="form-row">

                <div class="form-group col-md-4">
                    <br>
                    <h4 class="m-0 font-weight-bold text-primary">STUDENT PASS APPLICATION</h4>
                </div>

            </div>
            <div class="row">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead class="thead-dark">
                                <tr>

                                    <th>Fullname</th>
                                    <th>NRIC ID</th>
                                    <th>Gender</th>
                                    <th>Place Birth</th>
                                    <th>Nationality</th>
                                    <th>Status</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($applicant)) {
                                    foreach ($applicant as $applicant1) { ?>
                                <tr>

                                    <td><?php echo $applicant1['app_fullname'] ?></td>
                                    <td><?php echo $applicant1['app_nric'] ?></td>
                                    <td><?php echo $applicant1['app_gender'] ?></td>
                                    <td><?php echo $applicant1['app_placebirth'] ?></td>
                                    <td><?php echo $applicant1['app_nationality'] ?></td>
                                    <td>
                                        <center><span
                                                class="badge badge-warning "><?php echo $applicant1['app_status'] ?>
                                        </center></span>
                                    </td>
                                    <td class="text-center">
                                        <a href=" <?= base_url(); ?>Admin/action/<?= $applicant1['user_id']; ?>"
                                            id="view" title="view" data-placement="bottom" data-toggle="tooltip">
                                            <i class="fas fa-eye"> View</i>
                                        </a>
                                    </td>

                                </tr>

                                <?php }
                                } else { ?>
                                <tr>
                                    <td colspan="5">Record not found</td>
                                </tr>
                                <?php } ?>
                            </tbody>

                        </table>


                    </div>
                </div>

            </div>

        </div>

    </div>