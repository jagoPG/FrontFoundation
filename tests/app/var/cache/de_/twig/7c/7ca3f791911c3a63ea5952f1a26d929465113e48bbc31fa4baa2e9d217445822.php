<?php

/* node_modules/resolve/test/resolver/same_names/foo/index.js */
class __TwigTemplate_f2bd3ae08e1357a58add66b945f4a7707fb1a04798c4dc412747ff11a63476da extends Twig_Template
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
        $__internal_3d9836e2b532ec3a963be90b82cbf778e0b1bf6e713bf1cac7d2b43cddb1af31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9836e2b532ec3a963be90b82cbf778e0b1bf6e713bf1cac7d2b43cddb1af31->enter($__internal_3d9836e2b532ec3a963be90b82cbf778e0b1bf6e713bf1cac7d2b43cddb1af31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/same_names/foo/index.js"));

        // line 1
        echo "module.exports = 1;
";
        
        $__internal_3d9836e2b532ec3a963be90b82cbf778e0b1bf6e713bf1cac7d2b43cddb1af31->leave($__internal_3d9836e2b532ec3a963be90b82cbf778e0b1bf6e713bf1cac7d2b43cddb1af31_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/same_names/foo/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 1;
", "node_modules/resolve/test/resolver/same_names/foo/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/same_names/foo/index.js");
    }
}
