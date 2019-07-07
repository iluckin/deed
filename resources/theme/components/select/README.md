# Select `Single`

Custom select element based on [select2](https://select2.org/) component.

<!-- STORY -->

### Usage
```html
<!-- include Select2 library -->
<script src="vendor/select2/js/select2.js"></script>

<select id="select2-single">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
```
```js
$('#select2-single').select2({ placeholder: 'Single' })
```

### Dependencies

| Name                                                      | Install                           |
|-----------------------------------------------------------|-----------------------------------|
| [select2](https://select2.org/) | `npm install select2 --save` |

### See Also
- [select2](https://select2.org/)
