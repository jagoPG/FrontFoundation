<?php

/* node_modules/es5-ext/test/array/_sub-array-dummy.js */
class __TwigTemplate_c3e64af5da0d6e074692119bb39732d0d299f09f4f011abb60cd8a05ff30283a extends Twig_Template
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
        $__internal_3b7c46a61c7bed96208a042c4c31a345b633abca909dd2d38e6f5b27f8504e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7c46a61c7bed96208a042c4c31a345b633abca909dd2d38e6f5b27f8504e16->enter($__internal_3b7c46a61c7bed96208a042c4c31a345b633abca909dd2d38e6f5b27f8504e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/_sub-array-dummy.js"));

        // line 1
        echo "\"use strict\";

var isArray = Array.isArray;

module.exports = function (t) {
\tt(t === null || isArray(t.prototype), true);
};
";
        
        $__internal_3b7c46a61c7bed96208a042c4c31a345b633abca909dd2d38e6f5b27f8504e16->leave($__internal_3b7c46a61c7bed96208a042c4c31a345b633abca909dd2d38e6f5b27f8504e16_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/_sub-array-dummy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isArray = Array.isArray;

module.exports = function (t) {
\tt(t === null || isArray(t.prototype), true);
};
", "node_modules/es5-ext/test/array/_sub-array-dummy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/_sub-array-dummy.js");
    }
}
