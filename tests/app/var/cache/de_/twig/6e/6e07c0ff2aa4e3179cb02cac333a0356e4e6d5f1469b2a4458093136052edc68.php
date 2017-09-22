<?php

/* node_modules/es5-ext/test/object/keys/shim.js */
class __TwigTemplate_e23f94afe00a816a15ea0c56f120c0f78d7a27ca8cad3accc4201b448ad6a9c3 extends Twig_Template
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
        $__internal_043faad6f45c1027655c21e8fcb90adfcea43db2b5cd56fc7a74333805130f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043faad6f45c1027655c21e8fcb90adfcea43db2b5cd56fc7a74333805130f90->enter($__internal_043faad6f45c1027655c21e8fcb90adfcea43db2b5cd56fc7a74333805130f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/keys/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.deep(t({ foo: \"bar\" }), [\"foo\"], \"Object\");
\ta.deep(t(\"raz\"), [\"0\", \"1\", \"2\"], \"Primitive\");
\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"Undefined\");
};
";
        
        $__internal_043faad6f45c1027655c21e8fcb90adfcea43db2b5cd56fc7a74333805130f90->leave($__internal_043faad6f45c1027655c21e8fcb90adfcea43db2b5cd56fc7a74333805130f90_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/keys/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.deep(t({ foo: \"bar\" }), [\"foo\"], \"Object\");
\ta.deep(t(\"raz\"), [\"0\", \"1\", \"2\"], \"Primitive\");
\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"Undefined\");
};
", "node_modules/es5-ext/test/object/keys/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/keys/shim.js");
    }
}
