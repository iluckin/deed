# Navlist `active-bg`

A variant of the [Navlist](/?selectedKind=Components/Navlist&selectedStory=Default) component, whose active items has a colored background.

<!-- STORY -->

### Usage

```html
<div class="card p-3">
  <div class="e-navlist e-navlist--active-bg">
    <ul class="nav">
      <li class="nav-item">
        <a href="" class="active nav-link">
          <i class="fa fa-fw fa-home mr-1"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fa fa-fw fa-bookmark mr-1"></i>
          <span>Bookmarks</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fa fa-fw fa-envelope mr-1"></i>
          <span>Messages</span>
          <span class="badge badge-light ml-1">4</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fa fa-fw fa-cog mr-1"></i>
          <span>Settings</span>
        </a>
      </li>
    </ul>
  </div>
</div>
```
#### With Tooltips
```html
<div class="card py-3 px-2">
  <div id="e-nav-list--tooltips" class="e-navlist e-navlist--active-bg">
    <ul class="nav">
      <li class="nav-item">
        <a href="" class="active nav-link" data-toggle="tooltip" data-placement="right" title="Home">
          <i class="fa fa-fw fa-home"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link" data-toggle="tooltip" data-placement="right" title="Bookmarks">
          <i class="fa fa-fw fa-bookmark"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link" data-toggle="tooltip" data-placement="right" title="Messages">
          <i class="fa fa-fw fa-envelope"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link" data-toggle="tooltip" data-placement="right" title="Settings">
          <i class="fa fa-fw fa-cog"></i>
        </a>
      </li>
    </ul>
  </div>
</div>
<script type="text/javascript">
$(function () {
  $('#e-nav-list--tooltips [data-toggle="tooltip"]').tooltip({ delay: 0 })
})
</script>

```

### See Also
- [Bootstrap - Nav](http://getbootstrap.com/docs/4.1/components/navs/)
- [Bootstrap - Tooltips](http://getbootstrap.com/docs/4.1/components/tooltips/)
