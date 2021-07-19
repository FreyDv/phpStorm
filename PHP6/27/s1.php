<!--Работа с файлами -->
<!--action =""-->
<form>
    <table width="20%" cellspacing="1" cellpadding="1">
        <tr>
            <td align="left">Name:</td>
            <td><input type="text"  name="Pname"></input></td>
        </tr>
        <tr>
            <td align="left">SName:</td>
            <td><input type="text"  name="Psname"></input></td>
        </tr>
        <tr>
            <td align="left">Age:</td>
            <td><input type="text"  name="Page"></input></td>
        </tr>
        <tr>
            <td align="left">E-mail:</td>
            <td><input type="text"  name="Pemail"></input></td>
        </tr>
        <tr>
            <td align="left">Phone:</td>
            <td><input type="text"  name="Pphone"></input></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="write" value="1" formmethod ="post">Записать</button>
                <button type="submit" name="show"  value="1" formmethod ="post">Показать</button></td>
        </tr>
    </table>
</form>
<?php
function ff ($a){

//    echo "<br>";
    echo "<pre>";
    if(is_array($a)) {
        foreach ($a as $x) {
            echo $x;
//        echo str_repeat('-',20);
        }
    }
    else echo $a;
    echo "</pre>";
//    echo "<br>";
}
//<editor-fold desc="copy">
//https://www.php.net/manual/ru/function.copy
//copy ( string $source , string $dest , resource $context = ? ) : bool
//Копирует файл source в файл с именем dest.
//Если вы хотите переименовать файл, используйте функцию rename().
{
copy('text.txt','folder/file.txt');
}
//</editor-fold>
//<editor-fold desc="file_exists">
//https://www.php.net/manual/ru/function.file-exists
//file_exists — Проверяет существование указанного файла или каталога
//file_exists ( string $filename ) : bool
{
    $file=0;
if(file_exists('folder/file.txt')) $file= 'file exists';
else  $file = 'file not exists';
//echo $file;
//echo "<br>";
$directori =0;
if(file_exists('folder')) $directori= 'Directori exists';
else $directori = 'Directori not exists';
//echo $directori;
}
//</editor-fold>
//<editor-fold desc="file_get_contents">
//https://www.php.net/manual/ru/function.file-get-contents
//file_get_contents — Читает содержимое файла в строку
//file_get_contents ( string $filename , bool $use_include_path = false , resource $context = ? , int $offset = 0 , int $length = ? ) : string|false
//Данная функция похожа на функцию file() с той лишь разницей, что file_get_contents() возвращает содержимое файла в
// строке, начиная с указанного смещения offset и до length байт.
// В случае неудачи, file_get_contents() вернёт false.
//Использование функции file_get_contents() наиболее предпочтительно в случае необходимости получить содержимое файла
// целиком, поскольку для улучшения производительности функция
// использует технику отображения файла в память (memory mapping), если она поддерживается вашей операционной системой.
{
//    echo "<br>";
    $file = file_get_contents('text.txt'); // чтение файла
    //echo $file;  // вывод файла
//    echo "<br>";
    //echo nl2br($file);  // вывод файла c форматированием
//    echo "<br>";
    $site = file_get_contents("http://php.net"); // чтение сайта
//    echo $site;                       // вывод сайта
//    echo  htmlspecialchars($site);    // вывод кода html  сайта
}
//</editor-fold>
//<editor-fold desc="file_put_contents">
//https://www.php.net/manual/ru/function.file-put-contents
//Функция идентична последовательным успешным вызовам функций fopen(), fwrite() и fclose().
//Если filename не существует, файл будет создан. Иначе, существующий файл будет перезаписан, за исключением случая, если указан флаг FILE_APPEND.
//file_put_contents ( string $filename , mixed $data , int $flags = 0 , resource $context = ? ) : int
//filename
//Путь к записываемому файлу.

