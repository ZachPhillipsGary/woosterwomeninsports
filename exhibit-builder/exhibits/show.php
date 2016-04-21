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
 <div class="dropdown">

    <button class="btn btn-default dropdown-toggle" type="button" id="exhibitMenu" data-toggle="dropdown">Menu<span class="caret"></span></button>
      <?php $menu = exhibit_builder_page_tree($exhibit, $exhibit_page); 
 $dropdownMenu = preg_replace('/(<ul\b[^><]*)>/i', '$1 role="menu" aria-labelledby="exhibitMenu" class="dropdown-menu">', $menu);
 echo $dropdownMenu;
      ?>
      
</div>

  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>

<div class="container exhibit">
  <article>
    <div class="col-md-10">
      <div class="article-content">
        <?php exhibit_builder_render_exhibit_page(); ?>
      </div>
    </div>
       

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
