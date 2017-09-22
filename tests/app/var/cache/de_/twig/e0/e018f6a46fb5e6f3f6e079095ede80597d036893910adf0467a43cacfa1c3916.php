<?php

/* node_modules/lodash/fp/function.js */
class __TwigTemplate_eace3b246fd37a2b98337ca71df36e0c883c8c8be94fa9a7e307b5fe3479d2fd extends Twig_Template
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
        $__internal_d18dbc534e54a6c58e71f3ccc1d27042fe4acbfcd9d33a2d5493254ca52e0ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18dbc534e54a6c58e71f3ccc1d27042fe4acbfcd9d33a2d5493254ca52e0ce5->enter($__internal_d18dbc534e54a6c58e71f3ccc1d27042fe4acbfcd9d33a2d5493254ca52e0ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/function.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../function'));
";
        
        $__internal_d18dbc534e54a6c58e71f3ccc1d27042fe4acbfcd9d33a2d5493254ca52e0ce5->leave($__internal_d18dbc534e54a6c58e71f3ccc1d27042fe4acbfcd9d33a2d5493254ca52e0ce5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../function'));
", "node_modules/lodash/fp/function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/function.js");
    }
}
