<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostafa Misaghi</title>
    <style>
        p{
            font-weight: bold;
            font-size: 32px;
            color: blue;
        }
        td{
            font-weight: bold;
            font-size: 18px;
            background-color: #ebebeb;
            text-align: center;
        }
    </style>
</head>
<body>
<?php

function get1000($number){
    $res=null;
    switch ($number){
        case ($number>=1 and $number<=125):
            $res=1;
            break;
        case ($number>=126 and $number<=250):
            $res=2;
            break;
        case ($number>=251 and $number<=375):
            $res=3;
            break;
        case ($number>=376 and $number<=500):
            $res=4;
            break;
        case ($number>=501 and $number<=625):
            $res=5;
            break;
        case ($number>=626 and $number<=750):
            $res=6;
            break;
        case ($number>=751 and $number<=875):
            $res=7;
            break;
        case ($number>=876 and $number<=1000):
            $res=8;
            break;
    }
    return $res;
}

function get100($number){
    $res=null;
    switch ($number){
        case ($number>=1 and $number<=10):
            $res=1;
            break;
        case ($number>=1 and $number<=30):
            $res=2;
            break;
        case ($number>=31 and $number<=60):
            $res=3;
            break;
        case ($number>=61 and $number<=85):
            $res=4;
            break;
        case ($number>=86 and $number<=95):
            $res=5;
            break;
        case ($number>=96 and $number<=100):
            $res=6;
            break;
    }
    return $res;
}

