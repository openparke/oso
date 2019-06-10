var ctx = document.getElementById("myChart").getContext("2d");
Chart.defaults.global.legend.display = false;
var myChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "वैशाख",
      "जेष्ठ",
      " अषाढ",
      "श्रावण",
      "भाद्र",
      "आश्विन",
      "कात्तिक",
      " मङसिर",
      "पौष",
      "माघ",
      "फाल्गुण",
      "चैत्र"
    ],
    datasets: [
      {
        label: "",
        data: [90, 418, 549, 646, 727, 880, 310, 90, 418, 549, 646, 727, 880],
        backgroundColor: [
          "purple",
          "maroon",
          "darkblue",
          "darkgreen",
          "red",
          "orange",
          "yellow",
          "skyblue",
          "gold",
          "brown",
          "silver",
          "pink"
        ],
        borderWidth: []
      }
    ]
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true
          }
        }
      ],
      xAxes: [
        {
          gridLines: {
            display: false
          }
        }
      ]
    }
  }
});
