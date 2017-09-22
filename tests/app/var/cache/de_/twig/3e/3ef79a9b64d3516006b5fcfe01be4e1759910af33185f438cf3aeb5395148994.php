<?php

/* node_modules/es5-ext/test/string/#/capitalize.js */
class __TwigTemplate_ad0d2a13378e7bb574d36c606fa2305421474f94018421d748bf72d5dcdcd6f9 extends Twig_Template
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
        $__internal_4b4a8ff126d7eb4336387fb585c6af7aa374d782bc75c8f932be7040f9c77c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4a8ff126d7eb4336387fb585c6af7aa374d782bc75c8f932be7040f9c77c8c->enter($__internal_4b4a8ff126d7eb4336387fb585c6af7aa374d782bc75c8f932be7040f9c77c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/capitalize.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"raz\"), \"Raz\", \"Word\");
\ta(t.call(\"BLA\"), \"BLA\", \"Uppercase\");
\ta(t.call(\"\"), \"\", \"Empty\");
\ta(t.call(\"a\"), \"A\", \"One letter\");
\ta(t.call(\"this is a test\"), \"This is a test\", \"Sentence\");
};
";
        
        $__internal_4b4a8ff126d7eb4336387fb585c6af7aa374d782bc75c8f932be7040f9c77c8c->leave($__internal_4b4a8ff126d7eb4336387fb585c6af7aa374d782bc75c8f932be7040f9c77c8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/capitalize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"raz\"), \"Raz\", \"Word\");
\ta(t.call(\"BLA\"), \"BLA\", \"Uppercase\");
\ta(t.call(\"\"), \"\", \"Empty\");
\ta(t.call(\"a\"), \"A\", \"One letter\");
\ta(t.call(\"this is a test\"), \"This is a test\", \"Sentence\");
};
", "node_modules/es5-ext/test/string/#/capitalize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/capitalize.js");
    }
}
