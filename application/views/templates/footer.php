<!-- Footer -->

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; FYP System <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Profile Modal-->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" aria-label="Close">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"> User Profile </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-8" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/asset-auth/img/profile/') . $user['image']; ?>"
                                class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $user['fullname']; ?></h5>
                                <p class="card-text"><?= $user['email']; ?></p>
                                <p class="card-text"><small class="text-muted">Registered since
                                        <?= date('d F Y', $user['date_created']); ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/asset-auth/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/asset-auth/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js">
</script>

<!-- Datetimepicker -->
<script src="<?= base_url('assets/') ?>vendor/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/moment/min/moment-with-locales.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url('assets/') ?>js/datepicker.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/asset-auth/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/asset-auth/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/asset-auth/'); ?>js/script.js"></script>

<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);

});
</script>
</body>

</html>