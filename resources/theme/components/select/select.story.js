import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import ESelectSingle from 'elements/select/examples/single.html'
import ESelectMultiple from 'elements/select/examples/multiple.html'

import singleDocs from './README.md'
import multipleDocs from './multiple.md'

storiesOf('Components/Select', module)
  .addDecorator(withDocsCustom(singleDocs))
  .add('Single', () => (
    <div className="row">
      <div className="col-md-4 col-xl-3">
        {makeStory(ESelectSingle, () => {
          $('#select2-single').select2({ placeholder: 'Single' })
        })()}
      </div>
    </div>
  ))

storiesOf('Components/Select', module)
  .addDecorator(withDocsCustom(multipleDocs))
  .add('Multiple \\ Tags', () => (
    <div className="row">
      <div className="col-md-4 col-xl-3">
        {makeStory(ESelectMultiple, () => {
          $('#select2-multiple').select2({ placeholder: 'Tags' })
        })()}
      </div>
    </div>
  ))
