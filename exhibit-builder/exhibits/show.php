<?php
  echo head(array(
      'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
      'bodyclass' => 'exhibits show'));
?>

<?php
  $title = metadata('exhibit_page', 'title');
?>

<div class="container exhibit">
  <div class="section-header col-md-8 col-md-offset-2">
    <small>-EXHIBIT-</small>
    <h1><?php echo $title ?></h1>
  </div><!-- end of section-header -->
</div><!-- end of container -->

<div class="container exhibit">
  <article>
    <div class="col-md-10">
      <div class="article-content">
        <?php exhibit_builder_render_exhibit_page(); ?>
      </div>
    </div>
    <nav id="exhibit-pages" class="col-md-2" >
    <div class="dropdown">
 <a data-target="#" href="page.html" data-toggle="dropdown" class="dropdown-toggle"> <?php echo exhibit_builder_link_to_exhibit($exhibit); ?><b class="caret"></b></a>
      <?php $menu = exhibit_builder_page_tree($exhibit, $exhibit_page); 
 $dropdownMenu = preg_replace('/(<ul\b[^><]*)>/i', '$1 class="dropdown-menu">', $menu);
 echo $dropdownMenu;
      ?>
    </nav>
  </article>

</div>

<div class="container">


  <nav>
    <ul id="exhibit-page-navigation" class="pager">
      <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
        <li id="exhibit-nav-prev" class="previous">
          <?php echo $prevLink; ?>
        </li>
      <?php endif; ?>
      <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
        <li id="exhibit-nav-next" class="next">
          <?php echo $nextLink; ?>
        </li>
      <?php endif; ?>
    </ul>

  </nav>
</div><!-- end of container -->




<?php echo foot(); ?>
