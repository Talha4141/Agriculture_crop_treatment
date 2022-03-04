
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ডাল </title>
        <link rel="stylesheet" type="text/css" href="dal_css.css"> 
    </head>

    <body>

        <form action="dal.php" method="POST">
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

            $query = "SELECT * FROM dal where Month='$Month'";
            $query_run = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($query_run)) {
                ?>
                <table class="table-design" border="2">
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

                <table border="2">

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


        <form action="dal.php" method="POST">


            <div class="container">

                <button class=" btn btn">ছোলা</button>
                <button class=" btn btn">ফেলন </button>
                <button class=" btn btn">খেসার </button>
                <br>
            </div>
            <div>

                <button class=" btn btn1">মাসকলাই </button>
                <button class=" btn btn1">মসুর </button>
                <button class=" btn btn1">মুগ </button>
            </div>


            <a href="All_Search_Page.php" class="buttonnn">পুরো তথ্য পেতে এখানে ক্লিক করুন</a>


        </form>

    </body>
</html>