<footer class="footer-section mt-5" style="background-color: #202020;">
        <div class="container">

            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="text-transform: uppercase;"><?=web_details()->site_name?> TOP ARTICLES</h3>
                            </div>
                            <ul>
                                <?php $top_articles_no = 1; foreach (top_articles() as $key => $value) {  ?>
                                    <li class="text-white"><?=$top_articles_no?>. <a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>"><?=$value['title']?></a></li><br>
                                <?php  $top_articles_no++;if($top_articles_no==6) break;} ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="text-transform: uppercase;"><?=web_details()->site_name?> TOP RESOURCES</h3>
                            </div>
                            <ul>
                                <?php $top_resources_no = 1; foreach (top_resources() as $key => $value) {  ?>
                                    <li class="text-white"><?=$top_resources_no?>. <a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>"><?=$value['title']?></a></li><br>
                                <?php  $top_resources_no++;if($top_resources_no==6) break;} ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="text-transform: uppercase;">Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>

                                <?php if ($this->session->flashdata('msg')) { ?>
                                    <div class="alert alert-success p-2">
                                      <?= $this->session->flashdata('msg'); ?>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="alert alert-danger p-2">
                                      <?= $this->session->flashdata('error'); ?>
                                    </div>
                                <?php } ?>

                            <div class="subscribe-form">
                            <form action="<?=base_url('home/subscription')?>" method="POST">
                                <input type="email" placeholder="Email Address" name="email" required>
                                <button type="submit"><i class="fa fa-telegram"></i></button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; <?=date('Y')?>, All Right Reserved <a href="https://tecyoun.com/" target="_blank">Tecyoun</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="<?=base_url()?>">Home</a></li>
                                <li><a href="<?=base_url('about-us')?>">About Us</a></li>
                                <li><a href="<?=base_url('terms')?>">Terms</a></li>
                                <li><a href="<?=base_url('privacy')?>">Privacy</a></li>
                                <li><a href="<?=base_url('contact')?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?=base_url()?>assets/web/js/jquery-3.5.1.slim.min.js"></script>
        <script src="<?=base_url()?>assets/web/js/popper.min.js"></script>
        <script src="<?=base_url()?>assets/web/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/web/js/slideDown.js"></script>

<script>
$(document).ready(function() {
    //remove #id from blog details url
  const menuBtn = $('.hack15-menu-button');
  menuBtn.click(()=>{
    setTimeout(()=>{
      removeHash();
    }, 5);
  });

  function removeHash(){
    history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
  }



  $(".content").slice(0, 10).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 6).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });


    $(".alert-success").hide(5000);
    $(".alert-danger").hide(5000);

});

</script>

    </body>
</html>