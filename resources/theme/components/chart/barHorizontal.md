# Chart `Horizontal Bar`

For complete configuration notes, please, refer to the original [Chart.js - Bar](http://www.chartjs.org/docs/latest/charts/bar.html) documentation.

<!-- STORY -->

### Usage

```html
<!-- include Chart.js library -->
<script src="vendor/Chart.js/Chart.min.js"></script>

<!-- chart element -->
<canvas id="bar-horizontal-chart" height="180"></canvas>

```
```js
// init chart
new Chart(document.getElementById("bar-horizontal-chart"), {
  type: 'horizontalBar',
  data: {
    labels: ['Mon', 'Tue', 'Wed'],
    datasets: [
      {
        label: 'Horizontal Bar',
        backgroundColor: 'rgba(87, 228, 198, 0.8)',
        borderColor: '#ffffff',
        data: [13, 9, 5]
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    scales: {
      xAxes: [
        {
          ticks: {
            beginAtZero: true
          }
        }
      ],
      yAxes: [
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
