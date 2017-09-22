<?php

/* node_modules/lodash/fp/flatten.js */
class __TwigTemplate_31023e62cced0ee2972c382b1701974cf271520b91098b365ae8732ef97e99f6 extends Twig_Template
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
        $__internal_45e21948fda566ce044877bfb8adb566220c2280d26beb6415a2e0be46e1f611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e21948fda566ce044877bfb8adb566220c2280d26beb6415a2e0be46e1f611->enter($__internal_45e21948fda566ce044877bfb8adb566220c2280d26beb6415a2e0be46e1f611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/flatten.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('flatten', require('../flatten'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_45e21948fda566ce044877bfb8adb566220c2280d26beb6415a2e0be46e1f611->leave($__internal_45e21948fda566ce044877bfb8adb566220c2280d26beb6415a2e0be46e1f611_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('flatten', require('../flatten'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/flatten.js");
    }
}
