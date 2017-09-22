<?php

/* node_modules/uuid/v4.js */
class __TwigTemplate_9c326c468455a5a8282c34e67a3a5312606674292bc57411c85a671db42d78e7 extends Twig_Template
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
        $__internal_5eb98be1e056b3ed545cb7031f9ce3817f59b60dcda7d08192e094e01f365e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb98be1e056b3ed545cb7031f9ce3817f59b60dcda7d08192e094e01f365e06->enter($__internal_5eb98be1e056b3ed545cb7031f9ce3817f59b60dcda7d08192e094e01f365e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/v4.js"));

        // line 1
        echo "var rng = require('./lib/rng');
var bytesToUuid = require('./lib/bytesToUuid');

function v4(options, buf, offset) {
  var i = buf && offset || 0;

  if (typeof(options) == 'string') {
    buf = options == 'binary' ? new Array(16) : null;
    options = null;
  }
  options = options || {};

  var rnds = options.random || (options.rng || rng)();

  // Per 4.4, set bits for version and `clock_seq_hi_and_reserved`
  rnds[6] = (rnds[6] & 0x0f) | 0x40;
  rnds[8] = (rnds[8] & 0x3f) | 0x80;

  // Copy bytes to buffer, if provided
  if (buf) {
    for (var ii = 0; ii < 16; ++ii) {
      buf[i + ii] = rnds[ii];
    }
  }

  return buf || bytesToUuid(rnds);
}

module.exports = v4;
";
        
        $__internal_5eb98be1e056b3ed545cb7031f9ce3817f59b60dcda7d08192e094e01f365e06->leave($__internal_5eb98be1e056b3ed545cb7031f9ce3817f59b60dcda7d08192e094e01f365e06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/v4.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var rng = require('./lib/rng');
var bytesToUuid = require('./lib/bytesToUuid');

function v4(options, buf, offset) {
  var i = buf && offset || 0;

  if (typeof(options) == 'string') {
    buf = options == 'binary' ? new Array(16) : null;
    options = null;
  }
  options = options || {};

  var rnds = options.random || (options.rng || rng)();

  // Per 4.4, set bits for version and `clock_seq_hi_and_reserved`
  rnds[6] = (rnds[6] & 0x0f) | 0x40;
  rnds[8] = (rnds[8] & 0x3f) | 0x80;

  // Copy bytes to buffer, if provided
  if (buf) {
    for (var ii = 0; ii < 16; ++ii) {
      buf[i + ii] = rnds[ii];
    }
  }

  return buf || bytesToUuid(rnds);
}

module.exports = v4;
", "node_modules/uuid/v4.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/v4.js");
    }
}
