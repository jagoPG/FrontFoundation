<?php

/* node_modules/gauge/wide-truncate.js */
class __TwigTemplate_af81a0ad4e9db6d8a63dbe7b55ceb6062828a644adf246dc49d05579c083d120 extends Twig_Template
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
        $__internal_2eeb6c586ca0dff4074efbc85b20aecd2c2810e9122541418720629657bd6a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eeb6c586ca0dff4074efbc85b20aecd2c2810e9122541418720629657bd6a45->enter($__internal_2eeb6c586ca0dff4074efbc85b20aecd2c2810e9122541418720629657bd6a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/wide-truncate.js"));

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
        
        $__internal_2eeb6c586ca0dff4074efbc85b20aecd2c2810e9122541418720629657bd6a45->leave($__internal_2eeb6c586ca0dff4074efbc85b20aecd2c2810e9122541418720629657bd6a45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/wide-truncate.js";
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
", "node_modules/gauge/wide-truncate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/wide-truncate.js");
    }
}
