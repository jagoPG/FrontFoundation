<?php

/* node_modules/fsevents/node_modules/gauge/base-theme.js */
class __TwigTemplate_8e213bcab0cf1a7611860433833b3f4638460d978f068351efc8418bfcb3f6c1 extends Twig_Template
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
        $__internal_9b8d8c3babeb3db59f15a4518ee84abe49c6f5a894d3afdc3c4fb07904ae18b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8d8c3babeb3db59f15a4518ee84abe49c6f5a894d3afdc3c4fb07904ae18b3->enter($__internal_9b8d8c3babeb3db59f15a4518ee84abe49c6f5a894d3afdc3c4fb07904ae18b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/gauge/base-theme.js"));

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
        
        $__internal_9b8d8c3babeb3db59f15a4518ee84abe49c6f5a894d3afdc3c4fb07904ae18b3->leave($__internal_9b8d8c3babeb3db59f15a4518ee84abe49c6f5a894d3afdc3c4fb07904ae18b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/gauge/base-theme.js";
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
", "node_modules/fsevents/node_modules/gauge/base-theme.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/gauge/base-theme.js");
    }
}
