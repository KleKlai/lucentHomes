<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="menu-icon typcn typcn-home"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      @hasrole('client')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('payment/history') }}">
            <i class="menu-icon typcn typcn-calendar-outline"></i>
            <span class="menu-title">Payment History</span>
            </a>
        </li>
      @endhasrole
      @hasrole('admin')
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="menu-icon typcn typcn-chart-area-outline"></i>
          <span class="menu-title">Bill Management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
          <i class="menu-icon typcn typcn-book"></i>
          <span class="menu-title">Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="e-commerce">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bank.index') }}"> Bank </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.index') }}"> Products </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
          <i class="menu-icon typcn typcn-book"></i>
          <span class="menu-title">User Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="e-commerce">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}"> {{ "User's" }} </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.create') }}"> New User </a>
            </li>
          </ul>
        </div>
      </li>
      @endhasrole
    </ul>
</nav>
