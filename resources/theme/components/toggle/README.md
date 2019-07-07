# Toggle

Custom toggle element based on [mohithg-switchery](https://github.com/mohithg/switchery) library.

<!-- STORY -->

### Usage
```html
<!-- include mohithg-switchery library -->
<script src="vendor/mohithg-switchery/switchery.min.js"></script>

<input id="toggle" type="checkbox" checked />
```
```js
new Switchery(document.getElementById('toggle'), {
  size: 'small',
  color: 'rgb(89, 205, 144)',
  secondaryColor: 'rgb(173, 181, 189)',
  jackColor: '#ffffff',
})
```

### Dependencies

| Name                                                     | Install                           |
|----------------------------------------------------------|-----------------------------------|
| [mohithg-switchery](https://github.com/mohithg/switchery) | `npm install mohithg-switchery --save` |

### See Also
- [mohithg-switchery](https://github.com/mohithg/switchery)
