<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>

    <!-- GeekBrains-les1-hw -->
    <!--
    <p>
            $a = 10;
            $b = 15;

            echo "Start value <br>";
            echo "a= ". $a ."<br>";
            echo "b= ". $b ."<br>";

            $a ^= $b;
            $b ^= $a;
            $a ^= $b;

            echo "After:<br>";

            echo "a=". $a ."<br>";
            echo "b= ". $b ."<br>";
            echo var_dump(4>3). "<br>";
    </p>
    -->

<!-- GeekBrains -les2 -->

    <?php if (false): ?>
        <h2>If - True</h2>
    <?php endif; ?>

    <?php
    //рекурсия
        function fact($i){
            if ($i == 1 || $i ==2)
                return $i;
            else
                return $i * fact($i-1);
        }
    echo fact(100). '<br>';
    ?>

    <!-- les2- hw -->
    <?php

    /*--- hw-part1
    function fibonacci($num)
    {
        if ($num == 0)
            return 0;
            elseif ($num <= 3 && $num >=1)
                return 1;
        else
            return fibonacci($num - 1) + fibonacci($num - 2);
    }
    echo 'Ряд Фибоначчи из '. $num = 30 .' членов <br>';
    for ($i = 0; $i <= $num ; $i++):
        echo ' ['.$i.']='. fibonacci($i) .' ';
    endfor;
    --- hw-part1 (end) ---*/

    /*--- hw-part2---
    function incoming($sum, $time, $prcnt)
    {

        // Человек открыл вклад на 5000 рублей под 9% годовых на 3 месяца:
        //    за год:
        //          5000*9/100=450 рублей
        //    за 90 дней:
        //      450 рублей за 365 дней
        //    x рублей за 90 дней
        //        x=450*90/365=110 рублей 96 копеек
        //    5110 рублей 96 копеек вкладчик получит в конце срока


        $year_inc = $sum * $prcnt / 100;
        $per_inc = $year_inc * ($time * 30) / 365;

        echo '<br> Year inc ' . round($year_inc, 2) . '<br>';
        echo '<br> Period inc ' . round($per_inc, 2) . '<br>';
        return round($sum + $per_inc, 2);
    }
    echo '<h2>' . incoming(5000, 6, 10) . '</h2>';
    --- hw-part2 (end) ---*/

    /*--- hw-part3 ---*/
    function cal($date, $month)
    {
        switch($month):
            case 1: $month = ' January';
                    break;
            case 2: $month = ' February';
                    break;
            case 3: $month = ' March';
                    break;
            case 4: $month = ' April';
                    break;
            case 5: $month = ' May';
                    break;
            case 6: $month = ' June';
                    break;
            case 7: $month = ' July';
                    break;
            case 8: $month = ' August';
                    break;
            case 9: $month = ' September';
                    break;
            case 10: $month = ' October';
                    break;
            case 11: $month = ' November';
                    break;
            case 12: $month = ' December';
                    break;
            default: $month = ' Err: Bad month input';
        endswitch;

        return $date . $month;
    }
    $d = 15;
    $m = 3;
    echo '<br> Date: '. $d . '.' . $m .' = ' . cal($d,$m);
    /*--- hw-part3 (end) ---*/
    ?>





</body>
</html>
