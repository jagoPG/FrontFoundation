<?php

/* node_modules/es5-ext/test/object/flatten.js */
class __TwigTemplate_301c519f82ea70ec00ea5c46efc0fbd2825d8c8979868cf7e48ba1882f6e8f4e extends Twig_Template
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
        $__internal_8943536b574cdffb66a81a4605351e12543b446c30d638431ab47eb9134bef63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8943536b574cdffb66a81a4605351e12543b446c30d638431ab47eb9134bef63->enter($__internal_8943536b574cdffb66a81a4605351e12543b446c30d638431ab47eb9134bef63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/flatten.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.deep(t({ a: { aa: 1, ab: 2 }, b: { ba: 3, bb: 4 } }),
\t\t{ aa: 1, ab: 2, ba: 3, bb: 4 });
};
";
        
        $__internal_8943536b574cdffb66a81a4605351e12543b446c30d638431ab47eb9134bef63->leave($__internal_8943536b574cdffb66a81a4605351e12543b446c30d638431ab47eb9134bef63_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.deep(t({ a: { aa: 1, ab: 2 }, b: { ba: 3, bb: 4 } }),
\t\t{ aa: 1, ab: 2, ba: 3, bb: 4 });
};
", "node_modules/es5-ext/test/object/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/flatten.js");
    }
}
