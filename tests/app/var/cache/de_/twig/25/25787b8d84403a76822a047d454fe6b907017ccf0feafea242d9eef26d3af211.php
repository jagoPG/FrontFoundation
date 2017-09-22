<?php

/* node_modules/lin3s-event-bus/README.md */
class __TwigTemplate_6cea651facbc6215106fadcbcb226b020c7a01121a43ffe1aafa31cb9bc21ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91406201156d917e407094971d8c089d64cf0283e4c342ed763be6d6155726f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91406201156d917e407094971d8c089d64cf0283e4c342ed763be6d6155726f6->enter($__internal_91406201156d917e407094971d8c089d64cf0283e4c342ed763be6d6155726f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-event-bus/README.md"));

        // line 1
        echo "# EventBusJS
> Simple but powerful event bus written in ES2015

[![npm version](https://img.shields.io/npm/v/lin3s-event-bus.svg?style=flat-square)](https://www.npmjs.com/package/lin3s-event-bus)
[![Build Status](http://img.shields.io/travis/LIN3S/EventBusJS/master.svg?style=flat-square)](https://travis-ci.org/LIN3S/EventBusJS)
[![NPM Status](http://img.shields.io/npm/dm/lin3s-event-bus.svg?style=flat-square)](https://www.npmjs.org/package/lin3s-event-bus)
[![devDependency Status](https://img.shields.io/david/LIN3S/EventBusJS.svg?style=flat-square)](https://david-dm.org/LIN3S/EventBusJS#info=dependencies)

## Installation
The recommended and the most suitable way to install is through *Yarn*:
```bash
\$ yarn add lin3s-event-bus
```
or alternatively through *NPM*:
```bash
\$ npm install --save lin3s-event-bus
```
Also, you can install through *Bower*.
```bash
\$ bower install --save lin3s-event-bus
```

## Basic Usage
```js
// your-dom-js-file.js

import {onDomReady, onDomLoaded, onWindowResized} from 'lin3s-event-bus';

const onReady = (domReadyEvent) => {
  console.log('DOM is ready!');
};

const onLoaded = (domLoadedEvent) => {
  console.log('window is loaded!');
};

const onResized = (windowResizedEvent) => {
  const
    newWindowHeight = windowResizedEvent.windowWidth,
    newWindowWidth = windowResizedEvent.windowWidth;

  console.log('window is resized!', newWindowWidth, newWindowHeight);
};

onDomReady(onReady);
onDomLoaded(onLoaded);
onWindowResized(onResized);
```

## Unsubscribing a subscriber
In the following example we are showing how to unsubscribe a previously subscribed subscriber. Every shortcut method 
returns the associated subscriber, so we can unsubscribe it later on via the EventPublisher. 
```js
// your-dom-js-file.js

import {onWindowResized, EventPublisher} from 'lin3s-event-bus';

const onResized = (windowResizedEvent) => {
  const
    newWindowHeight = windowResizedEvent.windowWidth,
    newWindowWidth = windowResizedEvent.windowWidth;

  console.log('window is resized!', newWindowWidth, newWindowHeight);
};

const windowResizedSubscriber = onWindowResized(onResized);

// later on

EventPublisher.unsubscribe(windowResizedSubscriber);
```

## Usage with priorities
In the following example there are two modules that are listening the `WindowResizedEvent` event, but the `module-b.js`
is listening the event with higher priority than the `module-a.js` so, the `module-b.js`'s onResized subscriber
always is executed before the `module-a.js`'s subscriber.
```js
// module-a.js

import {onWindowResized} from 'lin3s-event-bus';

const onResized = (windowResizedEvent) => {
  // This will be called after module-a.js onResized callback

  const
    newWindowHeight = windowResizedEvent.windowWidth,
    newWindowWidth = windowResizedEvent.windowWidth;

  console.log('Module A - window is resized!', newWindowWidth, newWindowHeight);
};

onWindowResized(onResized, 0);
```
```js
// module-b.js

import {onWindowResized} from 'lin3s-event-bus';

const onResized = (windowResizedEvent) => {
  // This will be called before module-b.js onResized callback

  const
    newWindowHeight = windowResizedEvent.windowWidth,
    newWindowWidth = windowResizedEvent.windowWidth;

  console.log('Module B - window is resized!', newWindowWidth, newWindowHeight);
};

onWindowResized(onResized, 1);
```

## Licensing Options
[![License](https://img.shields.io/badge/License-MIT-yellowgreen.svg?style=flat-square)](https://github.com/LIN3S/EventBusJS/blob/master/LICENSE)
";
        
        $__internal_91406201156d917e407094971d8c089d64cf0283e4c342ed763be6d6155726f6->leave($__internal_91406201156d917e407094971d8c089d64cf0283e4c342ed763be6d6155726f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-event-bus/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# EventBusJS
> Simple but powerful event bus written in ES2015

[![npm version](https://img.shields.io/npm/v/lin3s-event-bus.svg?style=flat-square)](https://www.npmjs.com/package/lin3s-event-bus)
[![Build Status](http://img.shields.io/travis/LIN3S/EventBusJS/master.svg?style=flat-square)](https://travis-ci.org/LIN3S/EventBusJS)
[![NPM Status](http://img.shields.io/npm/dm/lin3s-event-bus.svg?style=flat-square)](https://www.npmjs.org/package/lin3s-event-bus)
[![devDependency Status](https://img.shields.io/david/LIN3S/EventBusJS.svg?style=flat-square)](https://david-dm.org/LIN3S/EventBusJS#info=dependencies)

## Installation
The recommended and the most suitable way to install is through *Yarn*:
```bash
\$ yarn add lin3s-event-bus
```
or alternatively through *NPM*:
```bash
\$ npm install --save lin3s-event-bus
```
Also, you can install through *Bower*.
```bash
\$ bower install --save lin3s-event-bus
```

## Basic Usage
```js
// your-dom-js-file.js

import {onDomReady, onDomLoaded, onWindowResized} from 'lin3s-event-bus';

const onReady = (domReadyEvent) => {
  console.log('DOM is ready!');
};

const onLoaded = (domLoadedEvent) => {
  console.log('window is loaded!');
};

const onResized = (windowResizedEvent) => {
  const
    newWindowHeight = windowResizedEvent.windowWidth,
    newWindowWidth = windowResizedEvent.windowWidth;

  console.log('window is resized!', newWindowWidth, newWindowHeight);
};

onDomReady(onReady);
onDomLoaded(onLoaded);
onWindowResized(onResized);
```

## Unsubscribing a subscriber
In the following example we are showing how to unsubscribe a previously subscribed subscriber. Every shortcut method 
returns the associated subscriber, so we can unsubscribe it later on via the EventPublisher. 
```js
// your-dom-js-file.js

import {onWindowResized, EventPublisher} from 'lin3s-event-bus';

const onResized = (windowResizedEvent) => {
  const
    newWindowHeight = windowResizedEvent.windowWidth,
    newWindowWidth = windowResizedEvent.windowWidth;

  console.log('window is resized!', newWindowWidth, newWindowHeight);
};

const windowResizedSubscriber = onWindowResized(onResized);

// later on

EventPublisher.unsubscribe(windowResizedSubscriber);
```

## Usage with priorities
In the following example there are two modules that are listening the `WindowResizedEvent` event, but the `module-b.js`
is listening the event with higher priority than the `module-a.js` so, the `module-b.js`'s onResized subscriber
always is executed before the `module-a.js`'s subscriber.
```js
// module-a.js

import {onWindowResized} from 'lin3s-event-bus';

const onResized = (windowResizedEvent) => {
  // This will be called after module-a.js onResized callback

  const
    newWindowHeight = windowResizedEvent.windowWidth,
    newWindowWidth = windowResizedEvent.windowWidth;

  console.log('Module A - window is resized!', newWindowWidth, newWindowHeight);
};

onWindowResized(onResized, 0);
```
```js
// module-b.js

import {onWindowResized} from 'lin3s-event-bus';

const onResized = (windowResizedEvent) => {
  // This will be called before module-b.js onResized callback

  const
    newWindowHeight = windowResizedEvent.windowWidth,
    newWindowWidth = windowResizedEvent.windowWidth;

  console.log('Module B - window is resized!', newWindowWidth, newWindowHeight);
};

onWindowResized(onResized, 1);
```

## Licensing Options
[![License](https://img.shields.io/badge/License-MIT-yellowgreen.svg?style=flat-square)](https://github.com/LIN3S/EventBusJS/blob/master/LICENSE)
", "node_modules/lin3s-event-bus/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-event-bus/README.md");
    }
}
