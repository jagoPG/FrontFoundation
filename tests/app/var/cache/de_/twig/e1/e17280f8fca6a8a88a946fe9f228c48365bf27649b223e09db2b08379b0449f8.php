<?php

/* node_modules/es5-ext/test/array/#/first-index.js */
class __TwigTemplate_9d42413143d671f15cc73639a4d9e9348cbfc3a72dc1664ee04f43ac4bf5abb9 extends Twig_Template
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
        $__internal_92a831910e2e17eefab428f3e62234dd080c2150dffe539646b97483c848042e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a831910e2e17eefab428f3e62234dd080c2150dffe539646b97483c848042e->enter($__internal_92a831910e2e17eefab428f3e62234dd080c2150dffe539646b97483c848042e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/first-index.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x;
\ta(t.call([]), null, \"Empty\");
\ta(t.call([null]), 0, \"One value\");
\ta(t.call([1, 2, 3]), 0, \"Many values\");
\ta(t.call(new Array(1000)), null, \"Sparse empty\");
\tx = [];
\tx[883] = undefined;
\tx[890] = null;
\ta(t.call(x), 883, \"Manual sparse, distant value\");
\tx = new Array(1000);
\tx[657] = undefined;
\tx[700] = null;
\ta(t.call(x), 657, \"Sparse, distant value\");
};
";
        
        $__internal_92a831910e2e17eefab428f3e62234dd080c2150dffe539646b97483c848042e->leave($__internal_92a831910e2e17eefab428f3e62234dd080c2150dffe539646b97483c848042e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/first-index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x;
\ta(t.call([]), null, \"Empty\");
\ta(t.call([null]), 0, \"One value\");
\ta(t.call([1, 2, 3]), 0, \"Many values\");
\ta(t.call(new Array(1000)), null, \"Sparse empty\");
\tx = [];
\tx[883] = undefined;
\tx[890] = null;
\ta(t.call(x), 883, \"Manual sparse, distant value\");
\tx = new Array(1000);
\tx[657] = undefined;
\tx[700] = null;
\ta(t.call(x), 657, \"Sparse, distant value\");
};
", "node_modules/es5-ext/test/array/#/first-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/first-index.js");
    }
}
