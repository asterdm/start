<?php
require_once __DIR__.'/model/newslist.php';
// Если есть что принять
//   Принимаем данные из формы
//   Формируем таблицу
//   Отправляем в базу
// Если нечего
//   Показываем форму добавления новости


if (!empty($_POST)) {

  news_load();
}
include __DIR__.'/view/header.php';
include __DIR__.'/view/addnewsform.php';
 ?>
