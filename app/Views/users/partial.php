<?= $this->include('_layouts/_header') ;?>
<?= $this->include('_layouts/_navbar') ;?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5><?= isset($user) ? 'Edit Users' : 'Add Users';?></h5>
        </div>
        <div class="card-body">
            <form method="POST" action="<?=  isset($user) ? base_url('users/update/' . $user->id) : base_url('users/create') ;?>">
                <div class="row">
                    <?php if (session()->get('message')) :?>
                        <div class="alert alert-warning" role="alert">
                            <?= session()->get('message');?>
                        </div>
                    <?php endif;?>
                    <div class="col-md-4">
                            <label class="form-label" for="username">Username</label>
                            <input type="input" class="form-control" id="username" name="username" placeholder="username" <?= isset($user) ? 'readonly' : '';?> value="<?= isset($user) ? $user->username : '';?>">
                    </div>
                    <div class="col-md-4">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?= isset($user) ? $user->email : '';?>">
                    </div>
                    <div class="col-md-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= isset($user) ? $user->password : '';?>">
                    </div>
                </div>
                <a href="<?= base_url('users')?>" class="btn btn-warning mt-3"> Back</a>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->include('_layouts/_footer') ;?>