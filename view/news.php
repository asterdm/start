<div class="container">
  <div class="news-title">
    <h1><?php echo $news->title; ?></h1>

  </div>
  <div class="news-text">
    <p><?php echo $news->text; ?></p>
    <p><?php echo date('D, d M Y H:i:s',$news->date); ?></p>

  </div>

</div>
