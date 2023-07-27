var ctx = $("#skillsChart");
let r_data = [];
let d_data = [];
for (var i = 3; i < records.length - 1; i++) {
  r_data.push(tags[i]);
  d_data.push(parseInt(records[i]));
}
var data = {
  labels: r_data,
  datasets: [
    {
      label: "Hours",
      backgroundColor: "#ca4444",
      borderColor: "#ca4444",
      borderWidth: 1,
      hoverBackgroundColor: "#ca4400",
      hoverBorderColor: "#ca4400",
      data: d_data
    }
  ]
};

var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: data,
  options: {
    responsive: true,
    responsiveAnimationDuration: 30,
    maintainAspectRatio: false,
    aspectRatio: 0.5,

    legend: {
      display: false
    },
    tooltips: {
      enabled: true,
      titleFontColor: '#353535',
      bodyFontColor: '#66696A',
      backgroundColor: 'rgba(239, 239, 240, 0.94)',
      borderColor: 'rgb(215, 215, 217)',
      borderWidth: 1,
      titleSpacing: 4,
      titleFontSize: 15,
      bodyFontSize: 13,
      bodySpacing: 4,
      xPadding: 10,
      yPadding: 10,
      callbacks: {
        label: function (item, data) {
          return item.yLabel + ' hours';
        }
      }
    },
    scales: {
      type: "category",
      xAxes: [{
        display: true,
        stacked: true,
        ticks: {
          display: false,
          maxTicksLimit: 4,
        }
      }],

      yAxes: [{
        minBarLength: 5,
        display: true
      }]

    }
  }
});