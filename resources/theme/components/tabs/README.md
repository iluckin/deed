# Tabs

Redesigned Bootstrap's [Tabs](http://getbootstrap.com/docs/4.1/components/navs/#tabs) component.

<!-- STORY -->

### Usage

```html
<div class="card">
  <div class="card-body pt-2">
    <div class="e-tabs">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a href="#tabs-d-home" data-toggle="tab" class="active nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#tabs-d-settings" data-toggle="tab" class="nav-link">Settings</a>
        </li>
        <li class="nav-item">
          <a href="#tabs-d-inbox" data-toggle="tab" class="nav-link">Inbox <span class="badge badge-light ml-1">2</span></a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="tabs-d-home" class="tab-pane active"></div>
        <div id="tabs-d-settings" class="tab-pane"></div>
        <div id="tabs-d-inbox" class="tab-pane"></div>
      </div>
    </div>
  </div>
</div>
```

### See Also
- [Bootstrap - Tabs](http://getbootstrap.com/docs/4.1/components/navs/#tabs)
