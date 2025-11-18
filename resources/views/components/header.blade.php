<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <div class="block sm:hidden">
                <img src="assets/images/logo-icon-40.png" class="h-10 inline-block dark:hidden" alt="">
                <img src="assets/images/logo-icon-40-white.png" class="h-10 hidden dark:inline-block" alt="">
            </div>
            <div class="sm:block hidden">
                <img src="assets/images/logo-dark.png" class="h-[24px] inline-block dark:hidden" alt="">
                <img src="assets/images/logo-white.png" class="h-[24px] hidden dark:inline-block" alt="">
            </div>
        </a>
        <!-- End Logo container-->
        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->
        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline-block mb-0">
                <div class="relative top-[3px]">
                    <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                    <input type="text"
                        class="py-2 px-3 text-[14px] border border-gray-100 dark:border-gray-800 dark:text-slate-200 rounded outline-none bg-transparent h-9 !pe-10 rounded-3xl sm:w-44 w-36 bg-white dark:bg-slate-900"
                        name="s" id="searchItem" placeholder="Buscar...">
                </div>
            </li>
            <li class="dropdown inline-block relative ps-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                    <span
                        class="size-9 inline-flex items-center text-center justify-center text-base font-semibold tracking-wide border align-middle transition duration-500 ease-in-out rounded-full bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white"><img
                            src="assets/images/team/01.jpg" class="rounded-full" alt=""></span>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden"
                    onclick="event.stopPropagation();">
                    <ul class="py-2 text-start">
                        <li>
                            <a href="candidate-profile.html"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="user" class="size-4 me-2"></i>Perfil</a>
                        </li>
                        <li>
                            <a href="candidate-profile-setting.html"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="settings" class="size-4 me-2"></i>Editar Perfil</a>
                        </li>
                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                        <li>
                            <a href="lock-screen.html"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="lock" class="size-4 me-2"></i>Trocar senha</a>
                        </li>
                        <li>
                            <a href="login.html"
                                class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i
                                    data-feather="log-out" class="size-4 me-2"></i>Sair</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--end dropdown-->
        </ul>
        <!--Login button End-->
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-right !justify-end">
                <li class="parent-menu-item">
                    <a href="index.html">Home</a><span class="menu-arrow"></span>
                </li>
                <li class="parent-parent-menu-item"><a href="job-categories.html"> Categorias </a><span
                        class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="job-categories.html" class="sub-menu-item">Job Categories</a>
                        </li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Grids </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-grid-one.html" class="sub-menu-item">Job Grid One</a>
                                </li>
                                <li><a href="job-grid-two.html" class="sub-menu-item">Job Grid Two</a>
                                </li>
                                <li><a href="job-grid-three.html" class="sub-menu-item">Job Grid Three</a>
                                </li>
                                <li><a href="job-grid-four.html" class="sub-menu-item">Job Grid Four </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Lists </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-list-one.html" class="sub-menu-item">Job List One</a>
                                </li>
                                <li><a href="job-list-two.html" class="sub-menu-item">Job List Two</a>
                                </li>
                                <li><a href="job-list-three.html" class="sub-menu-item">Job List Three</a>
                                </li>
                                <li><a href="job-list-four.html" class="sub-menu-item">Job List Four</a>
                                </li>
                                <li><a href="job-list-five.html" class="sub-menu-item">Job List Five </a>
                                </li>
                                <li><a href="job-list-six.html" class="sub-menu-item">Job List Six </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Detail </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-detail-one.html" class="sub-menu-item">Job Detail One</a>
                                </li>
                                <li><a href="job-detail-two.html" class="sub-menu-item">Job Detail Two</a>
                                </li>
                                <li><a href="job-detail-three.html" class="sub-menu-item">Job Detail Three</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="job-apply.html" class="sub-menu-item">Job Apply</a>
                        </li>
                        <li><a href="job-post.html" class="sub-menu-item">Job Post </a>
                        </li>
                        <li><a href="career.html" class="sub-menu-item">Career </a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Páginas</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus.html" class="sub-menu-item">Sobre nós</a>
                        </li>
                        <li><a href="services.html" class="sub-menu-item">Benefícios</a>
                        </li>
                        <li><a href="pricing.html" class="sub-menu-item">Preços</a>
                        </li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Empresas</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="employer-list.html" class="sub-menu-item">Listagem de empresas</a>
                                </li>
                                <li><a href="employer-profile.html" class="sub-menu-item">Página da empresa</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Candidatos </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="candidate-list.html" class="sub-menu-item">Listagem de candidatos</a>
                                </li>
                                <li><a href="candidate-profile.html" class="sub-menu-item">Página do candidato</a>
                                </li>
                                <li><a href="candidate-profile-setting.html" class="sub-menu-item">Edição da
                                        página
                                        do candidato
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Páginas de ajuda </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="helpcenter-overview.html" class="sub-menu-item">Geral</a>
                                </li>
                                <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a>
                                </li>
                                <li><a href="helpcenter-guides.html" class="sub-menu-item">Guias</a>
                                </li>
                                <li><a href="helpcenter-support.html" class="sub-menu-item">Suporte</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.html" class="sub-menu-item"> Listagem de post</a>
                                </li>
                                <li><a href="blog-detail.html" class="sub-menu-item"> Página do post</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Autenticação
                            </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="login.html" class="sub-menu-item"> Login</a>
                                </li>
                                <li><a href="signup.html" class="sub-menu-item"> Logout</a>
                                </li>
                                <li><a href="reset-password.html" class="sub-menu-item"> Redefinição de senha</a>
                                </li>
                                <li><a href="lock-screen.html" class="sub-menu-item"> Troca de senha</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utilidades
                            </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="terms.html" class="sub-menu-item">Termo de uso</a>
                                </li>
                                <li><a href="privacy.html" class="sub-menu-item">Politíca de privacidade</a>
                                </li>
                            </ul>
                        </li>
                        <!-- > <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.html" class="sub-menu-item"> Coming Soon</a>
                                </li>
                                <li><a href="maintenance.html" class="sub-menu-item"> Maintenance</a>
                                </li>
                                <li><a href="error.html" class="sub-menu-item"> 404!</a>
                                </li>
                                <li><a href="thankyou.html" class="sub-menu-item"> Thank you</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </li>
                <li><a href="contact.html" class="sub-menu-item">Contato</a>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</nav>
