<!-- Top Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <!-- Toggle icon for mobile view -->
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="index.html">
                <b>
                    <img src="<?= base_url('app/') ?>plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                </b>
                <span class="hidden-xs">
                    <img src="<?= base_url('app/') ?>plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                </span> </a>
        </div>
        <!-- /Logo -->
        <!-- Search input and Toggle icon -->
        <ul class="nav navbar-top-links navbar-left">
            <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
        </ul>
        <!-- This is the message dropdown -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <!-- /.Task dropdown -->
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)">
                    <i class="fa fa-cog"></i><span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="<?= base_url('pelayanan/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>

            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->