//data
//Записываемые данные. Может быть типа string, array или ресурсом потока.
//Если data является потоковым ресурсом (stream), оставшийся буфер этого потока будет скопирован в указанный файл.
// Это похоже на использование функции stream_copy_to_stream().
//Также вы можете передать одномерный массив в качестве параметра data.
// Это будет эквивалентно вызову file_put_contents($filename, implode('', $array)).

//flags
//Значением параметра flags может быть любая комбинация следующих флагов, соединённых бинарным оператором ИЛИ (|).
//FILE_USE_INCLUDE_PATH	Ищет filename в подключаемых директориях. Подробнее смотрите директиву include_path.
//FILE_APPEND	Если файл filename уже существует, данные будут дописаны в конец файла вместо того, чтобы его перезаписать.
//LOCK_EX	Получить эксклюзивную блокировку на файл на время записи. Другими словами, между вызовами fopen() и fwrite()
// произойдёт вызов функции flock(). Это не одно и то же, что вызов fopen() с флагом "x".

//context
//Корректный ресурс контекста, созданный с помощью функции stream_context_create().

//Функция возвращает количество записанных байт в файл, или false в случае ошибки.
{
    $forPut = file_get_contents("http://php.net"); // чтение сайта
    $bite = file_put_contents('text1.txt',$forPut);
//    echo "<br>";
//    echo $bite;
}
//</editor-fold>
//<editor-fold desc="file">
//https://www.php.net/manual/ru/function.file
//file — Читает содержимое файла и помещает его в массив
//file ( string $filename , int $flags = 0 , resource $context = ? ) : array
//Можно также использовать функцию file_get_contents() для получения файла в виде строки.
//Список параметров ¶
//
//filename-Путь к файлу.
//
//flags
//В качестве необязательного параметра flags может можно указать одну или более следующих констант:
//
//FILE_USE_INCLUDE_PATH  - Ищет файл в include_path.
//
//FILE_IGNORE_NEW_LINES  - Пропускать новую строку в конце каждого элемента массива
//
//FILE_SKIP_EMPTY_LINES  - Пропускать пустые строки
//
//context  - Ресурс контекста, созданный функцией stream_context_create().
//Возвращает файл в виде массива. Каждый элемент массива соответствует строке файла, с символами новой строки включительно.
// В случае ошибки file() возвращает false.
//Замечание:
//Каждая строка в полученном массиве будет завершаться символами конца строки, если только не используется FILE_IGNORE_NEW_LINES).
//Замечание: Если у вас возникают проблемы с распознаванием PHP концов строк при чтении или создании файлов
// на Macintosh-совместимом компьютере, включение опции auto_detect_line_endings может помочь решить проблему.
{
    $file = file('text.txt');
//    ff($file);
}
//</editor-fold>
//<editor-fold desc="is_dir">
//https://www.php.net/manual/ru/function.is-dir
////is_dir — Определяет, является ли имя файла директорией
//is_dir ( string $filename ) : bool
//filename
//Путь к файлу. Если filename является относительным именем, он будет проверяться относительно текущей рабочей директории.
// Если filename является символической или жёсткой ссылкой, то ссылка будет раскрыта и проверена. При включённом open_basedir
// могут применяться дальнейшие ограничения.
{
if(is_dir('folder')) $pyti = "it is katalog"; // указание директории в папке проекта
    else  $pyti = "no katalog on this wey";
//     ff($pyti); //uncomend
     //-------------------------------------------------
    if(is_dir('.')) $pyti = "it is katalog"; // указание директории на один выше сейчас это Директория папки 27
    else  $pyti = "no katalog on this wey";
//    ff($pyti);  //uncomend
    //-------------------------------------------------
    if(is_dir('..')) $pyti = "it is katalog";//указание директории на два  выше сейчас это Директория папки phpStorm
    else  $pyti = "no katalog on this wey";
//    ff($pyti);  //uncomend
}
//</editor-fold>
//<editor-fold desc="is_file">
//https://www.php.net/manual/ru/function.is-file
//is_file — Определяет, является ли файл обычным файлом
//is_file ( string $filename ) : bool
//filename  - Путь к файлу.
{

}
//</editor-fold>
//<editor-fold desc="move_uploaded_file">
//https://www.php.net/manual/ru/function.move-uploaded-file
//move_uploaded_file ( string $from , string $to ) : bool
//
//from  - Путь к загруженному файлу.
//to  - Путь, по которому необходимо переместить файл.

