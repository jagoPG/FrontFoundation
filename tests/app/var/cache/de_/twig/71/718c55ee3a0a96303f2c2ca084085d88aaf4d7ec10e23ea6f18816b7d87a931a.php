<?php

/* node_modules/uuid/lib/rng.js */
class __TwigTemplate_6eec7ae0a7b880ff24e6792b77c231e77ef5438a9dd43d04efa775ce7e8a1bc8 extends Twig_Template
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
        $__internal_6258f8155bcfb61c720a85bfa8c36a854c4904cc455af0dade80dfe12c27542a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6258f8155bcfb61c720a85bfa8c36a854c4904cc455af0dade80dfe12c27542a->enter($__internal_6258f8155bcfb61c720a85bfa8c36a854c4904cc455af0dade80dfe12c27542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/lib/rng.js"));

        // line 1
        echo "// Unique ID creation requires a high quality random # generator.  In node.js
// this is pretty straight-forward - we use the crypto API.

var rb = require('crypto').randomBytes;

function rng() {
  return rb(16);
}

module.exports = rng;
";
        
        $__internal_6258f8155bcfb61c720a85bfa8c36a854c4904cc455af0dade80dfe12c27542a->leave($__internal_6258f8155bcfb61c720a85bfa8c36a854c4904cc455af0dade80dfe12c27542a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/lib/rng.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Unique ID creation requires a high quality random # generator.  In node.js
// this is pretty straight-forward - we use the crypto API.

var rb = require('crypto').randomBytes;

function rng() {
  return rb(16);
}

module.exports = rng;
", "node_modules/uuid/lib/rng.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/lib/rng.js");
    }
}
