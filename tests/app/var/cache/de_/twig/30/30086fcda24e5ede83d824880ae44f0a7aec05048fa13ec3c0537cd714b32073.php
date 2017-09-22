<?php

/* node_modules/es5-ext/test/string/#/case-insensitive-compare.js */
class __TwigTemplate_940e34646e7733e7436a285b278dd96fad4e8325279996f50f43a818e20fc1c1 extends Twig_Template
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
        $__internal_cd27b378e0e67ba9657e95861b7123afd53ba6c4c50da6aae503941a566c4ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd27b378e0e67ba9657e95861b7123afd53ba6c4c50da6aae503941a566c4ef9->enter($__internal_cd27b378e0e67ba9657e95861b7123afd53ba6c4c50da6aae503941a566c4ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/case-insensitive-compare.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"AA\", \"aa\"), 0, \"Same\");
\ta.ok(t.call(\"Amber\", \"zebra\") < 0, \"Less\");
\ta.ok(t.call(\"Zebra\", \"amber\") > 0, \"Greater\");
};
";
        
        $__internal_cd27b378e0e67ba9657e95861b7123afd53ba6c4c50da6aae503941a566c4ef9->leave($__internal_cd27b378e0e67ba9657e95861b7123afd53ba6c4c50da6aae503941a566c4ef9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/case-insensitive-compare.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"AA\", \"aa\"), 0, \"Same\");
\ta.ok(t.call(\"Amber\", \"zebra\") < 0, \"Less\");
\ta.ok(t.call(\"Zebra\", \"amber\") > 0, \"Greater\");
};
", "node_modules/es5-ext/test/string/#/case-insensitive-compare.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/case-insensitive-compare.js");
    }
}
