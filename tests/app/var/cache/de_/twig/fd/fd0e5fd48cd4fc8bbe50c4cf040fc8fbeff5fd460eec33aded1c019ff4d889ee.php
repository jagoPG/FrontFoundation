<?php

/* node_modules/core-js/fn/typed/int8-array.js */
class __TwigTemplate_e696bd677fba0fd3517405b98eb94700e3acfbcdcc7bd7bef1943b32d2edd01e extends Twig_Template
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
        $__internal_eca003eaf5d40cc13bebddb3584d2eb623c0c9e8a44e5b69725629a79cd5a549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca003eaf5d40cc13bebddb3584d2eb623c0c9e8a44e5b69725629a79cd5a549->enter($__internal_eca003eaf5d40cc13bebddb3584d2eb623c0c9e8a44e5b69725629a79cd5a549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/typed/int8-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.int8-array');
module.exports = require('../../modules/_core').Int8Array;
";
        
        $__internal_eca003eaf5d40cc13bebddb3584d2eb623c0c9e8a44e5b69725629a79cd5a549->leave($__internal_eca003eaf5d40cc13bebddb3584d2eb623c0c9e8a44e5b69725629a79cd5a549_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/typed/int8-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.int8-array');
module.exports = require('../../modules/_core').Int8Array;
", "node_modules/core-js/fn/typed/int8-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/typed/int8-array.js");
    }
}
