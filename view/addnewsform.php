<div class="container">
<!--  <form class="addnews-form" action="/index.php?ctrl=News&act=add_news" method="post">
    <input name="title" type="text" class="form-control" placeholder="Заголовок">
    <textarea name="text" class="form-control" rows="3" placeholder="Текст"></textarea>
    <input type="submit" name="" value="Добавить">
  </form>-->


        <form class="form-horizontal" action="/index.php?ctrl=Admin&act=add_news" method="post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Заголовок</label>
            <div class="col-sm-10">
                <input name="title" type="text" class="form-control" id="inputEmail3" placeholder="Заголовок">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Текст</label>
            <div class="col-sm-10">
                <textarea name="text" class="form-control" rows="3" placeholder="Текст"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Добавить</button>
            </div>
          </div>
        </form>
    
</div>