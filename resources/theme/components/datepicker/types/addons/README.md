# Datepicker `Addons`

Date and time picker based on [flatpickr](https://github.com/chmln/flatpickr) component.

<!-- STORY -->

### Usage
```html
<!-- include Flatpickr library -->
<script src="vendor/flatpickr/flatpickr.min.js"></script>

<div class="input-group" id="flatpickr-addons">
  <span class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-fw fa-calendar"></i></span>
  </span>
  <input class="form-control" placeholder="Addons" type="text" data-input>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" data-clear>
      <i class="fa fa-close"></i>
    </button>
  </div>
</div>
```
```js
$("#flatpickr-addons").flatpickr({
  wrap: true,
  locale: Object.assign({}, flatpickr.l10ns.default, {
    weekdays: {
      shorthand: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
    },
    rangeSeparator: " - "
  }),
  disableMobile: true
})
```

### Dependencies

| Name        | Install    |
|-------------|---------|
| [flatpickr](https://github.com/chmln/flatpickr) | `npm install flatpickr --save` |

### See Also
- [flatpickr](https://github.com/chmln/flatpickr)
