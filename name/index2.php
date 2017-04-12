<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ตรวจสอบชื่อ - นามสกุล ตามหลักเลขศาสตร์</title>
    </head>
    <style>
        body{background-image:url("b.jpg"); }
        
        #contrainer table{
            margin:0 auto;
            /*width:400px;-->*/
           
           
        }
        #detail{ color: #FFFFFF;}
        .style12 {
             font-family: Tahoma;
             font-size: 18px;
             color: #FFFFFF;
        }
                @font-face {
    font-family: myFont;
    src: url('kt_smarn seree.ttf');
    color: #fff;
    }
    </style>
    <body>
          <div id="contrainer" >
    <table width="609" height="168"  cellpadding="0" cellspacing="0" background="bg.jpg">
      <!--DWLayoutTable-->
      <tr>
          <td valign="middle" >
          <form id="frm" name="frm" method="get" action="index.php" onsubmit="return check_data()">
              <table width="419" border="0" align="center">
                <tbody>
                <tr>
                  <td width="130"><span class="style12">กรุณาเลือกวันเกิด</span></td>
                  <td width="273"><font face="MS Sans Serif, Tahoma, sans-serif" size="2">
                        <select name="Day">
                            <option value="0">วันอาทิตย์ <p>
                            <option value="7">วันจันทร์ <p>
                            <option value="6">วันอังคาร <p>
                            <option value="5">วันพุธกลางวัน <p>
                            <option value="2">วันพุธกลางคืน <p>
                            <option value="3">วันพฤหัสบดี <p>
                            <option value="1">วันศุกร์ <p>
                            <option value="4">วันเสาร์<p>
                        </select>

            </font>
            </td>
                </tr>
                <tr>
                  <td><span class="style12">กรุณาใส่ชื่อ</span></td>
                  <td><font face="MS Sans Serif, Tahoma, sans-serif" size="2">
                    <input size="34" name="name" id="name">
                  </font></td>
                </tr>
                <tr>
                  <td><span class="style12">กรุณาใส่นามสกุล</span></td>
                  <td><font face="MS Sans Serif, Tahoma, sans-serif" size="2">
                    <input size="34" name="last" id="surname">
                  </font></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="button" value="คลิกคำทำนาย">
                    <input type="reset" name="reset" id="button2" value="ล้างระบบ">
                  </label></td>
                </tr>
              </tbody></table>
                </form>        </td>

      </tr>
    </tbody></table>
    
  
    <!--
        <form action="test.php" method="get">
            <table border="0" bordercolor="#FF0000" background="bg.jpg">
                <tr>
                    <td>กรุณาเลือกวันเกิด</td>
                    <td>
                        <select name="Day">
                            <option value="0">วันอาทิตย์ <p>
                            <option value="7">วันจันทร์ <p>
                            <option value="6">วันอังคาร <p>
                            <option value="5">วันพุธกลางวัน <p>
                            <option value="2">วันพุธกลางคืน <p>
                            <option value="3">วันพฤหัสบดี <p>
                            <option value="1">วันศุกร์ <p>
                            <option value="4">วันเสาร์<p>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>กรุณาใส่ชื่อ</td>
                    <td><input type="text" name="name"></td>
                </tr><tr>
                    <td>กรุณาใส่นามสกุล</td>
                    <td><input type="text" name="last"></td>
                </tr><tr>
                <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="คลิกคำทำนาย">
                     <input type="reset" name="reset" value="ล้างระบบ"></td>
                   
                </tr>
 
            </table>
        </form>
        -->
        <div id="detail" >
   <?php
        $num_palang=0;
        $sum=0;
        function s($s){
            $day=array(
                array('ก','ด','ท','ถ','ภ','ฤ','า','ุ','ำ','A','I','J','Q','Y','a','i','j','q','y'),
                array('ข','ช','บ','ป','ง','เ','แ','ู','้','B','b','K','k','R','r'),
                array('ฆ','ฑ','ฒ','ฒ','ต','ฃ','๋','C','c','G','g','L','l','S','s'),
                array('ค','ธ','ร','ญ','ษ','โ','ะ','ิ','ั','D','d','M','m','T','t'),
                array('ฉ','ณ','ฌ','น','ม','ห','ฮ','ฎ','ฬ','E','e','H','h','N','n','X','x'),
                array('จ','ล','ว','อ','ใ','U','u','V','v','W','w'),
                array('ศ','ส','ซ','ี','ื','๊','O','o','Z','z'),
                array('ย','พ','ฟ','ผ','ฝ','็','F','f','P','p'),
                array('ฏ','ฐ','ไ','์')
                );
                for($i=0;$i<9;$i++){
                    if(in_array($s,$day[$i])) return $i+1;
                }
}
        function k($s){
        $day=array('อ'=>6,'ะ'=>6,'า'=>6,'ิ'=>6,'ี'=>6,'ุ'=>6,'ู'=>6,'เ'=>6,'โ'=>6,
                    'ก'=>15,'ข'=>15,'ค'=>15,'ฆ'=>15,'ง'=>15,
                    'จ'=>8,'ฉ'=>8,'ช'=>8,'ซ'=>8,'ฌ'=>8,'ญ'=>8,
                    'ฎ'=>17,'ฏ'=>17,'ฐ'=>17,'ฑ'=>17,'ฒ'=>17,'ณ'=>17,
                    'บ'=>19,'ป'=>19,'ผ'=>19,'ฝ'=>19,'พ'=>19,'ฟ'=>19,'ภ'=>19,'ม'=>19,
                    'ศ'=>21,'ษ'=>21,'ส'=>21,'ห'=>21,'ฬ'=>21,'ฮ'=>21,
                    'ด'=>10,'ต'=>10,'ถ'=>10,'ท'=>10,'ธ'=>10,'น'=>10,
                    'ย'=>12,'ร'=>12,'ล'=>12,'ว'=>12);
        return $day[$s];
        }
        function sum($sum){
            $sum=array_sum(array_map('intval', str_split($sum)));
            if($sum>9) return sum($sum);
            else return $sum;
        }   
        

        if(isset($_REQUEST["submit"])){
            $str=$_REQUEST["name"];//echo "$str";
           // $str1=str_split($str);
                      $str2=$_REQUEST["last"];
            $num_day=$_GET['Day'];
     
          // switch($_get['Day']){
              // case 1;  $num_day=0; break;
           
           
    $taksa_name=array();
    $taksa_last=array();
    $tak= array(array('อ','ะ','า','ิ','ี','ุ','ู','เ','โ','์','ฤ','ฦ'),array('ก','ข','ค','ฆ','ง'),array('จ','ฉ','ช','ซ','ฌ','ญ'),array('ฎ','ฏ','ฐ','ฑ','ฒ','ณ'),array('ด','ต','ถ','ท','ธ','น'),array('บ','ป','ผ','ฝ','พ','ฟ','ภ','ม'),
    array('ย','ร','ล','ว'),array('ศ','ษ','ส','ห','ฬ','ฮ'));
    for($i=0;$i<mb_strlen($str,'utf-8');$i++){
        for($j=0;$j<8;$j++){
            if(in_array(mb_substr($str,$i,1,'utf-8'),$tak[$j]))
               $taksa_name[($num_day+$j)%8][]=mb_substr($str,$i,1,'utf-8');

        }
    }
        for($i=0;$i<mb_strlen($str2,'utf-8');$i++){
        for($j=0;$j<8;$j++){
            if(in_array(mb_substr($str2,$i,1,'utf-8'),$tak[$j]))
               $taksa_last[($num_day+$j)%8][]=mb_substr($str2,$i,1,'utf-8');

        }
    }
           
          

            for($i=0;$i<mb_strlen($str,'utf-8');$i++){
                $num_palang+=k(mb_substr($str,$i,1,'utf-8'));
                $num_lekkasart_name+=s(mb_substr($str,$i,1,'utf-8'));
                
                // $num_palang+=k($str1[$i]) ;
            }
            
            for($i=0;$i<mb_strlen($str2,'utf-8');$i++){
                $num_lekkasart_last+=s(mb_substr($str2,$i,1,'utf-8'));
                $num_palang_last+=k(mb_substr($str2,$i,1,'utf-8'));

            }
            $num_ayatana=sum($num_palang);
            
            $num_keep = $num_palang;
            $num_keep2 = $num_palang_sum;
            $num_keep_sum=$num_palang+$num_palang_last;
  
        if($num_palang%100<10)
                 $num_palang1=$num_palang%10+(int)($num_palang/100)*10;
         else if($num_palang>100) 
                $num_palang=$num_palang-(int)($num_palang/100)*100;
                $num_palang_sum=$num_palang+$num_palang_last;
        if($num_palang_sum%100<10)
                 $num_palang_sum1=$num_palang_sum%10+(int)($num_palang_sum/100)*10;
         else if($num_palang_sum>100) 
                $num_palang_sum=$num_palang_sum-(int)($num_palang_sum/100)*100;
           // }
            
            //echo "อายตนะ = ".$num_ayatana.'<br/>';            
            //echo "พลังเงา = ".$num_palang.'<br/>';
      
     //   }               
        
         
    //$con=mysql_connect('localhost','root','ayatana') or die ("Not Connected phpmyadmin");
    //$dbname="dodoung";
    $con=mysql_connect('localhost','mongkhol_9name','pnA1xPtr') or die ("Not Connected phpmyadmin");
    $dbname="mongkhol_9name";
    mysql_select_db($dbname,$con);
     mysql_query("SET NAMES UTF8");
    $objquery1=mysql_query("SELECT * FROM palang where num=$num_lekkasart_name");
    $row1= mysql_num_rows($objquery1);
    if ($row1 <> 0) {
        $result1 = mysql_fetch_array($objquery1);

       // echo "<br><br><font color=red>เลขศาสตร์ หมายเลข $num_lekkasart_name </font>".$result1['detail']."<br>";
    }   //else         echo "<h1><font color=red>เฮ้ย Database!.ทักษา ชื่อ....1</font></h1>";




    $objquery2=mysql_query("SELECT * FROM palang where num=$num_lekkasart_last");
    $row2= mysql_num_rows($objquery2);
    if ($row2 <> 0) {
        $result2 = mysql_fetch_array($objquery2);
        //echo "<br><br><font color=red>เลขศาสตร์ หมายเลข $num_lekkasart_last </font>".$result2['detail']."<br><br>";
    }   // else  {echo "<h1><font color=red>เฮ้ย Database!.ทักษา นามสกุล....1</font></h1>";}
    
    $num_lekkasart_sum=$num_lekkasart_name+$num_lekkasart_last;
    $objquery3=mysql_query("SELECT * FROM palang where num=$num_lekkasart_sum");
    $row3= mysql_num_rows($objquery3);
    if ($row3 <> 0) {
        $result3 = mysql_fetch_array($objquery3);
      // echo "<br><br><font color=red>เลขศาสตร์ หมายเลข $num_lekkasart_sum </font>".$result3['detail']."<br><br>";
    }   // else         echo "<h1><font color=red>เฮ้ย Database ทักษาผลรวม!!!.....1</font></h1>";
  
    $objquery4=mysql_query("SELECT * FROM ayatana where num=$num_ayatana");
    $row4= mysql_num_rows($objquery4);
    if ($row4 <> 0) {
        $result4 = mysql_fetch_array($objquery4);
       // echo $result4['detail']."<br><br>";
    } else {
      // echo "<h1><font color=red>เฮ้ย Database อายตนะหาย!!!!.....2</font></h1>";
    }

    if($num_palang%100<10) $num_palang=$num_palang1;
    $objquery5=mysql_query("SELECT * FROM palang where num=$num_palang");
    $row5= mysql_num_rows($objquery5);
    if ($row5 <> 0) {
        $result5 = mysql_fetch_array($objquery5);
        
       // echo "<font color=red>พลังเงา $str หมายเลข $num_keep </font>".$result5['detail']."<br><br>";
    } else {
       // echo "<h1><font color=red>เฮ้ย Database พลังเงาหาย!!!.....3</font></h1>";
    }//echo "---------".$num_keep2;
    if($num_palang_sum%100<10) $num_palang_sum=$num_palang_sum1;
    $objquery6=mysql_query("SELECT * FROM palang2 where num=$num_palang_sum");
    $row6= mysql_num_rows($objquery6);
    if ($row6 <> 0) {
        $result6 = mysql_fetch_array($objquery6);
         
       // echo "<font color=red>ผลรวมพลังสะท้อน $str $str2 หมายเลข $num_keep_sum </font>".$result6['detail']."<br><br>";
    } //else echo "<h1><font color=red>เฮ้ย Database พลังสะท้อน!!.....3</font></h1>";
    
        }
      

 ?>  </div>
