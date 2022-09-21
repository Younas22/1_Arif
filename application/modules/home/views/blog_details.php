<div class="blog-header mt-5">
    <div class="container">
        <div class=""><i class="fa fa-home text-info"></i>
            <a href="<?=base_url()?>" class="text-secondary text-decoration-none">home</a><a href="<?=base_url('blog/details/').$this->uri->segment(3); ?>?" class="text-secondary text-decoration-none">/Blog-Details</a>
        </div>
        <h1 class="blog-title mt-2 font-weight-bold"><?= str_replace("-"," ",$this->uri->segment(3));?>?</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 blog-main">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">
                    <div class="card">
                        <div class="card-body home-blog-h2">

                            <?php if ($blog_details->title_a) { ?>
                            <h2 class="card-title mt-5"><span style="">1. </span>
                            <!-- a href="#1 <?=$blog_details->title_a?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> 
                            </a> -->
                            <a href="#1 <?=$blog_details->title_a?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_a?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_b) { ?>
                            <h2 class="card-title mt-5"><span style="">2. </span>
                            <!-- <a href="#2 <?=$blog_details->title_b?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#2 <?=$blog_details->title_b?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_b?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_c) { ?>
                            <h2 class="card-title mt-5"><span style="">3. </span>
                            <!-- <a href="#3 <?=$blog_details->title_c?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#3 <?=$blog_details->title_c?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_c?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_d) { ?>
                            <h2 class="card-title mt-5"><span style="">4. </span>
                            <!-- <a href="#4 <?=$blog_details->title_d?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#4 <?=$blog_details->title_d?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_d?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_e) { ?>
                            <h2 class="card-title mt-5"><span style="">5. </span>
                            <!-- <a href="#5 <?=$blog_details->title_e?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#5 <?=$blog_details->title_e?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_e?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_f) { ?>
                            <h2 class="card-title mt-5"><span style="">6. </span>
                            <!-- <a href="#6 <?=$blog_details->title_f?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#6 <?=$blog_details->title_f?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_f?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_g) { ?>
                            <h2 class="card-title mt-5"><span style="">7. </span>
                            <!-- <a href="#7 <?=$blog_details->title_g?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#7 <?=$blog_details->title_g?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_g?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_h) { ?>
                            <h2 class="card-title mt-5"><span style="">8. </span>
                            <!-- <a href="#8 <?=$blog_details->title_h?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#8 <?=$blog_details->title_h?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_h?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_i) { ?>
                            <h2 class="card-title mt-5"><span style="">9. </span>
                            <!-- <a href="#9 <?=$blog_details->title_i?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#9 <?=$blog_details->title_i?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_i?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_j) { ?>
                            <h2 class="card-title mt-5"><span style="">10. </span>
                            <!-- <a href="#10 <?=$blog_details->title_j?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#10 <?=$blog_details->title_j?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_j?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_k) { ?>
                            <h2 class="card-title mt-5"><span style="">11. </span>
                            <!-- <a href="#11 <?=$blog_details->title_k?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#11 <?=$blog_details->title_k?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_k?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_l) { ?>
                            <h2 class="card-title mt-5"><span style="">12. </span>
                            <!-- <a href="#12 <?=$blog_details->title_l?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#12 <?=$blog_details->title_l?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_l?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_m) { ?>
                            <h2 class="card-title mt-5"><span style="">13. </span>
                            <!-- <a href="#13 <?=$blog_details->title_m?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#13 <?=$blog_details->title_m?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_m?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_n) { ?>
                            <h2 class="card-title mt-5"><span style="">14. </span>
                            <!-- <a href="#14 <?=$blog_details->title_n?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#14 <?=$blog_details->title_n?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_n?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_o) { ?>
                            <h2 class="card-title mt-5"><span style="">15. </span>
                            <!-- <a href="#15 <?=$blog_details->title_o?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#15 <?=$blog_details->title_o?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_o?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_p) { ?>
                            <h2 class="card-title mt-5"><span style="">16. </span>
                            <!-- <a href="#16 <?=$blog_details->title_p?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#16 <?=$blog_details->title_p?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_p?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_q) { ?>
                            <h2 class="card-title mt-5"><span style="">17. </span>
                            <!-- <a href="#17 <?=$blog_details->title_q?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#17 <?=$blog_details->title_q?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_q?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_r) { ?>
                            <h2 class="card-title mt-5"><span style="">18. </span>
                            <!-- <a href="#18 <?=$blog_details->title_r?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#18 <?=$blog_details->title_r?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_r?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_s) { ?>
                            <h2 class="card-title mt-5"><span style="">19. </span>
                            <!-- <a href="#19 <?=$blog_details->title_s?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#19 <?=$blog_details->title_s?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_s?>
                            </a>
                            </h2>
                            <?php } ?>

                            <?php if ($blog_details->title_t) { ?>
                            <h2 class="card-title mt-5"><span style="">20. </span>
                            <!-- <a href="#20 <?=$blog_details->title_t?>" class="text-dark text-decoration-none hack15-menu-button">
                            <i class="fa fa-plus text-info border p-1"></i> </a> -->
                            <a href="#20 <?=$blog_details->title_t?>" class="text-dark text-decoration-none hack15-menu-button">
                                <?=$blog_details->title_t?>
                            </a>
                            </h2>
                            <?php } ?>

                        </div>
                    </div>
                    </div><!-- /.blog-main -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main mt-5">
                        <div class="card">
                            <div class="card-body home-blog-details-h2">

                                <?php if ($blog_details->title_a) { ?>
                                <h2 class="card-title mt-5" id="1 <?=$blog_details->title_a?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_a?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_a?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_b) { ?>
                                <h2 class="card-title mt-5" id="2 <?=$blog_details->title_b?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_b?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_b?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_c) { ?>
                                <h2 class="card-title mt-5" id="3 <?=$blog_details->title_c?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_c?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_c?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_d) { ?>
                                <h2 class="card-title mt-5" id="4 <?=$blog_details->title_d?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_d?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_d?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_e) { ?>
                                <h2 class="card-title mt-5" id="5 <?=$blog_details->title_e?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_e?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_e?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_f) { ?>
                                <h2 class="card-title mt-5" id="6 <?=$blog_details->title_f?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_f?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_f?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_g) { ?>
                                <h2 class="card-title mt-5" id="7 <?=$blog_details->title_g?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_g?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_g?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_h) { ?>
                                <h2 class="card-title mt-5" id="8 <?=$blog_details->title_h?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_h?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_h?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_i) { ?>
                                <h2 class="card-title mt-5" id="9 <?=$blog_details->title_i?>" class="text-dark text-decoration-none">
                              <?=$blog_details->title_i?>
                             </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_i?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_j) { ?>
                                <h2 class="card-title mt-5" id="10 <?=$blog_details->title_j?>" >
                                    <?=$blog_details->title_j?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_j?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_k) { ?>
                                <h2 class="card-title mt-5" id="11 <?=$blog_details->title_k?>" >
                                    <?=$blog_details->title_k?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_k?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_l) { ?>
                                <h2 class="card-title mt-5" id="12 <?=$blog_details->title_l?>" >
                                    <?=$blog_details->title_l?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_l?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_m) { ?>
                                <h2 class="card-title mt-5" id="13 <?=$blog_details->title_m?>" >
                                    <?=$blog_details->title_m?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_m?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_n) { ?>
                                <h2 class="card-title mt-5" id="14 <?=$blog_details->title_n?>" >
                                    <?=$blog_details->title_n?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_n?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_o) { ?>
                                <h2 class="card-title mt-5" id="15 <?=$blog_details->title_o?>" >
                                    <?=$blog_details->title_o?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_o?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_p) { ?>
                                <h2 class="card-title mt-5" id="16 <?=$blog_details->title_p?>" >
                                    <?=$blog_details->title_p?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_p?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_q) { ?>
                                <h2 class="card-title mt-5" id="17 <?=$blog_details->title_q?>" >
                                    <?=$blog_details->title_q?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_q?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_r) { ?>
                                <h2 class="card-title mt-5" id="18 <?=$blog_details->title_r?>" >
                                    <?=$blog_details->title_r?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_r?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_s) { ?>
                                <h2 class="card-title mt-5" id="19 <?=$blog_details->title_s?>" >
                                    <?=$blog_details->title_s?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_s?></p>
                                <?php } ?>

                                <?php if ($blog_details->title_t) { ?>
                                <h2 class="card-title mt-5" id="20 <?=$blog_details->title_t?>" >
                                    <?=$blog_details->title_t?>
                                </h2>
                                <p class="card-text text-l"><?=$blog_details->desc_t?></p>
                                <?php } ?>

                            </div>
                        </div>
                        </div><!-- /.blog-main -->


                        <?php if (!empty($blog_details->video_a)) { ?>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main mt-5">
                                <div class="card">
                                    <div class="card-body home-blog-details-h2">
                                        <h2 class="card-title p-3">
                                        <?=$blog_details->video_a_title?>
                                        </h2>
                                        <div class="hs-responsive-embed-youtube">
                                            <div class="video">
                                                <div class="video__youtube" data-youtube>
                                                    <img src="<?=base_url('assets/web/img/play.png')?>" class="video__placeholder"/>
                                                    <button class="video__button" data-youtube-button="<?=$blog_details->video_a?>"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (!empty($blog_details->video_b)) { ?>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main mt-5">
                                <div class="card">
                                    <div class="card-body home-blog-details-h2">
                                        <h2 class="card-title p-3">
                                        <?=$blog_details->video_b_title?>
                                        </h2>
                                        <div class="hs-responsive-embed-youtube">
                                            <div class="video">
                                                <div class="video__youtube" data-youtube>
                                                    <img  src="<?=base_url('assets/web/img/play.png')?>" class="video__placeholder"/>
                                                    <button class="video__button" data-youtube-button="<?=$blog_details->video_b?>"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main mt-5">
                            <div class="card">
                                <div class="card-body home-blog-h2">
                                    <h2 class="card-title"><a href="<?=base_url('blog/details/faq')?>" >FAQ</a></h2>
                                    <p class="card-text text-l">FAQ, short for frequently asked questions, is a list of commonly asked questions and answers about a specific topic. FAQ is most often read as separate letters, but is also pronounced as “fak” in rare instances.
                                    here is many question with complete answered on blogging. click on more button and check details.</p>
                                    <a href="<?=base_url('blog/details/faq')?>" class="btn_warning_ btn btn-warning btn-lg btn_grad_blgr w-25 text-truncate mt-auto border">Read More</a>
                                </div>
                            </div>
                            </div><!-- /.blog-main -->
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="sidebar widget">
                            <h3>Recent Post</h3>
                            <?php $this->load->view('recent_post'); ?>
                        </div>
                        <div class="sidebar widget mt-5">
                            <h3>Categories</h3>
                            <?php $this->load->view('categories_manue'); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            


<script>
(function (window) {
    'use strict';
    window.code = window.code || {};
    window.code.lightweightYoutubePlayer = function () {

        var dataYoutubeVideos = '[data-youtube]';

        var youtubeVideos = [...document.querySelectorAll(dataYoutubeVideos)];

        function init() {
            youtubeVideos.forEach(function(element) {
                bindYoutubeVideoEvent(element);
            });
        }

        function bindYoutubeVideoEvent(element) {
            var button = element.querySelector('[data-youtube-button]');

            button.addEventListener('click', createIframe);
        }

        function createIframe(event) {
            var url = event.target.dataset.youtubeButton;
            var youtubePlaceholder = event.target.parentNode;

            var htmlString = '<div class="video__youtube"><iframe class="video__iframe" src="' + url + '?autoplay=1" frameborder="0" allowfullscreen></iframe></div>';

            youtubePlaceholder.style.display = 'none';
            youtubePlaceholder.insertAdjacentHTML('beforebegin', htmlString);
            youtubePlaceholder.parentNode.removeChild(youtubePlaceholder);
        }

        return {
           init: init
        }
    };

})(window)

ready();
function ready() {
    var lightweightYoutubePlayer = new code.lightweightYoutubePlayer()

    if (document.readyState != 'loading') {
        page.init()
    } else {
        document.addEventListener('DOMContentLoaded', lightweightYoutubePlayer.init);
    }
}
</script>