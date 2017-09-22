<?php

/* node_modules/es5-ext/number/is-integer/implement.js */
class __TwigTemplate_54a3170081f174c4f7ba7eded027e0a98b00eb3deee35ecb98268bc69b79a820 extends Twig_Template
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
        $__internal_92b914d45de9e75cb777074292e686e47637241320677a710232347be3b5814c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b914d45de9e75cb777074292e686e47637241320677a710232347be3b5814c->enter($__internal_92b914d45de9e75cb777074292e686e47637241320677a710232347be3b5814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-integer/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"isInteger\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_92b914d45de9e75cb777074292e686e47637241320677a710232347be3b5814c->leave($__internal_92b914d45de9e75cb777074292e686e47637241320677a710232347be3b5814c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-integer/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"isInteger\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/number/is-integer/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-integer/implement.js");
    }
}
