
<header class="header-content">
    <div class="header-top hidden-sm hidden-xs" id="header-top">
        <div class="container">
            <nav class="navbar navbar-inverse header-top__top">
                <div class="navbar-header"><a class="navbar-brand logo__link" href="{{route('/')}}"><img class="logo__image" src="" alt="Logo Shikhe Nao"></a></div>
                <div class="nav navbar-nav navbar-left categories"><a class="dropdown-toggle categories__button"></a>
                </div>

                <form class="navbar-form navbar-left form-search">
                    <div class="form-search__input-group">
                        <input class="form-control form-search__input" type="text" placeholder="Search your course...">
                        <div class="form-search__btn-group">
                            <button class="btn form-search__button" type="submit"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
                        </div>
                    </div>
                </form>
                <div class="nav navbar-nav navbar-right nav-right--login">
                    <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-shapes nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a></div>
                    <button class="btn btn-default button-default nav-right__become" type="submit">become an Instructor</button>
                    <div class="nav-right__signin">
                        <a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-in">Sign in</a><span>|</span>
                        <a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signUp" data-modal-target="#sign-up1">sign up</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="bottom-header hidden-sm hidden-xs" id="scrollspy" data-spy="affix" data-offset-top="112">
        <div class="container">
            <div class="logo--menu"><a class="logo__link" href="{{route('/')}}"><img class="logo__image" src="{{url('public/assets/img/logo/Logo-header.png')}}" alt="logo--menu logo--menu--active"></a></div>
            <nav class="menu-main">
                <ul class="nav navbar-nav menu-main__list ">
                    <li class="menu-main__item active"><a class="menu-main__link " href="{{route('/')}}" id="home">home</a>
                    </li>
                    <li class="menu-main__item "><a class="menu-main__link " href="#" id="academic">Academic</a>
                        <div class="dropdown-catagories dropdown-catagories--menu">
                            <ul class="dropdown-catagories__list">
                                <!--  <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Primary</a></li>
                                  <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">High School</a></li>
                                  <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">College</a></li>
                                  <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Admission</a></li>-->
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="{{route('course.list')}}">Undergraduate</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="{{route('course.list')}}">Graduate</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-main__item "><a class="menu-main__link " href="#" id="Non-academic">Non-academic</a>
                        <div class="dropdown-catagories dropdown-catagories--menu">
                            <ul class="dropdown-catagories__list">
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Graphic Designing</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Photography</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Video Editing</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">MS Office</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Programming</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Event Management</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Presentation</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">Business Competition</a></li>
                                <li class="dropdown-catagories__item "><a class="dropdown-catagories__link dropdown-catagories__link--full" href="#">UI/UX Design</a></li>
                            </ul>
                        </div>
                    </li>
                    {{--<li class="menu-main__item "><a class="menu-main__link " href="pricing-table.html" id="FAQ">FAQ</a>--}}
                    {{--</li>--}}
                    {{--<li class="menu-main__item "><a class="menu-main__link " href="blog-details-sidebar.html" id="blog">blog</a>--}}
                    {{--</li>--}}
                    {{--<li class="menu-main__item "><a class="menu-main__link " href="contact.html" id="contact us">Contact us</a>--}}
                    {{--</li>--}}
                    {{--<li class="menu-main__item "><a class="menu-main__link " href="contact.html" id="About Us">About Us</a>--}}
                    {{--</li>--}}
                </ul>
            </nav>
        </div>
    </div>
    <div class="header__mobile hidden-lg hidden-md">
        <div class="header-top">
            <div class="container">
                <div class="nav-right--notlogin nav-right--notlogin--mobile pull-right">
                    <div class="nav-right__notifications"><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-shapes nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a><a class="nav-right__item" href="#"><i class="glyph-icon flaticon-commerce-1 nav-right__item__icon"></i><span class="nav-right__item__notification">02</span></a></div>
                    <button class="form-search__button--mobile" type="submit" data-toggle="collapse" data-target="#form-search-mobile"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
                    <button class="button-default nav-right__become" type="submit">become an Instructor</button>
                    <div class="nav-right__signin"><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-in">Sign in</a><span>|</span><a class="nav-right__signin__link" href="#" data-toggle="modal" data-target="#modal-signin" data-modal-target="#sign-up">sign up</a></div>
                </div>
                <form class="navbar-form form-search--mobile" id="form-search-mobile">
                    <div class="container">
                        <div class="form-search__input-group">
                            <input class="form-control form-search__input" type="text" placeholder="Search your course...">
                            <div class="form-search__btn-group">
                                <button class="btn form-search__button" type="submit"><i class="glyph-icon flaticon-search form-search__icon"></i></button>
                            </div>
                        </div>
                        <button class="dropdown-toggle form-search__button form-search__button--close" type="submit" data-toggle="collapse" data-target="#form-search-mobile"><i class="glyph-icon flaticon-access-denied form-search__icon"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <nav class="navbar" id="header-mobile" data-spy="affix" data-offset-top="75">
            <div class="container">
                <div class="categories--mobile pull-left"><a class="dropdown-toggle categories--mobile__buttonsm" id="menu-categories" data-toggle="collapse" data-target="#dropdown-categories"><i class="glyph-icon flaticon-signs-1 categories--mobile__icon"></i></a></div>
                <button class="navbar-toggle nav-icon pull-right collapsed visible-sm visible-xs" id="menu-hamberger" data-toggle="collapse" data-target="#menu-main"><span class="bar"></span></button>
                <div class="logo--mobile text-center"><a class="logo__link" href="http://swlabs.co/"><img class="logo__image" src="{{url('public/assets/img/logo/Logo-header.png')}}" alt="Logo Educef"></a></div>
            </div>
            <div class="menu-mobile">
                <ul class="menu-mobile__list ">
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">home</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="index.html">home 1</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="index-2.html">home 2</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">course</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="categories.html">course categories</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-listing.html">course list</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-grid.html">course grid</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-single.html">course single</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-detail.html">course details</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="search-result.html">course search result</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="instructor-details.html">instructor details</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">bundle</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="course-bundle.html">course bundle</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="bundle-details.html">course bundle details</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">partner</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="partner-listing.html">partner list</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="partner-details.html">partner details</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">blog</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-grid.html">blog grid</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-details-sidebar.html">blog details with sidebar</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="blog-details.html">blog details</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">pages</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="pricing-table.html">pricing table</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="contact.html">contact</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="coming-soon.html">coming soon</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="404.html">404 page</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">elements</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-submenu"><a class="dropdown-mobile__link" href="#">sub level 1</a><span class="glyph-icon flaticon-arrows-3 menu-mobile__icon"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 1.1</a></li>
                                    <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 1.2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-mobile__link" href="#">sub level 2</a><span class="glyph-icon flaticon-arrows-3 menu-mobile__icon"></span>
                                <ul class="dropdown-menu dropdown-mobile">
                                    <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 2.1</a></li>
                                    <li class="dropdown-mobile__item"><a class="dropdown-mobile__link" href="#">sub level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-mobile-dropdown menu-mobile--categories">
                <ul class="menu-mobile__list ">
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Business</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Finance</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Industry</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Management</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Media</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Sales</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Design</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Design Thinking</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fashion</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Development</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Databases</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Mobie Apps</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Heath &amp; Fitness</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Dance</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Fitness</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">IT &amp; Software</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">AI &amp; Big Data</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Hardware</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Language</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Chinese</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">English</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">French</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Lifestyle</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Art &amp; Crafts</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Gaming</a></li>
                        </ul>
                    </li>
                    <li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Office Productivity</a><span class="dropdown-toggle glyph-icon flaticon-arrows-3 menu-mobile__icon" data-toggle="dropdown" onClick="void(0)"></span>
                        <ul class="dropdown-menu dropdown-mobile">
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Apple</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Google</a></li>
                            <li class="dropdown-mobile__item "><a class="dropdown-mobile__link" href="#">Oracle</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="button-default btn-ontop" id="on-top"><span class="glyph-icon flaticon-arrows-5"></span></div>

    <div class="modal fade signin-form" id="modal-signin" role="dialog">
        <div class="modal-dialog signin-form__dialog">
            <div class="signin-form__button-close hidden-lg hidden-md hidden-sm">
                <button class="close signin-form__button-close__btn" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="signin-form__header"><a class="signin-form__header__logo" href="#"><img src="{{url('public/assets/img/logo/Logo-form.png')}}" alt=""></a>
                <p class="signin-form__sub">Universal access to the world’s best education.</p>
            </div>
            <div class="modal-content signin-form__content">
                <div class="modal-body signin-form__body">
                    <ul class="signin-form__tabs">
                        <li class="active signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-in">Sign In</a></li>
                        <li class="signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-up">Sign Up</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="sign-in">
                            <h3 class="signin-form__body__title">Log Into Your Account</h3>
                            <p class="signin-form__body__sub">Your student account is your portal to all things Shikhenao: your classroom, projects, forums, career resources, and more!</p>
                            <form class="signin-form__form">
                                <div class="signin-form__form__inputs">
                                    <input class="input-item" type="text" placeholder="Email">
                                    <input class="input-item" type="password" placeholder="Password">
                                </div>
                                <button class="btn-green list-link__btn">Sign In</button><a class="signin-form__link" href="#">Forgot your password?</a>
                            </form>
                            <div class="group-btn-socials">
                                <p class="group-btn-socials__sub">or sign in with one of these services</p>
                                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sign-up">
                            <h3 class="signin-form__body__title">Log Into Your Account</h3>
                            <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                            <form class="signin-form__form">
                                <div class="signin-form__form__inputs">
                                    <input class="input-item" type="text" placeholder="User name">
                                    <input class="input-item" type="email" placeholder="Email">
                                    <input class="input-item" type="password" placeholder="Password">
                                    <input class="input-item" type="password" placeholder="Confirm Password">
                                </div>
                                <button class="btn-green list-link__btn">Sign Up</button>
                            </form>
                            <div class="group-btn-socials">
                                <p class="group-btn-socials__sub">or sign up with one of these services</p>
                                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signin-form__footer"><a class="signin-form__footer__link" href="#">Having trouble logging in?</a></div>
        </div>
    </div>

    <div class="modal fade signin-form" id="modal-signUp" role="dialog">
        <div class="modal-dialog signin-form__dialog">
            <div class="signin-form__button-close hidden-lg hidden-md hidden-sm">
                <button class="close signin-form__button-close__btn" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="signin-form__header"><a class="signin-form__header__logo" href="#"><img src="{{url('public/assets/img/logo/Logo-form.png')}}" alt=""></a>
                <p class="signin-form__sub">Universal access to the world’s best education.</p>
            </div>
            <div class="modal-content signin-form__content">
                <div class="modal-body signin-form__body">
                    <ul class="signin-form__tabs">
                        <li class="signin-form__tabs__items"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-in1">Sign In</a></li>
                        <li class="signin-form__tabs__items active"><a class="signin-form__tabs__link" data-toggle="tab" href="#sign-up1">Sign Up</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in" id="sign-in1">
                            <h3 class="signin-form__body__title">Log Into Your Account</h3>
                            <p class="signin-form__body__sub">Your student account is your portal to all things Shikhenao: your classroom, projects, forums, career resources, and more!</p>
                            <form class="signin-form__form">
                                <div class="signin-form__form__inputs">
                                    <input class="input-item" type="text" placeholder="Email">
                                    <input class="input-item" type="password" placeholder="Password">
                                </div>
                                <button class="btn-green list-link__btn">Sign In</button><a class="signin-form__link" href="#">Forgot your password?</a>
                            </form>
                            <div class="group-btn-socials">
                                <p class="group-btn-socials__sub">or sign in with one of these services</p>
                                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                            </div>
                        </div>
                        <div class="tab-pane fade in active" id="sign-up1">
                            <h3 class="signin-form__body__title">Log Into Your Account</h3>
                            <p class="signin-form__body__sub">Your student account is your portal to all things Educef: your classroom, projects, forums, career resources, and more!</p>
                            <form class="signin-form__form">
                                <div class="signin-form__form__inputs">
                                    <input class="input-item" type="text" placeholder="User name">
                                    <input class="input-item" type="email" placeholder="Email">
                                    <input class="input-item" type="password" placeholder="Password">
                                    <input class="input-item" type="password" placeholder="Confirm Password">
                                </div>
                                <button class="btn-green list-link__btn">Sign Up</button>
                            </form>
                            <div class="group-btn-socials">
                                <p class="group-btn-socials__sub">or sign up with one of these services</p>
                                <div class="btn-social btn-social--facebook"><i class="glyph-icon flaticon-social-1"></i><i>facebook</i></div>
                                <div class="btn-social btn-social--twitter"><i class="glyph-icon flaticon-twitter-logo-silhouette"></i><i>twitter</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signin-form__footer"><a class="signin-form__footer__link" href="#">Having trouble logging in?</a></div>
        </div>
    </div>
</header>