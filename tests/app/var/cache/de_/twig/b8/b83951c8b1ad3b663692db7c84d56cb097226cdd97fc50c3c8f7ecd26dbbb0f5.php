<?php

/* node_modules/core-js/modules/es6.parse-int.js */
class __TwigTemplate_6030b2cf2c5a3b95113b3a8dc80ff1424e7e5d8f501944a6d077d081d083e830 extends Twig_Template
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
        $__internal_8a6a8e451aedc996ae260ff1956682ebcffa3aae11b5ff569184719e25026348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6a8e451aedc996ae260ff1956682ebcffa3aae11b5ff569184719e25026348->enter($__internal_8a6a8e451aedc996ae260ff1956682ebcffa3aae11b5ff569184719e25026348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.parse-int.js"));

        // line 1
        echo "var \$export = require('./_export');
var \$parseInt = require('./_parse-int');
// 18.2.5 parseInt(string, radix)
\$export(\$export.G + \$export.F * (parseInt != \$parseInt), { parseInt: \$parseInt });
";
        
        $__internal_8a6a8e451aedc996ae260ff1956682ebcffa3aae11b5ff569184719e25026348->leave($__internal_8a6a8e451aedc996ae260ff1956682ebcffa3aae11b5ff569184719e25026348_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.parse-int.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var \$parseInt = require('./_parse-int');
// 18.2.5 parseInt(string, radix)
\$export(\$export.G + \$export.F * (parseInt != \$parseInt), { parseInt: \$parseInt });
", "node_modules/core-js/modules/es6.parse-int.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.parse-int.js");
    }
}
