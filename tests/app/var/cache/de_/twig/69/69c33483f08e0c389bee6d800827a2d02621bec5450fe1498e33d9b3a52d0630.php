<?php

/* node_modules/core-js/fn/map/of.js */
class __TwigTemplate_8027f8ed38d8c16d4e3e0594626d0adb3d5a892c109478189baa21360c935c65 extends Twig_Template
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
        $__internal_124fa060a039b5bde998db2e9c1f2b19f7a70ee9aca031f4dc390fdb38acf75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124fa060a039b5bde998db2e9c1f2b19f7a70ee9aca031f4dc390fdb38acf75e->enter($__internal_124fa060a039b5bde998db2e9c1f2b19f7a70ee9aca031f4dc390fdb38acf75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/map/of.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.map');
require('../../modules/es7.map.of');
var \$Map = require('../../modules/_core').Map;
var \$of = \$Map.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$Map, arguments);
};
";
        
        $__internal_124fa060a039b5bde998db2e9c1f2b19f7a70ee9aca031f4dc390fdb38acf75e->leave($__internal_124fa060a039b5bde998db2e9c1f2b19f7a70ee9aca031f4dc390fdb38acf75e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/map/of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.map');
require('../../modules/es7.map.of');
var \$Map = require('../../modules/_core').Map;
var \$of = \$Map.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$Map, arguments);
};
", "node_modules/core-js/fn/map/of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/map/of.js");
    }
}
