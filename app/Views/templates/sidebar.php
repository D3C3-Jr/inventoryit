<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <!-- <div class="sidebar-brand-icon">
            <i class="fas fa-warehouse"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">INVENTORY <sup>it</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $title == 'Home' ? 'active' : ''; ?>">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Assets</span>
        </a>
        <?php if ($title == 'Computer') : ?>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <?php elseif ($title == 'Network') : ?>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <?php elseif ($title == 'Printer') : ?>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <?php elseif ($title == 'Others') : ?>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <?php else : ?>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <?php endif; ?>
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">List Assets:</h6>
                                <a class="collapse-item <?= $title == 'Computer' ? 'active' : ''; ?>" href="/computer">Computer</a>
                                <a class="collapse-item <?= $title == 'Network' ? 'active' : ''; ?>" href="/network">Network</a>
                                <a class="collapse-item <?= $title == 'Printer' ? 'active' : ''; ?>" href="/printer">Printer</a>
                                <a class="collapse-item <?= $title == 'Others' ? 'active' : ''; ?>" href="/others">Others</a>
                            </div>
                            </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>