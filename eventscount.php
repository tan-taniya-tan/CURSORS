
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
    width: 259px;
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
    margin-left:-20px;
}
    .chart-container {
    width:40%; 
    margin: auto; 
    padding: 20px; 
    box-sizing: border-box; 
    border: 1px solid #ccc; 
    border-radius: 10px; 
    text-align: center; 
    margin-left:-20px;
    margin-top:40px;
}


.heading{
    width: 255px;
    background-color:#967bb6;
    color:white;
    height:20%;
    margin-top:-20px;
    text-align:center;
    
}
body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: #967bb6;
            margin-left:-150px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            margin-right:50px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: lavender;
            color: #967bb6;
        }
        .charts{
    margin-left:400px;
    height:100%;
    width:100%;
    text-align:center;}
        tr:nth-child(even) {
            background-color: white;
        }
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
</style>
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
      <center>  <h1 style="margin-left:-150px; color:#967bb6;">Event Registrations</h1></center>
    <table id="responseTable">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Responses</th>
            </tr>
        </thead>
        <tbody id="responseBody">
           
        </tbody>
    </table>

    <script>
        
        var publishedCountUrls = [
            "https://docs.google.com/spreadsheets/d/e/2PACX-1vSXWkaChEr728hjswIvBszOHoTbYdktnaty6XzD-bsijz0j7zhUDoaal9bEqeZOAxLEkHywY_xRcsB5/pub?output=csv",
            "https://docs.google.com/spreadsheets/d/e/2PACX-1vQb_L04xFivqDHdjFmrij6eSZvn-eG6RUcVPZ5O2y53VYN7riE98opC1fXd3OC84K4BAAZR4oMJ9zTH/pub?output=csv",
            "https://docs.google.com/spreadsheets/d/e/2PACX-1vQ9QNBuCcA2jNFQZ-ExMT5sA3r85WDNqM5A-uRXZTTXAr1m1XUxfiLji1wZ-Jgn-TvIuWNIzCWpvbwV/pub?output=csv",
            "https://docs.google.com/spreadsheets/d/e/2PACX-1vQuOU-QwDeLYJspOnBOIYXZufjFOQToZnjF5jGKERMwHKK6mOn4rxw-ElMv486OXSR9Ws8jwfbob35q/pub?output=csv",
       "https://docs.google.com/spreadsheets/d/e/2PACX-1vQta3mp5nY7CnapDa3MHFKoZxK9HeCT3NtrZM430QXfDwQ4CamLdAhbygBcr3HQBbG6YBB6cWJ6EYpS/pub?output=csv",
       "https://docs.google.com/spreadsheets/d/e/2PACX-1vQZQwrhnEX-0GADDbrnUZuCUbX_P-NyklGvxQP7bFOxODwGMOJl-B6c6MwVc2zWV1qSEoXI2Qbm0n8N/pub?output=csv",
    "https://docs.google.com/spreadsheets/d/e/2PACX-1vQx5Gt1-8rZHXltzeh_joM6xZnPCYKX9hoVOHTKI4R-FSe-U-JPzCTHUluwXhIYEzadwOUnXXvGrHYg/pub?output=csv",
    "https://docs.google.com/spreadsheets/d/e/2PACX-1vSrrSLEtkdLtOMZoF2rcMJbcMgRjE_LT-GCw5LHnS34nCgW9XnxEk7y1Y-SX4EE3vJ916vskGJv0HvQ/pub?output=csv",
    "https://docs.google.com/spreadsheets/d/e/2PACX-1vTBAPVfowvOqFuuhHDUxwVocod-XL0GHCmufAs8WRN5Odcyn5xgpzS4ZIf39Xl6yllESBc5PeGyslEz/pub?output=csv",
   "https://docs.google.com/spreadsheets/d/e/2PACX-1vQS3_kmDULLWUgT0UclPufAyt_fipADYpsIdEqhpfP-dJ4SvpAVddYXyYBMjbfVBPB82-w-y91emVu-/pub?output=csv",
"https://docs.google.com/spreadsheets/d/e/2PACX-1vSDETOv7NnpPcGiOc3f_r3P8X2-sU5gUBDqhexRFe9dB8qaQ4-KwbaljGPhCdC_CU65Nrfxt_858u20/pub?output=csv",
"https://docs.google.com/spreadsheets/d/e/2PACX-1vQa6A_BKIJPMFv_1_sv2Smxa9PgDPOVuhz9tTm9rjLOjPuyCnsVDQRclFJffkAXksv0rHbXBEey128v/pub?output=csv",
"https://docs.google.com/spreadsheets/d/e/2PACX-1vSgfbdXYC3vxb8doLZo5pxHuq2a4zWEBZNjTNR4cZJL2nRWxwhSfLSJN_OBdeGCx8CB-WE3SLJ_rGUb/pub?output=csv",
"https://docs.google.com/spreadsheets/d/e/2PACX-1vSgfbdXYC3vxb8doLZo5pxHuq2a4zWEBZNjTNR4cZJL2nRWxwhSfLSJN_OBdeGCx8CB-WE3SLJ_rGUb/pub?output=csv",

];

        var eventNames = [
            "Mr & Ms Cursors",
            "Logo Design",
            "Treasure Hunt",
            "Poster Presentation",
            "Debate",
            "Xtempo",
            "Photography",
            "Hackthon",
            "Logical Minds",
            "Campus Quest",
            "Project Expo",
            "Machine Learning Hackthon",
            "Code Rush"
            ,"Web Design"
        ];

       
        function fetchDataFromGoogleSheets(url, eventName, index) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var data = xhr.responseText;
                    var rows = data.split('\n');
                    var responseCount = rows.length - 1;
                    var tableRow = document.createElement('tr');
                    var eventNameCell = document.createElement('td');
                    eventNameCell.textContent = eventName;
                    var responseCell = document.createElement('td');
                    responseCell.textContent = responseCount;
                    tableRow.appendChild(eventNameCell);
                    tableRow.appendChild(responseCell);
                    document.getElementById('responseBody').appendChild(tableRow);
                }
            };
            xhr.send();
        }
        function fetchDataForAllForms() {
            document.getElementById('responseBody').innerHTML = "";
            publishedCountUrls.forEach(function(url, index) {
                fetchDataFromGoogleSheets(url, eventNames[index], index);
            });
        }

        fetchDataForAllForms();
        setInterval(fetchDataForAllForms, 60000); 
    </script>
    
       
        

</div>
</div>

</div>
    </div>

    
</body>
</html>

