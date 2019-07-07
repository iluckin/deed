# Metric `Trend`

The extension of the default [Metric](/?selectedKind=Components/Metric&selectedStory=Default) component with the chart of previous values.

<!-- STORY -->

### Usage

```html
<!-- include Chart.js library -->
<script src="vendor/Chart.js/Chart.min.js"></script>

<div class="e-metric card">
  <div class="card-body">
    <div class="e-metric__main">
      <span class="e-metric__ico fa-stack">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-stack-1x fa-usd fa-inverse"></i>
      </span>
      <div class="e-metric__text px-2">
        <span class="e-metric__value h5 m-0">$4,280</span>
        <div class="e-metric__title"><small class="text-muted">Income</small></div>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
      <div class="btn-group">
        <button class="btn btn-sm btn-outline-secondary active">Day</button>
        <button class="btn btn-sm btn-outline-secondary">Week</button>
        <button class="btn btn-sm btn-outline-secondary">Month</button>
      </div>
    </div>
    <div class="mt-3 position-relative">
      <canvas id="income-trend-chart" height="51"></canvas>
    </div>
  </div>
</div>
```
```js
// init chart
new Chart(document.getElementById("income-trend-chart"), {
  type: 'line',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    datasets: [
      {
        label: "Income Trend",
        backgroundColor: '#f5f6f8',
        borderColor: '#686e71',
        data: [
          Math.round(Math.random() * 10000),
          Math.round(Math.random() * 10000),
          Math.round(Math.random() * 10000),
          Math.round(Math.random() * 10000),
          Math.round(Math.random() * 10000),
          Math.round(Math.random() * 10000),
          Math.round(Math.random() * 10000),
        ],
        fill: 'start',
      }
    ],
  },
  options: {
    maintainAspectRatio: false,
    elements: {
      arc: {
        borderWidth: 3
      }
    },
    legend: { display: false },
    tooltips: { enabled: false },
    layout: {
      padding: {
        left: 10,
        right: 10
      }
    },
    scales: {
      xAxes: [
        { display: false }
      ],
      yAxes: [
        { display: false }
      ]
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
