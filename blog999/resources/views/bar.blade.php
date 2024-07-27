@extends('layouts.master')
@section('title')


     @stop

     @section('css')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="  {{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="  {{ asset('assets/css/adminlte.min.css')}}">

@endsection

@section('title_page1')



@endsection

@section('title_page22')



@endsection

@section('content')

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
</head>
<body>
    <div id="container" style="width: 100%; height: 600px; margin: 0 auto;"></div>
    <script>
        anychart.onDocumentReady(function () {

        var format ="EEEE, dd MMMM yyyy";
        var locale = "en-us";

        anychart.format.outputLocale("en-us");
        anychart.format.outputDateTimeFormat("EEEE, dd MMMM yyyy");

        var timeZoneOffset = new Date().getTimezoneOffset();

        var data = [
      {id: 'BR', name: 'Brazil', size: 15.041,  description: 'total cases : 15.041'},
      {id: 'CN', name: 'China', size: 20, description: 'total cases : 20'},
      {

      },

      {id: 'FR', name: 'France', size: 12.846, description: 'total cases : 12.846'},

      {id: 'DE', name: 'Germany', size: 12.001, description: 'total cases : 12.001'},
      {id: 'IN', name: 'India', size: 19.633, description: 'total cases : 19.633'},

    ];

    data.sort(function (a, b) {
      return new Date(a['date']).getTime() - new Date(b['date']).getTime();
    });

    // creates data set
    var dataSet = anychart.data.set(data);

    var title = 'Map of the top 5 in places\n' ;

    // creates Map Chart
    var chart = anychart.map();
    // sets geodata using https://cdn.anychart.com/releases/v8/geodata/custom/world/world.js
    chart.geoData(anychart.maps.world);

    chart.padding().top(10);

    chart.credits()
      .enabled(true)
      .url('//en.wikipedia.org/wiki/Lists_of_earthquakes')
      .text('Data source: http://en.wikipedia.org/wiki/Lists_of_earthquakes')
      .logoSrc('//en.wikipedia.org/static/favicon/wikipedia.ico');

    // sets Chart Title
    chart.title()
      .enabled(true)
      .text(title);

    chart.interactivity().selectionMode(false);

    // sets bubble max size settings
    chart.minBubbleSize(3);
    chart.maxBubbleSize(15);

    // creates bubble series
    var series = chart.bubble(dataSet);
    // sets series geo id field settings
    series.geoIdField('iso_a2');
    // sets series settings
    series.labels(false);
    series.fill('#ff8f00 0.6')
      .stroke('1 #ff6f00 0.9');
    series.hovered()
      .fill('#78909c')
      .stroke('1 #546e7a 1');

    // sets tooltip
    var tooltipSettings = {
      background: {fill: 'white', stroke: '#c1c1c1', corners: 3, cornerType: 'ROUND'},
      padding: [8, 13, 10, 13]
    };
    series.tooltip(tooltipSettings);
    series.tooltip().useHtml(true);
    series.tooltip().title().fontColor('#7c868e');

    series.tooltip().format(function () {
      var span_for_value = '<span style="color: #545f69; font-size: 12px; font-weight: bold">';
      var span_for_date = '<br/><span style="color: #7c868e; font-size: 11px">';
      var span_for_description = '<br/><span style="color: #7c868e; font-size: 12px; font-style: italic">"';
      if (this.getData('description') != '')
        return span_for_value + this.size + 'M </span></strong>'
          + span_for_description + this.getData('description') + '"</span>'
          + span_for_date + anychart.format.dateTime(this.getData('date'), format, timeZoneOffset, locale) + '</span>';
      else
        return span_for_value + this.size + 'M </span></strong>'
          + span_for_date + anychart.format.dateTime(this.getData('date'), format, timeZoneOffset, locale) + '</span>';
    });

    // set container id for the chart
    chart.container('container');

    // initiate chart drawing
    chart.draw();
        });
    </script>
</body>
</html>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- interactive chart -->

          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection

@section('scripts')

<!-- jQuery -->
<script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('assets/js/adminlte.min.js') }}"></script>
<!-- FLOT CHARTS -->
<script src="{{ URL::asset('assets/plugins/flot/jquery.flot.js') }}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{ URL::asset('assets/plugins/flot/plugins/jquery.flot.resize.js') }}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{ URL::asset('assets/plugins/flot/plugins/jquery.flot.pie.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('assets/js/demo.js') }}"></script>

<script>
    // تمرير متغير PHP إلى JavaScript
    var username = @json($top5[0]);
    var icuHospPatients = @json($icuHospPatients[0]);
    console.log("Username:", username);
    console.log("icuHospPatients:", icuHospPatients);
