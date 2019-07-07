import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import EDatepickerDate from 'elements/datepicker/examples/date.html'
import EDatepickerDatetime from 'elements/datepicker/examples/datetime.html'
import EDatepickerInline from 'elements/datepicker/examples/inline.html'
import EDatepickerTime from 'elements/datepicker/examples/time.html'
import EDatepickerRange from 'elements/datepicker/examples/range.html'
import EDatepickerAddons from 'elements/datepicker/examples/addons.html'

import dateDocs from './README.md'
import inlineDocs from './types/inline/README.md'
import datetimeDocs from './types/datetime/README.md'
import timeDocs from './types/time/README.md'
import rangeDocs from './types/range/README.md'
import addonsDocs from './types/addons/README.md'

storiesOf('Components/Datepicker', module)
  .addDecorator(withDocsCustom(dateDocs))
  .add('Date', () => (
    <div className="row">
      <div className="col-md-4 col-lg-3">
        <div className="card p-3">
          {makeStory(EDatepickerDate, () => {
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
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Datepicker', module)
  .addDecorator(withDocsCustom(datetimeDocs))
  .add('Datetime', () => (
    <div className="row">
      <div className="col-md-4 col-lg-3">
        <div className="card p-3">
          {makeStory(EDatepickerDatetime, () => {
            $("#flatpickr-datetime").flatpickr({
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
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Datepicker', module)
  .addDecorator(withDocsCustom(timeDocs))
  .add('Time', () => (
    <div className="row">
      <div className="col-md-4 col-lg-3">
        <div className="card p-3">
          {makeStory(EDatepickerTime, () => {
            $("#flatpickr-time").flatpickr({
              enableTime: true,
              noCalendar: true,
              time_24hr: true,
              locale: Object.assign({}, flatpickr.l10ns.default, {
                weekdays: {
                  shorthand: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                },
                rangeSeparator: " - "
              }),
              disableMobile: true
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Datepicker', module)
  .addDecorator(withDocsCustom(rangeDocs))
  .add('Range', () => (
    <div className="row">
      <div className="col-md-4 col-lg-3">
        <div className="card p-3">
          {makeStory(EDatepickerRange, () => {
            $("#flatpickr-range").flatpickr({
              mode: 'range',
              dateFormat: 'd M y',
              locale: Object.assign({}, flatpickr.l10ns.default, {
                weekdays: {
                  shorthand: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                },
                rangeSeparator: " - "
              }),
              disableMobile: true
            })
          })()}
        </div>
      </div>
    </div>
  ))

storiesOf('Components/Datepicker', module)
  .addDecorator(withDocsCustom(inlineDocs))
  .add('Inline', () => (
    <div className="d-flex">
      {makeStory(EDatepickerInline, () => {
        $("#calendar").flatpickr({
          inline: true ,
          locale: Object.assign({}, flatpickr.l10ns.default, {
            weekdays: {
              shorthand: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            },
            rangeSeparator: " - "
          }),
          disableMobile: true
        })
      })()}
    </div>
  ))

storiesOf('Components/Datepicker', module)
  .addDecorator(withDocsCustom(addonsDocs))
  .add('Addons', () => (
    <div className="row">
      <div className="col-md-4 col-lg-3">
        <div className="card p-3">
          {makeStory(EDatepickerAddons, () => {
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
          })()}
        </div>
      </div>
    </div>
  ))
