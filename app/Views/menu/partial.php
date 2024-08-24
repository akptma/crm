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
                    <div class="col-md-6">
                            <label class="form-label" for="username">Name</label>
                            <input type="input" class="form-control" id="name" name="name" placeholder="name" <?= isset($user) ? 'readonly' : '';?> value="<?= isset($user) ? $user->username : '';?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="icons">Icons</label>
                        <select class="js-example-basic col-sm-12" id="icons" name="icons"  data-select2-id="4" tabindex="-1" aria-hidden="true" style="width: 100%;">
                        </select>
                    </div>
                </div>
                <a href="<?= base_url('users')?>" class="btn btn-warning mt-3"> Back</a>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
     // Daftar ikon dari variabel iconlist
     var iconlist = ['icon-alert-octagon', 'icon-alert-circle', 'icon-activity', 'icon-alert-triangle', 'icon-align-center', 'icon-airplay', 'icon-align-justify', 'icon-align-left', 'icon-align-right', 'icon-arrow-down-left',
        'icon-arrow-down-right', 'icon-anchor', 'icon-aperture', 'icon-arrow-left', 'icon-arrow-right', 'icon-arrow-down', 'icon-arrow-up-left', 'icon-arrow-up-right', 'icon-arrow-up', 'icon-award', 'icon-bar-chart', 'icon-at-sign',
        'icon-bar-chart-2', 'icon-battery-charging', 'icon-bell-off', 'icon-battery', 'icon-bluetooth', 'icon-bell', 'icon-book', 'icon-briefcase', 'icon-camera-off', 'icon-calendar', 'icon-bookmark', 'icon-box', 'icon-camera',
        'icon-check-circle', 'icon-check', 'icon-check-square', 'icon-cast', 'icon-chevron-down', 'icon-chevron-left', 'icon-chevron-right', 'icon-chevron-up', 'icon-chevrons-down', 'icon-chevrons-right', 'icon-chevrons-up',
        'icon-chevrons-left', 'icon-circle', 'icon-clipboard', 'icon-chrome', 'icon-clock', 'icon-cloud-lightning', 'icon-cloud-drizzle', 'icon-cloud-rain', 'icon-cloud-off', 'icon-codepen', 'icon-cloud-snow', 'icon-compass', 'icon-copy',
        'icon-corner-down-right', 'icon-corner-down-left', 'icon-corner-left-down', 'icon-corner-left-up', 'icon-corner-up-left', 'icon-corner-up-right', 'icon-corner-right-down', 'icon-corner-right-up', 'icon-cpu', 'icon-credit-card',
        'icon-crosshair', 'icon-disc', 'icon-delete', 'icon-download-cloud', 'icon-download', 'icon-droplet', 'icon-edit-2', 'icon-edit', 'icon-edit-1', 'icon-external-link', 'icon-eye', 'icon-feather', 'icon-facebook', 'icon-file-minus',
        'icon-eye-off', 'icon-fast-forward', 'icon-file-text', 'icon-film', 'icon-file', 'icon-file-plus', 'icon-folder', 'icon-filter', 'icon-flag', 'icon-globe', 'icon-grid', 'icon-heart', 'icon-home', 'icon-github', 'icon-image',
        'icon-inbox', 'icon-layers', 'icon-info', 'icon-instagram', 'icon-layout', 'icon-link-2', 'icon-life-buoy', 'icon-link', 'icon-log-in', 'icon-list', 'icon-lock', 'icon-log-out', 'icon-loader', 'icon-mail', 'icon-maximize-2',
        'icon-map', 'icon-map-pin', 'icon-menu', 'icon-message-circle', 'icon-message-square', 'icon-minimize-2', 'icon-mic-off', 'icon-minus-circle', 'icon-mic', 'icon-minus-square', 'icon-minus', 'icon-moon', 'icon-monitor',
        'icon-more-vertical', 'icon-more-horizontal', 'icon-move', 'icon-music', 'icon-navigation-2', 'icon-navigation', 'icon-octagon', 'icon-package', 'icon-pause-circle', 'icon-pause', 'icon-percent', 'icon-phone-call',
        'icon-phone-forwarded', 'icon-phone-missed', 'icon-phone-off', 'icon-phone-incoming', 'icon-phone', 'icon-phone-outgoing', 'icon-pie-chart', 'icon-play-circle', 'icon-play', 'icon-plus-square', 'icon-plus-circle', 'icon-plus',
        'icon-pocket', 'icon-printer', 'icon-power', 'icon-radio', 'icon-repeat', 'icon-refresh-ccw', 'icon-rewind', 'icon-rotate-ccw', 'icon-refresh-cw', 'icon-rotate-cw', 'icon-save', 'icon-search', 'icon-server', 'icon-scissors',
        'icon-share-2', 'icon-share', 'icon-shield', 'icon-settings', 'icon-skip-back', 'icon-shuffle', 'icon-sidebar', 'icon-skip-forward', 'icon-slack', 'icon-slash', 'icon-smartphone', 'icon-square', 'icon-speaker', 'icon-star',
        'icon-stop-circle', 'icon-sun', 'icon-sunrise', 'icon-tablet', 'icon-tag', 'icon-sunset', 'icon-target', 'icon-thermometer', 'icon-thumbs-up', 'icon-thumbs-down', 'icon-toggle-left', 'icon-toggle-right', 'icon-trash-2', 'icon-trash',
        'icon-trending-up', 'icon-trending-down', 'icon-triangle', 'icon-type', 'icon-twitter', 'icon-upload', 'icon-umbrella', 'icon-upload-cloud', 'icon-unlock', 'icon-user-check', 'icon-user-minus', 'icon-user-plus', 'icon-user-x',
        'icon-user', 'icon-users', 'icon-video-off', 'icon-video', 'icon-voicemail', 'icon-volume-x', 'icon-volume-2', 'icon-volume-1', 'icon-volume', 'icon-watch', 'icon-wifi', 'icon-x-square', 'icon-wind', 'icon-x', 'icon-x-circle',
        'icon-zap', 'icon-zoom-in', 'icon-zoom-out', 'icon-command', 'icon-cloud', 'icon-hash', 'icon-headphones', 'icon-underline', 'icon-italic', 'icon-bold', 'icon-crop', 'icon-help-circle', 'icon-paperclip', 'icon-shopping-cart',
        'icon-tv', 'icon-wifi-off', 'icon-minimize', 'icon-maximize', 'icon-gitlab', 'icon-sliders', 'icon-star-on', 'icon-heart-on'
    ];

    // Buat array objek untuk Select2
    var iconData = iconlist.map(function(icon) {
        return { id: icon, text: icon };
    });

    $('#icons').select2({
        data: iconData,
        placeholder: "Pilih ikon",
        allowClear: true
    });
</script>


<?= $this->include('_layouts/_footer') ;?>