import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import ETabsDefault from 'elements/tabs/examples/default.html'
import ETabsNested from 'elements/tabs/examples/nested.html'

import defaultDocs from './README.md'
import nestedDocs from './nested.md'

storiesOf('Components/Tabs', module)
  .addDecorator(withDocsCustom(defaultDocs))
  .add('Default', makeStory(ETabsDefault))

storiesOf('Components/Tabs', module)
  .addDecorator(withDocsCustom(nestedDocs))
  .add('Nested', makeStory(ETabsNested))
