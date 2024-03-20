<script>
   
    <?php
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "taniya";

    
    $conn = new mysqli($servername, $username, $password, $database);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $query = "SELECT gender, COUNT(*) AS count FROM decoration1 GROUP BY gender";
    $result = $conn->query($query);

    
    $genders = array();
    $counts = array();
    while ($row = $result->fetch_assoc()) {
        $genders[] = $row['gender'];
        $counts[] = $row['count'];
    }

    
    $conn->close();
    ?>

    
    var plotData = [{
        x: <?php echo json_encode($genders); ?>,
        y: <?php echo json_encode($counts); ?>,
        type: 'bar',
        marker: {
            color: ['blue', 'red', 'green']
        }
    }];

    var layout = {
        title: 'Number of Registrations by Gender',
        xaxis: {title: 'Gender'},
        yaxis: {title: 'Number of Registrations'}
    };

    Plotly.newPlot('chart', plotData, layout);
</script>
