<?php 

function rand_foto($patch = "yobas")
{
    //$patch - путь к каталогу. 
    // Пример: (http:⁄⁄lphp.ru/images/Avatar1/)
    // или относительный путь: (images/Avatar1/)
    // По умолчанию функция будет обрабатывать текущий каталог
    
    //Открываем каталог
    if(!$dir = opendir($patch)) return "Это не директория";
    // Читаем содержимое каталога
    while(($t = readdir($dir)) !== false)
    {
       $ext = substr(strrchr($t,'.'), 1);
       if(is_file($t) && ($ext == "gif") || ($ext == "jpg") || ($ext == "png"))
       {
             $filename[] = $patch."/".$t;
       }
    }

    
    // Закрываем каталог
    closedir($dir);
    
    
    
    // Получаем случайный индекс из массива
    $index = rand(0, count($filename) - 1);
    // Выводим случайный файл
    $foto = "<img src=".$filename[$index]." style='max-width:100%;
max-height:100%;'>";
    
    return $foto; // функция возвращает случайное фото
}



// Вызываем функцию
echo rand_foto();

?>