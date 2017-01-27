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
      <a href="<?php echo $newslist[url]?>">Ссылка на новость</a>
    </div>
    <div class="newslist-date">
      <p><?php echo $newslist[date]?></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>
