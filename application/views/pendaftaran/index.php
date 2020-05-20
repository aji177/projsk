<div id="pendaftaran" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-dark">Form Pendaftaran SKCK</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="app" class="text-dark">
                    <app-nav></app-nav>
                    <app-head></app-head>
                    <form action="" method="post">
                        <div class="tab-content">
                            <component :is="view"></component>
                        </div>
                    </form>
                </div>

                <?php $this->load->view('pendaftaran/nav-pills') ?>
                <?php $this->load->view('pendaftaran/tab-content') ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-primary">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>