<br>
<table width="1190" border="2" bordercolor="#FFFF99" align="center" cellpadding="0" style="color: aliceblue;">
  <tbody><tr style="font:24pt myFont;" align="center" bgcolor="#001429">
    <td bgcolor="#001429">ชื่อ-นามสกุล</td>
    <td>&nbsp;&nbsp;&nbsp;ทักษา&nbsp;&nbsp;&nbsp;</td>  
    <td>&nbsp;บริวาร&nbsp;</td>
    <td>&nbsp;อายุ&nbsp;</td>
    <td>&nbsp;เดช&nbsp;</td>
    <td>&nbsp;ศรี&nbsp;</td>
    <td>&nbsp;มูละ&nbsp;</td>
    <td>&nbsp;อุตสาหะ&nbsp;</td>
    <td>&nbsp;มนตรี&nbsp;</td>
    <td>&nbsp;กาลกิณี&nbsp;</td>
    <td bgcolor="#001429">เลขศาสตร์</td>
  </tr>
  <tr style="font:20pt myFont;" align="center" height="40">
    <td bgcolor="#001429">ชื่อ</td>
    <td bgcolor="#002952">&nbsp;<?php echo $str ?></td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_name[0]) ?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_name[1])?> 
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_name[2])?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_name[3])?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_name[4])?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_name[5])?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_name[6])?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_name[7])?>
        </td>
    <td bgcolor="#001429">&nbsp;<?php echo $num_lekkasart_name ?>
    </td>


  </tr>
  <tr style="font:20pt myFont;" align="center" height="40">
    <td bgcolor="#001429">นามสกุล</td>
   <td bgcolor="#002952">&nbsp;<?php echo $str2 ?></td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_last[0]) ?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_last[1]) ?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_last[2]) ?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_last[3]) ?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_last[4]) ?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_last[5]) ?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_last[6]) ?>
        </td>
    <td bgcolor="#002952"><?php echo implode(" ",$taksa_last[7]) ?>
        </td>
    <td bgcolor="#001429">&nbsp;<?php echo $num_lekkasart_last ?></td>
  </tr>
  <tr style="font:20pt myFont;" align="center" height="40">
    <td bgcolor="#001429">ผลรวม</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#002952">&nbsp;</td>
    <td bgcolor="#001429"><?php echo  $num_lekkasart_name+$num_lekkasart_last ?>&nbsp;</td>

  </tr>
