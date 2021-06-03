 <?php
$server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "service_vehicle";


 $conn = mysqli_connect($server , $username, $password, $dbname);

 if(isset($_POST['sch_saveButton'])){

    if(!empty($_POST['modal-veh-name']) && !empty($_POST['type-list']) && !empty($_POST['supplier-list']) && !empty($_POST['input']) && !empty($_POST['nextServiceOdometer']) && !empty($_POST['nextServiceHours']) && !empty($_POST['reminderDateInterval, reminderDateIntervalUnit']) && !empty($_POST['reminderOdometer']) && !empty($_POST['reminderHours']) && !empty($_POST['repeatDateInterval, repeatDateIntervalUnit']) && !empty($_POST['repeatOdometer']) && !empty($_POST['repeatHours'])){

        $vehname = $_POST['modal-veh-name'];
        $typelist = $_POST['type-list'];
        $supplierlist = $_POST['supplier-list'];
        $bydate = $_POST['input'];
        $nextServiceOdo = $_POST['nextServiceOdometer'];
        $nextServiceHours = $_POST['nextServiceHours'];
        $reminderDate = $_POST['reminderDateInterval, reminderDateIntervalUnit'];
        $reminderOdo = $_POST['reminderOdometer'];
        $reminderHrs = $_POST['reminderHours'];
        $repeatDate = $_POST['repeatDateInterval, repeatDateIntervalUnit'];
        $repeat0d0 = $_POST['repeatOdometer'];
        $repeatHrs = $_POST['repeatHours'];

        $query = "insert into form(scheduled_service_item,supplier,by_date,reminder_date,odo_next_occurance,reminder_odo,repeat_odo,engine_hrs_next_occurance,reminder_hours,repeat_hours,repeat_date) values('$typelist', '$supplierlist', '$bydate', '$reminderDate', '$nextServiceOdo', '$reminderOdo' , '$repeat0d0', '$nextServiceHours', '$reminderHrs', '$repeatHrs', '$repeatDate')" ;
    
        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo "Successfully Scheduled" ;
        }
        else {

            echo "Error in Scheduling, Please Try Again" ;
        }
    
    }
    else {
        echo "Atleast One Next Occurance field is required" ;
    }
 }

?> 