import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import ESliderSingle from 'elements/slider/examples/single.html'
import ESliderDouble from 'elements/slider/examples/double.html'

import singleDocs from './README.md'
import doubleDocs from './double.md'
import variantsDocs from './variants.md'

storiesOf('Components/Slider', module)
  .addDecorator(withDocsCustom(singleDocs))
  .add('Single', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(ESliderSingle, () => {
            $("#ion-slider-single").ionRangeSlider({ from: 50 })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Slider', module)
  .addDecorator(withDocsCustom(doubleDocs))
  .add('Double', () => (
    <div className="row">
      <div className="col-md-4">
        <div className="card p-3">
          {makeStory(ESliderDouble, () => {
            $("#ion-slider-double").ionRangeSlider({
              type: "double",
              min: 0,
              max: 100,
              from: 25,
              to: 75,
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Slider', module)
  .addDecorator(withDocsCustom(variantsDocs))
  .add('Variants', () => (
    <div className="row w-100">
      <div className="col-md-3 mb-3">
        <div className="card p-2">
          {makeStory('<input id="ion-slider-single-primary" type="text" />', () => {
            $("#ion-slider-single-primary").ionRangeSlider({
              from: 50,
              extra_classes: ['primary']
            })
          })()}
        </div>
      </div>
      <div className="col-md-3 mb-3">
        <div className="card p-2">
          {makeStory('<input id="ion-slider-single-secondary" type="text" />', () => {
            $("#ion-slider-single-secondary").ionRangeSlider({
              from: 50,
              extra_classes: ['secondary']
            })
          })()}
        </div>
      </div>
      <div className="col-md-3 mb-3">
        <div className="card p-2">
          {makeStory('<input id="ion-slider-single-success" type="text" />', () => {
            $("#ion-slider-single-success").ionRangeSlider({
              from: 50,
              extra_classes: ['success']
            })
          })()}
        </div>
      </div>
      <div className="col-md-3 mb-3">
        <div className="card p-2">
          {makeStory('<input id="ion-slider-single-info" type="text" />', () => {
            $("#ion-slider-single-info").ionRangeSlider({
              from: 50,
              extra_classes: ['info']
            })
          })()}
        </div>
      </div>
      <div className="col-md-3 mb-3 mb-md-0">
        <div className="card p-2">
          {makeStory('<input id="ion-slider-single-warning" type="text" />', () => {
            $("#ion-slider-single-warning").ionRangeSlider({
              from: 50,
              extra_classes: ['warning']
            })
          })()}
        </div>
      </div>
      <div className="col-md-3 mb-3 mb-md-0">
        <div className="card p-2">
          {makeStory('<input id="ion-slider-single-danger" type="text" />', () => {
            $("#ion-slider-single-danger").ionRangeSlider({
              from: 50,
              extra_classes: ['danger']
            })
          })()}
        </div>
      </div>
      <div className="col-md-3 mb-3 mb-md-0">
        <div className="card p-2">
          {makeStory('<input id="ion-slider-single-light" type="text" />', () => {
            $("#ion-slider-single-light").ionRangeSlider({
              from: 50,
              extra_classes: ['light']
            })
          })()}
        </div>
      </div>
      <div className="col-md-3">
        <div className="card p-2">
          {makeStory('<input id="ion-slider-single-dark" type="text" />', () => {
            $("#ion-slider-single-dark").ionRangeSlider({
              from: 50,
              extra_classes: ['dark']
            })
          })()}
        </div>
      </div>
    </div>
  ))
