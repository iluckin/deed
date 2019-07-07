import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import ENavlistDefault from 'elements/navlist/examples/default.html'
import ENavlistActiveBg from 'elements/navlist/examples/active-bg.html'
import ENavlistActiveBgTooltips from 'elements/navlist/examples/active-bg-tooltips.html'
import ENavlistActiveBold from 'elements/navlist/examples/active-bold.html'

import defaultDocs from './README.md'
import activeBgDocs from './active-bg.md'
import activeBoldDocs from './active-bold.md'

storiesOf('Components/Navlist', module)
  .addDecorator(withDocsCustom(defaultDocs))
  .add('Default', () => (
    <div style={{maxWidth: '175px'}}>
      {makeStory(ENavlistDefault)()}
    </div>
  ))

storiesOf('Components/Navlist', module)
  .addDecorator(withDocsCustom(activeBgDocs))
  .add('Active Background', () => {
    return (
      <div className="d-flex justify-content-between" style={{maxWidth: '265px'}}>
        <div style={{flexGrow: 1}}>
          {makeStory(ENavlistActiveBg)()}
        </div>
        <div className="ml-3">
          {makeStory(ENavlistActiveBgTooltips, initTooltips)()}
        </div>
      </div>
    )
  })

const initTooltips = () => {
  $('#e-nav-list--tooltips [data-toggle="tooltip"]').tooltip({ delay: 0 })
}

storiesOf('Components/Navlist', module)
  .addDecorator(withDocsCustom(activeBoldDocs))
  .add('Active Bold', () => (
    <div style={{maxWidth: '175px'}}>
      {makeStory(ENavlistActiveBold)()}
    </div>
  ))
