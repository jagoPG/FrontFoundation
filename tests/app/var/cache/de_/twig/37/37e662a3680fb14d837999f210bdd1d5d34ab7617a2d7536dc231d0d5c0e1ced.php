<?php

/* node_modules/readable-stream/writable-browser.js */
class __TwigTemplate_ba4a3600cbf157ca68c8e2f8465f4e310f0a1214cdcbf1c76ac7f069293375a6 extends Twig_Template
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
        $__internal_f859950f8e77297c93d450bb6560b56168a44ac88ab8432ab507417f6e1e9c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f859950f8e77297c93d450bb6560b56168a44ac88ab8432ab507417f6e1e9c3f->enter($__internal_f859950f8e77297c93d450bb6560b56168a44ac88ab8432ab507417f6e1e9c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readable-stream/writable-browser.js"));

        // line 1
        echo "module.exports = require('./lib/_stream_writable.js');
";
        
        $__internal_f859950f8e77297c93d450bb6560b56168a44ac88ab8432ab507417f6e1e9c3f->leave($__internal_f859950f8e77297c93d450bb6560b56168a44ac88ab8432ab507417f6e1e9c3f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readable-stream/writable-browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./lib/_stream_writable.js');
", "node_modules/readable-stream/writable-browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readable-stream/writable-browser.js");
    }
}
