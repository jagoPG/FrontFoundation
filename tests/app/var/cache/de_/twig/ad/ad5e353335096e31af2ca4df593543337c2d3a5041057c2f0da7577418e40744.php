<?php

/* node_modules/gauge/base-theme.js */
class __TwigTemplate_11c5284dbd7d6d4fcf41a3463deb76113554a58104f033de59b9ecca11f53e25 extends Twig_Template
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
        $__internal_faf6b6a8a0972d3de449297e6e4fef083ea462a65ae6a1b51c30f40697fc5684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf6b6a8a0972d3de449297e6e4fef083ea462a65ae6a1b51c30f40697fc5684->enter($__internal_faf6b6a8a0972d3de449297e6e4fef083ea462a65ae6a1b51c30f40697fc5684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/base-theme.js"));

        // line 1
        echo "'use strict'
var spin = require('./spin.js')
var progressBar = require('./progress-bar.js')

module.exports = {
  activityIndicator: function (values, theme, width) {
    if (values.spun == null) return
    return spin(theme, values.spun)
  },
  progressbar: function (values, theme, width) {
    if (values.completed == null) return
    return progressBar(theme, width, values.completed)
  }
}
";
        
        $__internal_faf6b6a8a0972d3de449297e6e4fef083ea462a65ae6a1b51c30f40697fc5684->leave($__internal_faf6b6a8a0972d3de449297e6e4fef083ea462a65ae6a1b51c30f40697fc5684_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/base-theme.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var spin = require('./spin.js')
var progressBar = require('./progress-bar.js')

module.exports = {
  activityIndicator: function (values, theme, width) {
    if (values.spun == null) return
    return spin(theme, values.spun)
  },
  progressbar: function (values, theme, width) {
    if (values.completed == null) return
    return progressBar(theme, width, values.completed)
  }
}
", "node_modules/gauge/base-theme.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/base-theme.js");
    }
}
