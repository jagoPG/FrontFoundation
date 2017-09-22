<?php

/* node_modules/core-js/library/modules/es6.parse-float.js */
class __TwigTemplate_6386f7e9b026cf4b4b377a98a50777f979ef3824128e45edd1c4520780e0f08a extends Twig_Template
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
        $__internal_2067fa1e6ebe177006131085da15256b4f9df2061326981761b7b518f544ed7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2067fa1e6ebe177006131085da15256b4f9df2061326981761b7b518f544ed7e->enter($__internal_2067fa1e6ebe177006131085da15256b4f9df2061326981761b7b518f544ed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.parse-float.js"));

        // line 1
        echo "var \$export = require('./_export');
var \$parseFloat = require('./_parse-float');
// 18.2.4 parseFloat(string)
\$export(\$export.G + \$export.F * (parseFloat != \$parseFloat), { parseFloat: \$parseFloat });
";
        
        $__internal_2067fa1e6ebe177006131085da15256b4f9df2061326981761b7b518f544ed7e->leave($__internal_2067fa1e6ebe177006131085da15256b4f9df2061326981761b7b518f544ed7e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.parse-float.js";
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
", "node_modules/core-js/library/modules/es6.parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.parse-float.js");
    }
}
