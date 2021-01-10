<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Provinsi</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="styleglobal.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="#">Covid</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    <a class="nav-link active" href="index.php">Home</a>
      <a class="nav-link" href="global.php">Data Global</a>
      <a class="nav-link" href="provinsi.php">Provinsi</a>
    </div>
  </div>
  </div>
</nav>

<?php
    $url = "https://api.kawalcorona.com/indonesia/provinsi/";
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    $result = json_decode($response, true);
    $provinsi =$result[1]['attributes']["Provinsi"];
    $positif = $result[1]['attributes']['Kasus_Posi'];
    $sembuh = $result[1]['attributes']['Kasus_Semb'];
    $meninggal = $result[1]['attributes']['Kasus_Meni'];
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container"></div>
</div>


<div class="row">
  <div class="card ml-4">
    <div class="col-sm-6" style="padding-top: 20px; padding-bottom: 20px;">
    <h3>Tabel Kasus Per Provinsi DI Indonesia</h3>
    <hr>
      <table class="table table-stripped table-hover datatab ml-4">
      <thead>
        <tr>
          <th>ID</th>
          <th>Provinsi</th>
          <th>Positif</th>
          <th>Sembuh</th>
          <th>Meninggal</th>                         
        </tr>
      </thead>  
      <tbody>

<?php $i = 1; ?>
<?php foreach ($result as $row) : ?>

      <tr>
        <td><?=$i;?></td>
        <td><?php echo $row['attributes']['Provinsi']?></td>
        <td><?php echo $row['attributes']['Kasus_Posi']?></td>
        <td><?php echo $row['attributes']['Kasus_Semb']?></td>
        <td><?php echo $row['attributes']['Kasus_Meni']?></td>

<?php $i++;?>
<?php endforeach; ?>

            </div>
          </div>
      </div>
    </div>

      </tbody>
      </table>          
      </div>
      </div>

<div class="col-md-5">
   <!-- DONUT CHART -->
   <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">10 Provinsi Teratas Kasus Positif</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart2" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            

       <!-- DONUT CHART -->
       <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">10 Provinsi Teratas Kasus Sembuh</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            </div>

            <div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">10 Provinsi Teratas Kasus Meninggal</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart1" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="chart.js/Chart.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>

<script>
//- AREA CHART -

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

var areaChartData = {
  labels  :[

        <?php for ($a = 0; $a < 10 ; $a++)
        {
        echo  "'".$result[$a]['attributes']['Provinsi']."' ".",";
}?>
  ],
  datasets: [
    {
      label               : 'Confirmed',
      backgroundColor     : 'rgba(60,141,188,0.9)',
      borderColor         : 'rgba(60,141,188,0.8)',
      pointRadius          : false,
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                : [    <?php for ($a = 0; $a < 10; $a++)
        {
        echo $result[$a]['attributes']['Provinsi'].",";
}?>]
    },
    {
      label               : 'Grafik Kasus Meninggal',
      backgroundColor     : 'rgba(60,141,188,0.9)',
      borderColor         : 'rgba(60,141,188,0.8)',
      pointRadius          : false,
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                :[100,40,60]
    }
  ]
}

var areaChartOptions = {
  maintainAspectRatio : false,
  responsive : true,
  legend: {
    display: false
  },
  scales: {
    xAxes: [{
      gridLines : {
        display : false,
      }
    }],
    yAxes: [{
      gridLines : {
        display : false,
      }
    }]
  }
}

// This will get the first returned node in the jQuery collection.
var areaChart       = new Chart(areaChartCanvas, { 
  type: 'line',
  data: areaChartData, 
  options: areaChartOptions
})

</script>
<script>
    $(function () {
      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutData        = {
        labels: [
          <?php for ($a = 0; $a < 10 ; $a++)
        {
        echo  "'".$result[$a]['attributes']['Provinsi']."' ".",";
}?>
        ],
        datasets: [
          {
            data: [    <?php for ($a = 0; $a < 10; $a++)
        {
        echo $result[$a]['attributes']['Kasus_Semb'].",";
}?>],
            backgroundColor :['lightsalmon', 'black', 'darksalmon', 
                              'coral', 'darkorange', 'orangered',
                              'lawngreen', 'cartreuse', 'limegreen',
                              'aqua', 'aquamarine', 'turquoise',
                              'lightskyblue', 'blue', 'navy',
                              'violet', 'blueviolet', 'indigo',
                              'brown', 'maroon'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions      
      })
    })
    </script>

<script>
    $(function () {
      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart1').get(0).getContext('2d')
      var donutData        = {
        labels: [
          <?php for ($a = 0; $a < 10 ; $a++)
        {
        echo  "'".$result[$a]['attributes']['Provinsi']."' ".",";
}?>
        ],
        datasets: [
          {
            data: [    <?php for ($a = 0; $a < 10; $a++)
        {
        echo $result[$a]['attributes']['Kasus_Meni'].",";
}?>],
            backgroundColor :['lightsalmon', 'yellow', 'darksalmon', 
                              'coral', 'darkorange', 'orangered',
                              'lawngreen', 'cartreuse', 'limegreen',
                              'aqua', 'aquamarine', 'turquoise',
                              'lightskyblue', 'blue', 'navy',
                              'violet', 'blueviolet', 'indigo',
                              'brown', 'maroon'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions      
      })
    })
    </script>

<script>
    $(function () {
      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart2').get(0).getContext('2d')
      var donutData        = {
        labels: [
          <?php for ($a = 0; $a < 10 ; $a++)
        {
        echo  "'".$result[$a]['attributes']['Provinsi']."' ".",";
}?>
        ],
        datasets: [
          {
            data: [    <?php for ($a = 0; $a < 10; $a++)
        {
        echo $result[$a]['attributes']['Kasus_Meni'].",";
}?>],
            backgroundColor :['lightsalmon', 'salmon', 'darksalmon', 
                              'coral', 'darkorange', 'orangered',
                              'lawngreen', 'cartreuse', 'limegreen',
                              'aqua', 'aquamarine', 'turquoise',
                              'lightskyblue', 'blue', 'navy',
                              'violet', 'blueviolet', 'indigo',
                              'brown', 'maroon'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions      
      })
    })
    </script>
</html>