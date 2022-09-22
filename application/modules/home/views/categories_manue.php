<ul class="">
  <?php foreach (blog_category() as $key) { ?> 
    <li>
        <div class="sidebar-meta">
              <span class="time"><i class="fa fa-angle-right"></i> <a href="<?=base_url('blog/category/').str_replace(" ","-",strtolower($key->category_title))?>" class="text-dark text-decoration-none"><?=$key->category_title?></a></span>
          </div>
      </li>
  <?php } ?>
</ul>