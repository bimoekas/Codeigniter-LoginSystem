<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('auth/registration') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <small class="text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                <small class="text-danger"><?= form_error('name'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Upload Profile Picture</label>
                                <input class="" type="file" accept="image/*" id="image" name="image">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                    <small class="text-danger"><?= form_error('password1'); ?></small>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>