<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>আলু </title>
        <link rel="stylesheet" type="text/css" href="potato_css.css">
    </head>
    <body>
        <form action="potato.php" method="POST">
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

            $query = "SELECT * FROM potato where Month='$Month'";
            $query_run = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($query_run)) {
                ?>
                <table class="table-design" border="4">
                    <tr>
                        <th class="aa">Name</th>
                        <th class="bb">Month</th>
                        <th class="cc">About_Crop</th>
                        <th class="dd">Character_of_Crop</th>
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
                        <td class="d">
                            <?php echo $row['Character_of_Crop'] ?>;
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

        <div class="btn-group"></br></br></br>

            <a href="" class="button">বারি আলু-১ (হীরা)</a>
            <a href="" class="button">বারি আলু-৪</a></br>
            <a href="" class="button">বারিআলু -৪ (ডায়মন্ট</a>
            <a href="" class="button">বারিআলু-৮(কার্ডিনাল)</a></br>
            <a href="" class="button">বারি আলু-১১(চমক)</a>
            <a href="" class="button">বারি আলু-১২(ধীরা)</a></br>
            <a href="" class="button">বারিআল-১৩(গ্রানোলা)</a>
            <a href="" class="button">বারি টিপিএস-১</a></br>

            <a href="" class="button">বারি টিপিএস-২</a>
            <a href="" class="button">বারিআলু-১৬(আরিন্দা)</a></br>
            <a href="" class="button">বারি আলু-২০ (জারলা)</a>
            <a href="" class="button">বারিআলু-১৯ (বিন্টজে)</a></br>

            <a href="ALL_Search_Potato.php" class="buttonnn">পুরো তথ্য পেতে এখানে ক্লিক করুন</a></br></br>

    </body>
</html>