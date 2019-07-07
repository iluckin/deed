# Metric

A tiny component for displaying single values of the important parameters.

<!-- STORY -->

### Usage

```html
<!-- Default -->
<div class="e-metric card mb-3">
  <div class="card-body">
    <div class="e-metric__main">
      <span class="e-metric__ico fa-stack">
        <i class="fa fa-circle fa-stack-2x text-light"></i>
        <i class="fa fa-stack-1x fa-user"></i>
      </span>
      <div class="e-metric__text px-2">
        <span class="e-metric__value h5 m-0">3,200</span>
        <div class="e-metric__title"><small class="text-muted">Users</small></div>
      </div>
    </div>
  </div>
</div>

<!-- Dark -->
<div class="e-metric e-metric--dark card mb-3">
  <div class="card-body">
    <div class="e-metric__main">
      <span class="e-metric__ico fa-stack">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-stack-1x fa-usd fa-inverse"></i>
      </span>
      <div class="e-metric__text px-2">
        <span class="e-metric__value h5 m-0">8,400</span>
        <div class="e-metric__title"><small class="text-muted">Income</small></div>
      </div>
    </div>
  </div>
</div>
```
