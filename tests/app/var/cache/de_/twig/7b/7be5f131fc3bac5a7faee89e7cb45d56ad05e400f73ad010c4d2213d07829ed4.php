<?php

/* node_modules/fsevents/node_modules/gauge/progress-bar.js */
class __TwigTemplate_d13e3c6179ead4b02d656311226ce368b99bc713a55c5a86dc78235f5f54262c extends Twig_Template
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
        $__internal_63f21d2ca84fa55c262bac3bde6e4300d8d519c084a30328676b6b714d12d02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f21d2ca84fa55c262bac3bde6e4300d8d519c084a30328676b6b714d12d02e->enter($__internal_63f21d2ca84fa55c262bac3bde6e4300d8d519c084a30328676b6b714d12d02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/gauge/progress-bar.js"));

        // line 1
        echo "'use strict'
var validate = require('aproba')
var renderTemplate = require('./render-template.js')
var wideTruncate = require('./wide-truncate')
var stringWidth = require('string-width')

module.exports = function (theme, width, completed) {
  validate('ONN', [theme, width, completed])
  if (completed < 0) completed = 0
  if (completed > 1) completed = 1
  if (width <= 0) return ''
  var sofar = Math.round(width * completed)
  var rest = width - sofar
  var template = [
    {type: 'complete', value: repeat(theme.complete, sofar), length: sofar},
    {type: 'remaining', value: repeat(theme.remaining, rest), length: rest}
  ]
  return renderTemplate(width, template, theme)
}

// lodash's way of repeating
function repeat (string, width) {
  var result = ''
  var n = width
  do {
    if (n % 2) {
      result += string
    }
    n = Math.floor(n / 2)
    /*eslint no-self-assign: 0*/
    string += string
  } while (n && stringWidth(result) < width)

  return wideTruncate(result, width)
}
";
        
        $__internal_63f21d2ca84fa55c262bac3bde6e4300d8d519c084a30328676b6b714d12d02e->leave($__internal_63f21d2ca84fa55c262bac3bde6e4300d8d519c084a30328676b6b714d12d02e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/gauge/progress-bar.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var validate = require('aproba')
var renderTemplate = require('./render-template.js')
var wideTruncate = require('./wide-truncate')
var stringWidth = require('string-width')

module.exports = function (theme, width, completed) {
  validate('ONN', [theme, width, completed])
  if (completed < 0) completed = 0
  if (completed > 1) completed = 1
  if (width <= 0) return ''
  var sofar = Math.round(width * completed)
  var rest = width - sofar
  var template = [
    {type: 'complete', value: repeat(theme.complete, sofar), length: sofar},
    {type: 'remaining', value: repeat(theme.remaining, rest), length: rest}
  ]
  return renderTemplate(width, template, theme)
}

// lodash's way of repeating
function repeat (string, width) {
  var result = ''
  var n = width
  do {
    if (n % 2) {
      result += string
    }
    n = Math.floor(n / 2)
    /*eslint no-self-assign: 0*/
    string += string
  } while (n && stringWidth(result) < width)

  return wideTruncate(result, width)
}
", "node_modules/fsevents/node_modules/gauge/progress-bar.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/gauge/progress-bar.js");
    }
}
