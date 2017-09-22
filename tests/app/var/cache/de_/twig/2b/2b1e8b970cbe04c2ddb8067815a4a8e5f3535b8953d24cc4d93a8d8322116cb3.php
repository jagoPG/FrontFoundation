<?php

/* node_modules/es5-ext/test/object/key-of.js */
class __TwigTemplate_752204099588e52097a0e17d2a174c0af0086d33ae2e1e48f0c33f4fb741b828 extends Twig_Template
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
        $__internal_07416597a05a41994e515db32e4a130a3f389f8f1bd567391a8121f29674c11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07416597a05a41994e515db32e4a130a3f389f8f1bd567391a8121f29674c11b->enter($__internal_07416597a05a41994e515db32e4a130a3f389f8f1bd567391a8121f29674c11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/key-of.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {}, y = {}
\t  , o = { foo: \"bar\", raz: x, trzy: \"cztery\", five: \"6\" };

\ta(t(o, \"bar\"), \"foo\", \"First property\");
\ta(t(o, 6), null, \"Primitive that's not there\");
\ta(t(o, x), \"raz\", \"Object\");
\ta(t(o, y), null, \"Object that's not there\");
\ta(t(o, \"6\"), \"five\", \"Last property\");
};
";
        
        $__internal_07416597a05a41994e515db32e4a130a3f389f8f1bd567391a8121f29674c11b->leave($__internal_07416597a05a41994e515db32e4a130a3f389f8f1bd567391a8121f29674c11b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/key-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x = {}, y = {}
\t  , o = { foo: \"bar\", raz: x, trzy: \"cztery\", five: \"6\" };

\ta(t(o, \"bar\"), \"foo\", \"First property\");
\ta(t(o, 6), null, \"Primitive that's not there\");
\ta(t(o, x), \"raz\", \"Object\");
\ta(t(o, y), null, \"Object that's not there\");
\ta(t(o, \"6\"), \"five\", \"Last property\");
};
", "node_modules/es5-ext/test/object/key-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/key-of.js");
    }
}
