<?php

/* node_modules/resolve/test/resolver/quux/foo/index.js */
class __TwigTemplate_eadfd3fd4cd4a268cac2e01b62fda9d28f3ddaf19c1823197510031ca67f3ce1 extends Twig_Template
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
        $__internal_80fb311ae9c3995c6b5ef3ae3d7eda0ec49ec83d9c2b349021ef6fd91d13b9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fb311ae9c3995c6b5ef3ae3d7eda0ec49ec83d9c2b349021ef6fd91d13b9fd->enter($__internal_80fb311ae9c3995c6b5ef3ae3d7eda0ec49ec83d9c2b349021ef6fd91d13b9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/quux/foo/index.js"));

        // line 1
        echo "module.exports = 1;
";
        
        $__internal_80fb311ae9c3995c6b5ef3ae3d7eda0ec49ec83d9c2b349021ef6fd91d13b9fd->leave($__internal_80fb311ae9c3995c6b5ef3ae3d7eda0ec49ec83d9c2b349021ef6fd91d13b9fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/quux/foo/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 1;
", "node_modules/resolve/test/resolver/quux/foo/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/quux/foo/index.js");
    }
}
