<?php

/* node_modules/lodash/fp/result.js */
class __TwigTemplate_72e61c2fd54737f5c56e297bc40a17068f94d2538518907c9d59c0d255e6c141 extends Twig_Template
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
        $__internal_a1704f26425b89bbbd417168e904aff9e0ee8ebecdc5d6784628c68604e12791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1704f26425b89bbbd417168e904aff9e0ee8ebecdc5d6784628c68604e12791->enter($__internal_a1704f26425b89bbbd417168e904aff9e0ee8ebecdc5d6784628c68604e12791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/result.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('result', require('../result'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a1704f26425b89bbbd417168e904aff9e0ee8ebecdc5d6784628c68604e12791->leave($__internal_a1704f26425b89bbbd417168e904aff9e0ee8ebecdc5d6784628c68604e12791_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/result.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('result', require('../result'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/result.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/result.js");
    }
}
