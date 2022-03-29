<?php
foreach ($data['charts'] as $chart) {
  $title = $chart['title'];
?>
  <div class="chart">

    <canvas id="chart-<?php echo $title ?>"></canvas>
  </div>
<?php }; ?>





<script>
  const chartsArrayFromBackend = <?php echo json_encode($data['charts']); ?>;

  let delayed;

  Object.entries(chartsArrayFromBackend).forEach(([key, value]) => {
    let chart = value

    const ctx = document.getElementById('chart-' + chart.title).getContext('2d');
    const labels = chart.labels;
    const datasets = chart.datasets;
    const datasetsArray = [];

    Object.entries(datasets).forEach(([key, value]) => {
      let dataset = value;
      console.log("dataset => ", dataset);
      datasetsArray.push({
        label: dataset.label,
        data: dataset.data,
        backgroundColor: dataset.backgroundColor,
        borderColor: dataset.borderColor,
        borderWidth: dataset.borderWidth,
        pointBackgroundColor: dataset.pointBackgroundColor,
        tension: 0.3,
      });
    });

    const chartData = {
      labels: labels,
      datasets: datasetsArray,
    };

    const chartOptions = {
      radius: 3,
      hoverRadius: 8,
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: "Total " + chart.title,
        }
      }
    };

    const chartRender = new Chart(ctx, {
      type: 'line',
      data: chartData,
      options: chartOptions,
    });

  });
</script>