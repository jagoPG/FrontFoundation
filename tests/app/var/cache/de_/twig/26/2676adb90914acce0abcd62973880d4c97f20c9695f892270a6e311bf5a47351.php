<?php

/* node_modules/gauge/progress-bar.js */
class __TwigTemplate_d4e8f348d4318668fe21d548a8f05ff9471f82fe847df496796b28f957154119 extends Twig_Template
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
        $__internal_8905bba57b00598acdff16d162bd0bf42ff9515c6279412f66ca72ef83b807c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8905bba57b00598acdff16d162bd0bf42ff9515c6279412f66ca72ef83b807c3->enter($__internal_8905bba57b00598acdff16d162bd0bf42ff9515c6279412f66ca72ef83b807c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/progress-bar.js"));

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
        
        $__internal_8905bba57b00598acdff16d162bd0bf42ff9515c6279412f66ca72ef83b807c3->leave($__internal_8905bba57b00598acdff16d162bd0bf42ff9515c6279412f66ca72ef83b807c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/progress-bar.js";
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
", "node_modules/gauge/progress-bar.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/progress-bar.js");
    }
}
