<?php

$dataProcessed = false;   //at the beginning the data has NOT been processed

if(isset($_POST["submit"])){
    //form has been submitted by the user
    //Process the form data into the database
    //Send a confirmation back to the user

    /* Algorithm to do a PDO Preprared statement
    1. Connect to the database
    2. Write your SQL command
    3. Prepare the statement
    4. Bind parameters (if any)
    5. Execute the statement
    6. Get the data from the result-set within the statement object
    */


    $eventsName = $_POST['events_name'];
    $eventsDescription = $_POST['events_description'];
    $eventsPresenter = $_POST['events_presenter'];
    $eventsDate = $_POST['events_date'];
    $eventsTime = $_POST['events_time'];

    $eventsDate = date('Y-m-d', strtotime($eventsDate));
    $eventsTime = date('H:i', strtotime($eventsTime));

    require_once('../database/dbConnect.php'); //connect to database

    $sql = "INSERT INTO wdv341_events (events_name, events_description, events_presenter, events_date, events_time)
    VALUES (:eventsName, :eventsDescription, :eventsPresenter, :eventsDate, :eventsTime)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':eventsName',$eventsName);
    $stmt->bindParam(':eventsDescription',$eventsDescription);
    $stmt->bindParam(':eventsPresenter',$eventsPresenter);
    $stmt->bindParam(':eventsDate',$eventsDate);
    $stmt->bindParam(':eventsTime',$eventsTime);    

    $stmt->execute();   
    
    $dataProcessed = true;
}

    //display the form to the user so they can enter their data and hit submit
?>
    <!DOCTYPE html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Quicksand:wght@300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WDV 341 Intro PHP - Self Posting Input an Event Form</title>
    <style>

        form {
            display:  flex;
            flex-direction:    column;
            background-color:#dae1e7;
            width:65%;
            padding:0.5em;
            margin:1.5em auto;
            border:5px solid #FD4D0C;
            border-radius:10px;
        }
        body {
            font-family: 'Balsamiq Sans', cursive;
            font-size: 20px;
            background-color: white;
            text-align: center;
        }

        legend{
            color:	#696969;
            text-align: Center;
            font-size: 45px;
            font-family: 'Balsamiq Sans', cursive;
}


    </style>

    </head>

    <body>


        <?php
        if($dataProcessed){ 
        //display confirmation message section
        ?>
            <section>
                <h3>Thank you for entering your event information.</h3>
            </section>
        <?php  
        }
        else{
        //display the form so the user can input data and submit it for processing
        ?>
            <section>
            <div>
                <legend>Event Signup Page!</legend>
             </div>
  

                <form id="event-form" name="event_form" method="post" action="selfPostingEventForm.php">

                    <p>Please enter the event information:</p>
                    <p>
                        <label for="events-name">Event Name:</label> 
                        <input type="text" name="events_name" id="events-name" />
                    </p>
                    <p>
                        <label for="events-description">Event Description:</label> 
                        <input type="text" name="events_description" id="events-description" />
                    </p>
                    <p>
                        <label for="events-presenter">Event Presenter:</label> 
                        <input type="text" name="events_presenter" id="events-presenter" />
                    </p>
                    <p>
                        <label for="events-date">Event Date:</label> 
                        <input type="text" name="events_date" id="events-date" />
                    </p>
                    <p>
                        <label for="events-time">Event Time:</label> 
                        <input type="text" name="events_time" id="events-time"  />
                    </p>                                        
                    <p>
                        <input type="submit" name="submit" id="button" value="Submit" />
                        <input type="reset" name="button2" id="button2" value="Clear Form" />
                    </p>
                </form>
                </form>
            </section>
        <?php
        }
        ?>
    </body>

    </html>