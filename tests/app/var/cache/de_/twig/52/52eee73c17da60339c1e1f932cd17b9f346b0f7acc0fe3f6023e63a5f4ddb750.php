<?php

/* node_modules/lodash/number.js */
class __TwigTemplate_20fdba9abbd2bc2756285cdf0bba91424ffcc35232a4ae2d92db19e93bf79459 extends Twig_Template
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
        $__internal_489764418eb875516e1eed0d1416f9cd8b8eef8a4f42f38c47d39159a7f2a5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489764418eb875516e1eed0d1416f9cd8b8eef8a4f42f38c47d39159a7f2a5a0->enter($__internal_489764418eb875516e1eed0d1416f9cd8b8eef8a4f42f38c47d39159a7f2a5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/number.js"));

        // line 1
        echo "module.exports = {
  'clamp': require('./clamp'),
  'inRange': require('./inRange'),
  'random': require('./random')
};
";
        
        $__internal_489764418eb875516e1eed0d1416f9cd8b8eef8a4f42f38c47d39159a7f2a5a0->leave($__internal_489764418eb875516e1eed0d1416f9cd8b8eef8a4f42f38c47d39159a7f2a5a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = {
  'clamp': require('./clamp'),
  'inRange': require('./inRange'),
  'random': require('./random')
};
", "node_modules/lodash/number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/number.js");
    }
}
