<?php

/* node_modules/lodash/fp/orderBy.js */
class __TwigTemplate_344f310567320afc2a5c6be4ce18583c6f98e1b9ee9c168d3dd0f8dd66afe648 extends Twig_Template
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
        $__internal_925608772640e84d5989d195d579f94b2329ac82962a4f2854dd779aea5d94a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925608772640e84d5989d195d579f94b2329ac82962a4f2854dd779aea5d94a0->enter($__internal_925608772640e84d5989d195d579f94b2329ac82962a4f2854dd779aea5d94a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/orderBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('orderBy', require('../orderBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_925608772640e84d5989d195d579f94b2329ac82962a4f2854dd779aea5d94a0->leave($__internal_925608772640e84d5989d195d579f94b2329ac82962a4f2854dd779aea5d94a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/orderBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('orderBy', require('../orderBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/orderBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/orderBy.js");
    }
}
