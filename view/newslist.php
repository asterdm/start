<div class="container">
  <?php foreach ($newslist as $newslist):?>
  <div class="newsList-block">
    <div class="newslist-title">
      <h4><?php echo $newslist[title]?></h4>
    </div>
    <div class="newslist-description">
      <p><?php echo $newslist[text]?></p>
    </div>
    <div class="newslist-link">
      <a href="http://start/news<?php echo $newslist[url]?>">news<?php echo $newslist[url] ?></a>
    </div>
    <div class="newslist-date">
      <p><?php echo date('D, d M Y H:i:s',$newslist[date])?></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>
