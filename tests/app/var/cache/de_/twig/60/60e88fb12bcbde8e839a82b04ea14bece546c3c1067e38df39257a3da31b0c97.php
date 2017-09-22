<?php

/* node_modules/lodash/fp/assignInWith.js */
class __TwigTemplate_5b05bac76656632ce3ae564abc26fadcd7ba2935461bea5a09572ffce0a71a03 extends Twig_Template
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
        $__internal_f6d8ba36130ff95075175aa8ea2d8f8f173c465bedb02624598a6ebdd754b78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d8ba36130ff95075175aa8ea2d8f8f173c465bedb02624598a6ebdd754b78f->enter($__internal_f6d8ba36130ff95075175aa8ea2d8f8f173c465bedb02624598a6ebdd754b78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/assignInWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('assignInWith', require('../assignInWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f6d8ba36130ff95075175aa8ea2d8f8f173c465bedb02624598a6ebdd754b78f->leave($__internal_f6d8ba36130ff95075175aa8ea2d8f8f173c465bedb02624598a6ebdd754b78f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/assignInWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('assignInWith', require('../assignInWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/assignInWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/assignInWith.js");
    }
}
