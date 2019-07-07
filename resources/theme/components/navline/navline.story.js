import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import ENavlineDefault from 'elements/navline/examples/default.html'
import ENavlineArrow from 'elements/navline/examples/arrow.html'

import defaultDocs from './README.md'
import arrowDocs from './arrow.md'

storiesOf('Components/Navline', module)
  .addDecorator(withDocsCustom(defaultDocs))
  .add('Default', makeStory(ENavlineDefault))

storiesOf('Components/Navline', module)
  .addDecorator(withDocsCustom(arrowDocs))
  .add('Arrow', makeStory(ENavlineArrow))
