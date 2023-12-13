<!-- Pop up Menu -->
<div class="offcanvas offcanvas-end w-100 PopupMenu" tabindex="-1" id="PopupMenu" aria-labelledby="PopupMenuLabel">
    <div class="offcanvas-header w-100">
        <div class="text-center align-items-center">
            <span class="fs-16pt">R.S.V.P</span>
        </div>
        <div class="text-end">
            <button type="button" class="btn text-white bg-transparent fs-2 close-menu close-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    </div>
    <div class="offcanvas-body pt-sm-3">
        <nav class="nav w-100 h-100 align-items-center">
            <ul class="list-unstyled w-100">
                <li>
                    <div class="row g-1 align-items-end">
                        <div class="col-5 text-end">
                            <h4 class="mb-3">01</h4>
                        </div>
                        <div class="col-7">
                            <a class="display-1" href="/about">About</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row g-1 align-items-end">
                        <div class="col-7 text-end">
                            <a class="display-1" href="/services">Services</a>
                        </div>
                        <div class="col-5">
                            <h4 class="mb-3">02</h4>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row g-1 align-items-end">
                        <div class="col-5 text-end">
                            <h4 class="mb-3">03</h4>
                        </div>
                        <div class="col-7">
                            <a class="display-1" href="/projects">Projects</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row g-1 align-items-end">
                        <div class="col-7 text-end">
                            <a class="display-1" href="/culture">Culture</a>
                        </div>
                        <div class="col-5">
                            <h4 class="mb-3">04</h4>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row g-1 align-items-end">
                        <div class="col-5 text-end">
                            <h4 class="mb-3">05</h4>
                        </div>
                        <div class="col-7">
                            <a class="display-1" href="/contact">Contact</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- End Pop up Menu -->
<div class="d-block px-3 py-2 text-center text-bold bg-tblack">
    <p class="text-white h6 fw-normal">Join the <span class="h6 fw-normal fst-italic">R.S.V.P Community</span></p>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand navbar-toggler border-0" href="/">
                <span class="logo">R.S.V.P</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" href="#PopupMenu" role="button" aria-controls="PopupMenuLabel">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 16" fill="none">
                    <line y1="1.75" x2="50" y2="1.75" stroke="#151515" stroke-width="2.5"></line>
                    <line x1="16.6641" y1="13.75" x2="49.9974" y2="13.75" stroke="#151515" stroke-width="2.5"></line>
                </svg>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= get_current_url() ? null : "active" ?>" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= get_current_url() === "services" ? "active" : null ?>" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= get_current_url() === "projects" ? "active" : null ?>" href="/projects">Projects</a>
                    </li>
                </ul>
                <a class="navbar-brand m-0 p-0" href="/">
                    <span class="logo">R.S.V.P</span>
                </a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= get_current_url() === "culture" ? "active" : null ?>" href="/culture">Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= get_current_url() === "about" ? "active" : null ?>" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= get_current_url() === "contact" ? "active" : null ?>" href="/contact">Contact</a>
                    </li>
                    <li>
                        <a class="btn" type="button" data-bs-toggle="offcanvas" href="#PopupMenu" role="button" aria-controls="PopupMenuLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 16" fill="none">
                                <line y1="1.75" x2="50" y2="1.75" stroke="#151515" stroke-width="2.5"></line>
                                <line x1="16.6641" y1="13.75" x2="49.9974" y2="13.75" stroke="#151515" stroke-width="2.5"></line>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>