<?php

/* node_modules/align-text/index.js */
class __TwigTemplate_5ce44d37cf8c9d0e34f5ef3cb3c759c067d79554450bd17173d80a4cf8f46a1d extends Twig_Template
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
        $__internal_458c1d87d8732a3901d1514e49a9ee41f5404aec1b4b57bb8f508f2f15c2ffd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458c1d87d8732a3901d1514e49a9ee41f5404aec1b4b57bb8f508f2f15c2ffd5->enter($__internal_458c1d87d8732a3901d1514e49a9ee41f5404aec1b4b57bb8f508f2f15c2ffd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/align-text/index.js"));

        // line 1
        echo "/*!
 * align-text <https://github.com/jonschlinkert/align-text>
 *
 * Copyright (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var typeOf = require('kind-of');
var repeat = require('repeat-string');
var longest = require('longest');

module.exports = function alignText(val, fn) {
  var lines, type = typeOf(val);

  if (type === 'array') {
    lines = val;
  } else if (type === 'string') {
    lines = val.split(/(?:\\r\\n|\\n)/);
  } else {
    throw new TypeError('align-text expects a string or array.');
  }

  var fnType = typeOf(fn);
  var len = lines.length;
  var max = longest(lines);
  var res = [], i = 0;

  while (len--) {
    var line = String(lines[i++]);
    var diff;

    if (fnType === 'function') {
      diff = fn(line.length, max.length, line, lines, i);
    } else if (fnType === 'number') {
      diff = fn;
    } else {
      diff = max.length - line.length;
    }

    if (typeOf(diff) === 'number') {
      res.push(repeat(' ', diff) + line);
    } else if (typeOf(diff) === 'object') {
      var result = repeat(diff.character || ' ', diff.indent || 0);
      res.push((diff.prefix || '') + result + line);
    }
  }

  if (type === 'array') return res;
  return res.join('\\n');
};
";
        
        $__internal_458c1d87d8732a3901d1514e49a9ee41f5404aec1b4b57bb8f508f2f15c2ffd5->leave($__internal_458c1d87d8732a3901d1514e49a9ee41f5404aec1b4b57bb8f508f2f15c2ffd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/align-text/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * align-text <https://github.com/jonschlinkert/align-text>
 *
 * Copyright (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var typeOf = require('kind-of');
var repeat = require('repeat-string');
var longest = require('longest');

module.exports = function alignText(val, fn) {
  var lines, type = typeOf(val);

  if (type === 'array') {
    lines = val;
  } else if (type === 'string') {
    lines = val.split(/(?:\\r\\n|\\n)/);
  } else {
    throw new TypeError('align-text expects a string or array.');
  }

  var fnType = typeOf(fn);
  var len = lines.length;
  var max = longest(lines);
  var res = [], i = 0;

  while (len--) {
    var line = String(lines[i++]);
    var diff;

    if (fnType === 'function') {
      diff = fn(line.length, max.length, line, lines, i);
    } else if (fnType === 'number') {
      diff = fn;
    } else {
      diff = max.length - line.length;
    }

    if (typeOf(diff) === 'number') {
      res.push(repeat(' ', diff) + line);
    } else if (typeOf(diff) === 'object') {
      var result = repeat(diff.character || ' ', diff.indent || 0);
      res.push((diff.prefix || '') + result + line);
    }
  }

  if (type === 'array') return res;
  return res.join('\\n');
};
", "node_modules/align-text/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/align-text/index.js");
    }
}
