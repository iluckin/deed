import React from 'react'
import { storiesOf } from '@storybook/react'
import { withDocsCustom } from '.storybook/utils/readme'
import { makeStory } from '.storybook/utils/story'

import ENavbarDefault from 'elements/navbar/examples/default.html'
import ENavbarNavCenter from 'elements/navbar/examples/nav-in-center.html'
import ENavbarBrandCenter from 'elements/navbar/examples/brand-in-center.html'

import defaultDocs from './README.md'
import navCenterDocs from './nav-in-center.md'
import brandCenterDocs from './brand-in-center.md'

storiesOf('Components/Navbar', module)
  .addDecorator(withDocsCustom(defaultDocs))
  .add('Default', makeStory(ENavbarDefault))

storiesOf('Components/Navbar', module)
  .addDecorator(withDocsCustom(navCenterDocs))
  .add('Nav in the Center', makeStory(ENavbarNavCenter))

storiesOf('Components/Navbar', module)
  .addDecorator(withDocsCustom(brandCenterDocs))
  .add('Brand in the Center', makeStory(ENavbarBrandCenter))
