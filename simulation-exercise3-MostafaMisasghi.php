<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostafa Misaghi</title>
    <style>
        caption {
            font-weight: bold;
            font-size: 32px;
            color: blue;
        }

        td {
            font-weight: bold;
            font-size: 18px;
            background-color: #ebebeb;
            text-align: center;
        }

        /*Mostafa Misaghi   96220033111075*/
    </style>
</head>
<body>
<?php
ini_set('display_errors', 'off');
error_reporting(E_ALL);

function getDayState($number)
{
    $good = "<span style='color: #46de53;font-weight: bold'>خوب</span>";
    $melo = "<span style='color: #67c4da;font-weight: bold'>متوسط</span>";
    $bad = "<span style='color: #da0334;font-weight: bold'>بد</span>";
    switch ($number) {
        case ($number >= 1 and $number <= 35):
            return $good;
            break;
        case ($number >= 36 and $number <= 80):
            return $melo;
            break;
        case ($number >= 81 and $number <= 100):
            return $bad;
            break;
    }
}

function getRequest($number, $state)
{
    if ($state == "<span style='color: #46de53;font-weight: bold'>خوب</span>") {
        switch ($number) {
            case ($number >= 0 and $number <= 3):
                return 40;
                break;
            case ($number >= 4 and $number <= 8):
                return 50;
                break;
            case ($number >= 9 and $number <= 23):
                return 60;
                break;
            case ($number >= 24 and $number <= 43):
                return 70;
                break;
            case ($number >= 44 and $number <= 78):
                return 80;
                break;
            case ($number >= 79 and $number <= 93):
                return 90;
                break;
            case ($number >= 94 and $number <= 100):
                return 100;
                break;
        }
    }
    if ($state == "<span style='color: #67c4da;font-weight: bold'>متوسط</span>") {
        switch ($number) {
            case ($number >= 0 and $number <= 10):
                return 40;
                break;
            case ($number >= 11 and $number <= 28):
                return 50;
                break;
            case ($number >= 29 and $number <= 68):
                return 60;
                break;
            case ($number >= 60 and $number <= 88):
                return 70;
                break;
            case ($number >= 89 and $number <= 96):
                return 80;
                break;
            case ($number >= 97 and $number <= 100):
                return 90;
                break;
        }
    }
    if ($state == "<span style='color: #da0334;font-weight: bold'>بد</span>") {
        switch ($number) {
            case ($number >= 0 and $number <= 44):
                return 40;
                break;
            case ($number >= 45 and $number <= 66):
                return 50;
                break;
            case ($number >= 67 and $number <= 82):
                return 60;
                break;
            case ($number >= 83 and $number <= 94):
                return 70;
                break;
            case ($number >= 95 and $number <= 100):
                return 80;
                break;
        }
    }
}

