<?php

include("connection.php");

if(isset($_POST['request'])){

    $request = $_POST['request'];

    $planselection = "SELECT * FROM MEMBER WHERE PLAN='{$request}'";

    $result = mysqli_query($conn, $planselection);
    $count = mysqli_num_rows($result);
}

?>

<table class= "table">
    <?php
    if($count){
    ?>

    <thead>
        <tr>
            <th><?php echo $result["memb_id"]; ?></th>
            <th><?php echo $result["m_name"]; ?></th>
            <th><?php echo $result["m_email"]; ?></th>
            <th><?php echo $result["m_phone"]; ?></th>
            <th><?php echo $result["m_address"]; ?></th>
            <th><?php echo $result["club"]; ?></th>
            <th><?php echo $result["plan"]; ?></th>
        </tr>
        <?php
    }else{
        echo "Sorry no record found!";
    }
        ?>
    </thead>

    <tbody>
        <?php
        while($rows = mysqli_fetch_assoc($planselection_run)){
        ?>
        <tr>
            <th><?php echo $result["memb_id"]; ?></th>
            <th><?php echo $result["m_name"]; ?></th>
            <th><?php echo $result["m_email"]; ?></th>
            <th><?php echo $result["m_phone"]; ?></th>
            <th><?php echo $result["m_address"]; ?></th>
            <th><?php echo $result["club"]; ?></th>
            <th><?php echo $result["plan"]; ?></th>
        </tr>
        <?php
        }
        ?>


    </tbody>

</table>
<?php
        }
        ?>