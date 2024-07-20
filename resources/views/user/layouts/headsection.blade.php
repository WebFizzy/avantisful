<div class="app align-content-stretch d-flex flex-wrap">

    <div class="app-sidebar">
        <div class="logo">
            <!-- @if (Auth::user()->pfp_path == 'empty')
                <img src="{{ env('APP_URL') }}cloud/uploads/pfp/emptyy.jpg" alt="" style="width:50px; border-radius:100%; height:50px; margin-top:-4px">
            @else
                <img src="{{ env('APP_URL') }}cloud/uploads/pfp/{{ Auth::user()->pfp_path }}" alt="" style="width:50px; border-radius:100%; height:50px; margin-top:-4px">
            @endif -->
            <div class="logo-img">
                <img src="{{ asset('images/avantiswealth.png') }}" alt="navbar logo">
            </div>
            
            <div class="sidebar-user-switcher user-activity-online">
                <a href="#">
                </a>
            </div>
        </div>
        @include('layouts.leftmenu')
    </div>
    <div class="app-container">
        <div class="search">
            <form>
                <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
            </form>
            <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
        </div>

        
        
        <div class="app-header">
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-nav" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                            </li>
                        </ul>        
                    </div>
                </div>
                <div class="catee">
                    <div class="cateee">
                        <div class="cat">
                            <i class="material-icons-two-tone">account_circle</i>
                            <span>
                            <i class="material-icons has-sub-menu acct-log1">keyboard_arrow_right</i></span>
                            <i class="material-icons has-sub-menu acct-log2">keyboard_arrow_down</i>
                        </div>
                        
                        <div>
                            <ul class="out-log">
                                <li>
                                    <a href="{{ route('acctinfo') }}">@lang('messages.withdrawalInfo')</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.edit', ['user' => Auth::user()]) }}">@lang('messages.updateAcct')</a>
                                </li>
                                <li>
                                    <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logUserInForm') }}">@lang('messages.logOut') ({{ Auth::user()->username }})</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
                                    @csrf
                                   </form>
                                </li>
                            </ul>
                        </div>
                    </div>             
                 </div>
            </nav>
         <div class="gtranslate_wrapper"></div>
        <script>window.gtranslateSettings = {"default_language":"en","wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"inline","switcher_vertical_position":"top","flag_style":"3d"}</script>
        <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script> 
        </div>
        @yield('content')
    </div>
</div>