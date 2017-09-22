<?php

/* node_modules/lodash/fp/invoke.js */
class __TwigTemplate_dc9298cf2c6bccd9833691a2e0d66b3645540668455cca926a574ba83af23bdb extends Twig_Template
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
        $__internal_4500b0c7fa38eac4268b4931e7b0c217eeb87ccff6cb6ba9423411a3703dde47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4500b0c7fa38eac4268b4931e7b0c217eeb87ccff6cb6ba9423411a3703dde47->enter($__internal_4500b0c7fa38eac4268b4931e7b0c217eeb87ccff6cb6ba9423411a3703dde47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/invoke.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('invoke', require('../invoke'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4500b0c7fa38eac4268b4931e7b0c217eeb87ccff6cb6ba9423411a3703dde47->leave($__internal_4500b0c7fa38eac4268b4931e7b0c217eeb87ccff6cb6ba9423411a3703dde47_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/invoke.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('invoke', require('../invoke'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/invoke.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/invoke.js");
    }
}
