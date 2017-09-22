<?php

/* node_modules/randombytes/browser.js */
class __TwigTemplate_27a9dba28fdaaad2e8e6875883ca527fa05403a0b29493de0334388a4295b67e extends Twig_Template
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
        $__internal_d31fde7d4d489defba43d877bafd1c18c26bb5684b0cb78b913d0e112fae4ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31fde7d4d489defba43d877bafd1c18c26bb5684b0cb78b913d0e112fae4ca1->enter($__internal_d31fde7d4d489defba43d877bafd1c18c26bb5684b0cb78b913d0e112fae4ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/randombytes/browser.js"));

        // line 1
        echo "'use strict'

function oldBrowser () {
  throw new Error('secure random number generation not supported by this browser\\nuse chrome, FireFox or Internet Explorer 11')
}

var Buffer = require('safe-buffer').Buffer
var crypto = global.crypto || global.msCrypto

if (crypto && crypto.getRandomValues) {
  module.exports = randomBytes
} else {
  module.exports = oldBrowser
}

function randomBytes (size, cb) {
  // phantomjs needs to throw
  if (size > 65536) throw new Error('requested too many random bytes')
  // in case browserify  isn't using the Uint8Array version
  var rawBytes = new global.Uint8Array(size)

  // This will not work in older browsers.
  // See https://developer.mozilla.org/en-US/docs/Web/API/window.crypto.getRandomValues
  if (size > 0) {  // getRandomValues fails on IE if size == 0
    crypto.getRandomValues(rawBytes)
  }

  // XXX: phantomjs doesn't like a buffer being passed here
  var bytes = Buffer.from(rawBytes.buffer)

  if (typeof cb === 'function') {
    return process.nextTick(function () {
      cb(null, bytes)
    })
  }

  return bytes
}
";
        
        $__internal_d31fde7d4d489defba43d877bafd1c18c26bb5684b0cb78b913d0e112fae4ca1->leave($__internal_d31fde7d4d489defba43d877bafd1c18c26bb5684b0cb78b913d0e112fae4ca1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/randombytes/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

function oldBrowser () {
  throw new Error('secure random number generation not supported by this browser\\nuse chrome, FireFox or Internet Explorer 11')
}

var Buffer = require('safe-buffer').Buffer
var crypto = global.crypto || global.msCrypto

if (crypto && crypto.getRandomValues) {
  module.exports = randomBytes
} else {
  module.exports = oldBrowser
}

function randomBytes (size, cb) {
  // phantomjs needs to throw
  if (size > 65536) throw new Error('requested too many random bytes')
  // in case browserify  isn't using the Uint8Array version
  var rawBytes = new global.Uint8Array(size)

  // This will not work in older browsers.
  // See https://developer.mozilla.org/en-US/docs/Web/API/window.crypto.getRandomValues
  if (size > 0) {  // getRandomValues fails on IE if size == 0
    crypto.getRandomValues(rawBytes)
  }

  // XXX: phantomjs doesn't like a buffer being passed here
  var bytes = Buffer.from(rawBytes.buffer)

  if (typeof cb === 'function') {
    return process.nextTick(function () {
      cb(null, bytes)
    })
  }

  return bytes
}
", "node_modules/randombytes/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/randombytes/browser.js");
    }
}
