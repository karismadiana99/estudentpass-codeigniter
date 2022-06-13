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
                <div class="form-group col-md-8 text-md-right">
                    <br>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
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
                                    <!-- <td>
                                        <center><span><?php echo $applicant1['app_status'] ?></span>
                                        </center>
                                    </td> -->
                                    <td>
                                        <center>
                                            <?php
                                                    $btn = "Approved";
                                                    if ($btn == $applicant1["app_status"]) {
                                                        echo '<span class="badge badge-success ">Approved</span>';
                                                    } else {
                                                        echo '<span class="badge badge-danger ">Rejected</span>';
                                                    }
                                                    ?>
                                        </center>
                                    </td>



                                    <td class="text-center">
                                        <a href=" <?= base_url(); ?>Admin/detail/<?= $applicant1['user_id']; ?>"
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