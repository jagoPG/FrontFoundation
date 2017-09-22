<?php

/* node_modules/es5-ext/test/array/#/first.js */
class __TwigTemplate_9c099f1be273bc77383430b555d75547c634e39e5721350a6f6bd7c453dca4f6 extends Twig_Template
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
        $__internal_c9af17b15251522cb6c4a3da979308e91cbd910e992f028cc545c8de5860044b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9af17b15251522cb6c4a3da979308e91cbd910e992f028cc545c8de5860044b->enter($__internal_c9af17b15251522cb6c4a3da979308e91cbd910e992f028cc545c8de5860044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/first.js"));

        // line 1
        echo "\"use strict\";

exports.__generic = function (t, a) {
\ta(t.call(this), this[0]);
};
exports[\"\"] = function (t, a) {
\tvar x;
\ta(t.call([]), undefined, \"Empty\");
\ta(t.call(new Array(234), undefined, \"Sparse empty\"));
\tx = new Array(2342);
\tx[434] = {};
\ta(t.call(x), x[434], \"Sparse\");
};
";
        
        $__internal_c9af17b15251522cb6c4a3da979308e91cbd910e992f028cc545c8de5860044b->leave($__internal_c9af17b15251522cb6c4a3da979308e91cbd910e992f028cc545c8de5860044b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/first.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__generic = function (t, a) {
\ta(t.call(this), this[0]);
};
exports[\"\"] = function (t, a) {
\tvar x;
\ta(t.call([]), undefined, \"Empty\");
\ta(t.call(new Array(234), undefined, \"Sparse empty\"));
\tx = new Array(2342);
\tx[434] = {};
\ta(t.call(x), x[434], \"Sparse\");
};
", "node_modules/es5-ext/test/array/#/first.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/first.js");
    }
}
