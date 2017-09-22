<?php

/* node_modules/core-js/modules/core.regexp.escape.js */
class __TwigTemplate_c500a22c9e1d47fbcd0f0ab902f4c1f66e7c2067cefc682167b812930595a6df extends Twig_Template
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
        $__internal_2c624c6abd6c29f84668456c90e2ff5ad1ecec93220c8f81234a377c244947f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c624c6abd6c29f84668456c90e2ff5ad1ecec93220c8f81234a377c244947f6->enter($__internal_2c624c6abd6c29f84668456c90e2ff5ad1ecec93220c8f81234a377c244947f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.regexp.escape.js"));

        // line 1
        echo "// https://github.com/benjamingr/RexExp.escape
var \$export = require('./_export');
var \$re = require('./_replacer')(/[\\\\^\$*+?.()|[\\]{}]/g, '\\\\\$&');

\$export(\$export.S, 'RegExp', { escape: function escape(it) { return \$re(it); } });
";
        
        $__internal_2c624c6abd6c29f84668456c90e2ff5ad1ecec93220c8f81234a377c244947f6->leave($__internal_2c624c6abd6c29f84668456c90e2ff5ad1ecec93220c8f81234a377c244947f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.regexp.escape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/benjamingr/RexExp.escape
var \$export = require('./_export');
var \$re = require('./_replacer')(/[\\\\^\$*+?.()|[\\]{}]/g, '\\\\\$&');

\$export(\$export.S, 'RegExp', { escape: function escape(it) { return \$re(it); } });
", "node_modules/core-js/modules/core.regexp.escape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.regexp.escape.js");
    }
}
