<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <a class="navbar-brand navbar-brand-mobile" href="/">
                <img class="img-fluid w-100" src="{{asset('public/img/logo-mini.png')}}" alt="Graindashboard">
            </a>
            <a class="navbar-brand navbar-brand-desktop" href="/">
                <img class="side-nav-show-on-closed" src="{{asset('public/img/logo-mini.png')}}" alt="Graindashboard" style="width: auto; height: 33px;">
                <img class="side-nav-hide-on-closed" src="{{asset('public/img/logo.png')}}" alt="Graindashboard" style="width: auto; height: 33px;">
            </a>
        </div>
        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
                    <i class="gd-align-left"></i>
                </a>
                <div class="dropdown ml-auto">
                    <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#notifications" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>