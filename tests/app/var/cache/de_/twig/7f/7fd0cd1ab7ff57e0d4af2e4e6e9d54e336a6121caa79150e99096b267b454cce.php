<?php

/* node_modules/es5-ext/test/array/#/last-index.js */
class __TwigTemplate_1d90c0a6b721e711c67a3682e4f86e36c2ae2b32fecac9292558d528f83f37c3 extends Twig_Template
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
        $__internal_27bbfe88678b1979f6b666653343c1553041522e3080ba19da0f5ce2c6d7631e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bbfe88678b1979f6b666653343c1553041522e3080ba19da0f5ce2c6d7631e->enter($__internal_27bbfe88678b1979f6b666653343c1553041522e3080ba19da0f5ce2c6d7631e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/last-index.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x;
\ta(t.call([]), null, \"Empty\");
\ta(t.call([null]), 0, \"One value\");
\ta(t.call([1, 2, 3]), 2, \"Many values\");
\ta(t.call(new Array(1000)), null, \"Sparse empty\");
\tx = [];
\tx[883] = null;
\tx[890] = undefined;
\ta(t.call(x), 890, \"Manual sparse, distant value\");
\tx = new Array(1000);
\tx[657] = null;
\tx[700] = undefined;
\ta(t.call(x), 700, \"Sparse, distant value\");
};
";
        
        $__internal_27bbfe88678b1979f6b666653343c1553041522e3080ba19da0f5ce2c6d7631e->leave($__internal_27bbfe88678b1979f6b666653343c1553041522e3080ba19da0f5ce2c6d7631e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/last-index.js";
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
\ta(t.call([1, 2, 3]), 2, \"Many values\");
\ta(t.call(new Array(1000)), null, \"Sparse empty\");
\tx = [];
\tx[883] = null;
\tx[890] = undefined;
\ta(t.call(x), 890, \"Manual sparse, distant value\");
\tx = new Array(1000);
\tx[657] = null;
\tx[700] = undefined;
\ta(t.call(x), 700, \"Sparse, distant value\");
};
", "node_modules/es5-ext/test/array/#/last-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/last-index.js");
    }
}
