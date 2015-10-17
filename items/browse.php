<?php
  $pageTitle = __('Browse Items');
  echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<div class="container">
  
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-BROWSE-</small>
    <h1>Items <?php echo __('(%s total)', $total_results); ?></h1>
    
  </div><!-- end of section-header -->
  
  
  <div class="sort-links col-md-8 col-md-offset-2">
    <span class="sort-label">-SORT BY-</span>
    <?php 
      echo pagination_links();
      if ($total_results > 0) {
        $sortLinks[__('Title')] = 'Dublin Core,Title';
        $sortLinks[__('Creator')] = 'Dublin Core,Creator';
        $sortLinks[__('Date Added')] = 'added';
        echo browse_sort_links($sortLinks);
      }
    ?>
  </div><!-- end of sort-links -->
  
  <div class="outputs col-md-8 col-md-offset-2">
    <span class="outputs-label">-OUTPUT-</span>
    <?php echo output_format_list(false, ''); ?>
  </div><!-- end of outputs -->
  
  <div class="item-search-filters col-md-8 col-md-offset-2">
    <span class="filters-label">-SEARCH FILTERS-</span>
    <?php echo item_search_filters(); ?>
  </div><!-- end of item_search_filters -->
  
  <!--<nav class="items-nav navigation secondary-nav">
    <?php /* echo public_nav_items(); */ ?>
  </nav>-->

  
</div><!-- end of container -->

<div class="search-results">
  <?php foreach (loop('items') as $item): ?>
    <?php 
      $itemLink = record_url(get_current_record('item'));
      $itemImageTag = item_image('square_thumbnail');
      $itemTitle = metadata('item', array('Dublin Core', 'Title'));
      $itemDescription = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250));
    ?>
    <a class="exhibit-item" href="<?php echo $itemLink ?>">
      <?php echo $itemImageTag ?>
      <h1><?php echo $itemTitle ?></h1>
      <p><?php echo $itemDescription ?></p>
      <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
    </a>
  <?php endforeach; ?>
</div><!-- end of grid-->

<div class="container">
  <?php echo pagination_links(); ?>
</div>

<?php 
  fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); 
  echo foot();
?>
