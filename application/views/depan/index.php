<!-- Main component for a primary marketing message or call to action -->
<?php if($models): ?>
<div id="container" style="width: 600px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
  $(function () {

  var dataChart = <?php echo $models; ?>;


    // Create the chart
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'pie'
            },
            title: {
                text: 'Persentase Kondisi Perangkat'
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
                data: dataChart,
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