<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>পাট </title>
        <link rel="stylesheet" type="text/css" href="jute_css.css">

    </head>
    <body>
        
        <form action="jute.php" method="POST">
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

            $query = "SELECT * FROM jute where Month='$Month'";
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
        


        <div class="btn-group"></br>

            <a href="" class="button">ডি-১৫৪-২</a>
            <a href="" class="button">সিভিএল-১</a></br>
            <a href="" class="button">সিভিই-৩</a>
            <a href="" class="button">বিজেআরআই দেশী পাট-৫ (বিজেসি-৭৩৭০)</a></br>
            <a href="" class="button">বিজেআরআই দেশী পাট-৬ (বিজেসি-৮৩)</a>
            <a href="" class="button">বিজেআরআই দেশী পাট-৭ (বিজেসি-২১৪২)</a></br>
            <a href="" class="button">বিজেআরআই দেশী পাট শাক-১ (বিজেসি-৩৯০)</a>
            <a href="" class="button">ওএম-১</a></br>

            <a href="" class="button">বিজেআরআই তোষা পাট-৪  (ও-৭২)</a>
            <a href="" class="button">বিজেআরআই তোষা পাট-৫  (ও-৭৯৫, লাল তোষা)</a></br>
            <a href="" class="button">বিজেআরআই কেনাফ-৩  (বট কেনাফ)</a>
            <a href="" class="button">বিজেআরআই কেনাফ-৩  (বট কেনাফ)</a></br>
            <a href="" class="button">এইচএস-২৪</a>
            <a href="" class="button">বিজেআরআই মেস্তা-২  (সবজি মেস্তা)</a></br></div>


            <a href="ALL_Search_Jute.php" class="buttonnn">পুরো তথ্য পেতে এখানে ক্লিক করুন</a>

    </body>
</html>