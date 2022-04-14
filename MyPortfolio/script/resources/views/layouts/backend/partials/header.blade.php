 <div class="header">    
    <div class="header-content clearfix">
        
        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        
        <div class="header-right">
            <ul class="clearfix">
             
              
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{ asset(Auth::user()->avatar)}}" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile   dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="{{ route('admin.admin.mysettings') }}"><i class="icon-user"></i> <span>{{ __('Settings') }}</span></a>
                                </li>
                                
                                
                                <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout1').submit();"><i class="icon-key"></i> <span>Logout</span></a></li>
                                <form id="logout1" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>