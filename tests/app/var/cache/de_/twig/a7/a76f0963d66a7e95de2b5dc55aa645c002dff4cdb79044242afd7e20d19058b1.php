<?php

/* node_modules/es5-ext/test/array/#/separate.js */
class __TwigTemplate_0ba8c7fcc36d13324f615b9f83f5769fdf8b341f85ebc0e80ab78325e0ab3f5b extends Twig_Template
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
        $__internal_14a0242222c0a58c5ca257254c8d89eb0e3e8a00beffc7e7b3c8b2f3be90a7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a0242222c0a58c5ca257254c8d89eb0e3e8a00beffc7e7b3c8b2f3be90a7a4->enter($__internal_14a0242222c0a58c5ca257254c8d89eb0e3e8a00beffc7e7b3c8b2f3be90a7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/separate.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = [], y = {}, z = {};
\ta.deep(t.call(x, y), [], \"Empty\");
\ta.not(t.call(x), x, \"Returns copy\");
\ta.deep(t.call([1], y), [1], \"One\");
\ta.deep(t.call([1, \"raz\"], y), [1, y, \"raz\"], \"One\");
\ta.deep(t.call([1, \"raz\", x], y), [1, y, \"raz\", y, x], \"More\");
\tx = new Array(1000);
\tx[23] = 2;
\tx[3453] = \"raz\";
\tx[500] = z;
\ta.deep(t.call(x, y), [2, y, z, y, \"raz\"], \"Sparse\");
};
";
        
        $__internal_14a0242222c0a58c5ca257254c8d89eb0e3e8a00beffc7e7b3c8b2f3be90a7a4->leave($__internal_14a0242222c0a58c5ca257254c8d89eb0e3e8a00beffc7e7b3c8b2f3be90a7a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/separate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x = [], y = {}, z = {};
\ta.deep(t.call(x, y), [], \"Empty\");
\ta.not(t.call(x), x, \"Returns copy\");
\ta.deep(t.call([1], y), [1], \"One\");
\ta.deep(t.call([1, \"raz\"], y), [1, y, \"raz\"], \"One\");
\ta.deep(t.call([1, \"raz\", x], y), [1, y, \"raz\", y, x], \"More\");
\tx = new Array(1000);
\tx[23] = 2;
\tx[3453] = \"raz\";
\tx[500] = z;
\ta.deep(t.call(x, y), [2, y, z, y, \"raz\"], \"Sparse\");
};
", "node_modules/es5-ext/test/array/#/separate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/separate.js");
    }
}
