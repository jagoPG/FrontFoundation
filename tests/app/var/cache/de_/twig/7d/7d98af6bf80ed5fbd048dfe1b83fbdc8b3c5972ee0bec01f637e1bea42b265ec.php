<?php

/* node_modules/lodash/fp/remove.js */
class __TwigTemplate_42737fe8f2d9eda669085d9e4362bb77243a3fdc7e00cc95e9cde54351b3d81b extends Twig_Template
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
        $__internal_21e587490a6142a0cc930c1731226df79939d3ba5d90256ff80f63690e163b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e587490a6142a0cc930c1731226df79939d3ba5d90256ff80f63690e163b8b->enter($__internal_21e587490a6142a0cc930c1731226df79939d3ba5d90256ff80f63690e163b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/remove.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('remove', require('../remove'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_21e587490a6142a0cc930c1731226df79939d3ba5d90256ff80f63690e163b8b->leave($__internal_21e587490a6142a0cc930c1731226df79939d3ba5d90256ff80f63690e163b8b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/remove.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('remove', require('../remove'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/remove.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/remove.js");
    }
}
