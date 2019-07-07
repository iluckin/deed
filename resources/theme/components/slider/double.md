# Slider `Double`

Custom slider element based on [ion-rangeslider](https://github.com/IonDen/ion.rangeSlider) library.

<!-- STORY -->

### Usage
```html
<!-- include ionRangeSlider library -->
<script src="vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

<input type="text" id="ion-slider-double" />
```
```js
$("#ion-slider-double").ionRangeSlider({
  type: "double",
  min: 0,
  max: 100,
  from: 25,
  to: 75,
});
```

### Dependencies

| Name        | Install    |
|-------------|---------|
| [ion-rangeslider](https://github.com/IonDen/ion.rangeSlider) | `npm install ion-rangeslider --save` |

### See Also
- [ion-rangeslider](https://github.com/IonDen/ion.rangeSlider)
