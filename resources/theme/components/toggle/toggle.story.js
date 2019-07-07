import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import EToggleOn from 'elements/toggle/examples/on.html'

import defaultDocs from './README.md'

storiesOf('Components/Toggle', module)
  .addDecorator(withDocsCustom(defaultDocs))
  .add('Default', () => (
    <div className="d-flex">
      <div className="card p-3">
        {makeStory(EToggleOn, () => {
          new Switchery(document.getElementById('toggle-on'), {
            size: 'small',
            color: 'rgb(89, 205, 144)',
            secondaryColor: 'rgb(173, 181, 189)',
            jackColor: '#ffffff',
          })
        })()}
      </div>
    </div>
  ))
