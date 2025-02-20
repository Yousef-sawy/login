<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 p-4 bg-white shadow-lg rounded">
            <div class="container">
                <h3 class="text-center mb-3">Login</h3>
                <hr>
                <?php if (session()->get('success')): ?>
                    <div class="alert alert-success text-center" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>

                <form action="/" method="post">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <button type="submit" class="btn btn-primary btn-lg px-4">Login</button>
                        <a href="/register" class="text-primary">Don't have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>