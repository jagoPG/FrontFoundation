<?php

/* node_modules/fsevents/node_modules/uuid/lib/rng.js */
class __TwigTemplate_f6b79a36d61dd1129123214ae8d7b79a2b8f9b408c3e1763de8059f680f33e1d extends Twig_Template
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
        $__internal_dd8586292535b4d159a9a0997b9c5670639924cebb99c35cc18413aea07ceae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8586292535b4d159a9a0997b9c5670639924cebb99c35cc18413aea07ceae4->enter($__internal_dd8586292535b4d159a9a0997b9c5670639924cebb99c35cc18413aea07ceae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/uuid/lib/rng.js"));

        // line 1
        echo "// Unique ID creation requires a high quality random # generator.  In node.js
// this is prett straight-forward - we use the crypto API.

var rb = require('crypto').randomBytes;

function rng() {
  return rb(16);
};

module.exports = rng;
";
        
        $__internal_dd8586292535b4d159a9a0997b9c5670639924cebb99c35cc18413aea07ceae4->leave($__internal_dd8586292535b4d159a9a0997b9c5670639924cebb99c35cc18413aea07ceae4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/uuid/lib/rng.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Unique ID creation requires a high quality random # generator.  In node.js
// this is prett straight-forward - we use the crypto API.

var rb = require('crypto').randomBytes;

function rng() {
  return rb(16);
};

module.exports = rng;
", "node_modules/fsevents/node_modules/uuid/lib/rng.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/uuid/lib/rng.js");
    }
}
