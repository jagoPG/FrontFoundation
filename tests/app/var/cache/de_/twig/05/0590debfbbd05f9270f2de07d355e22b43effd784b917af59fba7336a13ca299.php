<?php

/* node_modules/es5-ext/array/#/fill/implement.js */
class __TwigTemplate_84db82696aa5287184a794e787417504a50f327ceee32cbebddf482840fb9ab8 extends Twig_Template
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
        $__internal_bbec6d747ad797a1aac4b9acc53479524da447101cd5a9a5e58bc1935f04b427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbec6d747ad797a1aac4b9acc53479524da447101cd5a9a5e58bc1935f04b427->enter($__internal_bbec6d747ad797a1aac4b9acc53479524da447101cd5a9a5e58bc1935f04b427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/fill/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"fill\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_bbec6d747ad797a1aac4b9acc53479524da447101cd5a9a5e58bc1935f04b427->leave($__internal_bbec6d747ad797a1aac4b9acc53479524da447101cd5a9a5e58bc1935f04b427_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/fill/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"fill\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/fill/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/fill/implement.js");
    }
}
