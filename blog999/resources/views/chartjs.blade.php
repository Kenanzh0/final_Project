@extends('layouts.master')
@section('title')


     @stop

     @section('css')

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css')}}">

@endsection

@section('title_page1')



@endsection

@section('title_page22')



@endsection

@section('content')
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- AREA CHART -->

              <!-- /.card -->

              <!-- DONUT CHART -->

              <!-- /.card -->

              <!-- PIE CHART -->


              <!-- /.card -->

            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- LINE CHART -->

              <!-- /.card -->

              <!-- BAR CHART -->
              <!-- /.card -->

              <!-- STACKED BAR CHART -->
              <!-- /.card -->

            </div>
            <!-- /.col (RIGHT) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="utf-8" />
          <link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css">
          <link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css">
          <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
          <script src="https://cdn.anychart.com/geodata/2.1.0/custom/world/world.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
          <script src="https://cdn.anychart.com/releases/v8/js/anychart-map.min.js"></script>
          <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
          <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
          <script src="https://cdn.anychart.com/releases/v8/locales/en-us.js"></script>


        </script>

      </head>
      <body>
          <div id="container" style="width: 100%; height: 600px; margin: 0 auto;"></div>


          </script>
      </body>
      </html>
@endsection

@section('scripts')

<!-- jQuery -->

<script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ChartJS -->
<script src="{{ URL::asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE App -->

<script src="{{ URL::asset('assets/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('assets/js/demo.js') }}"></script>
<!-- Page specific script -->
    </script>

    <script>
        // تمرير متغير PHP إلى JavaScript
        var junsyria = @json($junsyria[0]);
        var janegypt = @json($janegypt[0]);
        console.log("junsyria:", junsyria);
        console.log("janegypt:", janegypt);


    </script>


<script>

    $(function () {


      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */







      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = $.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp1
      barChartData.datasets[1] = temp0

      var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
      }

      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })

      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
      var stackedBarChartData = $.extend(true, {}, barChartData)

      var stackedBarChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        scales: {
          xAxes: [{
            stacked: true,
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }

      new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
      })
    })









// barcharts jun_syria //////////////////
anychart.onDocumentReady(function () {
    var syria1 = @json($junsyria[0]->date);
    var syria2 = @json($junsyria[0]->new_cases);
    var syria3 = @json($junsyria[1]->date);
    var syria4 = @json($junsyria[1]->new_cases);
    var syria5 = @json($junsyria[2]->date);
    var syria6 = @json($junsyria[2]->new_cases);
    var syria7 = @json($junsyria[3]->date);
    var syria8 = @json($junsyria[3]->new_cases);
    var syria9 = @json($junsyria[4]->date);
    var syria10 = @json($junsyria[4]->new_cases);
    var syria11 = @json($junsyria[5]->date);
    var syria12 = @json($junsyria[5]->new_cases);
    var syria13 = @json($junsyria[6]->date);
    var syria14 = @json($junsyria[6]->new_cases);
    var syria15 = @json($junsyria[7]->date);
    var syria16 = @json($junsyria[7]->new_cases);
    var syria17 = @json($junsyria[8]->date);
    var syria18 = @json($junsyria[8]->new_cases);
    var syria19 = @json($junsyria[9]->date);
    var syria20 = @json($junsyria[9]->new_cases);
    var syria21 = @json($junsyria[10]->date);
    var syria22 = @json($junsyria[10]->new_cases);
    var syria23 = @json($junsyria[11]->date);
    var syria24 = @json($junsyria[11]->new_cases);
    var syria25 = @json($junsyria[12]->date);
    var syria26 = @json($junsyria[12]->new_cases);
    var syria27 = @json($junsyria[13]->date);
    var syria28 = @json($junsyria[13]->new_cases);
    var syria29 = @json($junsyria[14]->date);
    var syria30 = @json($junsyria[14]->new_cases);
    var syria31 = @json($junsyria[15]->date);
    var syria32 = @json($junsyria[15]->new_cases);
    var syria33 = @json($junsyria[16]->date);
    var syria34 = @json($junsyria[16]->new_cases);
    var syria35 = @json($junsyria[17]->date);
    var syria36 = @json($junsyria[17]->new_cases);
    var syria37 = @json($junsyria[18]->date);
    var syria38 = @json($junsyria[18]->new_cases);
    var syria39 = @json($junsyria[19]->date);
    var syria40 = @json($junsyria[19]->new_cases);
    var syria41 = @json($junsyria[20]->date);
    var syria42 = @json($junsyria[20]->new_cases);
    var syria43 = @json($junsyria[21]->date);
    var syria44 = @json($junsyria[21]->new_cases);
    var syria45 = @json($junsyria[22]->date);
    var syria46 = @json($junsyria[22]->new_cases);
    var syria47 = @json($junsyria[23]->date);
    var syria48 = @json($junsyria[23]->new_cases);
    var syria49 = @json($junsyria[24]->date);
    var syria50 = @json($junsyria[24]->new_cases);

// create data
var data = [
  {x:syria1, value: syria2},
  {x: syria3, value: syria4},
  {x: syria5, value: syria6},
  {x: syria7, value: syria8},
  {x: syria9, value: syria10},
  {x: syria11, value: syria12},
  {x: syria13, value: syria14},
  {x: syria15, value: syria16},
  {x: syria17, value: syria18},
  {x: syria19, value: syria20},
  {x: syria21, value: syria22},
  {x: syria23, value: syria24},
  {x: syria25, value: syria26},
  {x: syria27, value: syria28},
  {x: syria29, value: syria30},
  {x: syria31, value: syria32},
  {x: syria33, value: syria34},
  {x: syria35, value: syria36},
  {x: syria37, value: syria38},
  {x: syria39, value: syria40},
  {x: syria41, value: syria42},
  {x: syria43, value: syria44},
  {x: syria45, value: syria46},
  {x: syria47, value: syria48},
  {x: syria49, value: syria50}
];

// create a chart
var chart = anychart.line();

// create a spline series and set the data
var series = chart.spline(data);

// set the chart title
chart.title("barcharts jun_syria");

// set the titles of the axes
var xAxis = chart.xAxis();
xAxis.title("");
var yAxis = chart.yAxis();
yAxis.title("jun_syria");

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();
});

