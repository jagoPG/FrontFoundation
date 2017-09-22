<?php

/* node_modules/core-js/modules/_core.js */
class __TwigTemplate_92911cdf44fa50bfb42225a10323890484785eaf886c4ce2f396f58d03b9d109 extends Twig_Template
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
        $__internal_2762f052dcb19e83fa7e27330e8162d9173a6d394c94d1d02508ccac4b18fb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2762f052dcb19e83fa7e27330e8162d9173a6d394c94d1d02508ccac4b18fb24->enter($__internal_2762f052dcb19e83fa7e27330e8162d9173a6d394c94d1d02508ccac4b18fb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_core.js"));

        // line 1
        echo "var core = module.exports = { version: '2.5.1' };
if (typeof __e == 'number') __e = core; // eslint-disable-line no-undef
";
        
        $__internal_2762f052dcb19e83fa7e27330e8162d9173a6d394c94d1d02508ccac4b18fb24->leave($__internal_2762f052dcb19e83fa7e27330e8162d9173a6d394c94d1d02508ccac4b18fb24_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_core.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = module.exports = { version: '2.5.1' };
if (typeof __e == 'number') __e = core; // eslint-disable-line no-undef
", "node_modules/core-js/modules/_core.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_core.js");
    }
}
