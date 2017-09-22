<?php

/* node_modules/gauge/set-interval.js */
class __TwigTemplate_2b19fefce9fb2ff6744bb20a74fd59e4e9bc8edcab0d4dbf1d979717e1b0692b extends Twig_Template
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
        $__internal_fcc040ad621e4df1024636ad0fde6c8a0112c08f770283276c7451b9896b1687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc040ad621e4df1024636ad0fde6c8a0112c08f770283276c7451b9896b1687->enter($__internal_fcc040ad621e4df1024636ad0fde6c8a0112c08f770283276c7451b9896b1687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/set-interval.js"));

        // line 1
        echo "'use strict'
// this exists so we can replace it during testing
module.exports = setInterval
";
        
        $__internal_fcc040ad621e4df1024636ad0fde6c8a0112c08f770283276c7451b9896b1687->leave($__internal_fcc040ad621e4df1024636ad0fde6c8a0112c08f770283276c7451b9896b1687_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/set-interval.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
// this exists so we can replace it during testing
module.exports = setInterval
", "node_modules/gauge/set-interval.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/set-interval.js");
    }
}
