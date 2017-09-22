<?php

/* node_modules/resolve/test/resolver/foo.js */
class __TwigTemplate_ffd2563dc03468df5b78e7d2e3a3367f082c0866797539c26d41209fdbd04517 extends Twig_Template
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
        $__internal_e395e56bf27346553797bffbef5beb9e189d2fbd14ef93b6e8b2dbba85b1f020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e395e56bf27346553797bffbef5beb9e189d2fbd14ef93b6e8b2dbba85b1f020->enter($__internal_e395e56bf27346553797bffbef5beb9e189d2fbd14ef93b6e8b2dbba85b1f020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/foo.js"));

        // line 1
        echo "module.exports = 1;
";
        
        $__internal_e395e56bf27346553797bffbef5beb9e189d2fbd14ef93b6e8b2dbba85b1f020->leave($__internal_e395e56bf27346553797bffbef5beb9e189d2fbd14ef93b6e8b2dbba85b1f020_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/foo.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 1;
", "node_modules/resolve/test/resolver/foo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/foo.js");
    }
}
