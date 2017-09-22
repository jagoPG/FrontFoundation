<?php

/* node_modules/resolve/test/precedence/aaa.js */
class __TwigTemplate_4cc1dea1cd0f4ad0325733f2bf1cced20023b34a78c14f43d78fc28326c83f42 extends Twig_Template
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
        $__internal_922ecfc4283c9b3e52df86351df19671dc2496e288ed5a1e658c2563d4ba0264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922ecfc4283c9b3e52df86351df19671dc2496e288ed5a1e658c2563d4ba0264->enter($__internal_922ecfc4283c9b3e52df86351df19671dc2496e288ed5a1e658c2563d4ba0264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/precedence/aaa.js"));

        // line 1
        echo "module.exports = 'wtf';
";
        
        $__internal_922ecfc4283c9b3e52df86351df19671dc2496e288ed5a1e658c2563d4ba0264->leave($__internal_922ecfc4283c9b3e52df86351df19671dc2496e288ed5a1e658c2563d4ba0264_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/precedence/aaa.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 'wtf';
", "node_modules/resolve/test/precedence/aaa.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/precedence/aaa.js");
    }
}
