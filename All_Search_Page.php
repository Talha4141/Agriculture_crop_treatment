
<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project_eng_v1";

$conn = mysqli_connect($server, $username, $password, $dbname);
?>
<!Doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; 
              charset=UTF-8" />
        <title>ডাল</title>
        <link rel="stylesheet" type="text/css" href="All-Search_Page_CSS.css">
    </head>
    <body>
        <table class="table-design">
            <tr>
                <th>Name</th>
                <th>Month</th>
                <th>About_Crop</th>
                <th>Character_of_Crop</th>
                <th>Production</th>
                <th>Time_of_farming</th>
            </tr>
        </table>


        <?php
        mysqli_set_charset($conn, 'utf8');
        $sql = ("SELECT * FROM dal ;");
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
        if ($queryResults > 0) {
            echo "<table border='3'>";
            while ($row1 = mysqli_fetch_array($result)) {
                ?><tr>
                <td class="a"><?php echo $row1["Name"]; ?></td>
                <td class="b"><?php echo $row1["Month"]; ?></td>
                <td class="c"><?php echo $row1["About_Crop"]; ?></td>
                <td class="d"><?php echo $row1["Character_of_Crop"]; ?></td>
                <td class="e"><?php echo $row1["Production"]; ?></td>
                <td class="f"><?php echo $row1["Time_of_farming"]; ?></td>

                <?php
            }
            echo"</table>";
        }
        ?>


    </body>
</html>