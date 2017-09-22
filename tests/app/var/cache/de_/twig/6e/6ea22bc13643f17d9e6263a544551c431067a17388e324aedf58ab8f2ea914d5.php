<?php

/* node_modules/es5-ext/string/#/normalize/implement.js */
class __TwigTemplate_1b369c3c064d38582f6c15063cab2817791d11f20ce371a52c373ad8637ec4a3 extends Twig_Template
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
        $__internal_f9c2630d1310aba300884e1383f14191bfbd57e2779b8bfed86f25c4970770a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c2630d1310aba300884e1383f14191bfbd57e2779b8bfed86f25c4970770a2->enter($__internal_f9c2630d1310aba300884e1383f14191bfbd57e2779b8bfed86f25c4970770a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/normalize/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"normalize\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_f9c2630d1310aba300884e1383f14191bfbd57e2779b8bfed86f25c4970770a2->leave($__internal_f9c2630d1310aba300884e1383f14191bfbd57e2779b8bfed86f25c4970770a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/normalize/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"normalize\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es5-ext/string/#/normalize/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/normalize/implement.js");
    }
}