//Эта функция проверяет, является ли файл from загруженным на сервер (переданным по протоколу HTTP POST).
// Если файл действительно загружен на сервер, он будет перемещён в место, указанное в аргументе to.

//Такая проверка особенно важна в том случае, если существует шанс того, что какие-либо действия,
// производимые над загруженным файлом, могут открыть его содержимое пользователю или даже другим пользователям системы.
{

}
//</editor-fold>
//<editor-fold desc="rename">
//https://www.php.net/manual/ru/function.rename
//Пытается переименовать oldname в newname, перенося файл между директориями,
// если необходимо. Если newname существует, то он будет перезаписан.
// При переименовании директории с существующим newname будет выведено предупреждение.
//
//rename ( string $oldname , string $newname , resource $context = ? ) : bool
//
//oldname  - Старое имя.
//Замечание:Обёртка, используемая в oldname должна совпадать с обёрткой, используемой в newname.
//
//newname  - Новое имя.
//Замечание: В Windows, если newname уже существует, он должен быть доступен для записи. В противном случае rename() завершится ошибкой и выдаст E_WARNING.
//
//context  - Замечание: Поддержка контекста была добавлена в PHP 5.0.0. Для описания контекстов смотрите раздел Потоки.
//
{
    //переносить файл
//    rename('text3.txt','folder/file3perenes.txt'); // нужно перенести  в папку 27 файл с именем file3perenes.txt
    // и переименовать в text3.txt что бы посмотреть как работает

}
//</editor-fold>
//<editor-fold desc="rmdir">
//https://www.php.net/manual/ru/function.rmdir
//Пытается удалить директорию с именем directory.
//Директория должна быть пустой и должны иметься необходимые для этого права.
//При неудачном выполнении будет сгенерирована ошибка уровня E_WARNING.
//
//rmdir ( string $directory , resource $context = ? ) : bool
//directory  - Путь к директории.
//
//context
//Замечание: Поддержка контекста была добавлена в PHP 5.0.0. Для описания контекстов смотрите раздел Потоки.
{
//rmdir("1/2/3/4/5/6/7/8/9/10"); // удалит 10 папку по всему вложеному пути.
}
//</editor-fold>
//<editor-fold desc="mkdir">
//https://www.php.net/manual/ru/function.mkdir.php
//mkdir — Создаёт директорию
//
//directory
//Путь к директории.
//
//permissions
//По умолчанию принимает значение 0777, что означает самые широкие права. Больше информации о правах доступа можно
// узнать на странице руководства функции chmod().
//
//Замечание:
//Аргумент permissions игнорируется в Windows.
//Обратите внимание, что аргумент permissions необходимо задавать в виде восьмеричного числа (первой цифрой должен быть ноль).
// На аргумент permissions также влияет текущее значение umask, которое можно изменить при помощи umask().
//
//recursive
//Разрешает создание вложенных директорий, указанных в directory.
//
//context
//Замечание: Поддержка контекста была добавлена в PHP 5.0.0. Для описания контекстов смотрите раздел Потоки.
{
//mkdir('8'); //создает дирикторию нужно установить следуюший порядок в названии директории. Создание одиночной дириктории
//mkdir('1/2/3/4/5/6/7/8/9/10',0777,true); // Создаст вложеную структуру дирикторий
}
//</editor-fold>
//<editor-fold desc="touch">
//https://www.php.net/manual/ru/function.touch\
//Пытается установить время доступа и модификации файла с именем filename в значение time. Обратите внимание, что время
// доступа изменяется всегда, независимо от количества аргументов.
//Если файл не существует, он будет создан.
//touch ( string $filename , int $time = time() , int $atime = ? ) : bool
//filename
//Имя изменяемого файла.
//
//time
//Время изменения. Если аргумент time не указан, используется текущее время.
//
//atime
//Если передан, время доступа указанного файла будет установлено в значение atime.
// В обратном случае оно будет установлено в значение параметра time. Если же ни один из этих параметров не был указан,
// то будет использовано текущее системное время.
{
touch("text.txt",time()-3600);
}
//</editor-fold>
//<editor-fold desc="unlink">
//Удаляет файл filename. Функция похожа на функцию unlink() Unix в C. При неудачном выполнении будет вызвана ошибка уровня E_WARNING.
//https://www.php.net/manual/ru/function.unlink
//unlink ( string $filename , resource $context = ? ) : bool
//filename
//Путь к файлу.
//context
//Замечание: Поддержка контекста была добавлена в PHP 5.0.0. Для описания контекстов смотрите раздел Потоки.
{
//$bb= unlink('sInfo.php');
//ff($bb);
}
//</editor-fold>

