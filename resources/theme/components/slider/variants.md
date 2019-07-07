# Slider `Variants`

Custom slider element based on [ion-rangeslider](https://github.com/IonDen/ion.rangeSlider) library.

<!-- STORY -->

### Usage
```html
<!-- include ionRangeSlider library -->
<script src="vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

<input type="text" id="ion-slider-primary" />
<input type="text" id="ion-slider-secondary" />
<input type="text" id="ion-slider-success" />
<input type="text" id="ion-slider-info" />
<input type="text" id="ion-slider-warning" />
<input type="text" id="ion-slider-danger" />
<input type="text" id="ion-slider-light" />
<input type="text" id="ion-slider-dark" />
```
```js
$("#ion-slider-primary").ionRangeSlider({ from: 50, extra_classes: ['primary'] });
$("#ion-slider-secondary").ionRangeSlider({ from: 50, extra_classes: ['secondary'] });
$("#ion-slider-success").ionRangeSlider({ from: 50, extra_classes: ['success'] });
$("#ion-slider-info").ionRangeSlider({ from: 50, extra_classes: ['info'] });
$("#ion-slider-warning").ionRangeSlider({ from: 50, extra_classes: ['warning'] });
$("#ion-slider-danger").ionRangeSlider({ from: 50, extra_classes: ['danger'] });
$("#ion-slider-light").ionRangeSlider({ from: 50, extra_classes: ['light'] });
$("#ion-slider-dark").ionRangeSlider({ from: 50, extra_classes: ['dark'] });
```

### Dependencies

| Name        | Install    |
|-------------|---------|
| [ion-rangeslider](https://github.com/IonDen/ion.rangeSlider) | `npm install ion-rangeslider --save` |

### See Also
- [ion-rangeslider](https://github.com/IonDen/ion.rangeSlider)
