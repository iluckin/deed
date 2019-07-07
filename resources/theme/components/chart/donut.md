# Chart `Donut`

For complete configuration notes, please, refer to the original [Chart.js - Doughnut and Pie](http://www.chartjs.org/docs/latest/charts/doughnut.html) documentation.

<!-- STORY -->

### Usage

```html
<!-- include Chart.js library -->
<script src="vendor/Chart.js/Chart.min.js"></script>

<!-- chart element -->
<canvas id="donut-chart" height="223"></canvas>

```
```js
// init chart
new Chart(document.getElementById("donut-chart"), {
  type: 'doughnut',
  data: {
    labels: ['Mon', 'Tue', 'Wed'],
    datasets: [
      {
        label: 'Donut',
        backgroundColor: [
          'rgba(255, 146, 139, 0.8)',
          'rgba(87, 228, 198, 0.8)',
          'rgba(60, 145, 218, 0.7)'
        ],
        hoverBorderColor: '#fff',
        data: [5, 10, 8]
      }
    ]
  },
  options: {
    maintainAspectRatio: false,
    legend: {
      position: 'bottom',
      labels: {
        usePointStyle: true,
        padding: 20
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
