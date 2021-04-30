<header id="header" id="home">
    <div class="container main-menu py-4">
        <div class="row align-items-center justify-content-between d-flex px-5">
            <div id="logo">
                <a href="/"><img src="{{ asset('images/enermo-logo.png') }}" alt="Logo Enermo" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a {{ $active == 'home' ? 'class=active' : '' }} href="/">Home</a></li>
                    <li><a {{ $active == 'about-us' ? 'class=active' : '' }} href="/about-us">About Us</a></li>
                    <li><a {{ $active == 'services' ? 'class=active' : '' }} href="/services">Services</a></li>
                    <li><a {{ $active == 'blog' ? 'class=active' : '' }} href="/blog">Blog</a></li>
                    <li><a {{ $active == 'contact' ? 'class=active' : '' }} href="/contact">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
