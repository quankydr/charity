<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            </div>
            <div class="pull-left info">
                <p>
                    Hello, <?php echo $this->session->userdata('adminName');?>

                </p>


            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="active">
                <a href="<?php echo site_url('admin/dashboard');?>" class="sb-dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin/sport');?>" class="sb-category">
                    <i class="fa fa-th"></i> <span>Sport</span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin/club');?>" class="sb-group">
                    <i class="fa fa-qrcode"></i> <span>Club</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
