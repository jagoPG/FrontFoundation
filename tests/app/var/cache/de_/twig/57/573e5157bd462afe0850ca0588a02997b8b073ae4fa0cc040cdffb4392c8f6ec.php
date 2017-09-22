<?php

/* node_modules/core-js/fn/observable.js */
class __TwigTemplate_3bffee9ea5a5e80dcbf2e6c423becbff94bf2209e311fc624a0244b5394b2460 extends Twig_Template
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
        $__internal_da857c07292aa660031dbca7042f666c73a2082e5558fd42b79a50b3e7337973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da857c07292aa660031dbca7042f666c73a2082e5558fd42b79a50b3e7337973->enter($__internal_da857c07292aa660031dbca7042f666c73a2082e5558fd42b79a50b3e7337973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/observable.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
require('../modules/es7.symbol.observable');
require('../modules/es7.observable');
module.exports = require('../modules/_core').Observable;
";
        
        $__internal_da857c07292aa660031dbca7042f666c73a2082e5558fd42b79a50b3e7337973->leave($__internal_da857c07292aa660031dbca7042f666c73a2082e5558fd42b79a50b3e7337973_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/observable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
require('../modules/es7.symbol.observable');
require('../modules/es7.observable');
module.exports = require('../modules/_core').Observable;
", "node_modules/core-js/fn/observable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/observable.js");
    }
}
