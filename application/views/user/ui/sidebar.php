<?php
$uri = $this->uri->segment(2);


?>
<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3>
                <span class="fa-fw open-close">
                    <i class="ti-menu hidden-xs"></i>
                    <i class="ti-close visible-xs"></i>
                </span>
                <span class="hide-menu">Navigasi</span>
            </h3>
        </div>
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?= base_url('user/formulir_skck') ?>" class="waves-effect <?= $uri == 'formulir_skck' ? 'active' : '' ?>">
                    <i class="fa fa-plus fa-fw"></i>
                    <span class="hide-menu">Formulir SKCK</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('user/pengajuan_skck') ?>" class="waves-effect <?= $uri == 'pengajuan_skck' ? 'active' : '' ?>">
                    <i class="fa fa-file-o fa-fw"></i>
                    <span class="hide-menu">Pengajuan SKCK</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('user/riwayat_skck') ?>" class="waves-effect <?= $uri == 'riwayat_skck' ? 'active' : '' ?>">
                    <i class="fa fa-table fa-fw"></i>
                    <span class="hide-menu">Riwayat SKCK</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('user/logout') ?>" class="waves-effect">
                    <i class="fa fa-sign-out fa-fw"></i>
                    <span class="hide-menu">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->