              <ul>

                <?php if ($this->uri->segment(2) == 'category') {
                    if (!empty(recent_category_blog($this->uri->segment(3)))) { 
                    foreach (recent_category_blog($this->uri->segment(3)) as $key => $value) { ?>
                <li>
                    <div class="sidebar-thumb">
                        <img class="animated rollIn" src="<?=base_url('assets/admin/img/blog/').$value['img']?>" alt="<?=$value['title_a']?>" />
                    </div><!-- .Sidebar-thumb -->
                    <div class="sidebar-content">
                        <h2 class="animated bounceInRight" style="font-family: 'Roboto', sans-serif;"><a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>"><?=$value['title']?></a></h2>
                    </div><!-- .Sidebar-thumb -->
                    <div class="sidebar-meta">
                        <span class="time" ><i class="fa fa-clock-o"></i> <?=date("d M Y", strtotime($value['created_at']));?></span>
                        <!-- <span class="comment"><i class="fa fa-comment"></i> 10 comments</span> -->
                    </div><!-- .Sidebar-meta ends here -->
                </li><!-- .Li ends here -->
                <?php }}else{echo "Data Not Found!";} } ?>


                <?php if ($this->uri->segment(2) != 'category') {
                if (!empty(get_recent_blog())) {
                foreach (get_recent_blog() as  $key => $value) { ?>
                <li>
                    <div class="sidebar-thumb">
                        <img class="animated rollIn" src="<?=base_url('assets/admin/img/blog/').$value['img']?>" alt="<?=$value['title_a']?>" />
                    </div><!-- .Sidebar-thumb -->
                    <div class="sidebar-content">
                        <h2 class="animated bounceInRight" style="font-family: 'Roboto', sans-serif;"><a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>"><?=$value['title']?></a></h2>
                    </div><!-- .Sidebar-thumb -->
                    <div class="sidebar-meta">
                        <span class="time" ><i class="fa fa-clock-o"></i> <?=date("d M Y", strtotime($value['created_at']));?></span>
                        <!-- <span class="comment"><i class="fa fa-comment"></i> 10 comments</span> -->
                    </div><!-- .Sidebar-meta ends here -->
                </li><!-- .Li ends here -->
                <?php }}else{echo "Data Not Found!";} } ?>


              </ul>