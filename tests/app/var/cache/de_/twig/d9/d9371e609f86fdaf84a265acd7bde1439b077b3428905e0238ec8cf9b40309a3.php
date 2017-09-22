<?php

/* node_modules/es5-ext/object/assign/is-implemented.js */
class __TwigTemplate_b936fbf02e8bd346a3cfcfb1ceddeea47e8f9739450d2c7e55c3e1f75051ef30 extends Twig_Template
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
        $__internal_948fa2c00ea3af4d011f5593cb391779a7ff2803a17ae1be4e5d680f3e611d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948fa2c00ea3af4d011f5593cb391779a7ff2803a17ae1be4e5d680f3e611d55->enter($__internal_948fa2c00ea3af4d011f5593cb391779a7ff2803a17ae1be4e5d680f3e611d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/assign/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar assign = Object.assign, obj;
\tif (typeof assign !== \"function\") return false;
\tobj = { foo: \"raz\" };
\tassign(obj, { bar: \"dwa\" }, { trzy: \"trzy\" });
\treturn (obj.foo + obj.bar + obj.trzy) === \"razdwatrzy\";
};
";
        
        $__internal_948fa2c00ea3af4d011f5593cb391779a7ff2803a17ae1be4e5d680f3e611d55->leave($__internal_948fa2c00ea3af4d011f5593cb391779a7ff2803a17ae1be4e5d680f3e611d55_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/assign/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar assign = Object.assign, obj;
\tif (typeof assign !== \"function\") return false;
\tobj = { foo: \"raz\" };
\tassign(obj, { bar: \"dwa\" }, { trzy: \"trzy\" });
\treturn (obj.foo + obj.bar + obj.trzy) === \"razdwatrzy\";
};
", "node_modules/es5-ext/object/assign/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/assign/is-implemented.js");
    }
}
