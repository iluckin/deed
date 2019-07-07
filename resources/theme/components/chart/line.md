# Chart `Line`

For complete configuration notes, please, refer to the original [Chart.js - Line](http://www.chartjs.org/docs/latest/charts/line.html) documentation.

<!-- STORY -->

### Usage

```html
<!-- include Chart.js library -->
<script src="vendor/Chart.js/Chart.min.js"></script>

<!-- chart element -->
<canvas id="line-chart" height="180"></canvas>

```
```js
// init chart
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu'],
    datasets: [
      {
        label: 'Line',
        borderColor: 'rgba(87, 228, 198, 0.8)',
        backgroundColor: 'transparent',
        data: [3, 12, 3, 12]
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
