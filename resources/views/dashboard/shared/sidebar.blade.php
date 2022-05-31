<div class="c-sidebar-brand">
  <img class="c-sidebar-brand-full" src="{{ url('/assets/brand/coreui-base-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
  <img class="c-sidebar-brand-minimized" src="{{ url('assets/brand/coreui-signet-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
</div>
<ul class="c-sidebar-nav">

  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('dashboard.index') }}">
      <i class="cil-speedometer c-sidebar-nav-icon"></i>
      Dashboard
    </a>
  </li>

  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="">
      <i class="cil-paper-plane c-sidebar-nav-icon"></i>
      Qualification
    </a>
  </li>


  <li class="c-sidebar-nav-title">@lang('System')</li>

  @role('admin')
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{ route('users.index') }}">
        <i class="cil-people c-sidebar-nav-icon"></i>
        Users
      </a>
    </li>
  @endrole

  <li class="c-sidebar-nav-item">
    <form action="{{ url('/logout') }}" method="POST"> @csrf 
      <span class="c-sidebar-nav-link logout-link" style="cursor:pointer">
        <i class="cil-account-logout c-sidebar-nav-icon"></i>
        Logout
      </span>
    </form>
  </li>

</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>