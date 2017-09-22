<?php

/* node_modules/es5-ext/math/imul/implement.js */
class __TwigTemplate_9fd4a7a3a7c5d68faabbc67db05c6740d1f456f53e69782d82b44dbd80b8afa3 extends Twig_Template
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
        $__internal_0c91a790b780ebae3286d612fc2272616e10355022cd2d4c0adf6649e59fb301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c91a790b780ebae3286d612fc2272616e10355022cd2d4c0adf6649e59fb301->enter($__internal_0c91a790b780ebae3286d612fc2272616e10355022cd2d4c0adf6649e59fb301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/imul/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"imul\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_0c91a790b780ebae3286d612fc2272616e10355022cd2d4c0adf6649e59fb301->leave($__internal_0c91a790b780ebae3286d612fc2272616e10355022cd2d4c0adf6649e59fb301_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/imul/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"imul\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/imul/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/imul/implement.js");
    }
}
