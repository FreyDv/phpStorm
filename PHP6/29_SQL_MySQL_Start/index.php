<?php
function prAr($arr){
    echo "<br>"."<pre>".print_r($arr,true)."</pre>";
}
//<editor-fold desc="mysqli_connect">
/*https://www.php.net/manual/ru/function.mysqli-connect.php
 *
 * Конект к серверу
 *
 *@ - запрешает выводить ошибку связанную с проблемами конекта к базе
 *"localhost"
 *или
 *"127.0.0.1"
 *
 */
{
    $db = @mysqli_connect("localhost","root","root","gb","3306",);
//    var_dump($db);
}
//</editor-fold>
//<editor-fold desc="mysqli_connect_error">
/* https://www.php.net/manual/ru/mysqli.connect-error.php
 *
 * Вернет ошибку если таковая произошла после последней попытки подключиться к серверу БД
 *
 * "localhost"
 * или
 * "127.0.0.1"
 */
{
    $errCon=mysqli_connect_error();
//    var_dump($errCon);
}
//</editor-fold>
//<editor-fold desc="mysqli_set_charset">
/* https://www.php.net/manual/ru/mysqli.set-charset.php
 *
 *
 * $db = сыллка на открытое соиденение (она возврашается после работы с конектом)
 * кодировка "utf8" запись именно так
 *
 *
 */
{


mysqli_set_charset($db,"utf8");
}
//</editor-fold>
//<editor-fold desc="mysqli_query">
/* https://www.php.net/manual/ru/mysqli.query.php
 *
 *
 *
 *  mysqli_query - Выполняет щзапрос к базе данных
 *  sname1  в названии сознательно сделана ошибка в в иде несушествуюшего именни переменой sname1  а должна быть sname
 */
{
    $insert = "INSERT INTO gbtablica(name, sname1, age, phone, email) 
                VALUES ('Чебурашка','Чебурашович',12,+380565874255,'cheburator@gmail.com') ";

    echo "<br>";
    echo "mysqli_query():";////////////////

    $res_insert = mysqli_query($db,$insert);
    if($res_insert)echo "Ok";
    else{
        echo "NOT OK";
        echo "<br>";
        echo mysqli_error($db);
        echo "<br>";
        echo $insert;
    }
}
//</editor-fold>
//<editor-fold desc="INSERT">
/*
 * Оператор языка SQL, который позволяет добавить строки в таблицу, заполняя их значениями.
 * Значения можно вставлять перечислением с помощью слова values и перечислив их в круглых скобках через запятую
 */
{
    $insert = "INSERT INTO gbtablica(name, sname, age, phone, email) 
                VALUES ('Чебурашка','Чебурашович',12,+380565874255,'cheburator@gmail.com') ";

    echo "<br>";
    echo "INSERT:";////////////////

    $res_insert = mysqli_query($db,$insert);
    if($res_insert)"<br>Ok";
    else{
        echo "NOT OK";
        echo "<br>";
        echo mysqli_error($db);
        echo "<br>";
        echo $insert;
    }
}
//</editor-fold>
//<editor-fold desc="UPDATE">
/*
 * UPDATE — оператор языка SQL, позволяющий обновить значения в заданных столбцах таблицы.
 */
{
    $updata = "UPDATE gbtablica SET age=11 WHERE name='Полина'";

    echo "<br>";
    echo "UPDATE:";////////////////
    ///
    $res_insert = mysqli_query($db,$updata);
    if($res_insert)echo "<br>Ok";
    else{
        echo "NOT OK";
        echo "<br>";
        echo mysqli_error($db);
        echo "<br>";
        echo $insert;
    }
}
//</editor-fold>
//<editor-fold desc="mysqli_error()">
/* https://www.php.net/manual/ru/mysqli.error.php
 * возврашает ощибку последнего запроса
 */
{
    $updata = "UPDATE gbtablica SET age=1000 WHERE name='Полина'";

    $res_insert = mysqli_query($db,$updata);

    echo "<br>";
    echo "mysqli_error():";////////////////


    if($res_insert)echo "<br>Ok";
    else{
        echo "NOT OK";
        echo "<br>";
        echo mysqli_error($db);////////////////
        echo "<br>";
        echo $insert;
    }
}
//</editor-fold>
//<editor-fold desc="DELETE">
/*
 * Запрос SQL
 */
{
    $delete = "DELETE FROM gbtablica WHERE id > 445";

    $res_delete = mysqli_query($db,$delete);

    echo "<br>";
    echo "DELETE:";////////////////


    if($res_delete)echo "<br>Ok";
    else{
        echo "NOT OK";
        echo "<br>";
        echo mysqli_error($db);
        echo "<br>";
        echo $insert;
    }
}
//</editor-fold>
//<editor-fold desc="mysqli_affected_rows">
/* https://www.php.net/manual/ru/mysqli.affected-rows.php
 * Получает число строк, затронутых предыдущей операцией MySQL
 */
{
    $delete = mysqli_affected_rows($db);


    echo "<br>";
    echo "mysqli_affected_rows():";////////////////
    echo "<br>";
    echo $delete;

//    if($delete)echo "<br>$delete";
//    else{
//        echo "NOT OK";
//        echo "<br>";
//        echo $delete;
//        echo "<br>";
//        echo $insert;
//    }
}
//</editor-fold>
//<editor-fold desc="SELECT">
/*
 * SELECT — оператор запроса в языке SQL, возвращающий набор данных из базы данных.
 *  Оператор возвращает ноль или более строк.
 * Список возвращаемых столбцов задается в части оператора, называемой предложением SELECT.
 *
 * mysqli_result Object  Представляет результирующий набор, полученный из запроса в базу данных.
 */
{
    $select = "SELECT * FROM gbtablica";

    echo "<br>";
    echo "SELECT:";////////////////

    $res_select = mysqli_query($db,$select);
    echo "<br>";
    prAr($res_select);

}
//</editor-fold>
//<editor-fold desc="mysqli_fetch_all()">
/*
 * mysqli_fetch_all ( mysqli_result $result , int $mode = MYSQLI_NUM ) : array
 *
 *result
 *Только для процедурного стиля: Объект mysqli_result, полученный с помощью mysqli_query(), mysqli_store_result()
 *или mysqli_use_result() или mysqli_stmt_get_result().
 *
 *mode
 *Этот необязательный параметр принимает значение константы, которая указывает на тип массива,
 *в который требуется поместить данные. Возможные значения параметра: MYSQLI_ASSOC, MYSQLI_NUM или MYSQLI_BOTH.
 *
 *
 *
 * Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба
 * Возвращает двумерный массив всех строк результатов в виде ассоциативного массива, числового массива или обоих.
 *
 *
 *
 *
 * SELECT — оператор запроса в языке SQL, возвращающий набор данных из базы данных.
 *  Оператор возвращает ноль или более строк.
 * Список возвращаемых столбцов задается в части оператора, называемой предложением SELECT.
 *
 * mysqli_result Object  Представляет результирующий набор, полученный из запроса в базу данных.
 */
{
    echo "<br>";
    echo "mysqli_fetch_all():";////////////////

    $select = "SELECT * FROM gbtablica";
    $res_select = mysqli_query($db,$select);
    $data1 = mysqli_fetch_all($res_select,MYSQLI_ASSOC/*MYSQLI_BOTH*/); // асицыативный масив оставить мод пустым для нумерованого масива
    prAr($data1);
}
//</editor-fold>
//<editor-fold desc="mysqli_fetch_assoc()">
/*ysql_fetch_assoc ( resource $result ) : array
 *result
 *Обрабатываемый результат запроса. Этот результат может быть получен с помощью функции mysql_query().
 *
 * Возвращает ассоциативный массив строк, соответствующий полученному ряду, либо false если рядов больше нет.

Если два или более столбцов результата имеют одинаковые имена, приоритет будет иметь последний столбец.
 Для доступа к другому одноимённому столбцу (или столбцам),
вам необходимо либо обратиться к результату запроса по числовому индексу с помощью mysql_fetch_row()
либо добавить псевдонимы к нужным столбцам. Для более подробной информации
о псевдонимах смотрите описание примера mysql_fetch_array().
 *
 *Возвращает ряд результата запроса в качестве ассоциативного массива
 */
{
    echo "<br>";
    echo "mysqli_fetch_assoc():";////////////////

    $select = "SELECT * FROM gbtablica";
    $res_select = mysqli_query($db,$select);
    while($row =mysqli_fetch_assoc($res_select)){
        $data2[$row['id']] = $row;

    }

    prAr($data2);
}
//</editor-fold>
//<editor-fold desc="mysql_num_rows()">
/*
 *  mysql_num_rows ( resource $result ) : int|false
 *  Возвращает количество рядов результата запроса
 *
 */
{
    echo "<br>";
    echo "mysql_num_rows():";////////////////
    $select = "SELECT * FROM gbtablica";
    $res=mysqli_query($db,$select);
    $num_row=  mysqli_num_rows($res);

    prAr($num_row);
}
//</editor-fold>