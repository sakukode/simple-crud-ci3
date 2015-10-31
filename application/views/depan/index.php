<!-- Main component for a primary marketing message or call to action -->
<div class="col-md-6">
<?php if($laptop): ?>
<div id="laptop" style="width: 600px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
  $(function () {

  var dataLaptop = <?php echo $laptop; ?>;

    // Create the chart
        laptopChart = new Highcharts.Chart({
            chart: {
                renderTo: 'laptop',
                type: 'pie'
            },
            title: {
                text: 'Persentase Kondisi Perangkat Laptop'
            },
            subtitle: {
                text: 'berdasarkan status'
            },
            yAxis: {
                title: {
                    text: 'Total Perangkat'
                }
            },
            plotOptions: {
                pie: {
                    shadow: false
                }
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.point.name +'</b>: '+ this.y;
                }
            },
            series: [{
                name: 'Status',
                data: dataLaptop,
                size: '80%',
                innerSize: '40%',
                showInLegend:true,
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }]
        });    
  });
</script>
<?php else: ?>
<h3>Data not found</h3>
<?php endif; ?>
</div>

<div class="col-md-6">
<?php if($komputer): ?>
<div id="komputer" style="width: 600px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
  $(function () {

  var dataKomputer = <?php echo $komputer; ?>;

    // Create the chart
        komputerChart = new Highcharts.Chart({
            chart: {
                renderTo: 'komputer',
                type: 'pie'
            },
            title: {
                text: 'Persentase Kondisi Perangkat Komputer'
            },
            subtitle: {
                text: 'berdasarkan status'
            },
            yAxis: {
                title: {
                    text: 'Total Perangkat'
                }
            },
            plotOptions: {
                pie: {
                    shadow: false
                }
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.point.name +'</b>: '+ this.y;
                }
            },
            series: [{
                name: 'Status',
                data: dataKomputer,
                size: '80%',
                innerSize: '40%',
                showInLegend:true,
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }]
        });    
  });
</script>
<?php else: ?>
<h3>Data not found</h3>
<?php endif; ?>
</div>
