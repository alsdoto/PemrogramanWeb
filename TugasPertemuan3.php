<?php
$nilai1 = 0;

if ($nilai1 <= 39) {
    $huruf = "E";
    $status = "Gagal";
} else if ($nilai1 >= 40 && $nilai1 <= 49) {
    $huruf = "D";
    $status = "Kurang";
} else if ($nilai1 >= 50 && $nilai1 <= 59) {
    $huruf = "CD";
    $status = "Kurang dari cukup";
} else if ($nilai1 >= 60 && $nilai1 <= 69) {
    $huruf = "C";
    $status = "Cukup";
} else if ($nilai1 >= 70 && $nilai1 <= 74) {
    $huruf = "BC";
    $status = "Lebih dari cukup";
} else if ($nilai1 >= 75 && $nilai1 <= 79) {
    $huruf = "B";
    $status = "Baik";
} else if ($nilai1 >= 80 && $nilai1 <= 84) {
    $huruf = "AB";
    $status = "Lebih dari baik";
} else if ($nilai1 >= 85 && $nilai1 <= 100) {
    $huruf = "A";
    $status = "Istimewa";
}
else{
    echo "Nilai tidak terdefinisi";
}

echo "Nilai", "Huruf", "Status";
echo "$nilai", "$huruf", "$status";
?>

<br>
<br>

<html>
    <head></head>
    <body>
        <table border="1" padding="1">
            <tr>
                <td>Nilai</td>
                <td>Huruf</td>
                <td>Status</td>
            </tr>
            <tr>
                <td><?php ?> 85-100</td>
                <td><?php ?></td>
                <td><?php ?></td>
            </tr>
            <tr>
                <td><?php ?> 80-84</td>
                <td><?php ?> </td>
                <td><?php ?> </td>
            </tr>
            <tr>
                <td><?php ?> 75-79</td>
                <td><?php ?></td>
                <td><?php ?></td>
            </tr>
            <tr>
                <td><?php ?> 70-74</td>
                <td><?php ?></td>
                <td><?php ?></td>
            </tr>
            <tr>
                <td><?php ?> 60-69</td>
                <td><?php ?></td>
                <td><?php ?></td>
            </tr>
            <tr>
                <td><?php ?> 50-59</td>
                <td><?php ?></td>
                <td><?php ?></td>
            </tr>
            <tr>
                <td><?php ?> 40-49</td>
                <td><?php ?></td>
                <td><?php ?></td>
            </tr>
            <tr>
                <td><?php ?> 0-39</td>
                <td><?php ?></td>
                <td><?php ?></td>
            </tr>
        </table>
    </body>
</html>