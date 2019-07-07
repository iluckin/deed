# Chart `Bubble`

For complete configuration notes, please, refer to the original [Chart.js - Bubble](http://www.chartjs.org/docs/latest/charts/bubble.html) documentation.

<!-- STORY -->

### Usage

```html
<!-- include Chart.js library -->
<script src="vendor/Chart.js/Chart.min.js"></script>

<!-- chart element -->
<canvas id="bubble-chart" height="180"></canvas>

```
```js
// init chart
new Chart(document.getElementById("bubble-chart"), {
  type: 'bubble',
  data: {
    datasets: [
      {
        label: 'Bubble',
        backgroundColor: 'rgba(87, 228, 198, 0.8)',
        borderColor: '#ffffff',
        data: [
          { x: 3, y: 6, r: 5 },
          { x: 8, y: 4, r: 10 },
          { x: 4, y: 8, r: 3 },
          { x: 1, y: 5, r: 8 },
          { x: 2, y: 1, r: 12 },
          { x: 5, y: 3, r: 6 },
          { x: 3, y: 3, r: 5 },
          { x: 6, y: 6, r: 7 },
        ]
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
          ticks: {
            beginAtZero: true
          }
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
