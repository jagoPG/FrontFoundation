<?php

/* node_modules/lodash/fp/pull.js */
class __TwigTemplate_7d535405b20557a4f2356e9095d590a890e987c0dfe8fda1f1e83a4213740619 extends Twig_Template
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
        $__internal_ef0525f54df5c174ea2619cf68d0fe810bcdfc5c2881e7c0071aae1c2ffd1361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0525f54df5c174ea2619cf68d0fe810bcdfc5c2881e7c0071aae1c2ffd1361->enter($__internal_ef0525f54df5c174ea2619cf68d0fe810bcdfc5c2881e7c0071aae1c2ffd1361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/pull.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('pull', require('../pull'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_ef0525f54df5c174ea2619cf68d0fe810bcdfc5c2881e7c0071aae1c2ffd1361->leave($__internal_ef0525f54df5c174ea2619cf68d0fe810bcdfc5c2881e7c0071aae1c2ffd1361_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/pull.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('pull', require('../pull'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/pull.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/pull.js");
    }
}
