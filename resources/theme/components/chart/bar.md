# Chart `Bar`

For complete configuration notes, please, refer to the original [Chart.js - Bar](http://www.chartjs.org/docs/latest/charts/bar.html) documentation.

<!-- STORY -->

### Usage

```html
<!-- include Chart.js library -->
<script src="vendor/Chart.js/Chart.min.js"></script>

<!-- chart element -->
<canvas id="bar-chart" height="180"></canvas>

```
```js
// init chart
new Chart(document.getElementById("bar-chart"), {
  type: 'bar',
  data: {
    labels: ['Mon', 'Tue', 'Wed'],
    datasets: [
      {
        label: 'Bar',
        backgroundColor: 'rgba(87, 228, 198, 0.8)',
        borderColor: '#ffffff',
        data: [7, 10, 13]
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
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
          categoryPercentage: 0.6,
          barPercentage: 0.4,
        }
      ]
    },
  }
})
```

### Dependencies

| Name        | Install    |
|-------------|---------|
| [Chart.js](http://www.chartjs.org/) | `npm install chart.js --save` |


### See Also
- [Chart.js](http://www.chartjs.org/)