</script>

<!-- Page specific script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server


    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }

    // barchart df_top5 //////////////////
    anychart.onDocumentReady(function () {

        var ua1 = @json($top5[0]->total_cases);
        var ua2 = @json($top5[0]->total_deaths);
        var ub1 = @json($top5[1]->total_cases);
        var ub2= @json($top5[1]->total_deaths);
        var uc1 = @json($top5[2]->total_cases);
        var uc2= @json($top5[2]->total_deaths);
        var ud1 = @json($top5[3]->total_cases);
        var ud2= @json($top5[3]->total_deaths);
        var ue1 = @json($top5[4]->total_cases);
        var ue2= @json($top5[4]->total_deaths);
// create a data set
var data = anychart.data.set([
  ["China", ua2, ua1], // "china , total deaths , total cases"
  ["India", ub2, ub1],
  ["Brazil", uc2, uc1],
  ["France", ud2, ud1],
  ["Germany", ue2, ue1]
]);

// map the data
var seriesData_1 = data.mapAs({x: 0, value: 1});
var seriesData_2 = data.mapAs({x: 0, value: 2});

// create a chart
var chart = anychart.column();

// create the first series, set the data and name
var series1 = chart.column(seriesData_1);
series1.name("total deaths");

// create the second series, set the data and name
var series2 = chart.column(seriesData_2);
series2.name("total cases");

// set the padding between columns
chart.barsPadding(-0.5);

// set the padding between column groups
chart.barGroupsPadding(2);

// set the chart title
chart.title("Column Chart  top5");

// set the titles of the axes
chart.xAxis().title("");
chart.yAxis().title("");

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();
});




    // barchart table icu_hosp_patients //////////////////
    anychart.onDocumentReady(function () {
    var ih1 = @json($icuHospPatients[0]->total_cases);
    var ih2 = @json($icuHospPatients[0]->hosp_patients);
    var o1o = @json($icuHospPatients[0]->icu_patients);
    var ih3 = @json($icuHospPatients[1]->total_cases);
    var ih4 = @json($icuHospPatients[1]->hosp_patients);
    var o2o = @json($icuHospPatients[1]->icu_patients);
    var ih5 = @json($icuHospPatients[2]->total_cases);
    var ih6 = @json($icuHospPatients[2]->hosp_patients);
    var o3o = @json($icuHospPatients[2]->icu_patients);
    var ih7 = @json($icuHospPatients[3]->total_cases);
    var ih8 = @json($icuHospPatients[3]->hosp_patients);
    var o4o = @json($icuHospPatients[3]->icu_patients);
    var ih9 = @json($icuHospPatients[4]->total_cases);
    var ih10 = @json($icuHospPatients[4]->hosp_patients);
    var o5o = @json($icuHospPatients[4]->icu_patients);
    var ih11 = @json($icuHospPatients[5]->total_cases);
    var ih12 = @json($icuHospPatients[5]->hosp_patients);
    var o6o = @json($icuHospPatients[5]->icu_patients);
    var ih13 = @json($icuHospPatients[6]->total_cases);
    var ih14 = @json($icuHospPatients[6]->hosp_patients);
    var o7o = @json($icuHospPatients[6]->icu_patients);
    var ih15 = @json($icuHospPatients[7]->total_cases);
    var ih16 = @json($icuHospPatients[7]->hosp_patients);
    var o8o = @json($icuHospPatients[7]->icu_patients);
    var ih17 = @json($icuHospPatients[8]->total_cases);
    var ih18 = @json($icuHospPatients[8]->hosp_patients);
    var o9o = @json($icuHospPatients[8]->icu_patients);
    var ih19 = @json($icuHospPatients[9]->total_cases);
    var ih20 = @json($icuHospPatients[9]->hosp_patients);
    var o10o = @json($icuHospPatients[9]->icu_patients);
    var ih21 = @json($icuHospPatients[10]->total_cases);
    var ih22 = @json($icuHospPatients[10]->hosp_patients);
    var o11o = @json($icuHospPatients[10]->icu_patients);
    var ih23 = @json($icuHospPatients[11]->total_cases);
    var ih24 = @json($icuHospPatients[11]->hosp_patients);
    var o12o = @json($icuHospPatients[11]->icu_patients);
    var ih25 = @json($icuHospPatients[12]->total_cases);
    var ih26 = @json($icuHospPatients[12]->hosp_patients);
    var o13o = @json($icuHospPatients[12]->icu_patients);
    var ih27 = @json($icuHospPatients[13]->total_cases);
    var ih28 = @json($icuHospPatients[13]->hosp_patients);
    var o14o = @json($icuHospPatients[13]->icu_patients);
    var ih29 = @json($icuHospPatients[14]->total_cases);
    var ih30 = @json($icuHospPatients[14]->hosp_patients);
    var o15o = @json($icuHospPatients[14]->icu_patients);
    var ih31 = @json($icuHospPatients[15]->total_cases);
    var ih32 = @json($icuHospPatients[15]->hosp_patients);
    var o16o = @json($icuHospPatients[15]->icu_patients);
    var ih33 = @json($icuHospPatients[16]->total_cases);
    var ih34 = @json($icuHospPatients[16]->hosp_patients);
    var o17o = @json($icuHospPatients[16]->icu_patients);
    var ih35 = @json($icuHospPatients[17]->total_cases);
    var ih36 = @json($icuHospPatients[17]->hosp_patients);
    var o18o = @json($icuHospPatients[17]->icu_patients);
    var ih37 = @json($icuHospPatients[18]->total_cases);
    var ih38 = @json($icuHospPatients[18]->hosp_patients);
    var o19o = @json($icuHospPatients[18]->icu_patients);
    var ih39 = @json($icuHospPatients[19]->total_cases);
    var ih40 = @json($icuHospPatients[19]->hosp_patients);
    var o20o = @json($icuHospPatients[19]->icu_patients);
    var ih41 = @json($icuHospPatients[20]->total_cases);
    var ih42 = @json($icuHospPatients[20]->hosp_patients);
    var o21o = @json($icuHospPatients[20]->icu_patients);
    var ih43 = @json($icuHospPatients[21]->total_cases);
    var ih44 = @json($icuHospPatients[21]->hosp_patients);
    var o22o = @json($icuHospPatients[21]->icu_patients);
    var ih45 = @json($icuHospPatients[22]->total_cases);
    var ih46 = @json($icuHospPatients[22]->hosp_patients);
    var o23o = @json($icuHospPatients[22]->icu_patients);
    var ih47 = @json($icuHospPatients[23]->total_cases);
    var ih48 = @json($icuHospPatients[23]->hosp_patients);
    var o24o = @json($icuHospPatients[23]->icu_patients);
    var ih49 = @json($icuHospPatients[24]->total_cases);
    var ih50 = @json($icuHospPatients[24]->hosp_patients);
    var o25o = @json($icuHospPatients[24]->icu_patients);
// create a data set
var data = anychart.data.set([
  ["Australia", ih1, ih2,o1o],
  ["Austria", ih3, ih4,o2o],
  ["Belgium", ih5, ih6,o3o],
  ["Bolivia", ih7, ih8,o4o],
  ["Bulgaria", ih9, ih10,o5o],
  ["Canada", ih11, ih12,o6o],
  ["Cyprus", ih13, ih14,o7o],
  ["Czechia", ih15, ih16,o8o],
  ["Denmark", ih17, ih18,o9o],
  ["Estonia", ih19, ih20,o10o],
  ["Finland", ih21, ih22,o11o],
  ["France", ih23, ih24,o12o],
  ["Ireland", ih25, ih26,o13o],
  ["Italy", ih27, ih28,o14o],
  ["Japan", ih29, ih30,o15o],
  ["Lithuania", ih31, ih32,o16o],
  ["Luxembourg", ih33, ih34,o17o],
  ["Malaysia", ih35, ih36,o18o],
  ["Netherlands", ih37, ih38,o19o],
  ["Portugal", ih39, ih40,o20o],
  ["Romania", ih41, ih42,o21o],
  ["Serbia", ih43, ih44,o22o],
  ["Slovakia", ih45, ih46,o23o],
  ["Slovenia", ih47, ih48,o24o],
  ["South Africa", ih49, ih50,o25o],
]);

// map the data
var seriesData_1 = data.mapAs({x: 0, value: 1});
var seriesData_2 = data.mapAs({x: 0, value: 2});
var seriesData_3 = data.mapAs({x: 0, value: 3});

// create a chart
var chart = anychart.column();

// create the first series, set the data and name
var series1 = chart.column(seriesData_1);
series1.name("total cases");

// create the second series, set the data and name
var series2 = chart.column(seriesData_2);
series2.name("hosp patients");

// create the second series, set the data and name
var series3 = chart.column(seriesData_3);
series3.name("icu patients");


// set the padding between columns
chart.barsPadding(-0.5);

// set the padding between column groups
chart.barGroupsPadding(2);

// set the chart title
chart.title("Column Chart   icu hosp patients");

// set the titles of the axes
chart.xAxis().title("");
chart.yAxis().title("");

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();
});



</script>

@endsection


