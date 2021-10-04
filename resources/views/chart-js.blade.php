@extends('layouts.app')
@section('content')
    


<div classs="container p-5">
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <strong>If you see this page empty please fill the sales database table </strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
</div>

<div class="chart-container">
  <div class="pie-chart-container">
    <canvas id="pie-chart"></canvas>
  </div>
</div>

<!-- javascript -->
<script>
  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $chart_data; ?>`);
      var ctx = $("#pie-chart");
  
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
  
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Last Week Sales of the Company",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
  
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });
  
  });
  </script>
  
  <div class="container h2 bg-primary p-2 d-flex align-items-center justify-content-center">
    <p>This is the sales of the past few weeks</p>
  </div>
@endsection