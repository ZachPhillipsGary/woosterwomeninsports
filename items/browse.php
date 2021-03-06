<?php
  $pageTitle = __('Browse Items');
  echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>
<div>
  <?php
    echo $this->partial('items/search-form.php',
                        array('formAttributes' => array('id'=>'advanced-search-form')));
  ?>
</div><!-- end of drawer-under -->

<div>
  <div class="container">
  <div class="text-center">

    <button class="btn btn-default expand-advanced-search">
      ADVANCED SEARCH
    </button>
    <button id="openTagCloud" class="btn btn-default" >
      TAGS
    </button>
    <div id="itemTitle" class="section-header col-md-10 col-md-offset-1">
      <small>-BROWSE-</small>
      <h1>Items <?php echo __('(%s total)', $total_results); ?></h1>
    </div>
</div>
<!-- end of sort-links -->

  <div class="tagCloud" title="tags">
  <div class="container">
  <div class="section-header col-md-10 col-md-offset-1">
  <small>-BROWSE-</small>
      <h1>Tags</h1>
      </div>
          <?php $tags = get_recent_tags(99999);
           echo tag_cloud($tags, 'items/browse'); ?>
              <?php foreach (loop('items') as $item): ?>
              <?php $itemTags = tag_string('item', 'items/browse', ''); ?>
              <div class="cloudtags"><?php //echo $itemTags; ?></div>
              <span class="label label-default"></span>

                <?php endforeach; ?>
                  </div>
                  </div>

</div>




  </div><!-- end of container -->

  <div class="search-results">
    <?php foreach (loop('items') as $item): ?>
      <?php
        $itemLink = record_url(get_current_record('item'));
        $itemImageTag = item_image('square_thumbnail');
        $itemTitle = metadata('item', array('Dublin Core', 'Title'));
        $itemDescription = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250));
        $itemTags = tag_string('item', 'items/browse', '');
      ?>
      <div class="exhibit-item" onclick="window.location='<?php echo $itemLink ?>'">
        <?php echo $itemImageTag; ?>
        <h1><?php echo $itemTitle; ?></h1>
        <p><?php echo $itemDescription; ?></p>
        <div class="tags"><?php echo $itemTags; ?></div>
        <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
      </div>
    <?php endforeach; ?>
  </div><!-- end of grid-->

  <div class="container">
      <?php echo pagination_links(); ?>
  </div>

  <footer role="contentinfo" class="jumbotron">
    <div class="container">
      <div id="footer-text" class="col-md-8 col-md-offset-2">
        <?php
          echo get_theme_option('Footer Text');
          if ((get_theme_option('Display Footer Copyright') == 1) &&
              $copyright = option('copyright')) {
            echo __('<p>'.$copyright.'</p>');
        }
          echo __('<p>Proudly powered by <a href="http://omeka.org">Omeka</a>.</p>');
        ?>
      </div><!-- end of footer-text -->
    </div><!-- end of container -->
  </footer><!-- end footer -->

</div><!-- end of drawer-above -->

<?php echo js_tag('items-search'); ?>

<script type="text/javascript">
  jQuery(document).ready(function () {

    $('.popularity').addClass( 'list-unstyled' );
     $( ".popularity" ).children().addClass( "exhibit-item" );
     $( ".popularity" ).children().addClass( "tags" );
      $( ".tagCloud" ).toggle();


    $("#openTagCloud").click(function(){
          $( ".tagCloud" ).toggle();
          $("#itemTitle").toggle();

    });
    Omeka.Search.activateSearchButtons();

    // init Masonry
    var $grid = $('.search-results').masonry({
      itemSelector: '.exhibit-item',
      columnWidth: '.exhibit-item',
      gutter: 30
    });
    // layout Isotope after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry();
    });

    var expandAdvancedSearch = $('.drawer-above button.expand-advanced-search');
    var addSearchButton = $('#search-narrow-by-fields button.add_search');

    var drawerAbove = $('.drawer-above');
    var drawerUnder = $('.drawer-under');
    var drawerUnderMargin = 120;
    var drawerAboveOriginalTop = 210;

    var updateDrawerAbovePosition = function () {
      if (expandAdvancedSearch.hasClass('open')) {
        drawerAbove.css({top: drawerUnderMargin + drawerUnder.height()});
      }
    };

    var updateRemoveSearchButtons = function () {
      $('#search-narrow-by-fields button.remove_search').click(updateDrawerAbovePosition);
    };

    expandAdvancedSearch.click(function () {
        if (expandAdvancedSearch.hasClass('closed')) {
        expandAdvancedSearch.removeClass('closed');
        expandAdvancedSearch.addClass('open');
        drawerAbove.css({top: drawerUnderMargin + drawerUnder.height()});
      } else {
        expandAdvancedSearch.addClass('closed');
        expandAdvancedSearch.removeClass('open');
        drawerAbove.css({top: drawerAboveOriginalTop});
      }
    });

    addSearchButton.click(function () {
      if (expandAdvancedSearch.hasClass('open')) {
        updateRemoveSearchButtons();
      }
      updateDrawerAbovePosition();
    });

  });
</script>

<?php
  fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this));
  echo foot(array('displayFooter' => false));
?>
