<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ধান </title>
        <link rel="stylesheet" type="text/css" href="paddy_css.css">
    </head>
    <body>
        <form action="paddy.php" method="POST">
            <div class="search_bar">
                <input type="text" name="Month" placeholder="Enter Month"></br>

                <input type="submit" name="search" value="search data"> 
            </div>


        </form>

        <?php
        $server = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "project";

        $conn = mysqli_connect($server, $username, $password, $dbname);

        mysqli_set_charset($conn, 'utf8');
        if (isset($_POST['search'])) {
            $Month = $_POST['Month'];

            $query = "SELECT * FROM paddy where Month='$Month'";
            $query_run = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($query_run)) {
                ?>
                <table class="table-design" border="4">
                    <tr>
                        <th class="aa">Name</th>
                        <th class="bb">Month</th>
                        <th class="cc">About_Crop</th>
                        <th class="ee">Production</th>
                        <th class="ff">Time_of_farming</th>
                    </tr>
                </table>
                <?php
                ?>

                <table border="4">

                    <tr class="row">
                        <td class="a">
                            <?php echo $row['Name'] ?>; 
                        </td>
                        <td class="b">
                            <?php echo $row['Month'] ?>;
                        </td>
                        <td class="c">
                            <?php echo $row['About_Crop'] ?>;
                        </td>
                      
                        <td class="e">
                            <?php echo $row['Production'] ?>;
                        </td>
                        <td class="f">
                            <?php echo $row['Time_of_farming'] ?>;
                        </td>
                    </tr>

                </table>


                <?php
            }
        }
        ?>


        <div class="btn-group"></br>

            <a href="" class="button">বিআর১</a>
            <a href="" class="button">বিআর২</a></br>
            <a href="" class="button">বিআর৬</a>
            <a href="" class="button">বিআর৭</a></br>
            <a href="" class="button">বিআর১২</a>
            <a href="" class="button">বিআর১৫</a></br>
            <a href="" class="button">বিআর২০</a>
            <a href="" class="button">বিআর২৬</a></br>
            <a href="" class="button">ব্রি ধান২৯</a>
            <a href="" class="button">ব্রি ধান৪২</a></br>
            <a href="" class="button">ব্রি ধান৪৮</a>
            <a href="" class="button">ব্রি ধান৬৩</a></br></br>

            <a href="ALL_Search_Paddy.php" class="buttonnn">পুরো তথ্য পেতে এখানে ক্লিক করুন</a></br></br>



    </body>
</html>