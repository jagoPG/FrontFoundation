<?php

/* node_modules/lodash/fp/size.js */
class __TwigTemplate_1bf97caa24715410a938d8a63c4d48495ca6de6c340e367dedc275c593646b31 extends Twig_Template
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
        $__internal_b7aee3c0a78561372e9ba66bc33b336ed1011e90b41b6cc1dd54f38698fdbe1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7aee3c0a78561372e9ba66bc33b336ed1011e90b41b6cc1dd54f38698fdbe1e->enter($__internal_b7aee3c0a78561372e9ba66bc33b336ed1011e90b41b6cc1dd54f38698fdbe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/size.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('size', require('../size'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b7aee3c0a78561372e9ba66bc33b336ed1011e90b41b6cc1dd54f38698fdbe1e->leave($__internal_b7aee3c0a78561372e9ba66bc33b336ed1011e90b41b6cc1dd54f38698fdbe1e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/size.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('size', require('../size'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/size.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/size.js");
    }
}
