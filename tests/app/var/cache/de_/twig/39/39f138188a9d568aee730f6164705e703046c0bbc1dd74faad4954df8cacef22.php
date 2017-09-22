<?php

/* node_modules/es5-ext/math/acosh/implement.js */
class __TwigTemplate_65237ba70a24714ee5878ac239b1786e5110616308e4bc1fe19464e6a76d1e2e extends Twig_Template
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
        $__internal_ac0953e04de754cd1bf7f17ecc0decf3ab6f3c5ba8111e2a1ead2e73c3ec6a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0953e04de754cd1bf7f17ecc0decf3ab6f3c5ba8111e2a1ead2e73c3ec6a37->enter($__internal_ac0953e04de754cd1bf7f17ecc0decf3ab6f3c5ba8111e2a1ead2e73c3ec6a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/acosh/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"acosh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_ac0953e04de754cd1bf7f17ecc0decf3ab6f3c5ba8111e2a1ead2e73c3ec6a37->leave($__internal_ac0953e04de754cd1bf7f17ecc0decf3ab6f3c5ba8111e2a1ead2e73c3ec6a37_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/acosh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"acosh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/acosh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/acosh/implement.js");
    }
}
