<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>SociBook - HTML Social Network Toolkit</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png') }}" />

    <!-- Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- ======= Bootstrap ======= -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />

    <!-- ======= FontAwesome ======= -->
    <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}" />

    <!-- ======= Font Awesome CSS ======= -->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

    <!-- ======= Font Awesome CSS ======= -->
    <link rel="stylesheet" href="{{ asset('/plugins/magnific-popup/magnific-popup.css') }}">

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />

    <!-- ======= Custom Stylesheet ======= -->
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" />
</head>

<body>

    <!-- OffCanvas Menu -->
    <div class="offcanvas_menu">
        <div class="offcanvas-overlay fixed-top w-100 h-100"></div>
        <div class="offcanvas-wrapper fixed-top h-100">
            <div class="offcanvas-close position-absolute">
                <i class="fa fa-times"></i>
            </div>

            <div class="offcanvas-content">
                <!-- Profile -->
                <div class="user-profile">
                    <div class="user-avatar">
                        <img src="{{ asset('/img/media/user.png') }}" alt="Avatar">
                    </div>
                    <div class="user-info">
                        <h5 class="user-name">Hi_Socibook</h5>
                        <p class="user-email">UX Designer</p>
                    </div>
                </div>
                <!-- End Profile -->

                <ul class="offcanvas-menu">
                    <li>
                        <a href="members-activity.html">
                            <img src="{{ asset('/img/icons/members_newsfeed.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Members Newsfeed</span>
                        </a>
                    </li>
                    <li>
                        <a href="user-profile.html">
                            <img src="{{ asset('/img/icons/activity.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Activity</span>
                        </a>
                    </li>
                    <li>
                        <a href="members.html">
                            <img src="{{ asset('/img/icons/member.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Members</span>
                        </a>
                    </li>
                    <li>
                        <a href="groups.html">
                            <img src="{{ asset('/img/icons/groups.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Groups</span>
                        </a>
                    </li>
                    <li>
                        <a href="photos.html">
                            <img src="{{ asset('/img/icons/photo.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Photos</span>
                        </a>
                    </li>
                    <li>
                        <a href="music.html">
                            <img src="{{ asset('/img/icons/music.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Music</span>
                        </a>
                    </li>
                    <li>
                        <a href="videos.html">
                            <img src="{{ asset('/img/icons/video.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Video</span>
                        </a>
                    </li>
                    <li>
                        <a href="event.html">
                            <img src="{{ asset('/img/icons/event.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="forum.html">
                            <img src="{{ asset('/img/icons/forum.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Forum</span>
                        </a>
                    </li>
                    <li>
                        <a href="blog.html">
                            <img src="{{ asset('/img/icons/blog.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Our Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="shop.html">
                            <img src="{{ asset('/img/icons/shop.svg') }}" alt="" class="svg">
                            <span class="left-menu-title">Shop</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End OffCanvas Menu -->

    <!-- Header -->
    <header class="header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="sb-container">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <!-- Start Logo -->
                        <div class="logo d-flex justify-content-center justify-content-sm-start">
                            <a href="index">
                                <img src="{{ asset('/img/logo.png') }}" class="main-logo" alt="">
                            </a>
                        </div>
                        <!-- End of Logo -->
                    </div>
                    <div class="col-sm-8">
                        <!-- Header Top Right -->
                        <div class="header-top-right d-flex justify-content-center justify-content-sm-end">
                            <form action="#" class="form-signin">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div><button type="submit" class="btn btn-sm">Login</button></div>
                            </form>
                        </div>
                        <!-- End Header Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Main -->
        <div class="header-main love-sticky">
            <div class="header-main-inner-wrap">
                <div class="sb-container">
                    <div class="header-main-inner">
                        <div class="row">

                            <div class="col-lg-12 position-static">
                                <div class="align-items-center d-flex justify-content-between">
                                    <!-- Start Logo -->
                                    <div class="logo">
                                        <a href="index">
                                            <img src="{{ asset('/img/logo.png') }}" class="main-logo" alt="">
                                        </a>
                                    </div>
                                    <!-- End of Logo -->

                                    <div class="nav-wrapper d-flex align-items-center justify-content-between w-100">
                                        <!-- Nav -->
                                        <div class="menu-wrap">
                                            <ul class="nav">
                                                <li>
                                                    <a class="current-menu-parent" href="#">Home</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index.html">Home One</a></li>
                                                        <li><a href="home-1.html">Home Two</a></li>
                                                        <li><a href="home-2.html">Home Three</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-item">
                                                    <a href="#">Community</a>
                                                        <ul class="megamenu sub-menu mega-menu-row">
                                                            <li>
                                                                <div class="menu-item-description">
                                                                    <h5 class="column-tittle pt-0">Main Links</h5>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="members.html">Members</a></li>
                                                                    <li><a href="members-activity.html">Members Activity</a></li>
                                                                    <li><a href="groups.html">Groups</a></li>
                                                                    <li><a href="group.html">Group</a></li>
                                                                    <li><a href="private-group.html">Private Group</a></li>
                                                                    <li><a href="private-account.html">Private Account</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item-description">
                                                                    <h5 class="column-tittle">Profile Pages</h5>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="user-profile.html">User Profile</a></li>
                                                                    <li><a href="posts.html">User Posts</a></li>
                                                                    <li><a href="about-users.html">About User</a></li>
                                                                    <li><a href="friends.html">User’s Friends</a></li>
                                                                    <li><a href="groups.html">User’s Groups</a></li>
                                                                    <li><a href="posts.html">User’s Newsfeed</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item-description">
                                                                    <h5 class="column-tittle">More Pages</h5>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="media.html">Media</a></li>
                                                                    <li><a href="comments.html">Comments</a></li>
                                                                    <li><a href="reviews.html">Reviews</a></li>
                                                                    <li><a href="edit-profile.html">Edit Profile</a></li>
                                                                    <li><a href="register.html">Register</a></li>
                                                                    <li><a href="favorites.html">Favorites</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item-description">
                                                                    <h5 class="column-tittle">Media Pages</h5>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="members-media.html">Members Media</a></li>
                                                                    <li><a href="media.html">Media</a></li>
                                                                    <li><a href="album.html">Album</a></li>
                                                                    <li><a href="photos.html">Photos</a></li>
                                                                    <li><a href="videos.html">Videos</a></li>
                                                                    <li><a href="music.html">Music</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item-description">
                                                                    <h5 class="column-tittle">bbPress Forums</h5>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="forum.html">Forums Page</a></li>
                                                                    <li><a href="replies-created.html">Replies Created</a></li>
                                                                    <li><a href="engagements.html">Engagements</a></li>
                                                                    <li><a href="favorites.html">Favorites</a></li>
                                                                    <li><a href="forum-details.html">Forums Details</a></li>
                                                                    <li><a href="members-forum.html">Topic</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="megamenu-bg" data-bg-img="{{ asset('/img/bg/megamenu-bg.png') }}"></div>
                                                            </li>
                                                        </ul>
                                                    <!-- </div> -->
                                                </li>
                                                <li>
                                                    <a href="#">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="contact.html">Contacts</a></li>
                                                        <li><a href="price.html">Pricing</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html">Our Blog</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Events</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="event.html">Events</a></li>
                                                        <li><a href="event-details.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-details.html">Shop Details</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Nav -->

                                        <div class="search-wrap d-flex align-items-center">
                                            <!-- Search -->
                                            <div class="header-search">
                                                <form action="#" class="search-form">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search Here...">
                                                        <button type="submit" class="search-btn">
                                                            <img src="{{ asset('/img/icons/search.svg') }}" alt="" class="svg">
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Search -->

                                            <!-- Menu Trigger -->
                                            <div class="offcanvas-trigger">
                                                <img src="{{ asset('/img/icons/offcanvas.svg') }}" alt="" class="svg">
                                            </div>
                                            <!-- End Menu Trigger -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Main -->
    </header>
    <!-- End Header -->

    <!-- Profile Header -->
    <div class="sb-profile-header">
        <div class="sb-header-cover" data-bg-img="{{ asset('/img/bg/profile-cover.jpg') }}">
            <div class="sb-profile-avatar-wrap">
                <div class="sb-profile-avatar">
                    <img src="{{ asset('/img/media/profile1.png') }}" alt="">
                    <span class="sb-status style2"></span>
                </div>
                <h3>Chynna Phillips</h3>
            </div>
        </div>
        <div class="sb-header-content">
            <div class="sb-container">
                <div class="row align-items-center flex-column-reverse flex-sm-row">
                    <div class="col-sm-6">
                        <div class="sb-user-statistics">
                            <ul>
                                <li>
                                    <h3 title="21">21</h3>
                                    <span>Posts</span>
                                </li>
                                <li>
                                    <h3 title="3">3</h3>
                                    <span>Comments</span>
                                </li>
                                <li>
                                    <h3 title="17721">17.7K</h3>
                                    <span>Views</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="sb-user-networks mb-4 mb-sm-0">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <img src="{{ asset('/img/icons/facebook-c1.svg') }}" alt="" class="svg">
                                        <span>Follow</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.github.com/" target="_blank">
                                        <img src="{{ asset('/img/icons/github.svg') }}" alt="" class="svg">
                                        <span>Follow</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <img src="{{ asset('/img/icons/twitter.svg') }}" alt="" class="svg">
                                        <span>Follow</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Profile Header -->

    <!-- Profile Navmenu -->
    <div class="sb-profile-navmenu">
        <div class="sb-container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                    <div class="profile-navmenu">
                        <ul>
                            <li><a class="current-menu-item" href="user-profile.html">Activities</a></li>
                            <li><a href="about-users.html">About</a></li>
                            <li><a href="posts.html">Posts</a></li>
                            <li><a href="comments.html">Comments</a></li>
                            <li><a href="friends.html">Friends</a></li>
                            <li class="dropdown-toggle mr-0" data-toggle="dropdown"><a href="#">More +</a></li>
                            <li class="dropdown-menu">
                                <ul class="menu">
                                    <li><a href="user-groups.html"><img src="{{ asset('/img/icons/post-members.svg') }}" alt="" class="svg"> Groups</a></li>
                                    <li><a href="forum.html"><img src="{{ asset('/img/icons/chat.svg') }}" alt="" class="svg"> Forums</a></li>
                                    <li><a href="media.html"><img src="{{ asset('/img/icons/media.svg') }}" alt="" class="svg"> Media</a></li>
                                    <li><a href="reviews.html"><img src="{{ asset('/img/icons/star2.svg') }}" alt="" class="svg"> Reviews</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="edit-profile-wrap d-flex justify-content-sm-end">
                        <a href="edit-profile.html" class="edit-profile">
                            <span>Edit Profile</span>
                            <img src="{{ asset('/img/icons/edit-profile.svg') }}" alt="" class="svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Profile Navmenu -->

    <!-- Newsfeed -->
    <main class="section-bg2 py-40">
        <div class="sb-container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <!-- Left Sidebar -->
                    <div class="left-sidebar mb-5 mb-lg-0">
                        <!-- About Me -->
                        <div class="sb-about-me">
                            <div class="widget-main-content">
                                <div class="sb-profile-avatar-wrap">
                                    <div class="sb-profile-avatar">
                                        <img src="{{ asset('/img/media/profile-sm.png') }}" alt="">
                                    </div>
                                    <h3>Chynna Phillips</h3>
                                    <h6>Travel Creator</h6>
                                </div>

                                <p>Lorem Ipsum is simply dummy text industry’s standard</p>

                                <div class="signature">
                                    <img src="{{ asset('/img/media/signature.png') }}" alt="">
                                </div>

                                <div class="about-socials">
                                    <h6>Subscribe & Follow:</h6>
                                    <div class="about-social-icons">
                                        <a href="https://www.twitter.com/" target="_blank"><img src="{{ asset('/img/icons/twitter.svg') }}" alt="" class="svg"></a>
                                        <a href="https://www.facebook.com/" target="_blank"><img src="{{ asset('/img/icons/facebook-c1.svg') }}" alt="" class="svg"></a>
                                        <a href="https://www.github.com/" target="_blank"><img src="{{ asset('/img/icons/github.svg') }}" alt="" class="svg"></a>
                                        <a href="https://www.dribble.com/" target="_blank"><img src="{{ asset('/img/icons/dribble.svg') }}" alt="" class="svg"></a>
                                        <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('/img/icons/instagram.svg') }}" alt="" class="svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End About Me -->

                        <!-- Skills -->
                        <div class="sb-skills">
                            <div class="widget-main-content">
                                <h3>Skills</h3>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                        <span class="skill-name">php</span>
                                        <span class="skill-rate">40%</span>
                                    </div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-jam" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                        <span class="skill-name">Java</span>
                                        <span class="skill-rate">60%</span>
                                    </div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                        <span class="skill-name">css</span>
                                        <span class="skill-rate">80%</span>
                                    </div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                        <span class="skill-name">html</span>
                                        <span class="skill-rate">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Skills -->

                        <!-- Friends -->
                        <div class="sb-widget-friends">
                            <div class="widget-main-content">
                                <h3>Friends</h3>

                                <div class="sb-friends-list">
                                    <ul>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="user-profile.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/profile-sm.png') }}" alt="">
                                                        <span class="sb-status"><img src="{{ asset('/img/icons/check-in.svg') }}" alt="" class="svg"></span>
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="user-profile.html">
                                                        <h4>Beautiful World</h4>
                                                    </a>
                                                    <span>@Beautiful_World</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="user-profile.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/item-avatar5.png') }}" alt="">
                                                        <span class="sb-status"><img src="{{ asset('/img/icons/check-in.svg') }}" alt="" class="svg"></span>
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="user-profile.html">
                                                        <h4>Chynna Phillips</h4>
                                                    </a>
                                                    <span>@Phillips008</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="user-profile.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/item-avatar6.png') }}" alt="">
                                                        <span class="sb-status"><img src="{{ asset('/img/icons/check-in.svg') }}" alt="" class="svg"></span>
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="user-profile.html">
                                                        <h4>Dan Cortese</h4>
                                                    </a>
                                                    <span>@Dan_Cortese</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="user-profile.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/item-avatar7.png') }}" alt="">
                                                        <span class="sb-status"><img src="{{ asset('/img/icons/check-in.svg') }}" alt="" class="svg"></span>
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="user-profile.html">
                                                        <h4>Michelle Jones</h4>
                                                    </a>
                                                    <span>@Michelle_100</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Friends -->

                        <!-- Groups -->
                        <div class="sb-widget-groups">
                            <div class="widget-main-content">
                                <h3>Groups</h3>

                                <div class="sb-group-list">
                                    <ul>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="group.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/group1.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="group.html">
                                                        <h4>Destinations</h4>
                                                    </a>
                                                    <span>@Public group</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="group.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/group2.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="group.html">
                                                        <h4>Hosting Club</h4>
                                                    </a>
                                                    <span>@public group</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="group.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/group3.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="group.html">
                                                        <h4>Dancing Hubs</h4>
                                                    </a>
                                                    <span>Private group</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Groups -->

                        <!-- Recent Post -->
                        <div class="sb-widget-recent-post">
                            <div class="widget-main-content">
                                <h3>Recent Post</h3>

                                <div class="sb-post-list">
                                    <ul>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="blog-details.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/recent-post1.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="blog-details.html">
                                                        <h4>It Does Not Matter Hows Slowly</h4>
                                                    </a>
                                                    <span>August 16, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="blog-details.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/recent-post2.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="blog-details.html">
                                                        <h4>Socibook Network Added Photo</h4>
                                                    </a>
                                                    <span>August 18, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="blog-details.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/recent-post3.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="blog-details.html">
                                                        <h4>It Does Not Matter Hows Slowly</h4>
                                                    </a>
                                                    <span>August 19, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="blog-details.html" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/recent-post4.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="blog-details.html">
                                                        <h4>We Optimised Socibooks</h4>
                                                    </a>
                                                    <span>August 22, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Recent Post -->

                        <!-- Photos -->
                        <div class="sb-widget-photos">
                            <div class="widget-main-content">
                                <h3>Photos</h3>

                                <div class="sb-photos">
                                    <a href="{{ asset('/img/media/media1.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media1.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media2.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media2.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media3.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media3.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media4.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media4.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media5.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media5.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media6.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media6.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media7.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media7.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media9.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media9.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media10.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media10.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media11.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media11.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media12.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media12.png') }}" alt="">
                                    </a>
                                    <a href="{{ asset('/img/media/media13.png') }}" class="gallery-link">
                                        <img src="{{ asset('/img/media/media13.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Photos -->
                    </div>
                    <!-- End Left Sidebar -->
                </div>
                <div class="col-lg-8 col-xl-9">
                    <!-- Main Panel -->
                    <div class="activity-main-panel">
                        <h3>Latest Activity</h3>

                        <div class="activity-items">
                            <!-- Activity Item -->
                            <div class="activity-item">
                                <!-- Post Head  -->
                                <div class="post-head d-flex align-items-center">
                                    <div class="figure">
                                        <img src="{{ asset('/img/media/item-avatar12.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="members-activity.html">Socibook</a> posted a new photo.</h5>
                                        <p>7 days ago</p>
                                    </div>
                                </div>
                                <!-- End Post Head  -->

                                <!-- Post Body  -->
                                <div class="post-body">
                                    <p>To be a front-end developer…</p>
                                    <div class="img">
                                        <img src="{{ asset('/img/media/post7.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- End Post Body  -->

                                <!-- Post Footer -->
                                <div class="post-footer d-flex justify-content-between">
                                    <div class="post-footer-left d-flex align-items-center">
                                        <!-- Users -->
                                        <div class="users d-xl-flex d-none align-items-center">
                                            <a href="#"><img src="{{ asset('/img/media/m1.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m2.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m3.png') }}" alt=""></a>
                                            <span>25+</span>
                                        </div>
                                        <!-- End Users -->

                                        <div class="loved">
                                            <a href="#"><img src="{{ asset('/img/icons/heart.svg') }}" alt="" class="svg"> Love</a>
                                        </div>
                                    </div>

                                    <ul class="post-footer-right list-dot-inline">
                                        <li><a href="comments.html">Comments</a></li>
                                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Share</a>
                                            <div class="login-panel dropdown-menu">
                                                <div class="share-list">
                                                    <a href="#">Share now (Public)</a>
                                                    <a href="#">Share to News Feed</a>
                                                    <a href="#">Share to a group</a>
                                                    <a href="#">Share to a page</a>
                                                    <a href="#">Share on a friend's profile</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Post Footer -->

                                <!-- Comments Responds -->
                                <div class="comment-respond">
                                    <form action="#" method="post" class="comment-form">
                                        <div class="form-group mb-0 media">
                                            <div class="figure">
                                                <img src="{{ asset('/img/media/user.png') }}" alt="">
                                                <span class="avatar-status"></span>
                                            </div>

                                            <div class="comment-respond-body media-body">
                                                <textarea class="form-control" placeholder="Write a comment…"></textarea>
                                                <a href="#"><img src="{{ asset('/img/icons/imoji.svg') }}" alt="" class="svg"></a>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/camera.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/folder.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Comments Responds -->

                                <!-- Comments Area -->
                                <div class="comments-area">
                                    <ul class="comment-list">
                                        <li class="comment">
                                            <article class="single-comment media">
                                                <div class="comment-author-image">
                                                    <img src="{{ asset('/img/media/photos3.png') }}" alt="">
                                                    <span class="avatar-status"></span>
                                                </div>
                                                <div class="comment-content media-body">
                                                    <div class="">
                                                        <h5 class="author_name">Terry Wallace</h5>
                                                        <span class="commented-on">2 Hours ago</span>
                                                    </div>
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                                                    <div class="comment-reply-links">
                                                        <a href="#">Like</a>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </article>
                                            <ul class="children">
                                                <li class="comment">
                                                    <article class="single-comment media m-0 p-0 border-none">
                                                        <div class="comment-author-image">
                                                            <img src="{{ asset('/img/media/photos6.png') }}" alt="">
                                                            <span class="avatar-status"></span>
                                                        </div>
                                                        <div class="comment-content media-body">
                                                            <div class="">
                                                                <h5 class="author_name">Tom Holmes</h5>
                                                                <span class="commented-on">2 Hours ago</span>
                                                            </div>
                                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled.</p>
                                                            <div class="comment-reply-links">
                                                                <a href="#">Like</a>
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Comments Area -->
                            </div>
                            <!-- End Activity Item -->

                            <!-- Activity Item -->
                            <div class="activity-item">
                                <!-- Post Head  -->
                                <div class="post-head d-flex align-items-center">
                                    <div class="figure">
                                        <img src="{{ asset('/img/media/item-avatar12.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="members-activity.html">Socibook</a> posted a new Status.</h5>
                                        <p>6 days ago</p>
                                    </div>
                                </div>
                                <!-- End Post Head  -->

                                <!-- Post Body  -->
                                <div class="post-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500, when an unknown printer took galley type and scrambled it to make
                                        a type specimen book…. <a href="#">Read More</a></p>
                                </div>
                                <!-- End Post Body  -->

                                <!-- Post Footer -->
                                <div class="post-footer d-flex justify-content-between">
                                    <div class="post-footer-left d-flex align-items-center">
                                        <!-- Users -->
                                        <div class="users d-xl-flex d-none align-items-center">
                                            <a href="#"><img src="{{ asset('/img/media/m1.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m2.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m3.png') }}" alt=""></a>
                                            <span>25+</span>
                                        </div>
                                        <!-- End Users -->

                                        <div class="loved">
                                            <a href="#"><img src="{{ asset('/img/icons/heart.svg') }}" alt="" class="svg"> Love</a>
                                        </div>
                                    </div>

                                    <ul class="post-footer-right list-dot-inline">
                                        <li><a href="comments.html">Comments</a></li>
                                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Share</a>
                                            <div class="login-panel dropdown-menu">
                                                <div class="share-list">
                                                    <a href="#">Share now (Public)</a>
                                                    <a href="#">Share to News Feed</a>
                                                    <a href="#">Share to a group</a>
                                                    <a href="#">Share to a page</a>
                                                    <a href="#">Share on a friend's profile</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Post Footer -->

                                <!-- Comments Responds -->
                                <div class="comment-respond">
                                    <form action="#" method="post" class="comment-form">
                                        <div class="form-group mb-0 media">
                                            <div class="figure">
                                                <img src="{{ asset('/img/media/user.png') }}" alt="">
                                                <span class="avatar-status"></span>
                                            </div>

                                            <div class="comment-respond-body media-body">
                                                <textarea class="form-control" placeholder="Write a comment…"></textarea>
                                                <a href="#"><img src="{{ asset('/img/icons/imoji.svg') }}" alt="" class="svg"></a>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/camera.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/folder.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Comments Responds -->
                            </div>
                            <!-- End Activity Item -->

                            <!-- Activity Item -->
                            <div class="activity-item">
                                <!-- Post Head  -->
                                <div class="post-head d-flex align-items-center">
                                    <div class="figure">
                                        <img src="{{ asset('/img/media/item-avatar12.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="members-activity.html">Socibook</a> updated his profile picture.</h5>
                                        <p>5 days ago</p>
                                    </div>
                                </div>
                                <!-- End Post Head  -->

                                <!-- Post Body  -->
                                <div class="post-body">
                                    <div class="sb-profile-cover-wrap">
                                        <div class="sb-profile-cover" data-bg-img="{{ asset('/img/media/profile-cover4.png') }}"></div>

                                        <div class="sb-profile-avatar">
                                            <img src="{{ asset('/img/media/profile1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Body  -->

                                <!-- Post Footer -->
                                <div class="post-footer d-flex justify-content-between">
                                    <div class="post-footer-left d-flex align-items-center">
                                        <!-- Users -->
                                        <div class="users d-xl-flex d-none align-items-center">
                                            <a href="#"><img src="{{ asset('/img/media/m1.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m2.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m3.png') }}" alt=""></a>
                                            <span>25+</span>
                                        </div>
                                        <!-- End Users -->

                                        <div class="loved">
                                            <a href="#"><img src="{{ asset('/img/icons/heart.svg') }}" alt="" class="svg"> Love</a>
                                        </div>
                                    </div>

                                    <ul class="post-footer-right list-dot-inline">
                                        <li><a href="comments.html">Comments</a></li>
                                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Share</a>
                                            <div class="login-panel dropdown-menu">
                                                <div class="share-list">
                                                    <a href="#">Share now (Public)</a>
                                                    <a href="#">Share to News Feed</a>
                                                    <a href="#">Share to a group</a>
                                                    <a href="#">Share to a page</a>
                                                    <a href="#">Share on a friend's profile</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Post Footer -->

                                <!-- Comments Responds -->
                                <div class="comment-respond">
                                    <form action="#" method="post" class="comment-form">
                                        <div class="form-group mb-0 media">
                                            <div class="figure">
                                                <img src="{{ asset('/img/media/user.png') }}" alt="">
                                                <span class="avatar-status"></span>
                                            </div>

                                            <div class="comment-respond-body media-body">
                                                <textarea class="form-control" placeholder="Write a comment…"></textarea>
                                                <a href="#"><img src="{{ asset('/img/icons/imoji.svg') }}" alt="" class="svg"></a>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/camera.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/folder.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Comments Responds -->
                            </div>
                            <!-- End Activity Item -->

                            <!-- Activity Item -->
                            <div class="activity-item">
                                <!-- Post Head  -->
                                <div class="post-head d-flex align-items-center">
                                    <div class="figure">
                                        <img src="{{ asset('/img/media/item-avatar12.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="members-activity.html">Socibook</a> posted a new Video.</h5>
                                        <p>9 days ago</p>
                                    </div>
                                </div>
                                <!-- End Post Head  -->

                                <!-- Post Body  -->
                                <div class="post-body">
                                    <p>To be a front-end developer…</p>
                                    <div class="img">
                                        <iframe src="https://www.youtube.com/embed/qu8BnEvtfOA?controls=0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!-- End Post Body  -->

                                <!-- Post Footer -->
                                <div class="post-footer d-flex justify-content-between">
                                    <div class="post-footer-left d-flex align-items-center">
                                        <!-- Users -->
                                        <div class="users d-xl-flex d-none align-items-center">
                                            <a href="#"><img src="{{ asset('/img/media/m1.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m2.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m3.png') }}" alt=""></a>
                                            <span>25+</span>
                                        </div>
                                        <!-- End Users -->

                                        <div class="loved">
                                            <a href="#"><img src="{{ asset('/img/icons/heart.svg') }}" alt="" class="svg"> Love</a>
                                        </div>
                                    </div>

                                    <ul class="post-footer-right list-dot-inline">
                                        <li><a href="comments.html">Comments</a></li>
                                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Share</a>
                                            <div class="login-panel dropdown-menu">
                                                <div class="share-list">
                                                    <a href="#">Share now (Public)</a>
                                                    <a href="#">Share to News Feed</a>
                                                    <a href="#">Share to a group</a>
                                                    <a href="#">Share to a page</a>
                                                    <a href="#">Share on a friend's profile</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Post Footer -->

                                <!-- Comments Responds -->
                                <div class="comment-respond">
                                    <form action="#" method="post" class="comment-form">
                                        <div class="form-group mb-0 media">
                                            <div class="figure">
                                                <img src="{{ asset('/img/media/user.png') }}" alt="">
                                                <span class="avatar-status"></span>
                                            </div>

                                            <div class="comment-respond-body media-body">
                                                <textarea class="form-control" placeholder="Write a comment…"></textarea>
                                                <a href="#"><img src="{{ asset('/img/icons/imoji.svg') }}" alt="" class="svg"></a>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/camera.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/folder.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Comments Responds -->
                            </div>
                            <!-- End Activity Item -->

                            <!-- Activity Item -->
                            <div class="activity-item">
                                <!-- Post Head  -->
                                <div class="post-head d-flex align-items-center">
                                    <div class="figure">
                                        <img src="{{ asset('/img/media/item-avatar12.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="members-activity.html">Socibook</a> and <a href="members-activity.html">Themelooks</a> are now friends.</h5>
                                        <p>3 days ago</p>
                                    </div>
                                </div>
                                <!-- End Post Head  -->

                                <!-- Post Body  -->
                                <div class="post-body mb-0">
                                    <div class="sb-profile-cover-wrap">
                                        <div class="sb-profile-cover" data-bg-img="{{ asset('/img/media/profile-cover2.jpg') }}"></div>

                                        <div class="sb-profile-avatar">
                                            <img src="{{ asset('/img/media/profile1.jpg') }}" alt="">
                                        </div>
                                        <a href="#"><h3>Themelooks</h3></a>
                                    </div>
                                </div>
                                <!-- End Post Body  -->
                            </div>
                            <!-- End Activity Item -->

                            <!-- Activity Item -->
                            <div class="activity-item">
                                <!-- Post Head  -->
                                <div class="post-head d-flex align-items-center">
                                    <div class="figure">
                                        <img src="{{ asset('/img/media/item-avatar12.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="members-activity.html">Socibook</a> posted in the group <a href="members-activity.html">Beautiful World.</a></h5>
                                        <p>7 days ago</p>
                                    </div>
                                </div>
                                <!-- End Post Head  -->

                                <!-- Post Body  -->
                                <div class="post-body">
                                    <p>To be a front-end developer…</p>
                                    <div class="img collage">
                                        <div>
                                            <img src="{{ asset('/img/media/post2.png') }}" alt="">
                                        </div>
                                        <div class="vertical-img">
                                            <div>
                                                <img src="{{ asset('/img/media/post3.png') }}" alt="">
                                            </div>
                                            <div>
                                                <img src="{{ asset('/img/media/post4.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Body  -->

                                <!-- Post Footer -->
                                <div class="post-footer d-flex justify-content-between">
                                    <div class="post-footer-left d-flex align-items-center">
                                        <!-- Users -->
                                        <div class="users d-xl-flex d-none align-items-center">
                                            <a href="#"><img src="{{ asset('/img/media/m1.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m2.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m3.png') }}" alt=""></a>
                                            <span>25+</span>
                                        </div>
                                        <!-- End Users -->

                                        <div class="loved">
                                            <a href="#"><img src="{{ asset('/img/icons/heart.svg') }}" alt="" class="svg"> Love</a>
                                        </div>
                                    </div>

                                    <ul class="post-footer-right list-dot-inline">
                                        <li><a href="comments.html">Comments</a></li>
                                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Share</a>
                                            <div class="login-panel dropdown-menu">
                                                <div class="share-list">
                                                    <a href="#">Share now (Public)</a>
                                                    <a href="#">Share to News Feed</a>
                                                    <a href="#">Share to a group</a>
                                                    <a href="#">Share to a page</a>
                                                    <a href="#">Share on a friend's profile</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Post Footer -->

                                <!-- Comments Responds -->
                                <div class="comment-respond">
                                    <form action="#" method="post" class="comment-form">
                                        <div class="form-group mb-0 media">
                                            <div class="figure">
                                                <img src="{{ asset('/img/media/user.png') }}" alt="">
                                                <span class="avatar-status"></span>
                                            </div>

                                            <div class="comment-respond-body media-body">
                                                <textarea class="form-control" placeholder="Write a comment…"></textarea>
                                                <a href="#"><img src="{{ asset('/img/icons/imoji.svg') }}" alt="" class="svg"></a>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/camera.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/folder.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Comments Responds -->
                            </div>
                            <!-- End Activity Item -->

                            <!-- Activity Item -->
                            <div class="activity-item">
                                <!-- Post Head  -->
                                <div class="post-head d-flex align-items-center">
                                    <div class="figure">
                                        <img src="{{ asset('/img/media/item-avatar12.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="members-activity.html">Socibook</a>  joined the group <a href="members-activity.html">Beautiful World.</a></h5>
                                        <p>1 days ago</p>
                                    </div>
                                </div>
                                <!-- End Post Head  -->

                                <!-- Post Body  -->
                                <div class="post-body mb-0">
                                    <div class="sb-profile-cover-wrap">
                                        <div class="sb-profile-cover" data-bg-img="{{ asset('/img/media/profile-cover3.jpg') }}"></div>

                                        <div class="sb-profile-avatar">
                                            <img src="{{ asset('/img/media/profile3.png') }}" alt="">
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><h3>Themelooks</h3></a>
                                            <div class="mt-2 pt-1 d-flex justify-content-center">
                                                <ul class="list-dot-inline">
                                                    <li><a href="#"><img src="{{ asset('/img/icons/post-glove.svg') }}" alt="" class="svg"> Public Group</a></li>
                                                    <li><a href="#"><img src="{{ asset('/img/icons/post-members.svg') }}" alt="" class="svg"> 9 Members</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Body  -->
                            </div>
                            <!-- End Activity Item -->

                            <!-- Activity Item -->
                            <div class="activity-item">
                                <!-- Post Head  -->
                                <div class="post-head d-flex align-items-center">
                                    <div class="figure">
                                        <img src="{{ asset('/img/media/item-avatar12.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="members-activity.html">Socibook</a> posted a new photo.</h5>
                                        <p>7 days ago</p>
                                    </div>
                                </div>
                                <!-- End Post Head  -->

                                <!-- Post Body  -->
                                <div class="post-body">
                                    <p>To be a front-end developer…</p>
                                    <div class="img">
                                        <img src="{{ asset('/img/media/post8.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- End Post Body  -->

                                <!-- Post Footer -->
                                <div class="post-footer d-flex justify-content-between">
                                    <div class="post-footer-left d-flex align-items-center">
                                        <!-- Users -->
                                        <div class="users d-xl-flex d-none align-items-center">
                                            <a href="#"><img src="{{ asset('/img/media/m1.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m2.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('/img/media/m3.png') }}" alt=""></a>
                                            <span>25+</span>
                                        </div>
                                        <!-- End Users -->

                                        <div class="loved">
                                            <a href="#"><img src="{{ asset('/img/icons/heart.svg') }}" alt="" class="svg"> Love</a>
                                        </div>
                                    </div>

                                    <ul class="post-footer-right list-dot-inline">
                                        <li><a href="comments.html">Comments</a></li>
                                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Share</a>
                                            <div class="login-panel dropdown-menu">
                                                <div class="share-list">
                                                    <a href="#">Share now (Public)</a>
                                                    <a href="#">Share to News Feed</a>
                                                    <a href="#">Share to a group</a>
                                                    <a href="#">Share to a page</a>
                                                    <a href="#">Share on a friend's profile</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Post Footer -->

                                <!-- Comments Responds -->
                                <div class="comment-respond">
                                    <form action="#" method="post" class="comment-form">
                                        <div class="form-group mb-0 media">
                                            <div class="figure">
                                                <img src="{{ asset('/img/media/user.png') }}" alt="">
                                                <span class="avatar-status"></span>
                                            </div>

                                            <div class="comment-respond-body media-body">
                                                <textarea class="form-control" placeholder="Write a comment…"></textarea>
                                                <a href="#"><img src="{{ asset('/img/icons/imoji.svg') }}" alt="" class="svg"></a>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/camera.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                                <div class="upload-button">
                                                    <img src="{{ asset('/img/icons/folder.svg') }}" alt="" class="svg">
                                                    <input type="file" class="file-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Comments Responds -->
                            </div>
                            <!-- End Activity Item -->
                        </div>
                    </div>
                    <!-- End Main Panel -->
                </div>
            </div>
        </div>
    </main>
    <!-- End Newsfeed -->

    <!-- Footer -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="sb-container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-5">
                        <!-- Footer Logo -->
                        <div class="footer-logo text-center text-sm-left mb-20 mb-sm-0">
                            <a href="index.html"><img src="{{ asset('/img/footer-logo.png') }}" alt="" class="logo"></a>
                        </div>
                        <!-- End Footer Logo -->
                    </div>
                    <div class="col-lg-4 col-sm-7">
                        <!-- Footer Socials -->
                        <div class="footer-socials">
                            <a href="https://twitter.com/" target="_blank">
                                <img src="{{ asset('/img/icons/twitter.svg') }}" alt="" class="svg">
                            </a>
                            <a href="https://github.com/" target="_blank">
                                <img src="{{ asset('/img/icons/github.svg') }}" alt="" class="svg">
                            </a>
                            <a href="https://instagram.com/" target="_blank">
                                <img src="{{ asset('/img/icons/instagram.svg') }}" alt="" class="svg">
                            </a>
                            <a href="https://dribbble.com/" target="_blank">
                                <img src="{{ asset('/img/icons/dribble.svg') }}" alt="" class="svg">
                            </a>
                        </div>
                        <!-- End Footer Socials -->
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <!-- Contact -->
                        <div class="footer-contact">
                            <div class="media">
                                <div class="icon">
                                    <img src="{{ asset('/img/icons/phone.svg') }}" alt="" class="svg">
                                </div>
                                <div class="media-body">
                                    <span>Give us a call</span>
                                    <a href="callto:300303036">300 30 30 36</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->

        <!-- Footer Main -->
        <div class="footer-main text-white">
            <div class="sb-container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Widget Nav Menu -->
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">Main links</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="members.html">Members</a></li>
                                    <li><a href="members-activity.html">Members Activity</a></li>
                                    <li><a href="groups.html">Groups</a></li>
                                    <li><a href="group.html">Group</a></li>
                                    <li><a href="private-group.html">Private Group</a></li>
                                    <li><a href="private-account.html">Private Account </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Nav Menu -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Widget Nav Menu -->
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">Socibook</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="user-profile.html">User Profile</a></li>
                                    <li><a href="user-profile.html">User Activity</a></li>
                                    <li><a href="about-users.html">About User</a></li>
                                    <li><a href="friends.html">User’s Friends</a></li>
                                    <li><a href="user-groups.html">User’s Groupss</a></li>
                                    <li><a href="posts.html">User’s Newsfeed </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Nav Menu -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- Widget Nav Menu -->
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">Socibook</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="media.html">Media</a></li>
                                    <li><a href="members-forum.html">Topic</a></li>
                                    <li><a href="comments.html">Comments</a></li>
                                    <li><a href="reviews.html">Reviews</a></li>
                                    <li><a href="favorites.html">Favorites</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Nav Menu -->
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-6">
                        <div class="widget widget_newsletter">
                            <div class="newsletter-content">
                                <h3 class="widget-title">Subscribe Newsletter</h3>

                                <p>The full monty burke posh excuse lavatory chip spiffing</p>

                                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" class="newsletter-form style--two" target="_blank">
                                    <input type="email" class="form-control" placeholder="Email Address...">
                                    <button type="submit" class="btn btn-block">Subscribe now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Main -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="sb-container">
                <div class="row">
                    <div class="col">
                        <div class="footer-bottom-content text-center">
                            <span>© 2021 Socibook.</span> All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- ======= jQuery Library ======= -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>

    <!-- ======= Bootstrap ======= -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

    <!-- ======= Menu Js ======= -->
    <script src="{{ asset('/js/menu.min.js') }}"></script>

    <!-- ======= Megnific Popup Js ======= -->
    <script src="{{ asset('/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- ======= Main JS ======= -->
    <script src="{{ asset('/js/main.js') }}"></script>

    <!-- ======= Custom JS ======= -->
    <script src="{{ asset('/js/custom.js') }}"></script>
</body>
