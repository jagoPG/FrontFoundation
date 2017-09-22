<?php

/* node_modules/core-js/modules/es6.parse-float.js */
class __TwigTemplate_74f8329ba76a294583a5e68220cc5913dd9a05a4f851979514da758d323d8297 extends Twig_Template
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
        $__internal_f1db4aa6aa4100ff27de1e9a9b929906cb560219b16c53e8d26272050e395212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1db4aa6aa4100ff27de1e9a9b929906cb560219b16c53e8d26272050e395212->enter($__internal_f1db4aa6aa4100ff27de1e9a9b929906cb560219b16c53e8d26272050e395212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.parse-float.js"));

        // line 1
        echo "var \$export = require('./_export');
var \$parseFloat = require('./_parse-float');
// 18.2.4 parseFloat(string)
\$export(\$export.G + \$export.F * (parseFloat != \$parseFloat), { parseFloat: \$parseFloat });
";
        
        $__internal_f1db4aa6aa4100ff27de1e9a9b929906cb560219b16c53e8d26272050e395212->leave($__internal_f1db4aa6aa4100ff27de1e9a9b929906cb560219b16c53e8d26272050e395212_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.parse-float.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var \$parseFloat = require('./_parse-float');
// 18.2.4 parseFloat(string)
\$export(\$export.G + \$export.F * (parseFloat != \$parseFloat), { parseFloat: \$parseFloat });
", "node_modules/core-js/modules/es6.parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.parse-float.js");
    }
}
