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
$form=0;
$name=0;
$sname=0;
$age=0;
$email=0;
$phone=0;
$zapis=0;
$data =0;
$show = 0;
$d =0; /*<?php ?>*/

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
            $data = "Имя:\t".$name.";\n".
                    "Фамилия:\t".$sname.";\n".
                    "Возраст:\t".$age.";\n".
                    "Email:\t".$email.";\n".
                    "Моб.:\t".$phone.";\n".
                    "Дата.:\t".$d.";\n".
                    "{$str}\n";
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
        $masA = explode('############################',$file);

        for($i=0;$i< count($masA);$i++){
            $masAA[$i] = (explode(';',$masA[$i]));
            array_pop($masAA[$i]);
            for($j=0;$j< count($masAA[$i]);$j++){
                $masAA[$i][$j] = (explode(":\t",$masAA[$i][$j]));
            }
        }
        array_pop($masAA);
        $masB[][] =0;
        $masC[][] =0;
        $masE = null;
        $masE;
        for($i=0;$i< count($masAA);$i++){
            for($j=0;$j< count($masAA[$i]);$j++) {
                $masB[$i][$j] = $masAA[$i][$j][0];
                $masC[$i][$j] = $masAA[$i][$j][1];
            }
        }
      for($i=0;$i< count($masC);$i++) {
          for ($j = 0; $j < count($masC[$i]); $j++) {
              $masE[$i][$masB[$i][$j]] =  $masC[$i][$j];
          }
      }



        echo "<pre>";
        //echo $masA;
//        print_r($masE);
        echo "</pre>";

    }
}
$xx=0;
?>


<?php if($show==1&&(!empty($masE))):?>
    <table border="1" table-layout="fixed"  >
        <caption><h1>гостевая книга</h1></caption>
        <tr>
    <?php foreach ($masE as $cl):?>
        <?php if($xx>3) $xx =0;?>
        <?php if($xx==3) echo "<tr>"?>
            <td>
                <table border="0" table-layout="fixed">
                    <?php foreach($cl as $k=>$v):?>
<!--                    Рисует параметры клиента-->
                        <tr>
                            <td align="left" width="70px" ><?php echo $k?>:</td>
                            <td align="left" width="180px"><?php echo $v?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
            <?php $xx++; ?>
        <?php if($xx==3) echo "</tr>"?>
    <?php endforeach; ?>
        </tr>
    </table>
<?php endif;?>





