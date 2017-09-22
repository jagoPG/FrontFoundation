<?php

/* node_modules/es5-ext/array/of/implement.js */
class __TwigTemplate_65c65cb51e5a0abbbdeb9b2d624b5c94d5c38ca6d66afda2508d7f89515e1b64 extends Twig_Template
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
        $__internal_b7c9277882221b8ceb7b22d486d12782d4afe221f5bfd77ce1da938796a98a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c9277882221b8ceb7b22d486d12782d4afe221f5bfd77ce1da938796a98a9b->enter($__internal_b7c9277882221b8ceb7b22d486d12782d4afe221f5bfd77ce1da938796a98a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/of/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array, \"of\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_b7c9277882221b8ceb7b22d486d12782d4afe221f5bfd77ce1da938796a98a9b->leave($__internal_b7c9277882221b8ceb7b22d486d12782d4afe221f5bfd77ce1da938796a98a9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/of/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array, \"of\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/of/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/of/implement.js");
    }
}
