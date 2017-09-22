<?php

/* node_modules/core-js/fn/get-iterator.js */
class __TwigTemplate_912f3db95345e5f0d79785fdd2198e4fad3011793f3a71f721cc5247b6c974ae extends Twig_Template
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
        $__internal_daf096ddc601430e3d1f67ce3a171014173554db0084452b5a679023891bab47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf096ddc601430e3d1f67ce3a171014173554db0084452b5a679023891bab47->enter($__internal_daf096ddc601430e3d1f67ce3a171014173554db0084452b5a679023891bab47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/get-iterator.js"));

        // line 1
        echo "require('../modules/web.dom.iterable');
require('../modules/es6.string.iterator');
module.exports = require('../modules/core.get-iterator');
";
        
        $__internal_daf096ddc601430e3d1f67ce3a171014173554db0084452b5a679023891bab47->leave($__internal_daf096ddc601430e3d1f67ce3a171014173554db0084452b5a679023891bab47_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/get-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.dom.iterable');
require('../modules/es6.string.iterator');
module.exports = require('../modules/core.get-iterator');
", "node_modules/core-js/fn/get-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/get-iterator.js");
    }
}
