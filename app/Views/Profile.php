<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 bg-white shadow rounded p-4">
            <div class="container">
                <h3 class="text-center text-primary fw-bold"><?= $user['firstname'] . ' ' . $user['lastname'] ?></h3>
                <hr>
                
                <?php if (session()->get('success')): ?>
                    <div class="alert alert-success text-center" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                
                <form action="/profile" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="firstname" class="form-label fw-semibold">First Name</label>
                                <input type="text" class="form-control shadow-sm" name="firstname" id="firstname" value="<?= set_value('firstname', $user['firstname']) ?>">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="lastname" class="form-label fw-semibold">Last Name</label>
                                <input type="text" class="form-control shadow-sm" name="lastname" id="lastname" value="<?= set_value('lastname', $user['lastname']) ?>">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="text" class="form-control shadow-sm bg-light" readonly id="email" value="<?= $user['email'] ?>">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password" class="form-control shadow-sm" name="password" id="password">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="password_confirm" class="form-label fw-semibold">Confirm Password</label>
                                <input type="password" class="form-control shadow-sm" name="password_confirm" id="password_confirm">
                            </div>
                        </div>

                        <div class="col-12">
                            <?php if (isset($validation)): ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            <?php endif; ?>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary fw-bold px-4 py-2 shadow">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
