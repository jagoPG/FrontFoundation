<?php

/* node_modules/lodash/fp/union.js */
class __TwigTemplate_2ce7aebce6b2f7cf0656bd7fffe8e317a6d5c79f85db9c3aa03e699729dd1a40 extends Twig_Template
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
        $__internal_4bbdffe653f8e1b5a47b699d7a32f12233d1b8b415c2acc26737332f3a523114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbdffe653f8e1b5a47b699d7a32f12233d1b8b415c2acc26737332f3a523114->enter($__internal_4bbdffe653f8e1b5a47b699d7a32f12233d1b8b415c2acc26737332f3a523114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/union.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('union', require('../union'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4bbdffe653f8e1b5a47b699d7a32f12233d1b8b415c2acc26737332f3a523114->leave($__internal_4bbdffe653f8e1b5a47b699d7a32f12233d1b8b415c2acc26737332f3a523114_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/union.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('union', require('../union'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/union.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/union.js");
    }
}
