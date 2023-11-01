<div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Casual News</h6>
                    </div>

                    <div class="row">
                        <!-- Single Post -->
                        <?php $post_obj->getCasualNews(); ?>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Info</h6>
                    </div>
                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
                        <h3>4 Most Popular News</h3>
                        <?php 
                            $post_obj->getRecentNews();
                         ?>
                        
                    </div>

                    <!-- Newsletter Widget -->
                  
                </div>
            </div>
        </div>
    </div>