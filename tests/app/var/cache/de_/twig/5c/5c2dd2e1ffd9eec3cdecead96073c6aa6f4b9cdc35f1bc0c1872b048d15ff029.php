<?php

/* node_modules/es5-ext/array/#/clear.js */
class __TwigTemplate_6d3dd5026612a440b623a230d84e376301a2bb88ad59e21e0336b4dc3f8a73d2 extends Twig_Template
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
        $__internal_44da3710dcf480f7f9529c7c4dbdced100e76e50afa4c61673ba23213201fd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44da3710dcf480f7f9529c7c4dbdced100e76e50afa4c61673ba23213201fd8f->enter($__internal_44da3710dcf480f7f9529c7c4dbdced100e76e50afa4c61673ba23213201fd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/clear.js"));

        // line 1
        echo "// Inspired by Google Closure:
// http://closure-library.googlecode.com/svn/docs/
// closure_goog_array_array.js.html#goog.array.clear

\"use strict\";

var value = require(\"../../object/valid-value\");

module.exports = function () {
\tvalue(this).length = 0;
\treturn this;
};
";
        
        $__internal_44da3710dcf480f7f9529c7c4dbdced100e76e50afa4c61673ba23213201fd8f->leave($__internal_44da3710dcf480f7f9529c7c4dbdced100e76e50afa4c61673ba23213201fd8f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/clear.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Inspired by Google Closure:
// http://closure-library.googlecode.com/svn/docs/
// closure_goog_array_array.js.html#goog.array.clear

\"use strict\";

var value = require(\"../../object/valid-value\");

module.exports = function () {
\tvalue(this).length = 0;
\treturn this;
};
", "node_modules/es5-ext/array/#/clear.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/clear.js");
    }
}
