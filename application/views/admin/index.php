<div class="page-header">
    <h3>Dashboard</h3>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-folder-open"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_hotel->get_data('kamar')->num_rows(); ?>
                        </div>
                        <div>Jumlah Kamar</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/kamar' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_hotel->get_data('customer')->num_rows(); ?>
                        </div>
                        <div>Jumlah Customer</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/customer' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-sort"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_hotel->get_data('pemesanan')->num_rows(); ?>
                        </div>
                        <div>Jumlah pemesanan</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/pemesanan' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-ok"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_hotel->edit_data(array('pemesanan_status' => 'selesai'), 'pemesanan')->num_rows(); ?>
                        </div>
                        <div>Pemesanan Selesai</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/pemesanan' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-road "></i> Kamar</h3>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <?php foreach ($kamar as $k) { ?>
                        <a href="#" class="list-group-item">
                            <span class="badge alert-info"><?php echo $k->kamar_status ?></span>
                            <i class="glyphicon glyphicon-cd"></i> <?php echo $k->kamar_tipe; ?>
                        </a>
                    <?php } ?>
                </div>
                <div class="text-right">
                    <a href="<?php echo base_url() . 'admin/kamar' ?>">Lihat Semua Kamar <i class="glyphicon glyphicon-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-user o"></i> Customer Terbaru</h3>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <?php foreach ($customer as $c) { ?>
                        <a href="#" class="list-group-item">
                            <span class="badge alert-success"><?php echo $c->customer_jk ?></span>
                            <i class="glyphicon glyphicon-user"></i> <?php echo $c->customer_nama; ?>
                        </a>
                    <?php } ?>
                </div>
                <div class="text-right">
                    <a href="<?php echo base_url() . 'admin/customer' ?>">Lihat Semua Customer <i class="glyphicon glyphicon-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-shopping-cart"></i> Pemesanan Terakhir Terakhir</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Tgl. Pemesanan</th>
                                <th>Tgl. checkin</th>
                                <th>Tgl. checkout</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pemesanan as $p) {
                            ?>
                                <tr>
                                    <td><?php echo date('d/m/Y', strtotime($p->pemesanan_tgl)); ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($p->pemesanan_checkin)); ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($p->pemesanan_checkout)); ?></td>
                                    <td><?php echo "Rp. " . number_format($p->pemesanan_harga) . " ,-"; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="<?php echo base_url() . 'admin/pemesanan' ?>">Lihat Semua Pemesanan <i class="glyphicon glyphicon-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->