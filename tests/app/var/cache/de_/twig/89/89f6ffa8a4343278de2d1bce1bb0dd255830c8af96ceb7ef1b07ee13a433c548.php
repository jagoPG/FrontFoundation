<?php

/* node_modules/core-js/library/fn/observable.js */
class __TwigTemplate_28ecf7b2f8bf7f0c851a392854302c8927cafea9ad4304ae3a582e9083f61285 extends Twig_Template
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
        $__internal_631977947160f1b739559928ee645d2b63fd2b50d05421e8f84750f6b4f1aadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631977947160f1b739559928ee645d2b63fd2b50d05421e8f84750f6b4f1aadc->enter($__internal_631977947160f1b739559928ee645d2b63fd2b50d05421e8f84750f6b4f1aadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/observable.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
require('../modules/es7.symbol.observable');
require('../modules/es7.observable');
module.exports = require('../modules/_core').Observable;
";
        
        $__internal_631977947160f1b739559928ee645d2b63fd2b50d05421e8f84750f6b4f1aadc->leave($__internal_631977947160f1b739559928ee645d2b63fd2b50d05421e8f84750f6b4f1aadc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/observable.js";
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
", "node_modules/core-js/library/fn/observable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/observable.js");
    }
}
