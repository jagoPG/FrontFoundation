<?php

/* node_modules/lodash/fp/subtract.js */
class __TwigTemplate_98db54df88d1894d2e05b70c531caf8f5b891d090c25d97b2d8ae1a8974e1cb5 extends Twig_Template
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
        $__internal_e230f14150f44f59e5ce1b1fe175556938090057f63f8d4743b5c63bc9a208ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e230f14150f44f59e5ce1b1fe175556938090057f63f8d4743b5c63bc9a208ac->enter($__internal_e230f14150f44f59e5ce1b1fe175556938090057f63f8d4743b5c63bc9a208ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/subtract.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('subtract', require('../subtract'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e230f14150f44f59e5ce1b1fe175556938090057f63f8d4743b5c63bc9a208ac->leave($__internal_e230f14150f44f59e5ce1b1fe175556938090057f63f8d4743b5c63bc9a208ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/subtract.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('subtract', require('../subtract'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/subtract.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/subtract.js");
    }
}
