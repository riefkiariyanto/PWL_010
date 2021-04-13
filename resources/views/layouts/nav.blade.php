
<div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="#" class="navbar-brand tm-site-name">Classic</a>

            <!-- navbar -->
            <nav class="navbar tm-main-nav">

                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>

                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item  {{ Request::is('home') ? 'active' : '' }}">
                            <a  class="nav-link" href={{ route('index.home') }}>Home</a>
                        </li>
                        <li class="nav-item  {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link" href={{ route('index.about') }} >About</a>
                        </li>
                        <li class="nav-item"  {{ Request::is('blog') ? 'active' : '' }}>
                            <a class="nav-link" href={{ route('index.blog') }} >Blog</a>
                        </li>
                        <li class="nav-item  {{ Request::is('contact') ? 'active' : '' }}">
                            <a href={{ route('contact.index') }} class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>

            </nav>

        </div>
    </div>
</div>
