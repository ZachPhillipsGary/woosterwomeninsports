<?php
  echo head();
  function themeOptions($optionName) {
    $themeOptionPrefix1 = 'homepage_jumbotron_section_1_';
    $themeOptionPrefix2 = 'homepage_jumbotron_section_2_';
    $themeOptionPrefix3 = 'homepage_jumbotron_section_3_';
    $themeOptionPrefix4 = 'homepage_jumbotron_section_4_';

    return array(
      get_theme_option($themeOptionPrefix1.$optionName),
      get_theme_option($themeOptionPrefix2.$optionName),
      get_theme_option($themeOptionPrefix3.$optionName),
      get_theme_option($themeOptionPrefix4.$optionName)
    );
  }

  $themeUploadsPath = '/files/theme_uploads/';
  $sectionBackgroundImages = themeOptions('background_image');
  $sectionTitleIcons = themeOptions('title_icon');
  $sectionTitle1s = themeOptions('title_1');
  $sectionTitle2s = themeOptions('title_2');
  $sectionInfos = themeOptions('info');
  $sectionLinks = themeOptions('link');
?>

<?php
  function showIntro() {
    $themeOption = 'homepage_introduction_content';
    $introContent = get_theme_option($themeOption);

    echo __($introContent);
  }
?>
<div class="container-fluid highlight-jumbotron">

<div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="section">
        <?php if (!empty($sectionBackgroundImages[0])): ?>
          <!-- do a hacky fix for now -->
          <img src="<?php echo "./".$themeUploadsPath.$sectionBackgroundImages[0] ?>" class="background">
        <?php else: ?>
          <div class="background"></div>
        <?php endif ?>
        <div class="front">
          <div class="container">
            <span class="glyphicon <?php echo $sectionTitleIcons[0] ?>" aria-hidden="true"></span>
            <p class="sans-serif-800"><?php echo $sectionTitle1s[0] ?></p>
            <p class="serif-400"><?php echo $sectionTitle2s[0] ?></p>
          </div>
        </div>
        <div class="back">
          <p><?php echo $sectionInfos[0] ?></p>
          <a href="<?php echo $sectionLinks[0] ?>">LEARN MORE</a>
        </div>
      </div>
   </div>
   <div class="col-md-4 col-sm-6">
     <div class="section">
       <?php if (!empty($sectionBackgroundImages[1])): ?>
         <!-- do a hacky fix for now -->
         <img src="<?php echo "./".$themeUploadsPath.$sectionBackgroundImages[1] ?>" class="background">
       <?php else: ?>
         <div class="background"></div>
       <?php endif ?>
       <div class="front">
         <div class="container">
           <span class="glyphicon <?php echo $sectionTitleIcons[1] ?>" aria-hidden="true"></span>
           <p class="sans-serif-800"><?php echo $sectionTitle1s[1] ?></p>
           <p class="serif-400"><?php echo $sectionTitle2s[1] ?></p>
         </div>
       </div>
       <div class="back">
         <p><?php echo $sectionInfos[0] ?></p>
         <a href="<?php echo $sectionLinks[0] ?>">LEARN MORE</a>
       </div>
     </div>
   </div>
   <div class="col-md-4 col-sm-6">
     <div class="section">
       <?php if (!empty($sectionBackgroundImages[0])): ?>
         <!-- do a hacky fix for now -->
         <img src="<?php echo "./".$themeUploadsPath.$sectionBackgroundImages[0] ?>" class="background">
       <?php else: ?>
         <div class="background"></div>
       <?php endif ?>
       <div class="front">
         <div class="container">
           <span class="glyphicon <?php echo $sectionTitleIcons[0] ?>" aria-hidden="true"></span>
           <p class="sans-serif-800"><?php echo $sectionTitle1s[0] ?></p>
           <p class="serif-400"><?php echo $sectionTitle2s[0] ?></p>
         </div>
       </div>
       <div class="back">
         <p><?php echo $sectionInfos[0] ?></p>
         <a href="<?php echo $sectionLinks[0] ?>">LEARN MORE</a>
       </div>
     </div>
   </div>
   <div class="col-md-4 col-sm-6">
     <div class="section">
       <?php if (!empty($sectionBackgroundImages[0])): ?>
         <!-- do a hacky fix for now -->
         <img src="<?php echo "./".$themeUploadsPath.$sectionBackgroundImages[0] ?>" class="background">
       <?php else: ?>
         <div class="background"></div>
       <?php endif ?>
       <div class="front">
         <div class="container">
           <span class="glyphicon <?php echo $sectionTitleIcons[0] ?>" aria-hidden="true"></span>
           <p class="sans-serif-800"><?php echo $sectionTitle1s[0] ?></p>
           <p class="serif-400"><?php echo $sectionTitle2s[0] ?></p>
         </div>
       </div>
       <div class="back">
         <p><?php echo $sectionInfos[0] ?></p>
         <a href="<?php echo $sectionLinks[0] ?>">LEARN MORE</a>
       </div>
     </div>
   </div>
   <div class="col-md-4 col-sm-6">
     <div class="section">
       <?php if (!empty($sectionBackgroundImages[0])): ?>
         <!-- do a hacky fix for now -->
         <img src="<?php echo "./".$themeUploadsPath.$sectionBackgroundImages[0] ?>" class="background">
       <?php else: ?>
         <div class="background"></div>
       <?php endif ?>
       <div class="front">
         <div class="container">
           <span class="glyphicon <?php echo $sectionTitleIcons[0] ?>" aria-hidden="true"></span>
           <p class="sans-serif-800"><?php echo $sectionTitle1s[0] ?></p>
           <p class="serif-400"><?php echo $sectionTitle2s[0] ?></p>
         </div>
       </div>
       <div class="back">
         <p><?php echo $sectionInfos[0] ?></p>
         <a href="<?php echo $sectionLinks[0] ?>">LEARN MORE</a>
       </div>
     </div>
   </div>
   <div class="col-md-4 col-sm-6">
     <div class="section">
       <?php if (!empty($sectionBackgroundImages[0])): ?>
         <!-- do a hacky fix for now -->
         <img src="<?php echo "./".$themeUploadsPath.$sectionBackgroundImages[0] ?>" class="background">
       <?php else: ?>
         <div class="background"></div>
       <?php endif ?>
       <div class="front">
         <div class="container">
           <span class="glyphicon <?php echo $sectionTitleIcons[0] ?>" aria-hidden="true"></span>
           <p class="sans-serif-800"><?php echo $sectionTitle1s[0] ?></p>
           <p class="serif-400"><?php echo $sectionTitle2s[0] ?></p>
         </div>
       </div>
       <div class="back">
         <p><?php echo $sectionInfos[0] ?></p>
         <a href="<?php echo $sectionLinks[0] ?>">LEARN MORE</a>
       </div>
     </div>
   </div>
</div>
</div>
  <!--
<div class="container-fluid highlight-jumbotron">

  <div class="col-lg-4 col-lg-push-4 col-md-12 homepage-intro">

    <div class="homepage-logo">
      <p class="sans-serif-800">Women in Sport and Physical Education</p>
      <p class="serif-400">at The College of Wooster</p>
    </div>
    <p class="serif-400"></p>
  </div>
 -->
</div>

<?php echo foot(array('displayFooter' => false)); ?>
