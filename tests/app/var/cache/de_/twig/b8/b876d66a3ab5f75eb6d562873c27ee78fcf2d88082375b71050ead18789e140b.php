<?php

/* node_modules/es5-ext/test/object/is-plain-object.js */
class __TwigTemplate_d61a173aabdbc78f420798a8d687acbf5c0d0d489f100c71f143b529a05ed57b extends Twig_Template
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
        $__internal_ce8aacd4836e09c033a208ac73204e177e6efa258c1edd0818f36e0208838109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8aacd4836e09c033a208ac73204e177e6efa258c1edd0818f36e0208838109->enter($__internal_ce8aacd4836e09c033a208ac73204e177e6efa258c1edd0818f36e0208838109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-plain-object.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), true, \"Empty {} is plain object\");
\ta(t({ a: true }), true, \"{} with property is plain object\");
\ta(t({ prototype: 1, constructor: 2, __proto__: 3 }), true,
\t\t\"{} with any property keys is plain object\");
\ta(t(null), false, \"Null is not plain object\");
\ta(t(\"string\"), false, \"Primitive is not plain object\");
\ta(t(function () {}), false, \"Function is not plain object\");
\ta(t(Object.create({})), false,
\t\t\"Object whose prototype is not Object.prototype is not plain object\");
\ta(t(Object.create(Object.prototype)), true,
\t\t\"Object whose prototype is Object.prototype is plain object\");
\ta(t(Object.create(null)), true,
\t\t\"Object whose prototype is null is plain object\");
\ta(t(Object.prototype), false, \"Object.prototype\");
};
";
        
        $__internal_ce8aacd4836e09c033a208ac73204e177e6efa258c1edd0818f36e0208838109->leave($__internal_ce8aacd4836e09c033a208ac73204e177e6efa258c1edd0818f36e0208838109_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-plain-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), true, \"Empty {} is plain object\");
\ta(t({ a: true }), true, \"{} with property is plain object\");
\ta(t({ prototype: 1, constructor: 2, __proto__: 3 }), true,
\t\t\"{} with any property keys is plain object\");
\ta(t(null), false, \"Null is not plain object\");
\ta(t(\"string\"), false, \"Primitive is not plain object\");
\ta(t(function () {}), false, \"Function is not plain object\");
\ta(t(Object.create({})), false,
\t\t\"Object whose prototype is not Object.prototype is not plain object\");
\ta(t(Object.create(Object.prototype)), true,
\t\t\"Object whose prototype is Object.prototype is plain object\");
\ta(t(Object.create(null)), true,
\t\t\"Object whose prototype is null is plain object\");
\ta(t(Object.prototype), false, \"Object.prototype\");
};
", "node_modules/es5-ext/test/object/is-plain-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-plain-object.js");
    }
}
