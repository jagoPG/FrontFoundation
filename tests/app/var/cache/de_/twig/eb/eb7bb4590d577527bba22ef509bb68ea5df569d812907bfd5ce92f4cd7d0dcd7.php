<?php

/* node_modules/es5-ext/test/function/_define-length.js */
class __TwigTemplate_c738e24a2bac34854387392c0a4ad5c3943986ca2b8cc92817dddd62f1d765cc extends Twig_Template
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
        $__internal_e222eb01bd9e7bf581a80bd02c083f4f5a8e28cf199d243b2f668c4269769020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e222eb01bd9e7bf581a80bd02c083f4f5a8e28cf199d243b2f668c4269769020->enter($__internal_e222eb01bd9e7bf581a80bd02c083f4f5a8e28cf199d243b2f668c4269769020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/_define-length.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar foo = \"raz\", bar = \"dwa\"
\t  , fn = function (a, b) {
 return this + a + b + foo + bar;
}
\t  , result;

\tresult = t(fn, 3);
\ta(result.call(\"marko\", \"el\", \"fe\"), \"markoelferazdwa\", \"Content\");
\ta(result.length, 3, \"Length\");
\ta(result.prototype, fn.prototype, \"Prototype\");
};
";
        
        $__internal_e222eb01bd9e7bf581a80bd02c083f4f5a8e28cf199d243b2f668c4269769020->leave($__internal_e222eb01bd9e7bf581a80bd02c083f4f5a8e28cf199d243b2f668c4269769020_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/_define-length.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar foo = \"raz\", bar = \"dwa\"
\t  , fn = function (a, b) {
 return this + a + b + foo + bar;
}
\t  , result;

\tresult = t(fn, 3);
\ta(result.call(\"marko\", \"el\", \"fe\"), \"markoelferazdwa\", \"Content\");
\ta(result.length, 3, \"Length\");
\ta(result.prototype, fn.prototype, \"Prototype\");
};
", "node_modules/es5-ext/test/function/_define-length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/_define-length.js");
    }
}
