<?php

/* node_modules/lodash/fp/date.js */
class __TwigTemplate_82ad73f3deaaab563b572409529d352efdf173f33577ee68ab784b36b2d734eb extends Twig_Template
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
        $__internal_179d39aa6f4baa330ec80d5cdd38bd14fd4a149ab01d1c2d46e291fd820538e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179d39aa6f4baa330ec80d5cdd38bd14fd4a149ab01d1c2d46e291fd820538e6->enter($__internal_179d39aa6f4baa330ec80d5cdd38bd14fd4a149ab01d1c2d46e291fd820538e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/date.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../date'));
";
        
        $__internal_179d39aa6f4baa330ec80d5cdd38bd14fd4a149ab01d1c2d46e291fd820538e6->leave($__internal_179d39aa6f4baa330ec80d5cdd38bd14fd4a149ab01d1c2d46e291fd820538e6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/date.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../date'));
", "node_modules/lodash/fp/date.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/date.js");
    }
}
