<?php include 'visitcount.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Pie Chart</title>
    
    <style>
    .container {
    display: flex;
    position: relative;
    
}

.left-panel {
    position: fixed;
    top: 50%;
    height:100%;
    width:20.3%;
    transform: translateY(-50%);
    margin-left:-10px;
    background-color:lavender;
}

.buttons {
    margin-top:5%;
    display: flex;
    flex-direction: column;
    
}

.buttons button {
    margin-top:-15px;
    margin-bottom: 30px;
    width: 255px;
    padding: 25px;
    border: none;
    background-color: white;
    color:#967bb6;
    cursor: pointer;
    font-size:20px;
    transition: background-color 0.3s ease; 
}

.buttons button:hover {
    background-color: #967bb6;
     color:white;
}
.left{

    margin-left:150px;
}
    .chart-container {
    width:30%; 
    margin: auto; 
    padding: 20px; 
   
    border-radius: 10px; 
    text-align: center; 
    margin-left:-20px;
    margin-top:40px;
}
.visitcount {
    width:100%; 
   
   
    height:40px;
   
    border-radius: 10px; 
    text-align: center; 
    
   
}

.charts{
    margin-left:200px;
    height:100%;
    width:100vw;
    text-align:center;
}
canvas {
    max-width: 100%; 
    height: auto; 
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}
.chart-container .faculty-color {
    background-color: lavender;
}

.chart-container .student-color {
    background-color: purple;
}

.chart-container .admin-color {
    background-color: #967bb6;
}
.heading{
    width: 255px;
    background-color:#967bb6;
    color:white;
    height:20%;
    margin-top:-20px;
    text-align:center;
    
}
.chart{
    background-color:#967bb6;

}
</style>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
   
    <div class="left-panel">
           
            <div class="buttons">
            <button onclick="location.href='admin_verify.php'">Admin</button>
            <button onclick="location.href='travel.php'">Home</button>
                <button onclick="location.href='faculty.php'">Faculty</button>
                <button onclick="location.href='decoration_table.php'">Decoration</button>
                <button onclick="location.href='flashmob_table.php'">Flashmob</button>
                <button onclick="location.href='students.php'">Students</button>
                <button onclick="location.href='eventscount.php'">Events</button>
            </div>
        </div>
        <div class="charts">
        <center><h1 style="margin-right:20px; color:#967bb6;">Hi,Taniya</h1></center>
        <h1 style="margin-right:20px; color:#967bb6;">Welcome to admin page</h1>
        <div class="left">
        <div class="chart-container" style="width: 32%; height: 380px;">
            <canvas id="userPieChart" width="400" height="400">Registrations</canvas>
            <p style="font-size:17px;">Registrations  as per user type</p>
        </div>
        <div id="chart" style="width: 42%; height: 430px; margin: auto; 
    
    
    border-radius: 10px; 
    text-align: center; 
    margin-right:80px;
    margin-top:-450px;
    font-family: Arial, sans-serif;
    padding: 5px 10px;
    border-radius: 5px;"></div>
        <?php
include 'visitcount.php';
$visitCount = getVisitCount();
?>


    
</div>
<div id="visitCount" style="width:50%; 
   
    height:120px;
    
    border-radius: 10px; 
    text-align: center; 
   margin-left:280px;
    background-color:lavender;
    font-family: Arial, sans-serif;
    
    
           ">
      <p style="font-size:40px; colour:#967bb6;"> <?php echo getVisitCount(); ?><p>
        <h5>Number of visits to the CURSORS homepage</h5>
    </div>

</div>


    <script>document.addEventListener("DOMContentLoaded", function () {
   
    fetch('admin.php')
        .then(response => response.json())
        .then(data => {
            displayPieChart(data);
        })
        .catch(error => {
            console.error('Error fetching user data:', error);
        });
});

function displayPieChart(userData) {
    const ctx = document.getElementById('userPieChart').getContext('2d');

const data = {
                labels: Object.keys(userData),
                datasets: [{
                    data: Object.values(userData),
                    backgroundColor: ['lavender', '#967bb6','purple'] 
                }]
            };
    new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
            title: {
                display: true,
                text: 'User Registrations by Type'
            }
        }
    });
    
}
<?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "taniya";
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $queryDecoration = "SELECT gender, COUNT(*) AS count FROM decoration1 GROUP BY gender";
        $resultDecoration = $conn->query($queryDecoration);
        $gendersDecoration = array();
        $countsDecoration = array();
        while ($row = $resultDecoration->fetch_assoc()) {
            $gendersDecoration[] = $row['gender'];
            $countsDecoration[] = $row['count'];
        }

        $queryFlashmob = "SELECT gender, COUNT(*) AS count FROM flashmob1 GROUP BY gender";
        $resultFlashmob = $conn->query($queryFlashmob);

       
        $gendersFlashmob = array();
        $countsFlashmob = array();
        while ($row = $resultFlashmob->fetch_assoc()) {
            $gendersFlashmob[] = $row['gender'];
            $countsFlashmob[] = $row['count'];
        }

       
        $conn->close();
        ?>

       
        try {
            var plotData = [{
                x: <?php echo json_encode($gendersDecoration); ?>,
                y: <?php echo json_encode($countsDecoration); ?>,
                type: 'bar',
                name: 'Decoration1',
                marker: {
                    color: '#967bb6'
                }
            }, {
                x: <?php echo json_encode($gendersFlashmob); ?>,
                y: <?php echo json_encode($countsFlashmob); ?>,
                type: 'bar',
                name: 'Flashmob1',
                marker: {
                    color: 'lavender'
                }
            }];

            var layout = {
                
                yaxis: {title: 'Number of Registrations'},
                autosize: true,
                margin: { t: 50, b: 100, l: 50, r: 50 },
                showlegend: true,
                hovermode: 'closest',
                barmode: 'group',
                
                annotations: [
                    {
                        xref: 'paper',
                        yref: 'paper',
                        x: 0.5,
                        y: -0.15,
                        xanchor: 'center',
                        yanchor: 'top',
                        text: '    Comparison of Registrations based on Gender',
                        showarrow: false,
                        font: {
                            family: 'Arial',
                            size: 15,
                            color: 'black',
                        
                        }
                    }
                ]
            };

            Plotly.newPlot('chart', plotData, layout);
        } catch (error) {
            console.error('Error plotting graph:', error);
        }
</script>
</body>
</html>