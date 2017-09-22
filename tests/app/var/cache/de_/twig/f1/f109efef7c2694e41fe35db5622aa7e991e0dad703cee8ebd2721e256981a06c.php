<?php

/* node_modules/es5-ext/object/some.js */
class __TwigTemplate_6048140148b431dd26609d8d55d73a2916b7d5da94eb00afead33a3d8f156506 extends Twig_Template
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
        $__internal_e3688a9529650db611e018000c1907a28e7c0357ddd216dcba2987f6734dacd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3688a9529650db611e018000c1907a28e7c0357ddd216dcba2987f6734dacd5->enter($__internal_e3688a9529650db611e018000c1907a28e7c0357ddd216dcba2987f6734dacd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/some.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./_iterate\")(\"some\", false);
";
        
        $__internal_e3688a9529650db611e018000c1907a28e7c0357ddd216dcba2987f6734dacd5->leave($__internal_e3688a9529650db611e018000c1907a28e7c0357ddd216dcba2987f6734dacd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/some.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./_iterate\")(\"some\", false);
", "node_modules/es5-ext/object/some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/some.js");
    }
}
