<div class="site-menubar">
    <ul class="site-menu">
        <li class="site-menu-item has-sub <?php if($page=='Dashboard') { echo 'active';} ?>">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub">
            <a href="<?php echo base_url('Admin/manage_about_us'); ?>">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">About Us</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub <?php if($page=='Collection List') { echo 'active';} ?>">
            <a href="<?php echo base_url('Admin/collection_list'); ?>">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Collection</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub <?php if($page=='Store List') { echo 'active';} ?>">
            <a href="<?php echo base_url('Admin/stores_list'); ?>">
                <i class="site-menu-icon wb-check-circle" aria-hidden="true"></i>
                <span class="site-menu-title">Stores</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub">
            <a href="<?php echo base_url('Admin/show_stores_list/Events'); ?>">
                <i class="site-menu-icon icon wb-map" aria-hidden="true"></i>
                <span class="site-menu-title">Event and Trunk Shows</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub">
            <a href="<?php echo base_url('Admin/show_stores_list/Career'); ?>">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Career</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                <i class="site-menu-icon icon wb-users" aria-hidden="true"></i>
                <span class="site-menu-title">Userlist</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                <span class="site-menu-title">Profile</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                <span class="site-menu-title">Tables</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                <span class="site-menu-title">Chart</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
        <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                <span class="site-menu-title">Apps</span>
                <span class="site-menu-arrow"></span>
            </a>
        </li>
    </ul>
</div>