$form=0;
//$_POST['_name']
//$_POST['_sname']
//$_POST['_age']
//$_POST['_email']
//$_POST['_phone']

$name=0;
$sname=0;
$age=0;
$email=0;
$phone=0;
$zapis=0;
$data =0;
$show = 0;
$d =0;
if(!empty($_POST)) {
    if(isset($_POST['show'])){
        if($_POST['show'] != null){
            $show = $_POST['show'];
        }
    }
    if (isset($_POST['Pname']) && isset($_POST['Psname']) && isset($_POST['Page']) && isset($_POST['Pemail']) && isset($_POST['Pphone'])) {
        if ($_POST['Pname'] != null&&$_POST['Psname']&&$_POST['Page']&&$_POST['Pemail']&&$_POST['Pphone']) {


            $name = $_POST['Pname'];
            $sname = $_POST['Psname'];
            $age = $_POST['Page'];
            $email = $_POST['Pemail'];
            $phone = $_POST['Pphone'];
            $d = $d =date("d.m.y h:i:s");
            $zapis = 1;

            $str =str_repeat("#",28);
            $data = "Имя:     ".$name.";".
                    "\nФамилия: ".$sname.";".
                    "\nВозраст: ".$age.";".
                    "\nEmail:   ".$email.";".
                    "\nМоб.:    ".$phone.";".
                    "\nДата.:   ".$d.";".
                    "\n{$str}\n";
            echo "Инициирую запись в гостевую книгу";
            echo "<br>";
        } else {
            echo "Форма заполнена не правильно";
            echo "<br>";
        }
    }
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}else{
    echo "Форма не заполнена";
    echo "<br>";
}
//GuestsBook.txt"
if($zapis){
    if(file_exists('Server/GuestsBook.txt')){
        file_put_contents("Server/GuestsBook.txt",$data,FILE_APPEND);
        echo "<br>";
        echo "Занесена запись о госте в файл GuestsBook.txt";
    }else {
        if (!file_exists('Server')) {

            mkdir('Server', 0777, true);
            echo "Fila Poka Net";

            if (file_exists('Server')) {
                echo "<br>";
                echo "Создана директория Server";
            }
            file_put_contents("Server/GuestsBook.txt", $data, FILE_APPEND);
            echo "<br>";
            echo "Создан файл GuestsBook.txt";
            echo "<br>";
            echo "Занесена запись о госте в файл GuestsBook.txt";
        }
    }
}

if($show) {
    if (file_exists('Server/GuestsBook.txt')) {
        $file = file_get_contents("Server/GuestsBook.txt",);

        echo "<pre>";
        print_r($file);
        echo "</pre>";

    }
}
