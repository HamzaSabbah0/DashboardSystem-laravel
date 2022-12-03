<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-text">
                    <a href="{{ route('panel.statistics') }}" class="nav-link"> لوحة الإدارة </a>
                </div>
            </div>
        </div>
        <ul class="list-unstyled menu-categories">
            <li class="menu {{ \Route::currentRouteName() == 'panel.statistics' ? 'active' : '' }}">
                <a href="{{ route('panel.statistics') }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>الإحصائيات</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-heading">
                <div class="heading">
                    <span>إدارة صفحات الموقع</span>
                </div>
            </li>
            <li class="menu {{ request()->routeIs('panel.home.*') ? 'active' : '' }}">
                <a href="#home" data-bs-toggle="collapse"
                    aria-expanded="{{ request()->routeIs('panel.home.*') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-bars"></i>
                        <span>الرئيسية</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.home.*') ? 'show' : '' }}"
                    id="home" data-bs-parent="#home">
                    <li class="menu">
                        <a href="#homeAbout" data-bs-toggle="collapse"
                            aria-expanded="{{ \Route::currentRouteName() == 'panel.home.about' || \Route::currentRouteName() == 'panel.home.manager' ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-regular fa-circle-question"></i>
                                <span>من نحن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ \Route::currentRouteName() == 'panel.home.about' || \Route::currentRouteName() == 'panel.home.manager' ? 'show' : '' }}"
                            id="homeAbout" data-bs-parent="#homeAbout">
                            <li class="{{ \Route::currentRouteName() == 'panel.home.about' ? 'active' : '' }}">
                                <a href="{{ route('panel.home.about') }}">عن الشركة</a>
                            </li>
                            <li class="{{ \Route::currentRouteName() == 'panel.home.manager' ? 'active' : '' }}">
                                <a href="{{ route('panel.home.manager') }}">كلمة مدير الشركة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#homeServices" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.home.services.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-briefcase"></i>
                                <span>الخدمات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.home.services.*') ? 'show' : '' }}"
                            id="homeServices" data-bs-parent="#homeServices">
                            <li class="{{ request()->routeIs('panel.home.services.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.home.services.index') }}">قائمة الخدمات</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.home.services.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.home.services.create') }}">إضافة خدمة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#homeTestimonials" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.home.testimonials.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-lightbulb"></i>
                                <span>آراء الزبائن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.home.testimonials.*') ? 'show' : '' }}"
                            id="homeTestimonials" data-bs-parent="#homeTestimonials">
                            <li class="{{ request()->routeIs('panel.home.testimonials.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.home.testimonials.index') }}">قائمة الآراء</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.home.testimonials.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.home.testimonials.create') }}">إضافة رأي زبون</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#homepartners" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.home.partners.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-handshake-simple"></i>
                                <span>الشركاء</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.home.partners.*') ? 'show' : '' }}"
                            id="homepartners" data-bs-parent="#homepartners">
                            <li class="{{ request()->routeIs('panel.home.partners.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.home.partners.index') }}">قائمة الشركاء</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.home.partners.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.home.partners.create') }}">إضافة شريك</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#homeSliders" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.home.sliders.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.home.sliders.*') ? 'show' : '' }}"
                            id="homeSliders" data-bs-parent="#homeSliders">
                            <li class="{{ request()->routeIs('panel.home.sliders.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.home.sliders.index') }}">قائمة الصور</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.home.sliders.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.home.sliders.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="menu {{ request()->routeIs('panel.sport.*') ? 'active' : '' }}">
                <a href="#sport" data-bs-toggle="collapse"
                    aria-expanded="{{ request()->routeIs('panel.sport.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-volleyball"></i>
                        <span>الرياضة</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.sport.*') ? 'show' : '' }}"
                    id="sport" data-bs-parent="#sport">
                    <li class="menu">
                        <a href="#sportAbout" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.sport.about') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-regular fa-circle-question"></i>
                                <span>من نحن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.sport.about') ? 'show' : '' }}"
                            id="sportAbout" data-bs-parent="#sportAbout">
                            <li class="{{ request()->routeIs('panel.sport.about') ? 'active' : '' }}">
                                <a href="{{ route('panel.sport.about') }}">عن الرياضة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#sportActivites" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.sport.activities.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-medal"></i>
                                <span>الانشطة</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.sport.activities.*') ? 'show' : '' }}"
                            id="sportActivites" data-bs-parent="#sportActivites">
                            <li class="{{ request()->routeIs('panel.sport.activities.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.sport.activities.index') }}">قائمة الانشطة</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.sport.activities.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.sport.activities.create') }}">إضافة نشاط</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#sportSliders" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.sport.sliders.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.sport.sliders.*') ? 'show' : '' }}"
                            id="sportSliders" data-bs-parent="#sportSliders">
                            <li class="{{ request()->routeIs('panel.sport.sliders.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.sport.sliders.index') }}">قائمة الصور</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.sport.sliders.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.sport.sliders.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu {{ request()->routeIs('panel.general.tourism.*') ? 'active' : '' }}">
                <a href="#generalTourism" data-bs-toggle="collapse"
                    aria-expanded="{{ request()->routeIs('panel.general.tourism.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-plane"></i>
                        <span>السياحة العامة</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.general.tourism.*') ? 'show' : '' }}"
                    id="generalTourism" data-bs-parent="#generalTourism">
                    <li class="menu">
                        <a href="#general-tourismActivites" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.general.tourism.activities.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-globe"></i>
                                <span>الانشطة</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.general.tourism.activities.*') ? 'show' : '' }}"
                            id="general-tourismActivites" data-bs-parent="#general-tourismActivites">
                            <li
                                class="{{ request()->routeIs('panel.general.tourism.activities.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.general.tourism.activities.index') }}">قائمة الانشطة</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.general.tourism.activities.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.general.tourism.activities.create') }}">إضافة نشاط</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#general-tourismPartners" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.general.tourism.partners.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-handshake-simple"></i>
                                <span>الشركاء</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.general.tourism.partners.*') ? 'show' : '' }}"
                            id="general-tourismPartners" data-bs-parent="#general-tourismPartners">
                            <li
                                class="{{ request()->routeIs('panel.general.tourism.partners.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.general.tourism.partners.index') }}">قائمة الشركاء</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.general.tourism.partners.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.general.tourism.partners.create') }}">إضافة شريك</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#general-tourismSliders" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.general.tourism.sliders.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.general.tourism.sliders.*') ? 'show' : '' }}"
                            id="general-tourismSliders" data-bs-parent="#general-tourismSliders">
                            <li
                                class="{{ request()->routeIs('panel.general.tourism.sliders.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.general.tourism.sliders.index') }}">قائمة الصور</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.general.tourism.sliders.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.general.tourism.sliders.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#medicalTourism" data-bs-toggle="collapse"
                    aria-expanded="{{ request()->routeIs('panel.medical.tourism.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-house-chimney-medical"></i>
                        <span>السياحة العلاجية</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.medical.tourism.*') ? 'show' : '' }}"
                    id="medicalTourism" data-bs-parent="#medicalTourism">
                    <li class="menu">
                        <a href="#medical-tourismActivites" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.medical.tourism.fields.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-hospital-user"></i>
                                <span>المجالات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.medical.tourism.fields.*') ? 'show' : '' }}"
                            id="medical-tourismActivites" data-bs-parent="#medical-tourismActivites">
                            <li
                                class="{{ request()->routeIs('panel.medical.tourism.fields.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.medical.tourism.fields.index') }}">قائمة المجالات</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.medical.tourism.fields.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.medical.tourism.fields.create') }}">إضافة مجال</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#medical-tourismPhotos" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.medical.tourism.fields-images.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور المجالات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.medical.tourism.fields-images.*') ? 'show' : '' }}"
                            id="medical-tourismPhotos" data-bs-parent="#medical-tourismPhotos">
                            <li
                                class="{{ request()->routeIs('panel.medical.tourism.fields-images.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.medical.tourism.fields-images.index') }}">قائمة الصور</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.medical.tourism.fields-images.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.medical.tourism.fields-images.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#medical-tourismPartners" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.medical.tourism.partners.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-handshake-simple"></i>
                                <span>الشركاء</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.medical.tourism.partners.*') ? 'show' : '' }}"
                            id="medical-tourismPartners" data-bs-parent="#medical-tourismPartners">
                            <li
                                class="{{ request()->routeIs('panel.medical.tourism.partners.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.medical.tourism.partners.index') }}">قائمة الشركاء</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.medical.tourism.partners.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.medical.tourism.partners.create') }}">إضافة شريك</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#medical-tourismSliders" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.medical.tourism.sliders.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.medical.tourism.sliders.*') ? 'show' : '' }}"
                            id="medical-tourismSliders" data-bs-parent="#medical-tourismSliders">
                            <li
                                class="{{ request()->routeIs('panel.medical.tourism.sliders.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.medical.tourism.sliders.index') }}">قائمة الصور</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.medical.tourism.sliders.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.medical.tourism.sliders.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#trade" data-bs-toggle="collapse"
                    aria-expanded="{{ request()->routeIs('panel.trade.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i class="fa-solid fa-money-bill-trend-up"></i>
                        <span>التجارة</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.trade.*') ? 'show' : '' }}"
                    id="trade" data-bs-parent="#trade">
                    <li class="menu">
                        <a href="#tradeAbout" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.trade.about') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-regular fa-circle-question"></i>
                                <span>من نحن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.trade.about') ? 'show' : '' }}"
                            id="tradeAbout" data-bs-parent="#tradeAbout">
                            <li class="{{ request()->routeIs('panel.trade.about') ? 'active' : '' }}">
                                <a href="{{ route('panel.trade.about') }}">عن التجارة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#tradeFields" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.trade.fields.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-fingerprint"></i>
                                <span>المجالات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.trade.fields.*') ? 'show' : '' }}"
                            id="tradeFields" data-bs-parent="#tradeFields">
                            <li class="{{ request()->routeIs('panel.trade.fields.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.trade.fields.index') }}">قائمة المجالات</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.trade.fields.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.trade.fields.create') }}">إضافة مجال</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#tradePhotos" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.trade.fields-images.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور المجالات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.trade.fields-images.*') ? 'show' : '' }}"
                            id="tradePhotos" data-bs-parent="#tradePhotos">
                            <li class="{{ request()->routeIs('panel.trade.fields-images.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.trade.fields-images.index') }}">قائمة الصور</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.trade.fields-images.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.trade.fields-images.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#tradeSliders" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.trade.sliders.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.trade.sliders.*') ? 'show' : '' }}"
                            id="tradeSliders" data-bs-parent="#tradeSliders">
                            <li class="{{ request()->routeIs('panel.trade.sliders.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.trade.sliders.index') }}">قائمة الصور</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.trade.sliders.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.trade.sliders.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#real-estate" data-bs-toggle="collapse"
                    aria-expanded="{{ request()->routeIs('panel.real.estate.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i class="fa-solid fa-building-columns"></i>
                        <span>العقارات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.real.estate.*') ? 'show' : '' }}"
                    id="real-estate" data-bs-parent="#real-estate">
                    <li class="menu">
                        <a href="#real-estateAbout" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.real.estate.about') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-regular fa-circle-question"></i>
                                <span>من نحن</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.real.estate.about') ? 'show' : '' }}"
                            id="real-estateAbout" data-bs-parent="#real-estateAbout">
                            <li class="{{ request()->routeIs('panel.real.estate.about') ? 'active' : '' }}">
                                <a href="{{ route('panel.real.estate.about') }}">عن العقارات</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#real-estateFields" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.real.estate.fields.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-fingerprint"></i>
                                <span>المجالات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.real.estate.fields.*') ? 'show' : '' }}"
                            id="real-estateFields" data-bs-parent="#real-estateFields">
                            <li class="{{ request()->routeIs('panel.real.estate.fields.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.real.estate.fields.index') }}">قائمة المجالات</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.real.estate.fields.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.real.estate.fields.create') }}">إضافة مجال</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#real-estatePartners" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.real.estate.partners.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-handshake-simple"></i>
                                <span>الشركاء</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.real.estate.partners.*') ? 'show' : '' }}"
                            id="real-estatePartners" data-bs-parent="#real-estatePartners">
                            <li class="{{ request()->routeIs('panel.real.estate.partners.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.real.estate.partners.index') }}">قائمة الشركاء</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.real.estate.partners.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.real.estate.partners.create') }}">إضافة شريك</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#real-estateSliders" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.real.estate.sliders.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.real.estate.sliders.*') ? 'show' : '' }}"
                            id="real-estateSliders" data-bs-parent="#real-estateSliders">
                            <li class="{{ request()->routeIs('panel.real.estate.sliders.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.real.estate.sliders.index') }}">قائمة الصور</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.real.estate.sliders.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.real.estate.sliders.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="menu">
                <a href="#programming" data-bs-toggle="collapse"
                    aria-expanded="{{ request()->routeIs('panel.programming.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-computer"></i>
                        <span>البرمجة</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.programming.*') ? 'show' : '' }}"
                    id="programming" data-bs-parent="#programming">
                    <li class="menu">
                        <a href="#programmingServices" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.programming.services.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa-solid fa-briefcase"></i>
                                <span>الخدمات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.programming.services.*') ? 'show' : '' }}"
                            id="programmingServices" data-bs-parent="#programmingServices">
                            <li class="{{ request()->routeIs('panel.programming.services.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.programming.services.index') }}">قائمة الخدمات</a>
                            </li>
                            <li
                                class="{{ request()->routeIs('panel.programming.services.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.programming.services.create') }}">إضافة خدمة</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#programmingSliders" data-bs-toggle="collapse"
                            aria-expanded="{{ request()->routeIs('panel.programming.sliders.*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-image"></i>
                                <span>صور الغلاف</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.programming.sliders.*') ? 'show' : '' }}"
                            id="programmingSliders" data-bs-parent="#programmingSliders">
                            <li class="{{ request()->routeIs('panel.programming.sliders.index') ? 'active' : '' }}">
                                <a href="{{ route('panel.programming.sliders.index') }}">قائمة الصور</a>
                            </li>
                            <li class="{{ request()->routeIs('panel.programming.sliders.create') ? 'active' : '' }}">
                                <a href="{{ route('panel.programming.sliders.create') }}">إضافة صور</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="menu">
                <a href="#teamWork" data-bs-toggle="collapse"
                    aria-expanded="{{ request()->routeIs('panel.teamworks.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-people-group"></i>
                        <span>فريق العمل</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('panel.teamworks.*') ? 'show' : '' }}"
                    id="teamWork" data-bs-parent="#teamWork">
                    <li class="{{ request()->routeIs('panel.teamworks.index') ? 'active' : '' }}">
                        <a href="{{ route('panel.teamworks.index') }}">عرض</a>
                    </li>
                    <li class="{{ request()->routeIs('panel.teamworks.create') ? 'active' : '' }}">
                        <a href="{{ route('panel.teamworks.create') }}">اضافة</a>
                    </li>
                </ul>
            </li>
            <li class="menu {{ \Route::currentRouteName() == 'panel.settings' ? 'active' : '' }}">
                <a href="{{ route('panel.settings') }}" class="dropdown-toggle">
                    <div class="">
                        <i class="fa-solid fa-gear"></i>
                        <span>الإعدادات</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</div>
