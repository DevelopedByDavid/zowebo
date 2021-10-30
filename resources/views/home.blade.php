@extends('layouts.app')
@section('content')
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
                            <li><a class="current-menu-item" href="user-profile">Activities</a></li>
                            <li><a href="about-users">About</a></li>
                            <li><a href="posts">Posts</a></li>
                            <li><a href="comments">Comments</a></li>
                            <li><a href="friends">Friends</a></li>
                            <li class="dropdown-toggle mr-0" data-toggle="dropdown"><a href="#">More +</a></li>
                            <li class="dropdown-menu">
                                <ul class="menu">
                                    <li><a href="user-groups"><img src="{{ asset('/img/icons/post-members.svg') }}" alt="" class="svg"> Groups</a></li>
                                    <li><a href="forum"><img src="{{ asset('/img/icons/chat.svg') }}" alt="" class="svg"> Forums</a></li>
                                    <li><a href="media"><img src="{{ asset('/img/icons/media.svg') }}" alt="" class="svg"> Media</a></li>
                                    <li><a href="reviews"><img src="{{ asset('/img/icons/star2.svg') }}" alt="" class="svg"> Reviews</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="edit-profile-wrap d-flex justify-content-sm-end">
                        <a href="edit-profile" class="edit-profile">
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
                                                    <a href="user-profile" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/profile-sm.png') }}" alt="">
                                                        <span class="sb-status"><img src="{{ asset('/img/icons/check-in.svg') }}" alt="" class="svg"></span>
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="user-profile">
                                                        <h4>Beautiful World</h4>
                                                    </a>
                                                    <span>@Beautiful_World</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="user-profile" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/item-avatar5.png') }}" alt="">
                                                        <span class="sb-status"><img src="{{ asset('/img/icons/check-in.svg') }}" alt="" class="svg"></span>
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="user-profile">
                                                        <h4>Chynna Phillips</h4>
                                                    </a>
                                                    <span>@Phillips008</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="user-profile" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/item-avatar6.png') }}" alt="">
                                                        <span class="sb-status"><img src="{{ asset('/img/icons/check-in.svg') }}" alt="" class="svg"></span>
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="user-profile">
                                                        <h4>Dan Cortese</h4>
                                                    </a>
                                                    <span>@Dan_Cortese</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="user-profile" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/item-avatar7.png') }}" alt="">
                                                        <span class="sb-status"><img src="{{ asset('/img/icons/check-in.svg') }}" alt="" class="svg"></span>
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="user-profile">
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
                                                    <a href="group" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/group1.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="group">
                                                        <h4>Destinations</h4>
                                                    </a>
                                                    <span>@Public group</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="group" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/group2.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="group">
                                                        <h4>Hosting Club</h4>
                                                    </a>
                                                    <span>@public group</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="group" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/group3.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="group">
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
                                                    <a href="blog-details" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/recent-post1.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="blog-details">
                                                        <h4>It Does Not Matter Hows Slowly</h4>
                                                    </a>
                                                    <span>August 16, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="blog-details" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/recent-post2.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="blog-details">
                                                        <h4>Socibook Network Added Photo</h4>
                                                    </a>
                                                    <span>August 18, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="blog-details" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/recent-post3.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="blog-details">
                                                        <h4>It Does Not Matter Hows Slowly</h4>
                                                    </a>
                                                    <span>August 19, 2020</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="sb-profile-avatar-wrap">
                                                    <a href="blog-details" class="sb-profile-avatar">
                                                        <img src="{{ asset('/img/media/recent-post4.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="sb-content media-body">
                                                    <a href="blog-details">
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
                                        <h5><a href="members-activity">Socibook</a> posted a new photo.</h5>
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
                                        <li><a href="comments">Comments</a></li>
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
                                        <h5><a href="members-activity">Socibook</a> posted a new Status.</h5>
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
                                        <li><a href="comments">Comments</a></li>
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
                                        <h5><a href="members-activity">Socibook</a> updated his profile picture.</h5>
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
                                        <li><a href="comments">Comments</a></li>
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
                                        <h5><a href="members-activity">Socibook</a> posted a new Video.</h5>
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
                                        <li><a href="comments">Comments</a></li>
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
                                        <h5><a href="members-activity">Socibook</a> and <a href="members-activity">Themelooks</a> are now friends.</h5>
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
                                        <h5><a href="members-activity">Socibook</a> posted in the group <a href="members-activity">Beautiful World.</a></h5>
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
                                        <li><a href="comments">Comments</a></li>
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
                                        <h5><a href="members-activity">Socibook</a>  joined the group <a href="members-activity">Beautiful World.</a></h5>
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
                                        <h5><a href="members-activity">Socibook</a> posted a new photo.</h5>
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
                                        <li><a href="comments">Comments</a></li>
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
@endsection
