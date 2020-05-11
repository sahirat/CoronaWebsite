
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corona project</title>
   <?php
        require("links.php");
        include("style.css");
    ?>
</head>
<body onload="fetch()">
         
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"><h1>COR<img src="corona.png">NA</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
               
            <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#symptoms">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php#prevention" >Prevention</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Updates</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="INDIA.php">India</a>
                            <a class="dropdown-item" href="global.php">Global</a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="index.php#charts">Charts</a>
                    </li>
                     
                    <li class="nav-item">
                        <a class="nav-link " href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>



        <div class="container-fluid " id="updates">
            <div class="live text-center ">
                <h1>LIVE CORONA UPDATES OF THE WORLD</h1>
            </div>
            <div class="table-responsive container-fluid">
                <table class="table table-bordered table-striped text-center" id="tbval">
                    <tr>
                        <th>Last Update</th>
                        <th>State</th>
                        <th>Active</th>
                        <th>Confirmed</th>
                        <th>Recovered</th>
                        <th>Deaths</th>
                    </tr>
                </table>
            </div>
        </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
function fetch(){
    $.get("https://api.covid19india.org/data.json",
    function(data){
        
    var tbval=document.getElementById('tbval');
    for(var i=1;i<(data['statewise'].length);i++){
        var x=tbval.insertRow();
        x.insertCell( 0);
        tbval.rows[i].cells[0].innerHTML=data['statewise'][i]['lastupdatedtime'];

        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML=data['statewise'][i]['state'];
        
        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML=data['statewise'][i]['active'];

         x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML=data['statewise'][i]['confirmed'];

         x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML=data['statewise'][i]['recovered'];

         x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML=data['statewise'][i]['deaths'];

        //  x.insertCell( 5);
        // tbval.rows[i].cells[5].innerHTML=data['statewise'][i-1]['NewRecovered'];

        //  x.insertCell( 6);
        // tbval.rows[i].cells[6].innerHTML=data['statewise'][i-1]['NewDeaths'];
           }
       }
    );
}
</script>

</body>
</html>