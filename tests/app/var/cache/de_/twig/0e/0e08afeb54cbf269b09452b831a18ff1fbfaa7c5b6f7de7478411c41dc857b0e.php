<?php

/* node_modules/fsevents/node_modules/jsonify/index.js */
class __TwigTemplate_3d2cd7da22b3efb1d8485f8c0dd8865879629c4e6f252ae703e38d9e9862df24 extends Twig_Template
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
        $__internal_b5d721583044aac54af29e7d93cb1f2cdc5667cc039a7b56ded80ee978d24543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d721583044aac54af29e7d93cb1f2cdc5667cc039a7b56ded80ee978d24543->enter($__internal_b5d721583044aac54af29e7d93cb1f2cdc5667cc039a7b56ded80ee978d24543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jsonify/index.js"));

        // line 1
        echo "exports.parse = require('./lib/parse');
exports.stringify = require('./lib/stringify');
";
        
        $__internal_b5d721583044aac54af29e7d93cb1f2cdc5667cc039a7b56ded80ee978d24543->leave($__internal_b5d721583044aac54af29e7d93cb1f2cdc5667cc039a7b56ded80ee978d24543_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jsonify/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.parse = require('./lib/parse');
exports.stringify = require('./lib/stringify');
", "node_modules/fsevents/node_modules/jsonify/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jsonify/index.js");
    }
}