</tbody></table>
<br>
    <table width="1242" cellpadding="3" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font:19pt myFont;">
        <tbody>  
            <tr>
                <td align="left" bgcolor="#00FF00"><strong><span class="style14">&nbsp;&nbsp;</span><span class="textYellow">&nbsp;ชื่อ <?php echo $str ?> ส่งผล 40%</span></strong></td>
            </tr>
            <tr>
            <td class="text" bgcolor="#99FF99">
                <?php echo "<font color=red >&nbsp;&nbsp;&nbsp;เลขศาสตร์ หมายเลข $num_lekkasart_name </font>".$result1['detail']."<br>"; ?>
            </td>
            </tr>
        </tbody>
    </table><br>
    <table width="1242"  cellpadding="3" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font:19pt myFont;">
        <tbody>  
            <tr>
                <td align="left" bgcolor="#00FF00"><strong><span class="style14">&nbsp;&nbsp;</span><span class="textYellow">&nbsp;นามสกุล <?php echo $str2 ?> ส่งผล 20%</span></strong></td>
            </tr>
            <tr>
            <td class="text" bgcolor="#99FF99">
                <?php echo "<font color=red>&nbsp;&nbsp;&nbsp;เลขศาสตร์ หมายเลข $num_lekkasart_last </font>".$result2['detail']."<br>"; ?>
            </td>
            </tr>
        </tbody>
    </table><br>
    <table width="1242"  cellpadding="3" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font:19pt myFont;">
        <tbody>  
            <tr>
                <td align="left" bgcolor="#00FF00"><strong><span class="style14">&nbsp;&nbsp;</span><span class="textYellow">&nbsp;ผลรวม <?php echo "$str  $str2" ?> ส่งผล 40%</span></strong></td>
            </tr>
            <tr>
            <td class="text" bgcolor="#99FF99">
                <?php echo "<font color=red>&nbsp;&nbsp;&nbsp;เลขศาสตร์ หมายเลข $num_lekkasart_sum </font>".$result3['detail']."<br>"; ?>
            </td>
            </tr>
        </tbody>
    </table><br>
    <table width="1242" cellpadding="3" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font:19pt myFont;">
        <tbody>  
            <tr>
                <td align="left" bgcolor="#00FF00"><strong><span class="style14">&nbsp;&nbsp;</span><span class="textYellow">&nbsp;พลังอายตนะ พลังเงา และ พลังสะท้อน ได้ผลดังนี้</span></strong></td>
            </tr>
            <tr>
            <td class="text" bgcolor="#99FF99">&nbsp;&nbsp;&nbsp;
                <?php echo $result4['detail']; ?>
            </td>
            </tr>
            <td class="text" bgcolor="#99FF99">&nbsp;&nbsp;&nbsp;
                <?php echo "<font color=red>พลังเงา $str หมายเลข $num_keep </font>".$result5['detail']; ?>
            </td>
            </tr>     
            </tr>
            <td class="text" bgcolor="#99FF99">&nbsp;&nbsp;&nbsp;
                <?php echo "<font color=red>ผลรวมพลังสะท้อน $str $str2 หมายเลข $num_keep_sum </font>".$result6['detail']; ?>
            </td>
            </tr> 
        </tbody>
    </table><br>    

