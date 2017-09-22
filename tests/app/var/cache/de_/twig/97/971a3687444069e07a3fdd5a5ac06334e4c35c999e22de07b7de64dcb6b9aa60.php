<?php

/* node_modules/nan/include_dirs.js */
class __TwigTemplate_e4618a1b609a7375adb9632ea3ff728e3da0320fd6f6516777a2a23710c4b7b1 extends Twig_Template
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
        $__internal_61c13482c72de595070ec478a136dc91a028af952620e7a1432312446304cea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c13482c72de595070ec478a136dc91a028af952620e7a1432312446304cea3->enter($__internal_61c13482c72de595070ec478a136dc91a028af952620e7a1432312446304cea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/include_dirs.js"));

        // line 1
        echo "console.log(require('path').relative('.', __dirname));
";
        
        $__internal_61c13482c72de595070ec478a136dc91a028af952620e7a1432312446304cea3->leave($__internal_61c13482c72de595070ec478a136dc91a028af952620e7a1432312446304cea3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/include_dirs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("console.log(require('path').relative('.', __dirname));
", "node_modules/nan/include_dirs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/include_dirs.js");
    }
}
