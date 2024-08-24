<?php use Carbon\Carbon;?>
<?= $this->include('_layouts/_header') ;?>
<?= $this->include('_layouts/_navbar') ;?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Users List</h5>
                <a href="<?= base_url('users/create');?>" class="btn btn-primary btn-sm">Add Data</a>
                <span class="d-block m-t-5"></span>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive display">
                    <?php if (session()->get('message')) :?>
                        <div class="alert alert-warning" role="alert">
                            <?= session()->get('message');?>
                        </div>
                    <?php endif;?>
                    <table class="table" id="table-users">
                        <thead>
                            <tr>
                                <th width="35px">#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="color: white;">
                            <?php foreach ($users as $key=>$u) : $date = Carbon::parse($u->created_at);?>
                                <tr>
                                    <td><?= $key+1;?></td>
                                    <td><?= $u->username;?></td>
                                    <td><?= $u->email;?></td>
                                    <td><?= $date->translatedFormat('d F Y H:i:s');?></td>
                                    <td>
                                        <a href="<?= base_url('users/update/') . $u->id;?>" class="badge text-bg-secondary">Edit</a>
                                        <a href="<?= base_url('users/destroy/') . $u->id;?>" class="badge text-bg-danger" onclick="return confirmDelete(this);">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('table-users').DataTable({
            "dom": '<"pull-left"f><"pull-right"l>tip',
            "paging":   false,
            "initComplete": function() {
                    $('.dataTables_filter input').css({
                        'font-size': '12px',
                        'padding': '2px',
                        'height': 'auto'
                    });
                }
        });
    });

    function confirmDelete(link) {
        if (confirm("Yakin ingin menghapus data ini?")) {
            return true;
        } else {
            return false;
        }
    }
</script>

<?= $this->include('_layouts/_footer') ;?>