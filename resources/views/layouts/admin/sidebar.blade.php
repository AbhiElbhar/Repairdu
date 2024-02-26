
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Abhijit Elbhar</a>
        </div>
    </div>
    
    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('register.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link">
                    <i class="fas fa-images nav-icon"></i>
                    <p>Slider</p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{route('tester.index')}}" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Tester</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('contact.index')}}" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Contact Us</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Industry
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">  
                    <li class="nav-item">
                        <a href="{{route('industry_category.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>Industry Category</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{route('industry.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>Industry</p>
                        </a>
                    </li>
                </ul>
            </li> 

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tools"></i>
                    <p>
                        Website setting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">                  
                    <li class="nav-item">
                        <a href="{{route('feature.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>Software Feature</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{route('faq.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>FAQ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('knowledge_base.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>Knowledge Base</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Pricing
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">  
                    <li class="nav-item">
                        <a href="{{route('pricing.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>pricing</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{route('pricing.create')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>Add Pricing</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-plus"></i>
                    <p>
                        Administration
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">  
                    <li class="nav-item">
                        <a href="{{route('detail.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>Details</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{route('about.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>About Us</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('social_media.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>Social Media Links</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('policy.index')}}" class="nav-link">
                            <i class="nav-icon"></i>
                            <p>Privacy & Terms.</p>
                        </a>
                    </li>

                </ul>
            </li>   
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->