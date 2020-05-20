<?php
$uri = $this->uri->segment(2);
?>

<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav ">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3>
        </div>
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?= base_url('pelayanan') ?>" class="waves-effect <?= $uri == '' ? 'active' : '' ?>"><i class="fa fa-dashboard fa-fw"></i>Beranda</a>
            </li>
            <li>
                <a href="<?= base_url('pelayanan/cari') ?>" class="waves-effect <?= $uri == 'cari' ? 'active' : '' ?>"><i class="fa fa-search fa-fw"></i>Pencarian SKCK</a>
            </li>
            <li>
                <a href="javascript:void(0)" class="waves-effect <?= $uri == 'buat_skck_online' || $uri == 'buat_skck_offline' ? 'active' : '' ?>">
                    <i class="fa fa-user-plus fa-fw"></i>Buat SKCK
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('pelayanan/buat_skck_online') ?>">
                            <i class="fa fa-angle-right fa-fw"></i>
                            <span class="hide-menu">Permohonan SKCK Online</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pelayanan/buat_skck_offline') ?>"><i class="fa fa-angle-right fa-fw"></i>
                            <span class="hide-menu">Permohonan SKCK Offline</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('pelayanan/laporan') ?>" class="waves-effect <?= $uri == 'laporan' ? 'active' : '' ?>"><i class="fa fa-print fa-fw"></i>Laporan</a>
            </li>
            <li>
                <a href="javascript:void(0)" class="waves-effect <?= $uri == 'template_skck' || $uri == 'generate_no_skck' || $uri == 'user_management' ? 'active' : '' ?>">
                    <i class="fa fa-cog fa-fw"></i>Pengaturan
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('pelayanan/template_skck') ?>">
                            <i class="fa fa-angle-right fa-fw"></i>
                            <span class="hide-menu">Template SKCK</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pelayanan/generate_no_skck') ?>">
                            <i class="fa fa-angle-right fa-fw"></i>
                            <span class="hide-menu">Generate No SKCK</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pelayanan/user_management') ?>"><i class="fa fa-angle-right fa-fw"></i>
                            <span class="hide-menu">User Management</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->