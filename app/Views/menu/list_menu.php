<?php use Carbon\Carbon;?>
<?= $this->include('_layouts/_header') ;?>
<?= $this->include('_layouts/_navbar') ;?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <h5 class="card-header">Menu Management</h5>
            <div class="card-body">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-menu-tab" data-bs-toggle="pill" href="#pills-menu" role="tab" aria-controls="pills-menu" aria-selected="true">Menu</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-sub-menu-tab" data-bs-toggle="pill" href="#pills-sub-menu" role="tab" aria-controls="pills-sub-menu" aria-selected="false" tabindex="-1">sub-menu</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-subsub-tab" data-bs-toggle="pill" href="#pills-subsub" role="tab" aria-controls="pills-subsub" aria-selected="false" tabindex="-1">sub-sub-menu</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">
                        <div class="table-border-style">
                        <a href="<?= base_url('menu/create');?>" class="btn btn-primary btn-sm">Add Data</a>
                            <div class="table-responsive display">
                                <?php if (session()->get('message')) :?>
                                    <div class="alert alert-warning" role="alert">
                                        <?= session()->get('message');?>
                                    </div>
                                <?php endif;?>
                                <table class="table" id="table-menu">
                                    <thead>
                                        <tr>
                                            <th width="35px">#</th>
                                            <th>Name</th>
                                            <th>Icons</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: white;">
                                        <?php foreach ($menu as $key=>$m) : $date = Carbon::parse($m->created_at);?>
                                            <tr>
                                                <td><?= $key+1;?></td>
                                                <td><?= $m->name;?></td>
                                                <td><?= $m->icons;?></td>
                                                <td><?= $date->translatedFormat('d F Y H:i:s');?></td>
                                                <td>
                                                    <a href="<?= base_url('users/update/') . $m->id;?>" class="badge text-bg-secondary">Edit</a>
                                                    <a href="<?= base_url('users/destroy/') . $m->id;?>" class="badge text-bg-danger" onclick="return confirmDelete(this);">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-sub-menu" role="tabpanel" aria-labelledby="pills-sub-menu-tab">
                        <div class="table-border-style">
                            <div class="table-responsive display">
                                <?php if (session()->get('message')) :?>
                                    <div class="alert alert-warning" role="alert">
                                        <?= session()->get('message');?>
                                    </div>
                                <?php endif;?>
                                <table class="table" id="table-submenu">
                                    <thead>
                                        <tr>
                                            <th width="35px">#</th>
                                            <th>Parent-Menu</th>
                                            <th>Name</th>
                                            <th>Routes</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: white;">
                                        <?php foreach ($submenu as $key=>$sm) : $date = Carbon::parse($sm->created_at);?>
                                            <tr>
                                                <td><?= $key+1;?></td>
                                                <td style="font-weight: bold;"><?= $sm->parent_name;?></td>
                                                <td><?= $sm->name;?></td>
                                                <td><?= $sm->routes;?></td>
                                                <td><?= $date->translatedFormat('d F Y H:i:s');?></td>
                                                <td>
                                                    <a href="<?= base_url('users/update/') . $sm->id;?>" class="badge text-bg-secondary">Edit</a>
                                                    <a href="<?= base_url('users/destroy/') . $sm->id;?>" class="badge text-bg-danger" onclick="return confirmDelete(this);">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-subsub" role="tabpanel" aria-labelledby="pills-subsub-tab">
                        <div class="table-border-style">
                            <div class="table-responsive display">
                                <?php if (session()->get('message')) :?>
                                    <div class="alert alert-warning" role="alert">
                                        <?= session()->get('message');?>
                                    </div>
                                <?php endif;?>
                                <table class="table" id="table-subsubmenu">
                                    <thead>
                                        <tr>
                                            <th width="35px">#</th>
                                            <th>Parent-Menu</th>
                                            <th>Parent-Sub-Menu</th>
                                            <th>Name</th>
                                            <th>Routes</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: white;">
                                        <?php foreach ($subsubmenu as $key=>$ssm) : $date = Carbon::parse($ssm->created_at);?>
                                            <tr>
                                                <td><?= $key+1;?></td>
                                                <td style="font-weight: bold;"><?= $ssm->parent_name;?></td>
                                                <td style="font-weight: bold;"><?= $ssm->sub_parent_name;?></td>
                                                <td><?= $ssm->name;?></td>
                                                <td><?= $ssm->routes;?></td>
                                                <td><?= $date->translatedFormat('d F Y H:i:s');?></td>
                                                <td>
                                                    <a href="<?= base_url('users/update/') . $ssm->id;?>" class="badge text-bg-secondary">Edit</a>
                                                    <a href="<?= base_url('users/destroy/') . $ssm->id;?>" class="badge text-bg-danger" onclick="return confirmDelete(this);">Delete</a>
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
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // $('.table').DataTable({
        //     "dom": '<"pull-left"f><"pull-right"l>tip',
        //     "paging":   false,
        //     "initComplete": function() {
        //             $('.dataTables_filter input').css({
        //                 'font-size': '12px',
        //                 'padding': '2px',
        //                 'height': 'auto'
        //             });
        //         }
        // });
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