//Mostafa Misaghi   96220033111075
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
    <h3>جهت تغییر اعداد تصادفی از جدول خروجی صفحه را <a href="#" style="color: red;font-weight: bold" onclick="location.reload()">تازه سازی</a> کنید</h3>

    <button onclick="displayFirstsTable()">مشاهده جداول اولیه</button>
    <button onclick="displayTable()">مشاهده جدول خروجی</button>
    <br>

    <div style="display: none" id="myDIVFirst">
        <table style="float: right" width="500" dir="ltr" border="7">
            <caption> توزیع روزنامه های مورد تقاضا  </caption>
            <tr>
                <td>بد</td>
                <td>متوسط</td>
                <td>خوب</td>
                <td>تقاضا</td>

            </tr>
            <tr>
                <td>0.44</td>
                <td>0.10</td>
                <td>0.03</td>
                <td>40</td>
            </tr>
            <tr>
                <td>0.22</td>
                <td>0.18</td>
                <td>0.05</td>
                <td>50</td>
            </tr>
            <tr>
                <td>0.16</td>
                <td>0.40</td>
                <td>0.15</td>
                <td>60</td>
            </tr>
            <tr>
                <td>0.12</td>
                <td>0.20</td>
                <td>0.20</td>
                <td>70</td>
            </tr>
            <tr>
                <td>0.06</td>
                <td>0.08</td>
                <td>0.35</td>
                <td>80</td>
            </tr>
            <tr>
                <td>0.00</td>
                <td>0.04</td>
                <td>0.15</td>
                <td>90</td>
            </tr>
            <tr>
                <td>0.00</td>
                <td>0.00</td>
                <td>0.07</td>
                <td>100</td>
            </tr>
        </table>

        <table width="500" dir="ltr" border="7">
            <caption>تخصیص ارقام تصادفی برای تعیین نوع روز</caption>
            <tr>
                <th>تخصیص ارقام تصادفی</th>
                <th>احتمال تجمعی</th>
                <th>احتمال</th>
                <th>نوع روز</th>
            </tr>
            <tr>
                <td>01-35</td>
                <td>0.35</td>
                <td>0.35</td>
                <td>خوب</td>
            </tr>
            <tr>
                <td>36-80</td>
                <td>0.80</td>
                <td>0.45</td>
                <td>متوسط</td>
            </tr>
            <tr>
                <td>81-100</td>
                <td>1.00</td>
                <td>0.20</td>
                <td>بد</td>
            </tr>

        </table>
        <br>

        <table width="600" dir="ltr" border="7">
            <caption>تخصیص ارقام تصادفی برای روزنامه های مورد تقاضا</caption>
            <thead>
            <tr>
                <th scope="col" colspan="3">تخصیص اعداد تصادفی</th>
                <th scope="col" colspan="3">توزیع تجمعی</th>
                <th scope="col">تقاضا</th>
            </tr>
            <tr>
                <th scope="col">بد</th>
                <th scope="col">متوسط</th>
                <th scope="col">خوب</th>
                <!--  -->
                <th scope="col">بد</th>
                <th scope="col">متوسط</th>
                <th scope="col">خوب</th>
                <!--  -->
                <th scope="col">----</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>01-44</td>
                <td>01-10</td>
                <td>01-03</td>
                <td>0.44</td>
                <td>0.10</td>
                <td>0.03</td>
                <td>40</td>
            </tr>
            <tr>
                <td>45-66</td>
                <td>11-28</td>
                <td>04-08</td>
                <td>0.66</td>
                <td>0.28</td>
                <td>0.08</td>
                <td>50</td>
            </tr>
            <tr>
                <td>67-82</td>
                <td>29-68</td>
                <td>09-23</td>
                <td>0.82</td>
                <td>0.68</td>
                <td>0.23</td>
                <td>60</td>
            </tr>
            <tr>
                <td>83-82</td>
                <td>69-88</td>
                <td>24-43</td>
                <td>0.96</td>
                <td>0.88</td>
                <td>0.43</td>
                <td>70</td>
            </tr>
            <tr>
                <td>95-100</td>
                <td>89-96</td>
                <td>44-78</td>
                <td>1.00</td>
                <td>0.96</td>
                <td>0.78</td>
                <td>80</td>
            </tr>
            <tr>
                <td>--</td>
                <td>97-100</td>
                <td>79-93</td>
                <td>1.00</td>
                <td>1.00</td>
                <td>0.93</td>
                <td>90</td>
            </tr>
            <tr>
                <td>--</td>
                <td>--</td>
                <td>94-100</td>
                <td>1.00</td>
                <td>1.00</td>
                <td>1.00</td>
                <td>100</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style="display: none" id="myDIV">
        <p> شبیه سازی برای خرید 70 روزنامه </p>
        <table width="1000" dir="rtl" border="7">
            <thead class="thead-dark">
            <tr>
                <th scope="col">روز</th>
                <th scope="col">ارقام تصادفی برای تعیین نوع روز</th>
                <th scope="col">نوع روز</th>
                <th scope="col">ارقام تصادفی برای تقاضا</th>
                <th scope="col">تقاضا</th>
                <th scope="col">درآمد حاصل از فروش</th>
                <th scope="col"> سود از دست رفته به خاطر فزونی تقاضا</th>
                <th scope="col">درآمد ناشی از فروش به قیمت باطله</th>
                <th scope="col">سود روزانه</th>
            </tr>
            </thead>
            <?php for ($i = 1; $i <= 20; $i++) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $randDayState = rand(1, 100); ?></td>
                    <td><?= $state = getDayState($randDayState); ?></td>
                    <td><?= $randDayRequest = rand(1, 100); ?></td>
                    <td><?= $request = getRequest($randDayRequest, $state); ?></td>
                    <td><?php $sale = $request * 20;
                        if ($request > 70) {
                            echo 1400;
                        } else {
                            echo $sale;
                        } ?></td>
                    <td><?php if ($request > 70) {
                            echo $uping = ($request - 70) * 7;
                        } else {
                            echo 0;
                        } ?></td>
                    <td><?php if ($request < 70) {
                            echo $downing = (70 - $request) * 2;
                        } else {
                            echo 0;
                        } ?></td>
                    <td><?php echo $final = $sale - 910 - $uping + $downing; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>


</center>
<!--   Mostafa Misaghi   96220033111075   -->

<script>
    function displayTable() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function displayFirstsTable() {
        var x = document.getElementById("myDIVFirst");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

</body>
</html>