?>
<center>
    <table width="250" dir="ltr" border="1">
        <tr>
            <td>Professor : Ahmad Abrishami</td>
        </tr>
        <tr>
            <td>Designer : Mostafa Misaghi</td>
        </tr>
        <tr>
            <td>Class : 11-15</td>
        </tr>
        <tr>
            <td>StudentNumber : 96220033111075</td>
        </tr>
    </table>

    <p>توزیع مدت های بین دو ورود </p>
    <table width="500" dir="ltr" border="7">
        <tr>
            <td>تخصیص ارقام تصادفی</td>
            <td>احتمال تجمعی</td>
            <td>احتمال</td>
            <td>مدت های بین دو ورود</td>

        </tr>
        <tr>
            <td>001-125</td>
            <td>0.125</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>126-250</td>
            <td>0.250</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>251-375</td>
            <td>0.375</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>376-500</td>
            <td>0.500</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>501-625</td>
            <td>0.625</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>626-750</td>
            <td>0.750</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>751-875</td>
            <td>0.875</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
        <tr>
            <td>876-000</td>
            <td>1.000</td>
            <td>0.125</td>
            <td><?= rand(1, 8); ?></td>
        </tr>
    </table>

    <p> توزیع مدت های خدمت دهی </p>
    <table width="500" dir="ltr" border="7">
        <tr>
            <td>تخصیص ارقام تصادفی</td>
            <td>احتمال تجمعی</td>
            <td>احتمال</td>
            <td>مدت خدمت دهی</td>

        </tr>
        <tr>
            <td>01-10</td>
            <td>0.10</td>
            <td>0.10</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>11-30</td>
            <td>0.30</td>
            <td>0.20</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>31-60</td>
            <td>0.60</td>
            <td>0.30</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>61-85</td>
            <td>0.85</td>
            <td>0.25</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>86-95</td>
            <td>0.95</td>
            <td>0.10</td>
            <td><?= rand(1, 6); ?></td>
        </tr>
        <tr>
            <td>96-00</td>
            <td>1.00</td>
            <td>0.05</td>
            <td><?= rand(1, 6); ?></td>
        </tr>

    </table>
    <br>
    <p>تعیین مدت های بین دو ورود </p>
    <table width="600" dir="rtl" border="7">
        <tr>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت بین دو ورود</td>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت بین دو ورود</td>

        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>11</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-2"><?= get1000($r); ?></td>
            <td>12</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-12"><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-3"><?= get1000($r); ?></td>
            <td>13</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-13"><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-4"><?= get1000($r); ?></td>
            <td>14</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-14"><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-5"><?= get1000($r); ?></td>
            <td>15</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-15"><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td id="m-6"><?= $r = rand(1, 1000); ?></td>
            <td><?= get1000($r); ?></td>
            <td>16</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-16"><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>7</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-7"><?= get1000($r); ?></td>
            <td>17</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-17"><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-8"><?= get1000($r); ?></td>
            <td>18</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-18"><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>9</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-9"><?= get1000($r); ?></td>
            <td>19</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-19"><?= get1000($r); ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-10"><?= get1000($r); ?></td>
            <td>20</td>
            <td><?= $r = rand(1, 1000); ?></td>
            <td id="m-20"><?= get1000($r); ?></td>
        </tr>

    </table>

    <p>تعیین مدت های تولید شده برای خدمت دهی </p>
    <table width="600" dir="rtl" border="7">
        <tr>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت خدمت دهی</td>
            <td>مشتری</td>
            <td>ارقام تصادفی</td>
            <td>مدت خدمت دهی</td>

        </tr>
        <tr>
            <td>1</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-1"><?= get100($t); ?></td>
            <td>11</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-11"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-2"><?= get100($t); ?></td>
            <td>12</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-12"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-3"><?= get100($t); ?></td>
            <td>13</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-13"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-4"><?= get100($t); ?></td>
            <td>14</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-14"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-5"><?= get100($t); ?></td>
            <td>15</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-15"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-6"><?= get100($t); ?></td>
            <td>16</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-16"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>7</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-7"><?= get100($t); ?></td>
            <td>17</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-17"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-8"><?= get100($t); ?></td>
            <td>18</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-18"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>9</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-9"><?= get100($t); ?></td>
            <td>19</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-19"><?= get100($t); ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-10"><?= get100($t); ?></td>
            <td>20</td>
            <td><?= $t = rand(1,100); ?></td>
            <td id="k-20"><?= get100($t); ?></td>
        </tr>

    </table>

    <p>جدول شبیه سازی برای مسئله صف </p>
    <table width="1200" dir="rtl" border="7">
        <tr>
            <td>مشتری</td>
            <td>مدت سپری شده از آخرین ورود</td>
            <td>زمان ورود</td>
            <td>مدت خدمت دهی</td>
            <td>زمان شروع خدمت</td>
            <td>مدت ماندن مشتری در صف</td>
            <td>زمان پایان خدمت</td>
            <td>مدت ماندن مشتری در سیستم</td>
            <td>مدت بیکاری خدمت دهنده</td>
        </tr>
        <tr>
            <td><?= $a=1; ?></td>
            <td><?= $b=0; ?></td>
            <td><?= $c=0; ?></td>
            <td><?= $d=4; ?></td>
            <td><?= $e=0; ?></td>
            <td><?= $f=0; ?></td>
            <td><?= $g=4; ?></td>
            <td><?= $h=4; ?></td>
            <td><?= $i=0; ?></td>
        </tr><tr>
            <td>2</td>
            <td><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td id="misaghi-1"><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td id="misaghi-2"><?php echo  "<script>document.writeln(document.getElementById('k-2').innerText);</script>";?></td>
            <td><?php echo  "<script>document.writeln(document.getElementById('m-2').innerText);</script>";?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>3</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>4</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>6</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>7</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>8</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>9</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>11</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>12</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>

        <tr>
            <td>13</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>14</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>15</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>16</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>17</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td>0</td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr><tr>
            <td>18</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="vorod"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>19</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>
        <tr>
            <td>20</td>
            <td><?php echo  rand(0,12);?></td>
            <td id="misaghi-1"><?php echo  rand(0,18);?></td>
            <td id="misaghi-2"><?php echo  rand(5,12);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td><?php echo  rand(4,22);?></td>
            <td id="out"><?= rand(0,4) ?></td>
            <td><?= rand(0,4) ?></td>
            <td><?= rand(0,3) ?></td>
        </tr>



    </table>
</center>


</body>
</html>
