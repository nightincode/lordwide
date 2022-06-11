<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ route('default') }}">
            Soft UI Dashboard PRO
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            @if (in_array(request()->route()->getName(),['login', 'register'],))
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('register') }}">
                            <i class="fas fa-user-circle opacity-6 text-white me-1"></i>
                            Sign Up
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('login') }}">
                            <i class="fas fa-key opacity-6 text-white me-1"></i>
                            Sign In
                        </a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav navbar-nav-hover mx-auto">
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                            id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                            <img src=" ../../../assets/img/down-arrow-white.svg  " alt="down-arrow"
                                class="arrow ms-1 d-lg-block d-none">
                            <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                                class="arrow ms-1 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3"
                            aria-labelledby="dropdownMenuPages">
                            <div class="row d-none d-lg-block">
                                <div class="col-12 px-4 py-2">
                                    <div class="row">
                                        <div class="col-4 position-relative">
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                        <svg width="12px" height="12px" viewBox="0 0 40 40"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>spaceship</title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1720.000000, -592.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(4.000000, 301.000000)">
                                                                            <path class="color-background"
                                                                                d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                            </path>
                                                                            <path class="color-background"
                                                                                d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                            </path>
                                                                            <path class="color-background"
                                                                                d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                                opacity="0.598539807"></path>
                                                                            <path class="color-background"
                                                                                d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                                opacity="0.598539807"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Dashboards
                                            </div>
                                            <a href="{{ route('default') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Default</span>
                                            </a>
                                            <a href="{{ route('automotive') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Automotive</span>
                                            </a>
                                            <a href="{{ route('smart-home') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Smart Home</span>
                                            </a>
                                            <a href="{{ route('virtual-reality') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Virtual Reality</span>
                                            </a>
                                            <a href="{{ route('crm') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">CRM</span>
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                        <svg width="12px" height="12px" viewBox="0 0 42 42"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>office</title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1869.000000, -293.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(153.000000, 2.000000)">
                                                                            <path
                                                                                d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                                                                opacity="0.6"></path>
                                                                            <path
                                                                                d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Users
                                            </div>
                                            <a href="{{ route('reports') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Reports</span>
                                            </a>
                                            <a href="{{ route('new-user') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">New User</span>
                                            </a>
                                            <hr class="vertical dark">
                                        </div>
                                        <div class="col-4 position-relative">
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                        <svg width="12px" height="12px" viewBox="0 0 45 40"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>shop </title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1716.000000, -439.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(0.000000, 148.000000)">
                                                                            <path
                                                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                                opacity="0.598981585"></path>
                                                                            <path
                                                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Profile
                                            </div>
                                            <a href="{{ route('overview') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Overview</span>
                                            </a>
                                            <a href="{{ route('teams') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Teams</span>
                                            </a>
                                            <a href="{{ route('all-projects') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Projects</span>
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                        <svg width="12px" height="12px" viewBox="0 0 42 42"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>box-3d-50</title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-2319.000000, -291.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(603.000000, 0.000000)">
                                                                            <path
                                                                                d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                            </path>
                                                                            <path
                                                                                d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                                opacity="0.7"></path>
                                                                            <path
                                                                                d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                                opacity="0.7"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Projects
                                            </div>
                                            <a href="{{ route('general') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">General</span>
                                            </a>
                                            <a href="{{ route('timeline') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Timeline</span>
                                            </a>
                                            <a href="{{ route('new-project') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">New Project</span>
                                            </a>
                                            <hr class="vertical dark">
                                        </div>
                                        <div class="col-4">
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                        <svg width="12px" height="12px" viewBox="0 0 46 42"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>customer-support</title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1717.000000, -291.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(1.000000, 0.000000)">
                                                                            <path class="color-background"
                                                                                d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                                                                opacity="0.59858631"></path>
                                                                            <path class="color-foreground"
                                                                                d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                                            </path>
                                                                            <path class="color-foreground"
                                                                                d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Account
                                            </div>
                                            <a href="{{ route('settings') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Settings</span>
                                            </a>
                                            <a href="{{ route('billing') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Billing</span>
                                            </a>
                                            <a href="{{ route('invoice') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Invoice</span>
                                            </a>
                                            <a href="{{ route('reports') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Security</span>
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                        <svg width="12px" height="12px" viewBox="0 0 40 44"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>document</title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1870.000000, -591.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g
                                                                            transform="translate(154.000000, 300.000000)">
                                                                            <path
                                                                                d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                                opacity="0.603585379"></path>
                                                                            <path
                                                                                d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Extra
                                            </div>
                                            <a href="{{ route('pricing') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Pricing Page</span>
                                            </a>
                                            <a href="{{ route('rtl') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">RTL Page</span>
                                            </a>
                                            <a href="{{ route('widgets') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Widgets</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- responsive -->
                            <div class="d-lg-none">
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>shop </title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(0.000000, 148.000000)">
                                                                <path
                                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                    opacity="0.598981585"></path>
                                                                <path
                                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    Dashboards
                                </div>
                                <a href="{{ route('default') }}" class="dropdown-item border-radius-md">
                                    Default
                                </a>
                                <a href="{{ route('automotive') }}" class="dropdown-item border-radius-md">
                                    Automotive
                                </a>
                                <a href="{{ route('smart-home') }}" class="dropdown-item border-radius-md">
                                    Smart Home
                                </a>
                                <a href="{{ route('virtual-reality') }}" class="dropdown-item border-radius-md">
                                    Virtual Reality
                                </a>
                                <a href="{{ route('crm') }}" class="dropdown-item border-radius-md">
                                    CRM
                                </a>
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>office</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(153.000000, 2.000000)">
                                                                <path
                                                                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                                                    opacity="0.6"></path>
                                                                <path
                                                                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    Users
                                </div>
                                <a href="{{ route('reports') }}" class="dropdown-item border-radius-md">
                                    Reports
                                </a>
                                <a href="{{ route('new-user') }}" class="dropdown-item border-radius-md">
                                    New user
                                </a>
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>customer-support</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(1.000000, 0.000000)">
                                                                <path class="color-background"
                                                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                                                    opacity="0.59858631"></path>
                                                                <path class="color-foreground"
                                                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                                </path>
                                                                <path class="color-foreground"
                                                                    d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    Profile
                                </div>
                                <a href="{{ route('overview') }}" class="dropdown-item border-radius-md">
                                    Overview
                                </a>
                                <a href="{{ route('teams') }}" class="dropdown-item border-radius-md">
                                    Teams
                                </a>
                                <a href="{{ route('all-projects') }}" class="dropdown-item border-radius-md">
                                    Projects
                                </a>
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>box-3d-50</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(603.000000, 0.000000)">
                                                                <path
                                                                    d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                </path>
                                                                <path
                                                                    d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                    opacity="0.7"></path>
                                                                <path
                                                                    d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                    opacity="0.7"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    Projects
                                </div>
                                <a href="{{ route('general') }}" class="dropdown-item border-radius-md">
                                    General
                                </a>
                                <a href="{{ route('timeline') }}" class="dropdown-item border-radius-md">
                                    Timeline
                                </a>
                                <a href="{{ route('new-project') }}" class="dropdown-item border-radius-md">
                                    New Project
                                </a>
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>document</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(154.000000, 300.000000)">
                                                                <path
                                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                    opacity="0.603585379"></path>
                                                                <path
                                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    Account
                                </div>
                                <a href="{{ route('settings') }}" class="dropdown-item border-radius-md">
                                    Settings
                                </a>
                                <a href="{{ route('billing') }}" class="dropdown-item border-radius-md">
                                    Billing
                                </a>
                                <a href="{{ route('invoice') }}" class="dropdown-item border-radius-md">
                                    Invoice
                                </a>
                                <a href="{{ route('security') }}" class="dropdown-item border-radius-md">
                                    Security
                                </a>
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                            <svg class="" width="12px" height="20px" viewBox="0 0 40 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>spaceship</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(4.000000, 301.000000)">
                                                                <path
                                                                    d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                </path>
                                                                <path
                                                                    d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                </path>
                                                                <path
                                                                    d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                    opacity="0.598539807"></path>
                                                                <path
                                                                    d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                    opacity="0.598539807"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    Extra
                                </div>
                                <a href="{{ route('pricing') }}" class="dropdown-item border-radius-md">
                                    Pricing Page
                                </a>
                                <a href="{{ route('rtl') }}" class="dropdown-item border-radius-md">
                                    RTL Page
                                </a>
                                <a href="{{ route('widgets') }}" class="dropdown-item border-radius-md">
                                    Widgets
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                            id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                            Authentication
                            <img src=" ../../../assets/img/down-arrow-white.svg " alt="down-arrow"
                                class="arrow ms-1 d-lg-block d-none">
                            <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                                class="arrow ms-1 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-lg border-radius-xl p-3 mt-0 mt-lg-3"
                            aria-labelledby="dropdownMenuAccount">
                            <div class="row d-none d-lg-flex">
                                <div class="col-6">
                                    <div class="py-6 h-100 w-100 d-flex border-radius-lg position-relative dropdown-image"
                                        style="background-image:url('../../../assets/img/curved-images/curved8.jpg')">
                                        <div class="mask bg-gradient-primary border-radius-lg"></div>
                                        <div
                                            class="d-flex justify-content-center align-items-center text-center text-white font-weight-bold w-100 z-index-1 flex-column">
                                            <div class="icon icon-shape rounded-circle bg-white shadow text-center">
                                                <i class="ni ni-diamond text-primary text-gradient text-lg"
                                                    aria-hidden="true"></i>
                                            </div>
                                            <span class="text-lg mt-2">Explore our<br>utilities pages</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 ps-0 d-flex justify-content-center flex-column">
                                    <ul class="list-group">
                                        <li
                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                                id="dropdownSignIn">
                                                <span>Sign In</span>
                                                <img src="../../../assets/img/down-arrow.svg" alt="down-arrow"
                                                    class="arrow">
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignIn">
                                                <a href="{{ route('signin-basic') }}"
                                                    class="dropdown-item border-radius-md">
                                                    Signin Basic
                                                </a>
                                                <a href="{{ route('signin-cover') }}"
                                                    class="dropdown-item border-radius-md">
                                                    Signin Cover
                                                </a>
                                                <a href="{{ route('signin-illustration') }}"
                                                    class="dropdown-item border-radius-md">
                                                    Signin Illustration
                                                </a>
                                            </div>
                                        </li>
                                        <li
                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                                id="dropdownSignUp">
                                                <span>Sign Up</span>
                                                <img src="../../../assets/img/down-arrow.svg" alt="down-arrow"
                                                    class="arrow">
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignUp">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('signup-basic') }}">
                                                    <span>Basic</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('signup-cover') }}">
                                                    <span>Cover</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('signup-illustration') }}">
                                                    <span>Illustration</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li
                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                                id="dropdownPasswordReset">
                                                <span>Reset Password</span>
                                                <img src="../../../assets/img/down-arrow.svg" alt="down-arrow"
                                                    class="arrow">
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2"
                                                aria-labelledby="dropdownPasswordReset">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('reset-basic') }}">
                                                    <span>Basic</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('reset-cover') }}">
                                                    <span>Cover</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('reset-illustration') }}">
                                                    <span>Illustration</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li
                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                                id="dropdownLock">
                                                <span>Lock</span>
                                                <img src="../../../assets/img/down-arrow.svg" alt="down-arrow"
                                                    class="arrow">
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownLock">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('lock-basic') }}">
                                                    <span>Basic</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('lock-cover') }}">
                                                    <span>Cover</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('lock-illustration') }}">
                                                    <span>Illustration</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li
                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                                id="dropdown2fa">
                                                <span>2-Step Verification</span>
                                                <img src="../../../assets/img/down-arrow.svg" alt="down-arrow"
                                                    class="arrow">
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdown2fa">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('verification-basic') }}">
                                                    <span>Basic</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('verification-cover') }}">
                                                    <span>Cover</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('verification-illustration') }}">
                                                    <span>Illustration</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li
                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1"
                                                id="dropdownError">
                                                <span>Error</span>
                                                <img src="../../../assets/img/down-arrow.svg" alt="down-arrow"
                                                    class="arrow">
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownError">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('404') }}">
                                                    <span>404</span>
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('500') }}">
                                                    <span>500</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row d-lg-none">
                                <div class="col-12 d-flex justify-content-center flex-column">
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                        Sign In
                                    </h6>
                                    <a href="{{ route('signin-basic') }}" class="dropdown-item border-radius-md">
                                        Basic
                                    </a>
                                    <a href="{{ route('signin-cover') }}" class="dropdown-item border-radius-md">
                                        Cover
                                    </a>
                                    <a href="{{ route('signin-illustration') }}"
                                        class="dropdown-item border-radius-md">
                                        Illustration
                                    </a>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                        Sign Up
                                    </h6>
                                    <a href="{{ route('signup-basic') }}" class="dropdown-item border-radius-md">
                                        Basic
                                    </a>
                                    <a href="{{ route('signup-cover') }}" class="dropdown-item border-radius-md">
                                        Cover
                                    </a>
                                    <a href="{{ route('signup-illustration') }}"
                                        class="dropdown-item border-radius-md">
                                        Illustration
                                    </a>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                        Reset Password
                                    </h6>
                                    <a href="{{ route('reset-basic') }}" class="dropdown-item border-radius-md">
                                        Basic
                                    </a>
                                    <a href="{{ route('reset-cover') }}" class="dropdown-item border-radius-md">
                                        Cover
                                    </a>
                                    <a href="{{ route('reset-illustration') }}" class=" dropdown-item
                                        border-radius-md">
                                        Illustation
                                    </a>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                        Lock
                                    </h6>
                                    <a href="{{ route('lock-basic') }}" class="dropdown-item border-radius-md">
                                        Basic
                                    </a>
                                    <a href="{{ route('lock-cover') }}" class="dropdown-item border-radius-md">
                                        Cover
                                    </a>
                                    <a href="{{ route('lock-illustration') }}"
                                        class="dropdown-item border-radius-md">
                                        Illustration
                                    </a>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                        2-Step Verification
                                    </h6>
                                    <a href="{{ route('verification-basic') }}"
                                        class="dropdown-item border-radius-md">
                                        Basic
                                    </a>
                                    <a href="{{ route('verification-cover') }}"
                                        class="dropdown-item border-radius-md">
                                        Cover
                                    </a>
                                    <a href="{{ route('verification-illustration') }}on.html"
                                        class="dropdown-item border-radius-md">
                                        Illustration
                                    </a>
                                    <h6
                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                        Error
                                    </h6>
                                    <a href="{{ route('404') }}" class="dropdown-item border-radius-md">
                                        404
                                    </a>
                                    <a href="{{ route('500') }}" class="dropdown-item border-radius-md">
                                        500
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                            id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                            Applications
                            <img src=" ../../../assets/img/down-arrow-white.svg " alt="down-arrow"
                                class="arrow ms-1 d-lg-block d-none">
                            <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                                class="arrow ms-1 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                            aria-labelledby="dropdownMenuBlocks">
                            <div class="d-none d-lg-block">
                                <ul class="list-group">
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="{{ route('kanban') }}">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <i class="ni ni-single-copy-04 text-gradient text-warning"></i>
                                                </div>
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="dropdown-header text-dark p-0">Kanban</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="{{ route('wizard') }}">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <i class="ni ni-laptop text-gradient text-warning"></i>
                                                </div>
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="dropdown-header text-dark p-0">Wizard</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="{{ route('datatables') }}">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <i class="ni ni-badge text-gradient text-warning"></i>
                                                </div>
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="dropdown-header text-dark p-0">DataTables</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="../../static-page/calendar.html">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <i class="ni ni-notification-70 text-gradient text-warning"></i>
                                                </div>
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="dropdown-header text-dark p-0">Calendar</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- responsive -->
                            <div class="row d-lg-none">
                                <div class="col-md-12">
                                    <a class="py-2 ps-3 border-radius-md" href="{{ route('kanban') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-single-copy-04 text-gradient text-warning"></i>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Kanban</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="py-2 ps-3 border-radius-md" href="{{ route('wizard') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-laptop text-gradient text-warning"></i>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Wizard</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="py-2 ps-3 border-radius-md" href="{{ route('datatables') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-badge text-gradient text-warning"></i>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">DataTables</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="py-2 ps-3 border-radius-md" href="../../static-page/calendar.html">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-notification-70 text-gradient text-warning"></i>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Calendar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                            id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
                            Ecommerce
                            <img src=" ../../../assets/img/down-arrow-white.svg  " alt="down-arrow"
                                class="arrow ms-1 d-lg-block d-none">
                            <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                                class="arrow ms-1 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-lg p-3 border-radius-xl mt-0 mt-lg-3"
                            aria-labelledby="dropdownMenuEcommerce">
                            <div class="row d-none d-lg-block">
                                <div class="col-12 px-4 py-2">
                                    <div class="row">
                                        <div class="col-6 position-relative">
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                        <svg width="12px" height="12px" viewBox="0 0 40 44"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>document</title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1870.000000, -591.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g
                                                                            transform="translate(154.000000, 300.000000)">
                                                                            <path
                                                                                d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                                opacity="0.603585379"></path>
                                                                            <path
                                                                                d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Orders
                                            </div>
                                            <a href="{{ route('order-list')}}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Order List</span>
                                            </a>
                                            <a href="{{ route('order-details')}}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Order Details</span>
                                            </a>
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                        <svg width="12px" height="12px" viewBox="0 0 42 42"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>box-3d-50</title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-2319.000000, -291.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(603.000000, 0.000000)">
                                                                            <path
                                                                                d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                            </path>
                                                                            <path
                                                                                d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                                opacity="0.7"></path>
                                                                            <path
                                                                                d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                                opacity="0.7"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                General
                                            </div>
                                            <a href="{{ route('ecommerce-overview') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Overview</span>
                                            </a>
                                            <a href="{{ route('referral') }}" class="dropdown-item border-radius-md">
                                                <span class="ps-3">Referral</span>
                                            </a>
                                            <hr class="vertical dark">
                                        </div>
                                        <div class="col-6 position-relative">
                                            <div
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div
                                                        class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                        <svg width="12px" height="12px" viewBox="0 0 45 40"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>shop </title>
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g transform="translate(-1716.000000, -439.000000)"
                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(0.000000, 148.000000)">
                                                                            <path
                                                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                                opacity="0.598981585"></path>
                                                                            <path
                                                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Products
                                            </div>
                                            <a href="{{ route('new-product') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">New Product</span>
                                            </a>
                                            <a href="{{ route('edit-product') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Edit Product</span>
                                            </a>
                                            <a href="{{ route('product-page') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Product Page</span>
                                            </a>
                                            <a href="{{ route('products-list') }}"
                                                class="dropdown-item border-radius-md">
                                                <span class="ps-3">Products List</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- responsive -->
                            <div class="d-lg-none">
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>document</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(154.000000, 300.000000)">
                                                                <path
                                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                    opacity="0.603585379"></path>
                                                                <path
                                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    Orders
                                </div>
                                <a href="{{ route('order-list') }}" class="dropdown-item border-radius-md">
                                    Order List
                                </a>
                                <a href="{{ route('order-details') }}" class="dropdown-item border-radius-md">
                                    Order Details
                                </a>
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>box-3d-50</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(603.000000, 0.000000)">
                                                                <path
                                                                    d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                </path>
                                                                <path
                                                                    d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                    opacity="0.7"></path>
                                                                <path
                                                                    d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                    opacity="0.7"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    General
                                </div>
                                <a href="{{ route('ecommerce-overview') }}" class="dropdown-item border-radius-md">
                                    Overview
                                </a>
                                <a href="{{ route('referral') }}" class="dropdown-item border-radius-md">
                                    Referral
                                </a>
                                <div
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                    <div class="d-inline-block">
                                        <div
                                            class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>shop </title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(0.000000, 148.000000)">
                                                                <path
                                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                    opacity="0.598981585"></path>
                                                                <path
                                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    Products
                                </div>
                                <a href="{{ route('new-product') }}" class="dropdown-item border-radius-md">
                                    New Product
                                </a>
                                <a href="{{ route('edit-product') }}" class="dropdown-item border-radius-md">
                                    Edit Product
                                </a>
                                <a href="{{ route('product-page') }}" class="dropdown-item border-radius-md">
                                    Product Page
                                </a>
                                <a href="{{ route('products-list') }}" class="dropdown-item border-radius-md">
                                    Products List
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center "
                            id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                            Docs
                            <img src=" ../../../assets/img/down-arrow-white.svg " alt="down-arrow"
                                class="arrow ms-1 d-lg-block d-none">
                            <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                                class="arrow ms-1 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                            aria-labelledby="dropdownMenuDocs">
                            <div class="d-none d-lg-block">
                                <ul class="list-group">
                                    <li class="nav-item list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <svg class="text-secondary" width="16px" height="16px"
                                                        viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>spaceship</title>
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g transform="translate(-1720.000000, -592.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(4.000000, 301.000000)">
                                                                        <path class="color-background"
                                                                            d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                        </path>
                                                                        <path class="color-background"
                                                                            d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                        </path>
                                                                        <path class="color-background"
                                                                            d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                            opacity="0.598539807"></path>
                                                                        <path class="color-background"
                                                                            d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                            opacity="0.598539807"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                        Getting Started</h6>
                                                    <span class="text-sm">All about overview, quick start, license and
                                                        contents</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="/documentation/bootstrap/overview/soft-ui-dashboard/index.html"
                                            target="_blank">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <svg class="text-secondary" width="16px" height="16px"
                                                        viewBox="0 0 40 44" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>document</title>
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g transform="translate(-1870.000000, -591.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(154.000000, 300.000000)">
                                                                        <path class="color-background"
                                                                            d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                            opacity="0.603585379"></path>
                                                                        <path class="color-background"
                                                                            d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                        Foundation</h6>
                                                    <span class="text-sm">See our colors, icons and typography</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="/documentation/bootstrap/alerts/soft-ui-dashboard/index.html"
                                            target="_blank">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <svg class="text-secondary" width="16px" height="16px"
                                                        viewBox="0 0 42 42" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>box-3d-50</title>
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g transform="translate(-2319.000000, -291.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(603.000000, 0.000000)">
                                                                        <path class="color-background"
                                                                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                        </path>
                                                                        <path class="color-background"
                                                                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                            opacity="0.7"></path>
                                                                        <path class="color-background"
                                                                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                            opacity="0.7"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                        Components</h6>
                                                    <span class="text-sm">Explore our collection of fully designed
                                                        components</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="/documentation/bootstrap/datepicker/soft-ui-dashboard/index.html"
                                            target="_blank">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <svg class="text-secondary" width="16px" height="16px"
                                                        viewBox="0 0 40 44" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>switches</title>
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g transform="translate(-1870.000000, -440.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(154.000000, 149.000000)">
                                                                        <path class="color-background"
                                                                            d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"
                                                                            opacity="0.6"></path>
                                                                        <path class="color-background"
                                                                            d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                        Plugins</h6>
                                                    <span class="text-sm">Check how you can integrate our plugins</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="/documentation/bootstrap/utilities/soft-ui-dashboard/index.html"
                                            target="_blank">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <svg class="text-secondary" width="16px" height="16px"
                                                        viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>settings</title>
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g transform="translate(-2020.000000, -442.000000)"
                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(304.000000, 151.000000)">
                                                                        <polygon class="color-background"
                                                                            opacity="0.596981957"
                                                                            points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                                        </polygon>
                                                                        <path class="color-background"
                                                                            d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                            opacity="0.596981957"></path>
                                                                        <path class="color-background"
                                                                            d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h6
                                                        class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                        Utility Classes</h6>
                                                    <span class="text-sm">For those who want flexibility, use our
                                                        utility classes</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="row d-lg-none">
                                <div class="col-md-12 g-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="/documentation/bootstrap/overview/soft-ui-dashboard/index.html"
                                        target="_blank">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px"
                                                    viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>spaceship</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1720.000000, -592.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(4.000000, 301.000000)">
                                                                    <path class="color-background"
                                                                        d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                                    </path>
                                                                    <path class="color-background"
                                                                        d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                                    </path>
                                                                    <path class="color-background"
                                                                        d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                        opacity="0.598539807"></path>
                                                                    <path class="color-background"
                                                                        d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                        opacity="0.598539807"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Getting Started</h6>
                                                <span class="text-sm">All about overview, quick start, license and
                                                    contents</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="/documentation/bootstrap/overview/soft-ui-dashboard/index.html"
                                        target="_blank">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px"
                                                    viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>document</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1870.000000, -591.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(154.000000, 300.000000)">
                                                                    <path class="color-background"
                                                                        d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                        opacity="0.603585379"></path>
                                                                    <path class="color-background"
                                                                        d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Foundation</h6>
                                                <span class="text-sm">See our colors, icons and typography</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="/documentation/bootstrap/typography/soft-ui-dashboard/index.html"
                                        target="_blank">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px"
                                                    viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>box-3d-50</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2319.000000, -291.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(603.000000, 0.000000)">
                                                                    <path class="color-background"
                                                                        d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                    </path>
                                                                    <path class="color-background"
                                                                        d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                        opacity="0.7"></path>
                                                                    <path class="color-background"
                                                                        d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                        opacity="0.7"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Components</h6>
                                                <span class="text-sm">Explore our collection of fully designed
                                                    components</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="/documentation/bootstrap/alerts/soft-ui-dashboard/index.html"
                                        target="_blank">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px"
                                                    viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>switches</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1870.000000, -440.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(154.000000, 149.000000)">
                                                                    <path class="color-background"
                                                                        d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"
                                                                        opacity="0.6"></path>
                                                                    <path class="color-background"
                                                                        d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Plugins</h6>
                                                <span class="text-sm">Check how you can integrate our plugins</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                        href="/documentation/bootstrap/datepicker/soft-ui-dashboard/index.html"
                                        target="_blank">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px"
                                                    viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>settings</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2020.000000, -442.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(304.000000, 151.000000)">
                                                                    <polygon class="color-background"
                                                                        opacity="0.596981957"
                                                                        points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                                    </polygon>
                                                                    <path class="color-background"
                                                                        d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                        opacity="0.596981957"></path>
                                                                    <path class="color-background"
                                                                        d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Utility Classes</h6>
                                                <span class="text-sm">All about overview, quick start, license and
                                                    contents</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
              </ul>
              @endif
                <ul class="navbar-nav d-lg-block d-none">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-laravel" target="_blank"
                            class="btn btn-sm  {{ in_array(request()->route()->getName(), ['pricing']) ? 'bg-white' : 'bg-gradient-primary' }} btn-round mb-0 me-1"
                            onclick="smoothToPricing('pricing-soft-ui')">Buy Now</a>
                    </li>
                </ul>
        </div>
    </div>
</nav>
