
<!DOCTYPE html>
<html lang="en">

<head>
        
    <title>404</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
    	content="Dasho Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
    	content="admin templates, bootstrap admin templates, bootstrap 5, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Dasho, Dasho bootstrap admin template">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('_template/assets/')?>images/favicon.svg" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?= base_url('_template/assets/')?>fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?= base_url('_template/assets/')?>plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url('_template/assets/')?>css/style.css">

</head>

<!-- [ offline-ui ] start -->
<div class="auth-wrapper error">
    <div id="container" class="container">
        <ul id="scene" class="scene">
            <li class="layer" data-depth="1.00"><img class="img-fluid" src="<?= base_url('_template/assets/')?>images/error/404-01.png" alt="images"></li>
            <li class="layer" data-depth="0.60"><img class="img-fluid" src="<?= base_url('_template/assets/')?>images/error/shadows-01.png" alt="images"></li>
            <li class="layer" data-depth="0.20"><img class="img-fluid" src="<?= base_url('_template/assets/')?>images/error/monster-01.png" alt="images"></li>
            <li class="layer" data-depth="0.40"><img class="img-fluid" src="<?= base_url('_template/assets/')?>images/error/text-01.png" alt="images"></li>
            <li class="layer" data-depth="0.10"><img class="img-fluid" src="<?= base_url('_template/assets/')?>images/error/monster-eyes-01.png" alt="images"></li>
        </ul>
        <form action="<?= base_url('/');?>">
            <button class="btn btn-outline-light mt-3 mb-4"><i class="feather icon-home"></i>Back to Home</button>
        </form>
    </div>
</div>
<!-- [ offline-ui ] end -->
<script src="<?= base_url('_template/assets/')?>js/vendor-all.min.js"></script>
<script src="<?= base_url('_template/assets/')?>plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="<?= base_url('_template/assets/')?>js/pages/error.js"></script>

<script>
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
</script>





</body>

</html>
