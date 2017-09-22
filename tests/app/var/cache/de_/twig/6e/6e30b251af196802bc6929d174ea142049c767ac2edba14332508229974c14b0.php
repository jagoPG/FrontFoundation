<?php

/* node_modules/es5-ext/string/#/repeat/implement.js */
class __TwigTemplate_9d6cfa0df383f58f27fddd203e1a6ab21fb2e4876d0bca4ed729729b915e3957 extends Twig_Template
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
        $__internal_51bd181beb7d5a9ed343e32ad273a260086f1df1373afdf8e29470df1ae50fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bd181beb7d5a9ed343e32ad273a260086f1df1373afdf8e29470df1ae50fa6->enter($__internal_51bd181beb7d5a9ed343e32ad273a260086f1df1373afdf8e29470df1ae50fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/repeat/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"repeat\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_51bd181beb7d5a9ed343e32ad273a260086f1df1373afdf8e29470df1ae50fa6->leave($__internal_51bd181beb7d5a9ed343e32ad273a260086f1df1373afdf8e29470df1ae50fa6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/repeat/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"repeat\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es5-ext/string/#/repeat/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/repeat/implement.js");
    }
}
