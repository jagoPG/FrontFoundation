<?php

/* node_modules/lodash/fp/iteratee.js */
class __TwigTemplate_e8fc77461192382926ff3008e2da907ce1bd6942afd487fd3907d0921df433d2 extends Twig_Template
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
        $__internal_0d97e80725b58146f8a7dbb82290c3451eb6eab38acdce8c3f219a94d0068664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d97e80725b58146f8a7dbb82290c3451eb6eab38acdce8c3f219a94d0068664->enter($__internal_0d97e80725b58146f8a7dbb82290c3451eb6eab38acdce8c3f219a94d0068664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/iteratee.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('iteratee', require('../iteratee'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_0d97e80725b58146f8a7dbb82290c3451eb6eab38acdce8c3f219a94d0068664->leave($__internal_0d97e80725b58146f8a7dbb82290c3451eb6eab38acdce8c3f219a94d0068664_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/iteratee.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('iteratee', require('../iteratee'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/iteratee.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/iteratee.js");
    }
}
