<?php include "components/variables.php";
include "components/connect.php";

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
define("TITLE","Home | $companyName");?>
<!-- head section  -->
<?php include "components/user_head.php" ?>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php'?>
    <!-- header section ends -->
    <!-- Function to create a new event -->
<?php function createEvent($title, $start, $end) {
    global $conn;
    $sql = "INSERT INTO events (title, start_datetime, end_datetime) VALUES ('$title', '$start', '$end')";
    $conn->query($sql);
    echo "Event created successfully.";
}

// Function to delete an event
function deleteEvent($eventID) {
    global $conn;
    $sql = "DELETE FROM events WHERE id = $eventID";
    $conn->query($sql);
    echo "Event deleted successfully.";
}

// Function to modify an event
function modifyEvent($eventID, $title, $start, $end) {
    global $conn;
    $sql = "UPDATE events SET title = '$title', start_datetime = '$start', end_datetime = '$end' WHERE id = $eventID";
    $conn->query($sql);
    echo "Event modified successfully.";
}

// Function to display the calendar
function displayCalendar() {
    global $conn;
    $sql = "SELECT * FROM events ORDER BY start_datetime ASC";
    $result = $conn->query($sql);

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Time</th>';
    echo '<th>Monday</th>';
    echo '<th>Tuesday</th>';
    echo '<th>Wednesday</th>';
    echo '<th>Thursday</th>';
    echo '<th>Friday</th>';
    echo '<th>Saturday</th>';
    echo '<th>Sunday</th>';
    echo '</tr>';

    for ($hour = 0; $hour < 24; $hour++) {
        echo '<tr>';
        echo '<td>' . $hour . ':00</td>';

        for ($day = 1; $day <= 7; $day++) {
            echo '<td>';

            // Display events for the current day and hour
            while ($row = $result->fetch_assoc()) {
                $start = new DateTime($row['start_datetime']);
                $end = new DateTime($row['end_datetime']);
                if ($start->format('N') == $day && $start->format('G') == $hour) {
                    echo $row['title'] . '<br>';
                    echo '<button onclick="modifyEvent(' . $row['id'] . ')">Modify</button>';
                    echo '<button onclick="deleteEvent(' . $row['id'] . ')">Delete</button>';
                } elseif ($start->format('N') == $day && $start->format('G') < $hour && $end->format('G') > $hour) {
                    echo $row['title'] . '<br>';
                }
            }

            echo '</td>';
            $result->data_seek(0); // Reset the result pointer
        }

        echo '</tr>';
    }

    echo '</table>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
</head>
<body>
    <h1>Calendar</h1>

    <form method="POST" action="">
        <h2>Create Event</h2>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="start_datetime">Start Date and Time:</label>
        <input type="datetime-local" id="start_datetime" name="start_datetime" required>

        <label for="end_datetime">End Date and Time:</label>
        <input type="datetime-local" id="end_datetime" name="end_datetime" required>

        <button type="submit" name="create_event">Create Event</button>
    </form>

    <h2>Calendar</h2>
    <?php displayCalendar(); ?>

    <script>
        function modifyEvent(eventID) {
            var title = prompt("Enter new title:");
            var startDatetime = prompt("Enter new start date and time (YYYY-MM-DD HH:MM:SS):");
            var endDatetime = prompt("Enter new end date and time (YYYY-MM-DD HH:MM:SS):");

            if (title && startDatetime && endDatetime) {
                document.getElementById("event_id").value = eventID;
                document.getElementById("title").value = title;
                document.getElementById("start_datetime").value = startDatetime;
                document.getElementById("end_datetime").value = endDatetime;
                document.getElementById("modify_form").submit();
            }
        }

        function deleteEvent(eventID) {
            if (confirm("Are you sure you want to delete this event?")) {
                document.getElementById("event_id").value = eventID;
                document.getElementById("delete_form").submit();
            }
        }
    </script>

    <form id="modify_form" method="POST" action="">
        <input type="hidden" id="event_id" name="event_id">
        <input type="hidden" id="title" name="title">
        <input type="hidden" id="start_datetime" name="start_datetime">
        <input type="hidden" id="end_datetime" name="end_datetime">
        <button type="submit" name="modify_event" style="display: none;"></button>
    </form>

    <form id="delete_form" method="POST" action="">
        <input type="hidden" id="event_id" name="event_id">
        <button type="submit" name="delete_event" style="display: none;"></button>
    </form>
</body>
</html>
    <!-- footer section starts  -->
<?php include 'components/footer.php'?>
<!-- footer section ends  -->