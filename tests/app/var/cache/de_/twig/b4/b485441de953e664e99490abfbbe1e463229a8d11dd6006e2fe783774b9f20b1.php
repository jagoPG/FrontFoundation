<?php

/* node_modules/core-js/modules/es7.math.deg-per-rad.js */
class __TwigTemplate_8fa55a24bdfa6d6510e3e4be254c44691d9dc868be5bb3d9e972f10bb9394d1d extends Twig_Template
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
        $__internal_953bd991484184f8d0080d1a30fd1bc9e089599d9afe15aa4e5f0647d5365677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953bd991484184f8d0080d1a30fd1bc9e089599d9afe15aa4e5f0647d5365677->enter($__internal_953bd991484184f8d0080d1a30fd1bc9e089599d9afe15aa4e5f0647d5365677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.deg-per-rad.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', { DEG_PER_RAD: Math.PI / 180 });
";
        
        $__internal_953bd991484184f8d0080d1a30fd1bc9e089599d9afe15aa4e5f0647d5365677->leave($__internal_953bd991484184f8d0080d1a30fd1bc9e089599d9afe15aa4e5f0647d5365677_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.deg-per-rad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', { DEG_PER_RAD: Math.PI / 180 });
", "node_modules/core-js/modules/es7.math.deg-per-rad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.deg-per-rad.js");
    }
}
