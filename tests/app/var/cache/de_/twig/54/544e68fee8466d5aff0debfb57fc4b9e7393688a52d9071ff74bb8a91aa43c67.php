<?php

/* node_modules/core-js/library/fn/weak-map.js */
class __TwigTemplate_e0deeb6c5485deff76f9d2be5be01a4ac2fd54ed095732cb683eb6c1b88e9711 extends Twig_Template
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
        $__internal_967f372e2799332aa16f4aa03cc8cead53f2062fc0180131dde25a678f4d2c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967f372e2799332aa16f4aa03cc8cead53f2062fc0180131dde25a678f4d2c77->enter($__internal_967f372e2799332aa16f4aa03cc8cead53f2062fc0180131dde25a678f4d2c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/weak-map.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-map');
require('../modules/es7.weak-map.of');
require('../modules/es7.weak-map.from');
module.exports = require('../modules/_core').WeakMap;
";
        
        $__internal_967f372e2799332aa16f4aa03cc8cead53f2062fc0180131dde25a678f4d2c77->leave($__internal_967f372e2799332aa16f4aa03cc8cead53f2062fc0180131dde25a678f4d2c77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/weak-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-map');
require('../modules/es7.weak-map.of');
require('../modules/es7.weak-map.from');
module.exports = require('../modules/_core').WeakMap;
", "node_modules/core-js/library/fn/weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/weak-map.js");
    }
}
