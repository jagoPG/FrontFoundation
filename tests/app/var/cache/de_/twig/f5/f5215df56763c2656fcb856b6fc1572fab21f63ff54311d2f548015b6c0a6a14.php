<?php

/* node_modules/core-js/modules/es6.math.log10.js */
class __TwigTemplate_7082cefc5ecec801fa5b3b6e84c4b7402e8f9bfed260af5be1428512becadf95 extends Twig_Template
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
        $__internal_ceda3e2604a23f1a260635652d2058bd136a406e385c7dcce25f98e0f61cf92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceda3e2604a23f1a260635652d2058bd136a406e385c7dcce25f98e0f61cf92c->enter($__internal_ceda3e2604a23f1a260635652d2058bd136a406e385c7dcce25f98e0f61cf92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.log10.js"));

        // line 1
        echo "// 20.2.2.21 Math.log10(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  log10: function log10(x) {
    return Math.log(x) * Math.LOG10E;
  }
});
";
        
        $__internal_ceda3e2604a23f1a260635652d2058bd136a406e385c7dcce25f98e0f61cf92c->leave($__internal_ceda3e2604a23f1a260635652d2058bd136a406e385c7dcce25f98e0f61cf92c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.log10.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.21 Math.log10(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  log10: function log10(x) {
    return Math.log(x) * Math.LOG10E;
  }
});
", "node_modules/core-js/modules/es6.math.log10.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.log10.js");
    }
}
