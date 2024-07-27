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

<section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <!-- interactive chart -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Donut Chart aged 65 older</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

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
<!-- Page specific script -->


<script>
    // تمرير متغير PHP إلى JavaScript
    var aged65older = @json($aged65older[0]);
    var malesmoker = @json($malesmoker[0]);
    var femalesmokers = @json($femalesmokers[0]);
    var fullyPeopleVaccinated = @json($fullyPeopleVaccinated[0]);
    var newCasesSyriaMean = @json($newCasesSyriaMean[0]);
    console.log("aged65older:", aged65older);
    console.log("malesmoker:", malesmoker);
    console.log("femalesmokers:", femalesmokers);
    console.log("fullyPeopleVaccinated:", fullyPeopleVaccinated);
    console.log("newCasesSyriaMean:", newCasesSyriaMean);

</script>







<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data        = [],
        totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [
        {
          data: getRandomData(),
        }
      ],
      {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      }
    )

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on') {
        setTimeout(update, updateInterval)
      }
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [],
        cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef',
        lines : {
          fill: true //Converts the line chart to area chart
        },
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
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

                //-------------
      //- DONUT CHART aged 65 older -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var older = @json($aged65older[0]->aged_65_older);
      var donutData        = {
        labels: [
            '%',
            'aged 65 older',

        ],
        datasets: [
          {
            data: [100,older],
            backgroundColor : ['#00c0ef', 'red', ]
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      // circal df_male_smokers //////////////////
anychart.onDocumentReady(function () {
    var male = @json($malesmoker[0]->male_smokers);



// create data
var data = [
  {x: "male smokers", value: male},
  {x: "%", value: 100},

];

// create a pie chart and set the data
var chart = anychart.pie(data);

/* set the inner radius
(to turn the pie chart into a doughnut chart)*/
chart.innerRadius("30%");

// set the chart title
chart.title("Doughnut Chart male smokers");

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();
});

// circal female  smokers //////////////////
anychart.onDocumentReady(function () {
    var female = @json($femalesmokers[0]->female_smokers);
// create data
var data = [
  {x: "female  smokers", value: female},
  {x: "%", value: 100},

];

// create a pie chart and set the data
var chart = anychart.pie(data);

/* set the inner radius
(to turn the pie chart into a doughnut chart)*/
chart.innerRadius("30%");

// set the chart title
chart.title("Doughnut Chart female  smokers");

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();
});

// circal Fully people //////////////////
anychart.onDocumentReady(function () {
    var people_fully = @json($fullyPeopleVaccinated[0]->people_fully_vaccinated_per_hundred);
    var people_vaccinated = @json($fullyPeopleVaccinated[0]->people_vaccinated_per_hundred);

// create data
var data = [
  {x: "people_fully_vaccinated_per_hundred", value: people_fully},
  {x: "people_vaccinated_per_hundred", value: people_vaccinated},


];

// create a pie chart and set the data
var chart = anychart.pie(data);

/* set the inner radius
(to turn the pie chart into a doughnut chart)*/
chart.innerRadius("30%");

// set the chart title
chart.title("Doughnut Chart Fully people");

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();
});


// circal new_cases_syria_mean //////////////////
anychart.onDocumentReady(function () {
    var casesSyria = @json($newCasesSyriaMean[0]->new_cases);

// create data
var data = [
  {x: "total cases", value: casesSyria},
  {x: "%", value: 100},


];

// create a pie chart and set the data
var chart = anychart.pie(data);

/* set the inner radius
(to turn the pie chart into a doughnut chart)*/
chart.innerRadius("30%");

// set the chart title
chart.title("Doughnut Chart new cases syria mean");

// set the container id
chart.container("container");

// initiate drawing the chart
chart.draw();
});
</script>

@endsection


