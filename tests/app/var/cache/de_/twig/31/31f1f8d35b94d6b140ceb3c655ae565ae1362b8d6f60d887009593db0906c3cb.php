<?php

/* node_modules/fsevents/node_modules/asynckit/index.js */
class __TwigTemplate_f93c0fa9fa3cb5e4130c2b975722a52d6342e617711fad98aeb5244163d6043e extends Twig_Template
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
        $__internal_472a3be63886c6115fda947abe25992ba330983cabe8a80ff01a015166acaa9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472a3be63886c6115fda947abe25992ba330983cabe8a80ff01a015166acaa9a->enter($__internal_472a3be63886c6115fda947abe25992ba330983cabe8a80ff01a015166acaa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/index.js"));

        // line 1
        echo "module.exports =
{
  parallel      : require('./parallel.js'),
  serial        : require('./serial.js'),
  serialOrdered : require('./serialOrdered.js')
};
";
        
        $__internal_472a3be63886c6115fda947abe25992ba330983cabe8a80ff01a015166acaa9a->leave($__internal_472a3be63886c6115fda947abe25992ba330983cabe8a80ff01a015166acaa9a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports =
{
  parallel      : require('./parallel.js'),
  serial        : require('./serial.js'),
  serialOrdered : require('./serialOrdered.js')
};
", "node_modules/fsevents/node_modules/asynckit/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/index.js");
    }
}
