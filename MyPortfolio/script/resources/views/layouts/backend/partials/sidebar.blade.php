 <div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.tagline.index') }}" aria-expanded="false">
                    <i class="fa fa-question-circle menu-icon"></i><span class="nav-text">Tagline</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.about.index') }}" aria-expanded="false">
                    <i class="fa fa-question-circle menu-icon"></i><span class="nav-text">About Section</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.experience.index') }}" aria-expanded="false">
                    <i class="fa fa-briefcase menu-icon"></i><span class="nav-text">Experience</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.skill.index') }}" aria-expanded="false">
                    <i class="fa fa-sliders "></i><span class="nav-text">Skills</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.service.index') }}" aria-expanded="false">
                    <i class="fa fa-laptop menu-icon"></i><span class="nav-text">{{ __('Service') }}</span>
                </a>
            </li>
           
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">{{ __('Category') }}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.category.create') }}">{{ __('Create Category') }}</a></li>
                    <li><a href="{{ route('admin.category.index') }}">{{ __('All Category') }}</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.portfolio.index') }}" aria-expanded="false">
                    <i class="fa fa-address-card menu-icon"></i><span class="nav-text">{{ __('Portfolio') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.testimonial.index') }}" aria-expanded="false">
                    <i class="fa fa-comment menu-icon"></i><span class="nav-text">{{ __('Testimonials') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.subscriber.index') }}" aria-expanded="false">
                    <i class="fa fa-users menu-icon"></i><span class="nav-text">{{ __('Subscribers') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.social.index') }}" aria-expanded="false">
                    <i class="fa fa-thumbs-up menu-icon"></i><span class="nav-text">{{ __('Social Link') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.language.index') }}" aria-expanded="false">
                  <i class="fa fa-globe menu-icon"></i><span class="nav-text">Language</span>
                </a>
            </li>
             <li>
                <a href="{{ route('admin.menu.index') }}" aria-expanded="false">
                 <i class="fa fa-bars menu-icon"></i><span class="nav-text">Menus</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.seo.index') }}" aria-expanded="false">
                    <i class="ti-stats-up menu-icon"></i><span class="nav-text">SEO</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.custom.index') }}" aria-expanded="false">
                    <i class="ti-shortcode menu-icon"></i><span class="nav-text">Css Js</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings.index') }}" aria-expanded="false">
                    <i class="ti-settings menu-icon"></i><span class="nav-text">Site Settings</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout').submit();" aria-expanded="false">
                <i class="icon-key menu-icon"></i><span class="nav-text">Logout</span>
            </a>
            <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
</div>