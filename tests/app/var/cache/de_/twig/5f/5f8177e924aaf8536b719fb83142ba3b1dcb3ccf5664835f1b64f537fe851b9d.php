<?php

/* node_modules/lodash/fp/reduce.js */
class __TwigTemplate_37fb5fdaa26d9ea13f25ccbfd26840215fef7f43ca9d5ef5fbba675872dc507e extends Twig_Template
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
        $__internal_f9dd5cc78b86dd5ebd44402e5601ab5705e11a67658428f96e3a49f3c6e42723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9dd5cc78b86dd5ebd44402e5601ab5705e11a67658428f96e3a49f3c6e42723->enter($__internal_f9dd5cc78b86dd5ebd44402e5601ab5705e11a67658428f96e3a49f3c6e42723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/reduce.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('reduce', require('../reduce'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f9dd5cc78b86dd5ebd44402e5601ab5705e11a67658428f96e3a49f3c6e42723->leave($__internal_f9dd5cc78b86dd5ebd44402e5601ab5705e11a67658428f96e3a49f3c6e42723_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/reduce.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('reduce', require('../reduce'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/reduce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/reduce.js");
    }
}
