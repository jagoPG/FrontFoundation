<?php

/* node_modules/process/index.js */
class __TwigTemplate_7a175a9b759b8cee49c6001fa342b7f26d11baa6d88a5655a3b67c62888117d9 extends Twig_Template
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
        $__internal_aaefd518f8d0bbd6935658a8d488e8f11a64a9fec01dfe3182a3e372d13f7a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaefd518f8d0bbd6935658a8d488e8f11a64a9fec01dfe3182a3e372d13f7a5d->enter($__internal_aaefd518f8d0bbd6935658a8d488e8f11a64a9fec01dfe3182a3e372d13f7a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/process/index.js"));

        // line 1
        echo "// for now just expose the builtin process global from node.js
module.exports = global.process;
";
        
        $__internal_aaefd518f8d0bbd6935658a8d488e8f11a64a9fec01dfe3182a3e372d13f7a5d->leave($__internal_aaefd518f8d0bbd6935658a8d488e8f11a64a9fec01dfe3182a3e372d13f7a5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/process/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for now just expose the builtin process global from node.js
module.exports = global.process;
", "node_modules/process/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/process/index.js");
    }
}
