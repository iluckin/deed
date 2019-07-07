# Chart `Mixed`

For complete configuration notes, please, refer to the original [Chart.js - Mixed](http://www.chartjs.org/docs/latest/charts/mixed.html) documentation.

<!-- STORY -->

### Usage

```html
<!-- include Chart.js library -->
<script src="vendor/Chart.js/Chart.min.js"></script>

<!-- chart element -->
<canvas id="mixed-chart" height="180"></canvas>
```
```js
// init chart
new Chart(document.getElementById("mixed-chart"), {
  type: 'bar',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu'],
    datasets: [
      {
        type: 'line',
        label: 'Line',
        borderColor: 'rgba(255, 146, 139, 0.8)',
        backgroundColor: 'transparent',
        data: [3, 12, 3, 12]
      },
      {
        type: 'bar',
        label: 'Bar',
        backgroundColor: 'rgba(87, 228, 198, 0.8)',
        borderColor: '#ffffff',
        data: [11, 8, 13, 6]
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
