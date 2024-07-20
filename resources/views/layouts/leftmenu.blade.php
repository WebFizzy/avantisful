<div class="app-menu">
    <ul class="accordion-menu sidebar">
        <li class="sidebar-title">
            
            @if (Auth::user()->pfp_path == 'empty')
                <img src="{{ asset('images/blank-profile.png') }}" alt="" style="width:50px; border-radius:100%; height:50px;">
            @else
                <img src="{{ env('APP_URL') }}cloud/uploads/pfp/{{ Auth::user()->pfp_path }}" alt="" style="width:50px; border-radius:100%; height:50px; margin-top:-4px;">
            @endif

            @lang('messages.welcome'), <span>{{ Auth::user()->username }}!</span>

        </li>

        <div class="kyc">
            @if ($user->kyc_status == 'Unverified' || $user->kyc_status == 'Failed')
                <div class="card-header">
                    <span class="badge badge-pending badge-style-light">@lang('messages.unverified')</span>
                @if ($user->kyc_status == 'Failed')
                    <span class="badge badge-danger badge-style-light">@lang('messages.failed')</span>
                    @endif
                </div>
            @elseif ($user->kyc_status == 'Submitted')  
                <div class="card-header">
                        <span class="badge badge-info badge-style-light">@lang('messages.submitted')</span>
                </div>
            @elseif ($user->kyc_status == 'Verified')
                <div class="card-header">
                        <span class="badge badge-success badge-style-light">@lang('messages.verified')</span>
                </div>
            @endif
        </div>
        
        <li>
            <a href="{{ route('home') }}" class="{{ (request()->routeIs('home')) ? 'active' : '' }}"><i class="material-icons-two-tone">dashboard</i>@lang('messages.dashboard')</a>
        </li>
        <li>
            <a href="{{ route('deposits') }}" class="{{ (request()->routeIs('deposits')) ? 'active' : '' }}"><i class="material-icons-two-tone">credit_card</i>@lang('messages.deposits')</a>
        </li>
        <li>
            <a href="{{ route('mywithdrawals') }}" class="{{ (request()->routeIs('mywithdrawals')) ? 'active' : '' }}"><i class="material-icons-two-tone">credit_card</i>@lang('messages.withdrawals')</a>
        </li>
        <li>
            <a href="{{ route('investplans') }}" class="{{ (request()->routeIs('investplans')) ? 'active' : '' }}"><i class="material-icons-two-tone">payments</i>@lang('messages.investmentPlans')</a>
        </li>
        <li>
            <a href="{{ route('myplans') }}" class="{{ (request()->routeIs('myplans')) ? 'active' : '' }}"><i class="material-icons-two-tone">monetization_on</i>@lang('messages.myInvestmentPlans')</a>
        </li>
        <li>
            <a href="{{ route('accthist') }}" class="{{ (request()->routeIs('accthist')) ? 'active' : '' }}"><i class="material-icons-two-tone">history_toggle_off</i>@lang('messages.transactionHistory')</a>
        </li>
        <li>
            <a href="{{ route('refer') }}" class="{{ (request()->routeIs('refer')) ? 'active' : '' }}"><i class="material-icons-two-tone">group_add</i>@lang('messages.referUsers')<span class="badge rounded-pill badge-danger float-end"></span></a>
        </li>
        <li>
            <a href="{{ route('support') }}" class="{{ (request()->routeIs('support')) ? 'active' : '' }}"><i class="material-icons-two-tone">contact_support</i>@lang('messages.support')</a>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">translate</i>{{ Config::get('languages')[App::getLocale()] }}<span class="badge rounded-pill badge-danger float-end">8</span></a>
            <ul class="sub-menu">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li>
                            <a href="{{ route('setLocale', $lang) }}">{{ $language }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li>
            <a href=""><i class="material-icons-two-tone">account_circle</i>@lang('messages.account')<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logUserInForm') }}">@lang('messages.logOut') ({{ Auth::user()->username }})</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
                        @csrf

                    </form>
                </li>
                <li>
                    <a href="{{ route('acctinfo') }}">@lang('messages.withdrawalInfo')</a>
                </li>
                <li>
                    <a href="{{ route('user.edit', ['user' => Auth::user()]) }}">@lang('messages.updateAcct')</a>
                </li>
                {{-- <li>
                    <a href="#">Authentication<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('logUserInForm') }}">Sign In</a>
                        </li>
                        <li>
                            <a href="lock-screen.html">Lock Screen</a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </li>
    </ul>
</div>