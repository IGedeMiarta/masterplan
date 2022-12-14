
<div class="sidebar capsule--rounded bg_img overlay"
     {{-- data-background="{{asset('assets/admin/images/sidebar/2.jpg')}}" --}}
    style="background-color: #3d312a !important;"
     >
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="{{route('user.home')}}" class="sidebar__main-logo"><img
                    src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="@lang('image')"></a>
            <a href="{{route('user.home')}}" class="sidebar__logo-shape"><img
                    src="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}" alt="@lang('image')"></a>
            <button type="button" class="navbar__expand"></button>
        </div>
        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item {{menuActive('user.home')}}">
                    <a href="{{route('user.home')}}" class="nav-link ">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title">@lang('Dashboard')</span>
                    </a>
                </li>

                {{-- @php
                    $survey_notice = getContent('notice.content', true);
                    $get_survey = App\Models\Survey::where('status', 1)
                                ->whereHas('questions')
                                ->whereHas('category', function($query){
                                    $query->where('status', 1);
                                })
                                ->count();
                @endphp

                @if($survey_notice || $get_survey)
                    <li class="sidebar-menu-item {{menuActive('user.survey*')}}">
                        <a href="{{route('user.survey')}}" class="nav-link ">
                            <i class="lar la-question-circle menu-icon"></i>
                            <span class="menu-title">@lang('Start Survey')</span>
                        </a>
                    </li>
                @endif --}}

                <li class="sidebar-menu-item {{menuActive('user.plan.index')}}">
                    <a href="{{route('user.plan.index')}}" class="nav-link ">
                        <i class="menu-icon las la-lightbulb"></i>
                        <span class="menu-title">@lang('Plan')</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{menuActive('user.product.index')}}">
                    <a href="{{route('user.product.index')}}" class="nav-link ">
                        <i class="menu-icon las la-archive"></i>
                        <span class="menu-title">@lang('Product')</span>
                    </a>
                </li>
                @if (auth()->user()->bro_qty + 1 > 1)
                    
                <li class="sidebar-menu-item {{menuActive('user.user_boom')}}">
                    <a href="{{route('user.user_boom')}}" class="nav-link ">
                        <i class="menu-icon las la-users-cog"></i>
                        <span class="menu-title">@lang('Manage User')</span>
                    </a>
                </li>
                @endif

                {{-- <li class="sidebar-menu-item {{ menuActive('user.bv.log') }}">
                    <a href="{{ route('user.bv.log') }}" class="nav-link">
                        <i class="menu-icon las la-sitemap"></i>
                        <span class="menu-title">@lang('BV Log')</span>
                    </a>
                </li> --}}
                {{-- <li class="sidebar-menu-item {{ menuActive('user.my.ref') }}">
                    <a href="{{ route('user.my.ref') }}" class="nav-link">
                        <i class="menu-icon las la-users"></i>
                        <span class="menu-title">@lang('My Referrals')</span>
                    </a>
                </li> --}}
                {{-- @if (Auth::user()->is_mlm == 1) --}}
                    <li class="sidebar-menu-item {{ menuActive('user.my.tree') }}">
                        <a href="{{ route('user.my.tree') }}" class="nav-link">
                            <i class="menu-icon las la-tree"></i>
                            <span class="menu-title">@lang('My Tree')</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ menuActive('user.gold.invest') }}">
                        <a href="{{ route('user.gold.invest') }}" class="nav-link">
                            <i class="menu-icon las la-coins"></i>
                            <span class="menu-title">@lang('Gold Investment')</span>
                        </a>
                    </li>
                {{-- @endif --}}
                
                {{-- <li class="sidebar-menu-item {{ menuActive('user.binary.summery') }}">
                    <a href="{{ route('user.binary.summery') }}" class="nav-link">
                        <i class=" menu-icon las la-chart-area"></i>
                        <span class="menu-title">@lang('Binary Summery')</span>
                    </a>
                </li> --}}
                <li class="sidebar-menu-item {{ menuActive('user.deposit') }}">
                    <a href="{{ route('user.deposit') }}" class="nav-link">
                        <i class=" menu-icon las la-credit-card"></i>
                        <span class="menu-title">@lang('Deposit Now')</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ menuActive('user.withdraw') }}">
                    <a href="{{ route('user.withdraw') }}" class="nav-link">
                        <i class="menu-icon las la-cloud-download-alt"></i>
                        <span class="menu-title">@lang('Withdraw Now')</span>
                    </a>
                </li>
                {{-- <li class="sidebar-menu-item {{ menuActive('user.balance.transfer') }}">
                    <a href="{{ route('user.balance.transfer') }}" class="nav-link">
                        <i class="menu-icon las la-hand-holding-usd"></i>
                        <span class="menu-title">@lang('Balance Transfer')</span>
                    </a>
                </li> --}}
                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('user.report*',3)}} my-2">
                        <i class="menu-icon las la-exchange-alt"></i>
                        <span class="menu-title">@lang('Reports') / @lang('Logs')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('user.report*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('user.report.transactions')}} ">
                                <a href="{{route('user.report.transactions')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Transactions Log')</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('user.report.deposit')}}">
                                <a href="{{route('user.report.deposit')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Deposit Log')</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('user.report.withdraw')}}">
                                <a href="{{route('user.report.withdraw')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Withdraw Log')</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('user.report.invest')}}">
                                <a href="{{route('user.report.invest')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Invest Log')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('user.report.exchangeLog')}}">
                                <a href="{{route('user.report.exchangeLog')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Gold Exchange Log')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('user.report.deliveryLog')}}">
                                <a href="{{route('user.report.deliveryLog')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Gold Delivery Log')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('user.report.BroDeliveryLog')}}">
                                <a href="{{route('user.report.BroDeliveryLog')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('BRO Pack Delivery Log')</span>
                                </a>
                            </li>
                            {{-- <li class="sidebar-menu-item {{menuActive('user.report.refCom')}}">
                                <a href="{{route('user.report.refCom')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Referral Commissions')</span>
                                </a>
                            </li> --}}
                            <li class="sidebar-menu-item {{menuActive('user.report.binaryCom')}}">
                                <a href="{{route('user.report.binaryCom')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Binary Commission')</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                {{-- <li class="sidebar-menu-item {{ menuActive('user.twofactor') }}">
                    <a href="{{ route('user.twofactor') }}" class="nav-link">
                        <i class="menu-icon las la-shield-alt"></i>
                        <span class="menu-title">@lang('2FA Security')</span>
                    </a>
                </li> --}}

                {{-- <li class="sidebar-menu-item {{ menuActive('ticket*') }}">
                    <a href="https://wa.me/087123123123?text=Hello%20MicroGold" target="_blank" class="nav-link">
                        <i class="menu-icon las la-ticket-alt"></i>
                        <span class="menu-title">@lang('Support')</span>
                    </a>
                </li> --}}
                <li class="sidebar-menu-item {{ menuActive('ticket*') }}">
                    <a href="{{ route('ticket') }}" class="nav-link">
                        <i class="menu-icon las la-ticket-alt"></i>
                        <span class="menu-title">@lang('Support')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{ menuActive('user.profile-setting') }}">
                    <a href="{{ route('user.profile-setting') }}" class="nav-link">
                        <i class="menu-icon las la-user"></i>
                        <span class="menu-title">@lang('Profile')</span>
                    </a>
                </li>
                {{-- <li class="sidebar-menu-item {{ menuActive('user.login.history') }}">
                    <a href="{{ route('user.login.history') }}" class="nav-link">
                        <i class="menu-icon las la-user"></i>
                        <span class="menu-title">@lang('Login History')</span>
                    </a>
                </li> --}}
                <li class="sidebar-menu-item">
                    <a href="{{ route('user.logout') }}" class="nav-link">
                        <i class="menu-icon las la-sign-out-alt"></i>
                        <span class="menu-title">@lang('Logout')</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

