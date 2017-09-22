<?php

/* node_modules/fsevents/node_modules/gauge/wide-truncate.js */
class __TwigTemplate_7c199381d65821d14b7c9db94212f503e1157082fd21acbd2c342f64a7b896cb extends Twig_Template
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
        $__internal_f8b56bdf60ff529e4667ad347cef22c260bd5fa851f5cb96ac722f793592bf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b56bdf60ff529e4667ad347cef22c260bd5fa851f5cb96ac722f793592bf13->enter($__internal_f8b56bdf60ff529e4667ad347cef22c260bd5fa851f5cb96ac722f793592bf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/gauge/wide-truncate.js"));

        // line 1
        echo "'use strict'
var stringWidth = require('string-width')
var stripAnsi = require('strip-ansi')

module.exports = wideTruncate

function wideTruncate (str, target) {
  if (stringWidth(str) === 0) return str
  if (target <= 0) return ''
  if (stringWidth(str) <= target) return str

  // We compute the number of bytes of ansi sequences here and add
  // that to our initial truncation to ensure that we don't slice one
  // that we want to keep in half.
  var noAnsi = stripAnsi(str)
  var ansiSize = str.length + noAnsi.length
  var truncated = str.slice(0, target + ansiSize)

  // we have to shrink the result to account for our ansi sequence buffer
  // (if an ansi sequence was truncated) and double width characters.
  while (stringWidth(truncated) > target) {
    truncated = truncated.slice(0, -1)
  }
  return truncated
}
";
        
        $__internal_f8b56bdf60ff529e4667ad347cef22c260bd5fa851f5cb96ac722f793592bf13->leave($__internal_f8b56bdf60ff529e4667ad347cef22c260bd5fa851f5cb96ac722f793592bf13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/gauge/wide-truncate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var stringWidth = require('string-width')
var stripAnsi = require('strip-ansi')

module.exports = wideTruncate

function wideTruncate (str, target) {
  if (stringWidth(str) === 0) return str
  if (target <= 0) return ''
  if (stringWidth(str) <= target) return str

  // We compute the number of bytes of ansi sequences here and add
  // that to our initial truncation to ensure that we don't slice one
  // that we want to keep in half.
  var noAnsi = stripAnsi(str)
  var ansiSize = str.length + noAnsi.length
  var truncated = str.slice(0, target + ansiSize)

  // we have to shrink the result to account for our ansi sequence buffer
  // (if an ansi sequence was truncated) and double width characters.
  while (stringWidth(truncated) > target) {
    truncated = truncated.slice(0, -1)
  }
  return truncated
}
", "node_modules/fsevents/node_modules/gauge/wide-truncate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/gauge/wide-truncate.js");
    }
}
