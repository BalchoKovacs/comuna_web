<aside class="main-sidebar sidebar-dark-primary elevation-4" >
   

    <style type="text/css">
        .brand-link .brand-image {
        float: left;
    line-height: .8;
    margin-left: 0.8rem;
    margin-right: .5rem;
    margin-top: 8px;
    max-height: 40px;
    width: auto;
}
    
    </style>
    
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link" style="    text-align-last: center;">
      <img src="{{asset('r_l/images/logo_2.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistema de<br>Administracion </span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/programmer.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo Auth::user()->nombre; ?> <?php echo Auth::user()->apellidos; ?></a>
        </div>
      </div>
               <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <ul class="nav nav-treeview">
                        @include('layouts.menu')
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
  </aside>
