<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i
        class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true"
        id="iconSidenav"
      ></i>
      <a
        class="navbar-brand m-0"
        href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
        target="_blank"
      >
        <img
          src="{{asset('app')}}/assets/img/logo.jpeg"
          class="navbar-brand-img h-100"
          alt=""
        />
        <span class="ms-1 font-weight-bold" style="color:#0F5220;">
            {{ config('app.name', 'Laravel') }}
        </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto h-75" style="width: 100%;" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
            >
              <i class="ni ni-tv-2 text-sm opacity-10" style="color:#0F5220;"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6
            class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6" style="color:#6B565C;"
          >
            Contoh Group Menu
          </h6>
        </li>
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="nav-link" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-box-arrow-in-left text-sm opacity-10"  style="color: #0F5220;"></i>
              </div>
                <span class="nav-link-text ms-1">{{ __('Log Out') }}</span>
            </a>
          </form>
        </li>   
      </ul>
    </div>
</aside>