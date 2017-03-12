<?php
if (empty($_POST[url])) {
  echo 'задайте юрл';
  die;
}
 class PictFile
 {
   public $source_file;
   public $destination_file;

   public function pictcopy()
   {
     copy($this->source_file, $this->destination_file);
   }
 }

 Header('Content-type: text/html; charset=utf-8');
 $url=$_POST[url];//url страницы, с которой будем копировать все картинки
 function getContentPage($url){//функция для получения исходного кода страницы
     $c = curl_init($url);
     curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
     $text = curl_exec($c);
     curl_close($c);
     return $text;
 }
 //регулярнымвыражением парсим страницу, и находим все картники с расширением png и jpg
 preg_match_all("/\/upload\/iblock\/.*\.jpg/U",getContentPage($url),$result);

 $result=$result[0];

 $row = new PictFile;

 foreach($result as $key=>$name)
         {

             $row->source_file='http://fotocult.ru'.$name;

             $row->destination_file =__DIR__."/images/$key.jpg";

             $row->pictcopy();
            //  var_dump($row);die;
            //  die;
         }
var_dump($result);
 $k=0;
 //перебираем все найденные картинки, создаем для них директории, и сохраняем изображения
  // while ($k<=(count($row['image'])-1))
  // {
  //    $url=$row['image'][$k];
  //    $name= $row['image'][$k];
  //    $name=str_replace("http://lifeexample.ru/","",$name);
  //    echo ($k+1).") Успешно сохранена картинка: <b>".$name."</b><br/>";
  //    $dir="";
  //    $result1=explode("/", $name);
  //        for($i=0 ; $i<=(count($result1)-2); $i++ )
  //                {
  //                    if (!file_exists($dir.$result1[$i])){
  //                        mkdir($dir.$result1[$i], 0777);
  //                    }
  //                    $dir.=$result1[$i]."/";
  //                }
  //        copy($url,$name);
  //    $k++;
  //  }
 ?>
 Скрипт с помощью функции curl_init() получает содержимое нужной страницы и регулярным выражением выбирает все картинки с расширением png и jpg. Далее для каждой из картинок создается определенная ссылкой структура папок, и функцией copy() сохраняется на наш сервер.

 Внимание! При использовании функции curl_init() на денвере, не редко вы можете столкнутьс
