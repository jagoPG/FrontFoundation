<?php

/* node_modules/core-js/library/fn/map/of.js */
class __TwigTemplate_3a121ca096a2d0347b90f3422fa0dbd27806541bdc4ef0ecb900c97eb5c30399 extends Twig_Template
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
        $__internal_64a1f287184ba78824816a5d3a865e519c20bf35ca4b7e3ae57ac30fa57e6e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a1f287184ba78824816a5d3a865e519c20bf35ca4b7e3ae57ac30fa57e6e5a->enter($__internal_64a1f287184ba78824816a5d3a865e519c20bf35ca4b7e3ae57ac30fa57e6e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/map/of.js"));

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
        
        $__internal_64a1f287184ba78824816a5d3a865e519c20bf35ca4b7e3ae57ac30fa57e6e5a->leave($__internal_64a1f287184ba78824816a5d3a865e519c20bf35ca4b7e3ae57ac30fa57e6e5a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/map/of.js";
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
", "node_modules/core-js/library/fn/map/of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/map/of.js");
    }
}