<br>
<table width="742" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#00000" bgcolor="#ECFFDA" >

    <tbody><tr>
            <td align="center" bgcolor="#CCFF99"><span class="style21"><strong><span class="style22"><?php echo $str ?>  </span><span class="style22">เกิด วัน</span><span class="style22">อาทิตย์</span></strong></span></td>
            <td align="center" bgcolor="#CCFF99"><strong class="textYellow style21">ชื่อ</strong></td>
            <td align="center" bgcolor="#CCFF99"><strong class="textYellow style21">นามสกุล</strong></td>
            <td align="center" bgcolor="#CCFF99"><strong class="textYellow style21">ผลรวม</strong></td>
        </tr>
        <tr>
            <td width="292" class="text">ทักษา</td>
            <td width="160" align="center" class="text">&nbsp;<?php echo $str ;?></td>
            <td width="160" align="center" class="text">&nbsp;<?php echo $str2 ;?></td>
            <td width="120" align="center">&nbsp;</td>
        </tr>
        <tr>
            <td class="text">บริวาร</td>
            <td align="center" class="text"><?php echo implode(" ",$taksa_name[0]) ?>&nbsp;</td>
            <td align="center" class="text">&nbsp;<?php echo implode(" ",$taksa_last[0]) ?></td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td class="text">อายุ</td>
            <td align="center" class="text"><?php echo implode(" ",$taksa_name[1]) ?>&nbsp;</td>
            <td align="center" class="text"><?php echo implode(" ",$taksa_last[1]) ?>&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td class="text">เดช</td>
            <td align="center" class="text"><?php echo implode(" ",$taksa_name[2]) ?>&nbsp;</td>
            <td align="center" class="text"><?php echo implode(" ",$taksa_last[2]) ?>&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td class="text">ศรี</td>
            <td align="center" class="text"><?php echo implode(" ",$taksa_name[3]) ?>&nbsp;</td>
            <td align="center" class="text"><?php echo implode(" ",$taksa_last[3]) ?>&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td class="text">มูละ</td>
            <td align="center"><?php echo implode(" ",$taksa_name[4]) ?>&nbsp;</td>
            <td align="center"><?php echo implode(" ",$taksa_last[4]) ?>&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td class="text">อุตสาหะ</td>
            <td align="center"><?php echo implode(" ",$taksa_name[5]) ?>&nbsp;</td>
            <td align="center"><?php echo implode(" ",$taksa_last[5]) ?>&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td class="text">มนตรี</td>
            <td align="center"><?php echo implode(" ",$taksa_name[6]) ?>&nbsp;</td>
            <td align="center"><?php echo implode(" ",$taksa_last[6]) ?>&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td class="text">กาลกิณี</td>
            <td align="center"><?php echo implode(" ",$taksa_name[7]) ?>&nbsp;</td>
            <td align="center"><?php echo implode(" ",$taksa_last[7]) ?>&nbsp;</td>
            <td align="center">&nbsp;</td>
        </tr>
        <tr>
            <td bgcolor="#CCFF99"><b class="textYellow">เลขศาสตร์</b></td>
            <td align="center" bgcolor="#CCFF99"><b><span class="textYellow"><?php echo $num_lekkasart_name ?></span></b></td>
            <td align="center" bgcolor="#CCFF99"><b><span class="textYellow"><?php echo $num_lekkasart_last ?></span></b></td>
            <td align="center" bgcolor="#CCFF99"><b><span class="textYellow"><?php echo  $num_lekkasart_name+$num_lekkasart_last ?>
                        </span>
                </b></td>
        </tr>
    </tbody></table>

<br>

    </div>
    </body>
</html>
