@extends('main')


@section('content')

<style>
    .courses__item{
        margin-bottom: 35px !important;
    }
    .courses__top__image{
        border-radius: 50%;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 80%;
    }
</style>
<main>
        <div class="container">
            <div class="instructor-details">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="instructor-left">
                            <div class="instructor-details__item instructor-info">
                                <div class="instructor-info__top">
                                    <div class="instructor-info__wapper">
{{--                                        <img class="partner-header__image" src="{{url('public/assets/img/instructor-details/intructordetails.png')}}" alt="University of maryland">--}}
                                        <div class="courses__top">
                                        <img height="100%" width="100%"  src="{{url('public/assets/img/instructor-details/instructor-course-2.p')}}ng" alt="">
                                        <div class="courses__hover">
                                            <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                        </div>
                                        </div>

                                    </div>
                                    <div class="instructor-info__content">
                                        <div class="instructor-details__title">Chad McDonald</div>
                                        <div class="instructor-info__college">School of Design In New York</div>
                                        <div class="instructor-info__asocial">
                                            <div class="asocials">
                                                <ul class="asocials__list">
                                                    <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-social-1 asocials__icon"></span></a></li>
                                                    <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-twitter-logo-silhouette asocials__icon"></span></a></li>
                                                    <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-social asocials__icon"></span></a></li>
                                                    <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-social-3 asocials__icon"></span></a></li>
                                                    <li class="asocials__item"><a class="asocials__link" href="#"><span class="glyph-icon icon-custom flaticon-social-2 asocials__icon"></span></a></li>
                                                </ul>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                                <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-info__saying">“The role of analyst offer a lot of responsibility - but at the<br>same time,<br>there’s a lot of freedom.<br>You own your space,  your own industry.”</div>
                                <div class="instructor-info__sub">I was born in Florida and move to NewYork when I was five year old. I lived in the US in NewYork for twelve years before returning to Florida and then attending  an international school for high school in the England. From there I attended  the Graduate School of Design in the UK. </div>
                                <div class="instructor-info__sub">After my second year at the Graduate School of Design, I received  a letter from School of Design in  NY  saying representatives would be  in the London  office interview student for summer intership  opportunities in NY. I interned in the summer of 2000 with the Global Invesment Research Division in New York  and received offer to join full-time in April 2001. After 8 years in London, I recently  relocated  to the firm’s office in New York.</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="instructor-right">
                            <div class="instructor-right__item">
                                <div class="instructor-right__top">
                                    <div class="instructor-right__top__title">Latest  Course</div>
                                    <div class="list-course__view-more"><a class="list-course__header__btn"><span class="list-course__header__text">view more</span></a>
                                        <div class="list-course__header__icon list-course-icon-arrow-special"><span class="glyph-icon flaticon-arrows-3 list-course__header__icon-arrow"></span></div>
                                    </div>
                                </div>
                                <div class="courses__list course">
                                    <div class="courses__item">
                                        <div class="courses__top">
                                            <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/instructor-details/instructor-course-1.p')}}ng" alt=""></div>
                                        </div>
                                        <div class="courses__content"><a class="courses__content__title" href="{{route('course.teacher')}}">Neutal Networks And For Deep Learning With Social</a>
                                            <div class="courses__content__info">
                                                <div class="courses__col-left">
                                                    <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                    <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                                </div>
                                                <div class="courses__col-right courses__content__price">$100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courses__item">
                                        <div class="courses__top">
                                            <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/instructor-details/instructor-course-2.p')}}ng" alt=""></div>
                                        </div>
                                        <div class="courses__content"><a class="courses__content__title" href="{{route('course.teacher')}}">Neutal Networks And For Deep Learning With Social</a>
                                            <div class="courses__content__info">
                                                <div class="courses__col-left">
                                                    <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                    <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                                </div>
                                                <div class="courses__col-right courses__content__price">$100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courses__item">
                                        <div class="courses__top">
                                            <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/instructor-details/instructor-course-3.p')}}ng" alt=""></div>
                                        </div>
                                        <div class="courses__content"><a class="courses__content__title" href="{{route('course.teacher')}}">Neutal Networks And For Deep Learning With Social</a>
                                            <div class="courses__content__info">
                                                <div class="courses__col-left">
                                                    <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                    <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                                </div>
                                                <div class="courses__col-right courses__content__price">$100</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courses__item">
                                        <div class="courses__top">
                                            <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/instructor-details/instructor-course-4.p')}}ng" alt=""></div>
                                        </div>
                                        <div class="courses__content"><a class="courses__content__title" href="{{route('course.teacher')}}">Neutal Networks And For Deep Learning With Social</a>
                                            <div class="courses__content__info">
                                                <div class="courses__col-left">
                                                    <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">349</span></div>
                                                    <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">2678</span></div>
                                                </div>
                                                <div class="courses__col-right courses__content__price">$100</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="instructor-right__item">--}}
                            {{--<div class="instructor-right__top">--}}
                            {{--<div class="instructor-right__top__title">Latest  Blog</div>--}}
                            {{--<div class="list-course__view-more"><a class="list-course__header__btn"><span class="list-course__header__text">view more</span></a>--}}
                            {{--<div class="list-course__header__icon list-course-icon-arrow-special"><span class="glyph-icon flaticon-arrows-3 list-course__header__icon-arrow"></span></div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="courses__list blogs">--}}
                            {{--<div class="courses__item">--}}
                            {{--<div class="courses__top">--}}
                            {{--<div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/instructor-details/instructor-blog-1.png')}}" alt=""></div>--}}
                            {{--</div>--}}
                            {{--<div class="courses__content"><a class="courses__content__title" href="{{route('course.teacher')}}">Where Well Rounded Starts with Well Educated</a>--}}
                            {{--<div class="courses__content__info">--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-calendar icon-custom courses__content__icon"></span><span class="courses__content__number">Nov 23, 2018</span></div>--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-view icon-custom courses__content__icon"></span><span class="courses__content__number">201</span></div>--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-multimedia-1 icon-custom courses__content__icon"></span><span class="courses__content__number">201</span></div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="courses__item">--}}
                            {{--<div class="courses__top">--}}
                            {{--<div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/instructor-details/instructor-blog-2.png')}}" alt=""></div>--}}
                            {{--</div>--}}
                            {{--<div class="courses__content"><a class="courses__content__title" href="{{route('course.teacher')}}">Where Well Rounded Starts with Well Educated</a>--}}
                            {{--<div class="courses__content__info">--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-calendar icon-custom courses__content__icon"></span><span class="courses__content__number">Nov 23, 2018</span></div>--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-view icon-custom courses__content__icon"></span><span class="courses__content__number">201</span></div>--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-multimedia-1 icon-custom courses__content__icon"></span><span class="courses__content__number">201</span></div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="courses__item">--}}
                            {{--<div class="courses__top">--}}
                            {{--<div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/instructor-details/instructor-blog-3.png')}}" alt=""></div>--}}
                            {{--</div>--}}
                            {{--<div class="courses__content"><a class="courses__content__title" href="{{route('course.teacher')}}">Where Well Rounded Starts with Well Educated</a>--}}
                            {{--<div class="courses__content__info">--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-calendar icon-custom courses__content__icon"></span><span class="courses__content__number">Nov 23, 2018</span></div>--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-view icon-custom courses__content__icon"></span><span class="courses__content__number">201</span></div>--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-multimedia-1 icon-custom courses__content__icon"></span><span class="courses__content__number">201</span></div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="courses__item">--}}
                            {{--<div class="courses__top">--}}
                            {{--<div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/instructor-details/instructor-blog-4.png')}}" alt=""></div>--}}
                            {{--</div>--}}
                            {{--<div class="courses__content"><a class="courses__content__title" href="{{route('course.teacher')}}">Where Well Rounded Starts with Well Educated</a>--}}
                            {{--<div class="courses__content__info">--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-calendar icon-custom courses__content__icon"></span><span class="courses__content__number">Nov 23, 2018</span></div>--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-view icon-custom courses__content__icon"></span><span class="courses__content__number">201</span></div>--}}
                            {{--<div class="courses__info__item"><span class="glyph-icon flaticon-multimedia-1 icon-custom courses__content__icon"></span><span class="courses__content__number">201</span></div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs-filter">
                <div class="tabs">
                    <ul class="tabs__list">
                        <li class="tabs__item"><a class="tabs__link active" href="#">Course Name</a></li>
                        {{--<li class="tabs__item"><a class="tabs__link" href="#">Paid</a></li>--}}
                        {{--<li class="tabs__item"><a class="tabs__link" href="#">Sale</a></li>--}}
                        {{--<li class="tabs__item"><a class="tabs__link" href="#">Free</a></li>--}}
                        {{--<li class="tabs__item"><a class="tabs__link" href="#">Bundle</a></li>--}}
                        {{--<li class="tabs__item"><a class="tabs__link" href="#">Course</a></li>--}}
                    </ul>
                    <div class="sort-right">
                        <div class="sort-by"><span class="sort-by__text">Sort by:</span>
                            <div class="dropdown sort-by__button">
                                <div class="btn-dropdown" data-toggle="dropdown"><span class="select-sort btn-dropdown__text">None</span><span class="glyph-icon flaticon-arrows-2 btn-dropdown__icon"></span></div>
                                <div class="list-sort dropdown-menu">
                                    <ul class="list-sort__list">
                                        <li class="list-sort__item"><a class="list-sort__link ">name</a>
                                        </li>
                                        <li class="list-sort__item"><a class="list-sort__link ">date up</a>
                                        </li>
                                        <li class="list-sort__item"><a class="list-sort__link ">newest</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="view-gird"><span class="glyph-icon flaticon-signs-1 view-gird__icon" id="view-course-list"></span><span class="glyph-icon flaticon-shapes-2 view-gird__icon" id="view-course-gird"></span></div>
                    </div>
                </div>
            </div>
            <div class="list-grid">
                <div class="courses-by-gird">
                    <div class="row courses__list ">
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/0.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-0.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/1.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-1.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/2.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-2.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/3.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/4.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-4.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/5.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-5.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/6.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-6.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/7.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-7.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/8.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-8.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/9.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-9.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/10.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-10.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/11.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-11.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/12.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-12.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/13.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-13.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/14.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-14.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/15.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-15.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/16.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-16.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/17.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-17.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/18.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-18.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/19.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-19.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/20.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-20.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/21.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-21.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/22.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-22.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/23.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-23.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-by-list">
                    <div class="row courses__list ">
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/0.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-0.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/1.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-1.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/2.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-2.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/3.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-3.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/4.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-4.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/5.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-5.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/6.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-6.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/7.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-7.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/8.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-8.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/9.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-9.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/10.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-10.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/11.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-11.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/12.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-12.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/13.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-13.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/14.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-14.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/15.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-15.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/16.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-16.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/17.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-17.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/18.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-18.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/19.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-19.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/20.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Sakib Rahman</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-20.png" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">347</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/21.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md.Emon Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-21.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$110</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/22.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Delwar Hossain</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-22.png" alt=""></span><span class="courses__content__author-name">Jared Brooks</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/23.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="{{route('course.teacherDetails')}}">Md. Aminul Islam</a>
                                    {{--<div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="assets/img/partner/partner-details-23.png" alt=""></span><span class="courses__content__author-name">Ryan Stewart</span></a>--}}
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    {{--</div>--}}
                                    <div class="courses__content__info">
                                        <div class="courses__col-left">
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-shapes icon-custom"></span></span><span class="courses__content__number">200</span></div>
                                            <div class="col-left__item"><span class="courses__content__icon"><span class="glyph-icon flaticon-profile-1 icon-custom"></span></span><span class="courses__content__number">417</span></div>
                                        </div>
                                        <div class="courses__col-right courses__content__price">$89</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumb-wapper">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a class="breadcrumb__link" href="{{route('/')}}">home</a></li>
                    <li class="breadcrumb__item active"><a class="breadcrumb__link active" href="#">Treache List</a></li>
                </ul>
            </nav>
        </div>
</main>


@endsection

@section('foot-js')
    <script src="{{url('public/assets/js/slicks.js')}}"></script>
    <script src="{{url('public/assets/js/jquery-matchHeight.js')}}"></script>
    <script src="{{url('public/assets/js/couse-listing.js')}}"></script>


@endsection
