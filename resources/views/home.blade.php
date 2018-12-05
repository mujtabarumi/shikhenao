@extends('main')

@section('content')

    <section class="banner" id="hero">
        <div class="flex-video">
            <video id="video-banner" loop muted>
                <source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&amp;profile_id=119&amp;oauth2_token_id=57447761" type="video/mp4">
            </video>
        </div>
        <div class="container banner-container">
            <div class="banner-wrapper">
                <div class="banner-box">
                    <h2 class="title-text">Design Sprint Foundations</h2>
                    <p class="content-text">What do you want to learn today? What's your dream job? Discover the program that's right for you today.</p>
                    <div class="btn-play-group">
                        <button class="btn btn-green" type="button"><span>LEARN NOW</span></button>
                        <button class="button-play-video flex-center" id="btn-play-banner" type="button"><span>PLAY VIDEO</span><span class="icon-play icon-custom flaticon-arrows-6"></span><span class="mask"></span></button>
                    </div>
                </div>
                <div class="banner-wall"><img class="img-responsive" alt="macbook-wallpaper" src="{{url('public/assets/img/home-2/Macbook.png')}}"></div>
            </div>
        </div>
    </section>
    <div class="section-feature-course">
        <div class="container">
            <div class="header-section wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.002s">
                <h2 class="title-text">Feature Update</h2>
            </div>
            <div class="feature-wrapper">
                <div class="row feature-boss">
                    <div class="feature-col col-xs-12 col-sm-6 col-md-3">
                        <div class="card-feature"><img class="img-responsive" src="{{url('public/assets/img/home-2/10.png')}}" alt="card-feature-01">
                            <div class="card-bg"></div>
                            <div class="card-feature-overlay">
                                <p>SEO: Master Search Engine Optimization and SEO Link Building</p>
                                <div class="bundle-badge bundle-badge-big">BUNDLE</div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-col-mid col-xs-12 col-md-6">
                        <div class="card-feature"><img class="img-responsive" src="{{url('public/assets/img/home-2/11.png')}}" alt="card-feature-02">
                            <div class="card-feature-overlay card-feature-overlay-mid">
                                <h3 class="title-text">SEO: Master Search Engine Optimization and SEO Link Building</h3>
                                <div class="bundle-badge bundle-badge-big">BUNDLE</div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-col col-xs-12 col-sm-6 col-md-3">
                        <div class="card-feature"><img class="img-responsive" src="{{url('public/assets/img/home-2/12.png')}}" alt="card-feature-03">
                            <div class="card-bg"></div>
                            <div class="card-feature-overlay">
                                <p>SEO: Master Search Engine Optimization and SEO Link Building</p>
                                <div class="bundle-badge bundle-badge-big">BUNDLE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-slide">
                <div class="feature-course card-slide-bot">
                    <div class="feature courses__list ">
                        <div class="undefined courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/0.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="{{url('public/assets/img/partner/partner-details-0.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    </div>
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
                        <div class="undefined courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/1.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="{{url('public/assets/img/partner/partner-details-1.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    </div>
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
                        <div class="undefined courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/2.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="{{url('public/assets/img/partner/partner-details-2.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    </div>
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
                        <div class="undefined courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/3.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="{{url('public/assets/img/partner/partner-details-3.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    </div>
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
                        <div class="undefined courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/4.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="{{url('public/assets/img/partner/partner-details-4.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    </div>
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
                        <div class="undefined courses__item">
                            <div class="courses__wapper">
                                <div class="col-equal courses__top">
                                    <div class="courses__top__wapper"><img class="courses__top__image" src="{{url('public/assets/img/courses-image/5.jpg')}}" alt=""></div>
                                    <div class="courses__top__bundle">bundle</div>
                                    <div class="courses__top__bt-seller">best seller</div>
                                    <div class="courses__hover">
                                        <div class="courses__hover-content"><span class="courses__hover-content__item"><span class="glyph-icon flaticon-shapes courses__hover-content__icon"></span></span><span class="courses__hover-content__item"><span class="glyph-icon flaticon-interface courses__hover-content__icon"></span></span></div>
                                    </div>
                                </div>
                                <div class="col-equal courses__content"><a class="courses__content__title" href="#">neutal networks and for deep learning</a>
                                    <div class="courses__content__author"><a class="courses__col-left" href="#"><span class="courses__content__avatar"><img class="courses__content__image" src="{{url('public/assets/img/partner/partner-details-5.png')}}" alt=""></span><span class="courses__content__author-name">Anthony Leath</span></a>
                                        <div class="courses__col-right">
                                            <div class="rating-start" data-rating="5"></div>
                                        </div>
                                    </div>
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
                    </div>
                </div>
            </div>
            <div class="button-wrapper">
                <button class="btn btn-green" type="button">VIEW ALL COURSE</button>
            </div>
        </div>
        <div class="section-subscribe">
            <div class="container">
                <div class="section-subscribe-wrapper">
                    <div class="section-subscribe-wrapper-left">
                        <h3 class="title-text">Subscribe Our Newsletter</h3>
                        <p>For new awesome courses &#x26; special promotion campaign!</p>
                    </div>
                    <div class="section-subscribe-wrapper-right">
                        <form>
                            <input class="form-control" type="search" name="#" placeholder="Your email">
                            <button class="btn button-default" type="submit">ENROLL NOW</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-our-feature">
        <div class="container">
            <div class="header-section wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.002s">
                <h2 class="title-text">Our Feature</h2>
            </div>
            <div class="card-lib">
                <div class="row">
                    <div class="col-card col-xs-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title title-text">Top quality</h4>
                                <p class="card-text content-text">Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-card col-xs-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title title-text">Expert Instructors</h4>
                                <p class="card-text content-text">Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-card col-xs-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title title-text">Discussion</h4>
                                <p class="card-text content-text">Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-card col-xs-12 col-sm-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title title-text">Interactive</h4>
                                <p class="card-text content-text">Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('foot-js')

@endsection