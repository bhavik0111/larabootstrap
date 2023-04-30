<!-- Menu -->
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item">
                    <a href="{{ route('admin.dashboard') }}"
                      class="sidebar-link waves-effect waves-dark sidebar-link"
                      aria-expanded="false"
                      ><i class="mdi mdi-view-dashboard"></i
                      ><span class="hide-menu">Dashboard</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('user.index') }}"
                       class="sidebar-link waves-effect waves-dark sidebar-link"aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="javascript:void(0)"
                      class="sidebar-link has-arrow waves-effect waves-dark"
                      aria-expanded="false"
                      ><i class="mdi mdi-receipt"></i
                      ><span class="hide-menu">E-Commerce </span></a>

                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.category.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i
                              ><span class="hide-menu"> All Categories </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.product.index') }}" class="sidebar-link"
                              ><i class="mdi mdi-note-plus"></i
                              ><span class="hide-menu"> All Products </span></a
                            >
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
