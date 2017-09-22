<?php

/* node_modules/acorn-dynamic-import/src/index.js */
class __TwigTemplate_a4dd0719d8c02a7d1599a8f0837d552cc95830bc4ab560142ffbeb87fa5c940c extends Twig_Template
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
        $__internal_dee5e4ef778d9481cec4aaba6563159443835a3bf76d9de449eb129598a3974d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee5e4ef778d9481cec4aaba6563159443835a3bf76d9de449eb129598a3974d->enter($__internal_dee5e4ef778d9481cec4aaba6563159443835a3bf76d9de449eb129598a3974d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/src/index.js"));

        // line 1
        echo "import * as acorn from 'acorn';
import inject from './inject';

export default inject(acorn);
";
        
        $__internal_dee5e4ef778d9481cec4aaba6563159443835a3bf76d9de449eb129598a3974d->leave($__internal_dee5e4ef778d9481cec4aaba6563159443835a3bf76d9de449eb129598a3974d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/src/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import * as acorn from 'acorn';
import inject from './inject';

export default inject(acorn);
", "node_modules/acorn-dynamic-import/src/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/src/index.js");
    }
}
