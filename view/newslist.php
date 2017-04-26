
 <div class="container">
     <?php foreach ($newslist as $newslist):?>

            <div class="row">            
              <div class="col-sm-12 col-md-12 col-xs-12">
                <h3 class="text-left"><?php echo $newslist->title?></h3>
                <p><?php echo $newslist->text?></p>
                <blockquote><?php echo date('D, d M Y H:i:s',$newslist->date)?></blockquote>
                <p class="text-right"><a class="btn btn-default" href="http://start/index.php?ctrl=news&act=one_news&news_id=<?php echo $newslist->getID() ?>" role="button">Подробнее »</a></p>
              </div>             
            </div>
     <hr>
    <?php endforeach; ?>
 </div>
