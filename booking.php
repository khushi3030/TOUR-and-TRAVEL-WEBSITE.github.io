<?php 
include 'basic.php';
//include 'itinerary.php';
echo '<head><link rel="stylesheet" type="text/css" href="booking.css"></head>';
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$destination = $nog = $departure = $arrival = null;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $destination = test_input($_POST["destination"]);
    $nog = $_POST["nog"];
    $departure = test_input($_POST["departure"]);
    $arrival = test_input($_POST["arrival"]);
}
$diff = strtotime($arrival) - strtotime($departure);
$nod = ceil($diff/86400) + 1;
$basecharge = 10000;
$persons = ceil((float)$nog/2);
$regamt = $basecharge + ($persons*$nod)*3000; 
$deluxamt = $basecharge + ($persons*$nod)*5000; 
$premamt = $basecharge + ($persons*$nod)*7000; 
$query = "SELECT * from package where Destination = '$destination' and No_of_days = $nod";
$result = mysqli_query($con, $query);
   
if($result==false||$result->num_rows==0)
{
    echo "Sorry, we don't have packages for $destination that are $nod days long right now.";
    echo "<br><br>But don't worry! We're slowly expanding our reach. Meanwhile, you can check out the following packages:<br><br>";
    $query = "SELECT * from package";
    $result = mysqli_query($con, $query);
    echo "
    <div class=\"filter\">

    </div>

    <table>



        <tr>


            <th>Destination</th>

            <th>No. of Days</th>

            <th>Starting from</th>

            <th>View Details</th>

        </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        $d = $row['Destination'];
        $n = $row['No_of_days'];
        echo "<tr><td>".$row['Destination']."</td><td>".$row['No_of_days']."</td><td>$regamt</td><td><a href='itinerary.php/?dest=$d&nod=$n'>View Details</a></td></tr>";
    }
    echo "</table>";
}

else
{
    echo "
    <div class=\"filter\">

    </div>

    <table>



        <tr>


            <th>Destination</th>

            <th>No. of Days</th>

            <th>Starting from</th>

            <th>View Details</th>

        </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        $d = $row['Destination'];
        $n = $row['No_of_days'];
        echo "<tr><td>".$row['Destination']."</td><td>".$row['No_of_days']."</td><td>$regamt</td><td>
        <a href='itinerary.php/?dest=$d&nod=$n'>View Details</a></td></tr>";
    }
    echo "</table>";
}

?>

