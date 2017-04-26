<div class="container">
  <div class="news-title">
    <h1><?php echo $news->title; ?></h1>

  </div>
  <div class="news-text">
    <p><?php echo $news->text; ?></p>
    <p><?php echo date('D, d M Y H:i:s',$news->date); ?></p>

  </div>
    <form action="/index.php?ctrl=news&act=one_news" method="post">
<!--  <fieldset disabled>
    <div class="form-group">
      <label for="disabledTextInput">ID</label>
      <input name="" type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
  </fieldset>-->
    <button type="submit" class="btn btn-danger" name="delete" value="<?php echo $news->getID()?>">Удалить</button>
  
</form>
</div>
