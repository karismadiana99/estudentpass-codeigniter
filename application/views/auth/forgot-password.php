<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class=" col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <a>
                                    <img class="col-lg-5 mx-auto d-block"
                                        src="<?= base_url('assets/asset-auth/') ?>img/studentpass_logo.png" width="80">
                                </a>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Forgot your Password?</h1>
                                </div>

                                <?= $this->session->flashdata('message') ?>

                                <form class="user" method="post" action="<?= base_url('auth/forgotPassword'); ?>">
                                    <h1 class="h5 text-gray-900 mb-4 text-center">Please contact the developer
                                        technician to have
                                        your password reset.</h1>
                                    <h1 class="h5 text-gray-900 mb-4 text-center"> Please call (+608) 123-456789</h1>
                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth'); ?>">Back To Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>