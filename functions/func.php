<?php
//function NewsDBquery($query)
//{
//  $link =new mysqli('localhost', 'root', '', 'news');
//  $link->query($query);
//  $link->close();
//}
//
//function ConnectDBNews($query)
//{
//  $link =new mysqli('localhost', 'root', '', 'news');
//  return $link->query($query);
//}
//
//function DisconnectDBNews()
//{
//  $link = new mysqli_connect('localhost', 'root', '', 'news');
//  $link->close();
//}

function podstan($n) {
            return ':'.$n;
        }
 
function podstanSET($n) {
            return $n.'=:'.$n;
        }
 ?>