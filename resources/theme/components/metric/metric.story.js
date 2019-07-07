import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import EMetricUsers from 'elements/metric/examples/users.html'
import EMetricIncomeDark from 'elements/metric/examples/income-dark.html'
import EMetricTrend from 'elements/metric/examples/income-trend.html'

import defaultDocs from './README.md'
import trendDocs from './trend.md'

storiesOf('Components/Metric', module)
  .addDecorator(withDocsCustom(defaultDocs))
  .add('Default', () => (
    <div className="d-flex">
      <div className="mr-3">
        {makeStory(EMetricUsers)()}
      </div>
      {makeStory(EMetricIncomeDark)()}
    </div>
  ))

storiesOf('Components/Metric', module)
  .addDecorator(withDocsCustom(trendDocs))
  .add('With Trend', () => (
    <div className="row">
      <div className="col-md-3">
        {makeStory(EMetricTrend, () => {
          new Chart(document.getElementById("income-trend-chart"), {
            type: 'line',
            data: {
              labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
              datasets: [
                {
                  label: "Income Trend",
                  backgroundColor: '#f5f6f8',
                  borderColor: '#686e71',
                  data: [
                    Math.round(Math.random() * 10000),
                    Math.round(Math.random() * 10000),
                    Math.round(Math.random() * 10000),
                    Math.round(Math.random() * 10000),
                    Math.round(Math.random() * 10000),
                    Math.round(Math.random() * 10000),
                    Math.round(Math.random() * 10000),
                  ],
                  fill: 'start',
                }
              ],
            },
            options: {
              maintainAspectRatio: false,
              elements: {
                arc: {
                  borderWidth: 3
                }
              },
              legend: { display: false },
              tooltips: { enabled: false },
              layout: {
                padding: {
                  left: 10,
                  right: 10
                }
              },
              scales: {
                xAxes: [
                  { display: false }
                ],
                yAxes: [
                  { display: false }
                ]
              }
            }
          })
        })()}
      </div>
    </div>
  ))
