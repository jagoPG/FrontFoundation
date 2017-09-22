<?php

/* node_modules/es5-ext/test/object/create.js */
class __TwigTemplate_db4156b7671354874ccb1538fc2e86d7ffafddea363cffb38572342b67e62b68 extends Twig_Template
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
        $__internal_73d9c9b308a97015a696aaf21049837c1e1fd5831e31fb5a4dff50ce38850e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d9c9b308a97015a696aaf21049837c1e1fd5831e31fb5a4dff50ce38850e5d->enter($__internal_73d9c9b308a97015a696aaf21049837c1e1fd5831e31fb5a4dff50ce38850e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/create.js"));

        // line 1
        echo "\"use strict\";

var setPrototypeOf = require(\"../../object/set-prototype-of\")

  , getPrototypeOf = Object.getPrototypeOf;

module.exports = function (t, a) {
\tvar x = {}, obj;

\ta(getPrototypeOf(t(x)), x, \"Normal object\");
\ta(getPrototypeOf(t(null)),
\t\t(setPrototypeOf && setPrototypeOf.nullPolyfill) || null, \"Null\");

\ta.h1(\"Properties\");
\ta.h2(\"Normal object\");
\ta(getPrototypeOf(obj = t(x, { foo: { value: \"bar\" } })), x, \"Prototype\");
\ta(obj.foo, \"bar\", \"Property\");
\ta.h2(\"Null\");
\ta(getPrototypeOf(obj = t(null, { foo: { value: \"bar2\" } })),
\t\t(setPrototypeOf && setPrototypeOf.nullPolyfill) || null, \"Prototype\");
\ta(obj.foo, \"bar2\", \"Property\");
};
";
        
        $__internal_73d9c9b308a97015a696aaf21049837c1e1fd5831e31fb5a4dff50ce38850e5d->leave($__internal_73d9c9b308a97015a696aaf21049837c1e1fd5831e31fb5a4dff50ce38850e5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var setPrototypeOf = require(\"../../object/set-prototype-of\")

  , getPrototypeOf = Object.getPrototypeOf;

module.exports = function (t, a) {
\tvar x = {}, obj;

\ta(getPrototypeOf(t(x)), x, \"Normal object\");
\ta(getPrototypeOf(t(null)),
\t\t(setPrototypeOf && setPrototypeOf.nullPolyfill) || null, \"Null\");

\ta.h1(\"Properties\");
\ta.h2(\"Normal object\");
\ta(getPrototypeOf(obj = t(x, { foo: { value: \"bar\" } })), x, \"Prototype\");
\ta(obj.foo, \"bar\", \"Property\");
\ta.h2(\"Null\");
\ta(getPrototypeOf(obj = t(null, { foo: { value: \"bar2\" } })),
\t\t(setPrototypeOf && setPrototypeOf.nullPolyfill) || null, \"Prototype\");
\ta(obj.foo, \"bar2\", \"Property\");
};
", "node_modules/es5-ext/test/object/create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/create.js");
    }
}