// barcharts jan_Egypt //////////////////
anychart.onDocumentReady(function () {
    var egypt1 = @json($janegypt[0]->date);
    var egypt2 = @json($janegypt[0]->new_cases);
    var egypt3 = @json($janegypt[1]->date);
    var egypt4 = @json($janegypt[1]->new_cases);
    var egypt5 = @json($janegypt[2]->date);
    var egypt6 = @json($janegypt[2]->new_cases);
    var egypt7 = @json($janegypt[3]->date);
    var egypt8 = @json($janegypt[3]->new_cases);
    var egypt9 = @json($janegypt[4]->date);
    var egypt10 = @json($janegypt[4]->new_cases);
    var egypt11 = @json($janegypt[5]->date);
    var egypt12 = @json($janegypt[5]->new_cases);
    var egypt13 = @json($janegypt[6]->date);
    var egypt14 = @json($janegypt[6]->new_cases);
    var egypt15 = @json($janegypt[7]->date);
    var egypt16 = @json($janegypt[7]->new_cases);
    var egypt17 = @json($janegypt[8]->date);
    var egypt18 = @json($janegypt[8]->new_cases);
    var egypt19 = @json($janegypt[9]->date);
    var egypt20 = @json($janegypt[9]->new_cases);
    var egypt21 = @json($janegypt[10]->date);
    var egypt22 = @json($janegypt[10]->new_cases);
    var egypt23 = @json($janegypt[11]->date);
    var egypt24 = @json($janegypt[11]->new_cases);
    var egypt25 = @json($janegypt[12]->date);
    var egypt26 = @json($janegypt[12]->new_cases);
    var egypt27 = @json($janegypt[13]->date);
    var egypt28 = @json($janegypt[13]->new_cases);
    var egypt29 = @json($janegypt[14]->date);
    var egypt30 = @json($janegypt[14]->new_cases);
    var egypt31 = @json($janegypt[15]->date);
    var egypt32 = @json($janegypt[15]->new_cases);
    var egypt33 = @json($janegypt[16]->date);
    var egypt34 = @json($janegypt[16]->new_cases);
    var egypt35 = @json($janegypt[17]->date);
    var egypt36 = @json($janegypt[17]->new_cases);
    var egypt37 = @json($janegypt[18]->date);
    var egypt38 = @json($janegypt[18]->new_cases);
    var egypt39 = @json($janegypt[19]->date);
    var egypt40 = @json($janegypt[19]->new_cases);
    var egypt41 = @json($janegypt[20]->date);
    var egypt42 = @json($janegypt[20]->new_cases);
    var egypt43 = @json($janegypt[21]->date);
    var egypt44 = @json($janegypt[21]->new_cases);
    var egypt45 = @json($janegypt[22]->date);
    var egypt46 = @json($janegypt[22]->new_cases);
    var egypt47 = @json($janegypt[23]->date);
    var egypt48 = @json($janegypt[23]->new_cases);
    var egypt49 = @json($janegypt[24]->date);
    var egypt50 = @json($janegypt[24]->new_cases);
// create data
var data = [
    {x:egypt1, value: egypt2},
  {x: egypt3, value: egypt4},
  {x: egypt5, value: egypt6},
  {x: egypt7, value: egypt8},
  {x: egypt9, value: egypt10},
  {x: egypt11, value: egypt12},
  {x: egypt13, value: egypt14},
  {x: egypt15, value: egypt16},
  {x: egypt17, value: egypt18},
  {x: egypt19, value: egypt20},
  {x: egypt21, value: egypt22},
  {x: egypt23, value: egypt24},
  {x: egypt25, value: egypt26},
  {x: egypt27, value: egypt28},
  {x: egypt29, value: egypt30},
  {x: egypt31, value: egypt32},
  {x: egypt33, value: egypt34},
  {x: egypt35, value: egypt36},
  {x: egypt37, value: egypt38},
  {x: egypt39, value: egypt40},
  {x: egypt41, value: egypt42},
  {x: egypt43, value: egypt44},
  {x: egypt45, value: egypt46},
  {x: egypt47, value: egypt48},
  {x: egypt49, value: egypt50}
];

// create a chart
var chart = anychart.line();

// create a spline series and set the data
var series = chart.spline(data);

// set the chart title
chart.title("barcharts jan_Egypt");

// set the titles of the axes
var xAxis = chart.xAxis();
xAxis.title("");
var yAxis = chart.yAxis();
yAxis.title("jan_Egypt");

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();
});
  </script>

@endsection


