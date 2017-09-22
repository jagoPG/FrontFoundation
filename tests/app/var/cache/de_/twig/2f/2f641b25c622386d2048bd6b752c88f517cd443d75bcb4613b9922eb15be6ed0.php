<?php

/* node_modules/lodash/fp/matches.js */
class __TwigTemplate_019d9f3b7ded21b4cd8e3c4d648e232dbd4e7c6835f18010d90f602f8a34158f extends Twig_Template
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
        $__internal_7c2054ee054f0ebf42b81445923be90230fea04061afb57229489c0c90271d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2054ee054f0ebf42b81445923be90230fea04061afb57229489c0c90271d7f->enter($__internal_7c2054ee054f0ebf42b81445923be90230fea04061afb57229489c0c90271d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/matches.js"));

        // line 1
        echo "module.exports = require('./isMatch');
";
        
        $__internal_7c2054ee054f0ebf42b81445923be90230fea04061afb57229489c0c90271d7f->leave($__internal_7c2054ee054f0ebf42b81445923be90230fea04061afb57229489c0c90271d7f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/matches.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./isMatch');
", "node_modules/lodash/fp/matches.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/matches.js");
    }
}
