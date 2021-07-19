<!--Работа с базой данных -->
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
            <td align="left">Coment:</td>
            <td><input type="text"  name="Coment"></input></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="write" value="1" formmethod ="post">Записать</button>
                <button type="submit" name="show"  value="1" formmethod ="post">Показать</button></td>
        </tr>
    </table>
</form>

<?php

$db = mysqli_connect("localhost","root","root","guestbook","3306") or die("No Conect to DB");
mysqli_set_charset($db,"utf8") or die("Instal codinc is not posibal");
$errCon = mysqli_connect_error();
function prAr($arr){
    echo "<br>"."<pre>".print_r($arr,true)."</pre>";
}

function save_meseg(){
    global $db,$name,$sname,$age,$email,$phone,$coment,$qvery;
    $name = mysqli_real_escape_string($db,$_POST['Pname']);
    $sname = mysqli_real_escape_string($db,$_POST['Psname']);
    $age = (int) $_POST['Page'];
    $email = mysqli_real_escape_string($db,$_POST['Pemail']);
    $phone = mysqli_real_escape_string($db,$_POST['Pphone']);
    $coment = mysqli_real_escape_string($db,$_POST['Coment']);
    $qvery = "INSERT INTO gb (name,sname,age,email,phone,text) VALUES ('$name','$sname','$age','$email','$phone','$coment')";
    echo $qvery;
    $res_insert = mysqli_query($db,$qvery);
    if($res_insert)echo "Ok";
    else{
        echo "NOT OK";
        echo "<br>";
        echo mysqli_error($db);
        echo "<br>";
        echo $res_insert;
    }
}
function get_meseg(){
    global $db;
    $qvery = "SELECT * FROM gb";
    $res_insert = mysqli_query($db,$qvery);
    echo "<br>";
    if($res_insert){
        echo "Ok";
        prAr();

    }
    else{
        echo "<br>";
        echo "NOT OK";
        echo "<br>";
        echo mysqli_error($db);
        echo "<br>";
        echo $res_insert;
    }
}



$name=0;
$sname=0;
$age=0;
$email=0;
$phone=0;
$zapis=0;
$data =0;
$show = 0;
$coment =0;
$d =0; /*<?php ?>*/



if(!empty($_POST)) {
    if(isset($_POST['show'])){
        if($_POST['show'] != null){
            $show = $_POST['show'];
        }
    }
    if (isset($_POST['Pname']) && isset($_POST['Psname']) && isset($_POST['Page']) && isset($_POST['Pemail']) && isset($_POST['Pphone']) && isset($_POST['Coment'])) {
        if ($_POST['Pname'] != null&&$_POST['Psname']&&$_POST['Page']&&$_POST['Pemail']&&$_POST['Pphone']&&$_POST['Coment']) {

            $zapis = 1;

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
    save_meseg();
        echo "<br>";
        echo "Занесена запись о госте в файл GuestsBook.txt";
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





