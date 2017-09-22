<?php

/* node_modules/fsevents/node_modules/minimist/example/parse.js */
class __TwigTemplate_27ea869c923c52799e851a749045d2c8be7a7d2e84ea58f0d8549080d173b05e extends Twig_Template
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
        $__internal_ff94053291a7673574dc700117237d6f4c087217a5d4948f7178d95944975845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff94053291a7673574dc700117237d6f4c087217a5d4948f7178d95944975845->enter($__internal_ff94053291a7673574dc700117237d6f4c087217a5d4948f7178d95944975845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/minimist/example/parse.js"));

        // line 1
        echo "var argv = require('../')(process.argv.slice(2));
console.dir(argv);
";
        
        $__internal_ff94053291a7673574dc700117237d6f4c087217a5d4948f7178d95944975845->leave($__internal_ff94053291a7673574dc700117237d6f4c087217a5d4948f7178d95944975845_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/minimist/example/parse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var argv = require('../')(process.argv.slice(2));
console.dir(argv);
", "node_modules/fsevents/node_modules/minimist/example/parse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/minimist/example/parse.js");
    }
}
