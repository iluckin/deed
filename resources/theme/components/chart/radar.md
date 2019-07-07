# Chart `Radar`

For complete configuration notes, please, refer to the original [Chart.js - Radar](http://www.chartjs.org/docs/latest/charts/radar.html) documentation.

<!-- STORY -->

### Usage

```html
<!-- include Chart.js library -->
<script src="vendor/Chart.js/Chart.min.js"></script>

<!-- chart element -->
<canvas id="radar-chart" height="180"></canvas>
```
```js
// init chart
new Chart(document.getElementById("radar-chart"), {
  type: 'radar',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    datasets: [
      {
        label: 'Radar',
        borderColor: 'rgba(87, 228, 198, 0.8)',
        backgroundColor: 'rgba(87, 228, 198, 0.5)',
        data: [12.5, 12.5, 12.5, 12.5, 12.5, 12.5]
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    legend: {
      display: false
    },
    scale: {
      ticks: {
        beginAtZero: true
      }
    }
  }
})
```

### Dependencies

| Name        | Install    |
|-------------|---------|
| [Chart.js](http://www.chartjs.org/) | `npm install chart.js --save` |


### See Also
- [Chart.js](http://www.chartjs.org/)
