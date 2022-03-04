
<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project_1";

$conn = mysqli_connect($server, $username, $password, $dbname);
?>
<!Doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; 
              charset=UTF-8" />
        <title>ধান</title>
        <link rel="stylesheet" type="text/css" href="potato_search_css.css">
    </head>
    <body>
        <table class="table-design">
            <tr>
                <th> Problem_Name </th>
                <th> Problem_Cause </th>
                <th> Solution </th>
              
            </tr>
        </table>


        <?php
        mysqli_set_charset($conn, 'utf8');
        $sql = ("SELECT * FROM alu ;");
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
        if ($queryResults > 0) {
            echo "<table border='4'>";
            while ($row1 = mysqli_fetch_array($result)) {
                ?><tr>
                <td class="a"><?php echo $row1["problem_name"]; ?></td>
                <td class="b"><?php echo $row1["problem_cause"]; ?></td>
                <td class="c"><?php echo $row1["solution"]; ?></td>
               

                <?php
            }
            echo"</table>";
        }
        ?>


    </body>
</html>