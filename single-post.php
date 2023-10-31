<?php require 'pages/header.php' ?>



        <!-- Navbar Area -->
    <?php require 'pages/navbar.php' ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <?php require 'pages/shero.php' ?>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <?php include 'pages/s-news.php'; ?>

                        
                        <div class="section-heading">
                            <h6>Related</h6>
                        </div>

                        <?php include 'pages/s-related.php'; ?>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h5 class="title">3 Comments</h5>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/30.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">Christian Williams</a>
                                            <a href="#" class="post-date">April 15, 2018</a>
                                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="img/bg-img/31.jpg" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-author">Sandy Doe</a>
                                                    <a href="#" class="post-date">April 15, 2018</a>
                                                    <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/32.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">Christian Williams</a>
                                            <a href="#" class="post-date">April 15, 2018</a>
                                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Leave a comment</h4>
                            
                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Name*">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="email" class="form-control" id="email" placeholder="Email*">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="subject" placeholder="Website">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">
                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
                            <h3>4 Most Popular News</h3>
                                  
                         <?php $post_obj->getRecentNews(); ?>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-50">
                            <h4>Newsletter</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Latest Comments Widget -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php require 'pages/footer.php' ?>