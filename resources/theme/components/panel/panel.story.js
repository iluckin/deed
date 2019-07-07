import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import EPanelDefault from 'elements/panel/examples/default.html'
import EPanelActions from 'elements/panel/examples/actions.html'
import EPanelCustomHead from 'elements/panel/examples/custom-head.html'

import defaultDocs from './README.md'
import actionsDocs from './actions.md'
import customHeadDocs from './custom-head.md'

storiesOf('Components/Panel', module)
  .addDecorator(withDocsCustom(defaultDocs))
  .add('Default', () => (
    <div className="row">
      <div className="col-md-4">
        {makeStory(EPanelDefault)()}
      </div>
    </div>
  ))

storiesOf('Components/Panel', module)
  .addDecorator(withDocsCustom(actionsDocs))
  .add('Actions', () => (
    <div className="row">
      <div className="col-md-4">
        {makeStory(EPanelActions)()}
      </div>
    </div>
  ))

storiesOf('Components/Panel', module)
  .addDecorator(withDocsCustom(customHeadDocs))
  .add('Custom Head', () => (
    <div className="row">
      <div className="col-md-4">
        {makeStory(EPanelCustomHead)()}
      </div>
    </div>
  ))
