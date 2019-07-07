# Datepicker `Date`

Date and time picker based on [flatpickr](https://github.com/chmln/flatpickr) component.

<!-- STORY -->

### Usage
```html
<!-- include Flatpickr library -->
<script src="vendor/flatpickr/flatpickr.min.js"></script>

<input id="flatpickr-date" class="form-control" placeholder="Date" type="text">
```
```js
$("#flatpickr-date").flatpickr({
  dateFormat: 'j M Y H:i',
  enableTime: true,
  time_24hr: true,
  locale: Object.assign({}, flatpickr.l10ns.default, {
    weekdays: {
      shorthand: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
    },
    rangeSeparator: " - "
  }),
  disableMobile: true
});
```

### Dependencies

| Name        | Install    |
|-------------|---------|
| [flatpickr](https://github.com/chmln/flatpickr) | `npm install flatpickr --save` |

### See Also
- [flatpickr](https://github.com/chmln/flatpickr)
