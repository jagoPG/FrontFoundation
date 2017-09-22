<?php

/* node_modules/es5-ext/test/array/#/last.js */
class __TwigTemplate_987d816801f139b4e755ee503404085510edd6024a6351fd1c1c9f397e5c7cbf extends Twig_Template
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
        $__internal_b7589c861bd518a1ed9b6f0e0cabe96a17c4364b40381a604ba70394b0e54c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7589c861bd518a1ed9b6f0e0cabe96a17c4364b40381a604ba70394b0e54c2c->enter($__internal_b7589c861bd518a1ed9b6f0e0cabe96a17c4364b40381a604ba70394b0e54c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/last.js"));

        // line 1
        echo "\"use strict\";

exports.__generic = function (t, a) {
\ta(t.call(this), this[this.length - 1]);
};

exports[\"\"] = function (t, a) {
\tvar x;
\ta(t.call([]), undefined, \"Empty\");
\ta(t.call(new Array(234), undefined, \"Sparse empty\"));
\tx = new Array(2342);
\tx[434] = {};
\tx[450] = {};
\ta(t.call(x), x[450], \"Sparse\");
};
";
        
        $__internal_b7589c861bd518a1ed9b6f0e0cabe96a17c4364b40381a604ba70394b0e54c2c->leave($__internal_b7589c861bd518a1ed9b6f0e0cabe96a17c4364b40381a604ba70394b0e54c2c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/last.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__generic = function (t, a) {
\ta(t.call(this), this[this.length - 1]);
};

exports[\"\"] = function (t, a) {
\tvar x;
\ta(t.call([]), undefined, \"Empty\");
\ta(t.call(new Array(234), undefined, \"Sparse empty\"));
\tx = new Array(2342);
\tx[434] = {};
\tx[450] = {};
\ta(t.call(x), x[450], \"Sparse\");
};
", "node_modules/es5-ext/test/array/#/last.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/last.js");
    }
}
