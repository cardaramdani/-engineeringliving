



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Grafik Pemakaian Listrik Unit</title>
     


  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item font-weight-bold border border-primary rounded">
        <a class="nav-link text-primary" href="{{ url('/homescreen')}}">Home</a>
      </li>
      <li class="nav-item active font-weight-bold">
        <a class="nav-link" href="{{ url('/SOP')}}">Standar Oprasional Prosedure<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown font-weight-bold">
           <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LogSheet
           </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/genset')}}">Genset</a>
          <a class="dropdown-item" href="{{ url('/PowerHouse')}}">Power House</a>
          <a class="dropdown-item" href="{{ url('/amr')}}">AMR</a>
          <a class="dropdown-item" href="{{ url('/stp')}}">STP</a>
          <a class="dropdown-item" href="{{ url('/pdam')}}">PDAM</a>
          <a class="dropdown-item" href="{{ url('/transferpump')}}">Transfer Pump</a>
          <a class="dropdown-item" href="{{ url('/boosterpump')}}">Booster Pump</a>
          <a class="dropdown-item" href="{{ url('/sumpitpump')}}">Sumpit Pump</a>
          <a class="dropdown-item" href="{{ url('/firepump')}}">Fire Pump</a>
          <a class="dropdown-item" href="{{ url('/logbook')}}">LogBook</a>
          
          
          </div>
      </li>
      <li class="nav-item dropdown font-weight-bold">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Utility
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/watermeterunit')}}">Water Meter Unit</a>
          <a class="dropdown-item" href="{{ url('/kwhmeterunit')}}">Kwh Meter Unit</a>
          
        </div>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="beritaacara">Berita Acara</a>
      </li>
    </ul>
    <form  class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Unit" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <h1 align="center">persentase Pemakaian Listrik Unit</h1>
    <div id="container"></div>
</body>
  
<script src="https://code.highcharts.com/highcharts.js">TEST</script>
<script type="text/javascript">
    var Kwhmeterunit =  <?php echo json_encode($Kwhmeterunit) ?>;
    Highcharts.chart('container', 
    {
        title:    {text: 'New konsumsi listrik unit Growth, 2020'},
        subtitle: {text: 'Source: engineeringcitraliving.com'},
        xAxis:    {categories: 
                              [ 'jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'ags', 'sep', 'okt', 
                          'nov', 'des']},
        yAxis:    {title: {text: 'Total pemaikaian per bulan'}},
        legend:   {layout: 'vertical',align: 'right',verticalAlign: 'middle'},
        plotOptions: {series: {allowPointSelect: true}},
        series: [{name:  'New pemaikaian',data: Kwhmeterunit}],
        responsive: {rules: [{condition: {maxWidth: 500},
                chartOptions: {legend: {layout: 'horizontal',align: 'center',verticalAlign: 'bottom'}}}]}
                  });
</script>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  
</html>