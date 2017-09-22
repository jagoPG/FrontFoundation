<?php

/* node_modules/es5-ext/test/string/#/uncapitalize.js */
class __TwigTemplate_e4021f99da83b15b9a02fb04f7099fbd057b01c6d74f2899459aaa1688e14bc8 extends Twig_Template
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
        $__internal_50417a333817423f667c91f76153d45a43e0348f356fbebab589d069c2ce4440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50417a333817423f667c91f76153d45a43e0348f356fbebab589d069c2ce4440->enter($__internal_50417a333817423f667c91f76153d45a43e0348f356fbebab589d069c2ce4440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/uncapitalize.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"raz\"), \"raz\", \"Word\");
\ta(t.call(\"BLA\"), \"bLA\", \"Uppercase\");
\ta(t.call(\"\"), \"\", \"Empty\");
\ta(t.call(\"a\"), \"a\", \"One letter\");
\ta(t.call(\"this is a test\"), \"this is a test\", \"Sentence\");
\ta(t.call(\"This is a test\"), \"this is a test\", \"Capitalized sentence\");
};
";
        
        $__internal_50417a333817423f667c91f76153d45a43e0348f356fbebab589d069c2ce4440->leave($__internal_50417a333817423f667c91f76153d45a43e0348f356fbebab589d069c2ce4440_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/uncapitalize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"raz\"), \"raz\", \"Word\");
\ta(t.call(\"BLA\"), \"bLA\", \"Uppercase\");
\ta(t.call(\"\"), \"\", \"Empty\");
\ta(t.call(\"a\"), \"a\", \"One letter\");
\ta(t.call(\"this is a test\"), \"this is a test\", \"Sentence\");
\ta(t.call(\"This is a test\"), \"this is a test\", \"Capitalized sentence\");
};
", "node_modules/es5-ext/test/string/#/uncapitalize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/uncapitalize.js");
    }
}
