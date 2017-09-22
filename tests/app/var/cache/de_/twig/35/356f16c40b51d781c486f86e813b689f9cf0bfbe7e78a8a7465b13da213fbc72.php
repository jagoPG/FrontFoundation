<?php

/* node_modules/es5-ext/test/object/safe-traverse.js */
class __TwigTemplate_f5eb6c4a2a6e9900bbd1f836f64e7e39a33dfe0221f5f93061684dcd8cef9a75 extends Twig_Template
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
        $__internal_49929915070aae1e49f6c45009d0bb3f19ce2ddaa661965102846d5f491cf6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49929915070aae1e49f6c45009d0bb3f19ce2ddaa661965102846d5f491cf6bf->enter($__internal_49929915070aae1e49f6c45009d0bb3f19ce2ddaa661965102846d5f491cf6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/safe-traverse.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar obj = { foo: { bar: { lorem: 12 } } };
\ta(t(obj), obj, \"No props\");
\ta(t(obj, \"foo\"), obj.foo, \"One\");
\ta(t(obj, \"raz\"), undefined, \"One: Fail\");
\ta(t(obj, \"foo\", \"bar\"), obj.foo.bar, \"Two\");
\ta(t(obj, \"dsd\", \"raz\"), undefined, \"Two: Fail #1\");
\ta(t(obj, \"foo\", \"raz\"), undefined, \"Two: Fail #2\");
\ta(t(obj, \"foo\", \"bar\", \"lorem\"), obj.foo.bar.lorem, \"Three\");
\ta(t(obj, \"dsd\", \"raz\", \"fef\"), undefined, \"Three: Fail #1\");
\ta(t(obj, \"foo\", \"raz\", \"asdf\"), undefined, \"Three: Fail #2\");
\ta(t(obj, \"foo\", \"bar\", \"asd\"), undefined, \"Three: Fail #3\");
};
";
        
        $__internal_49929915070aae1e49f6c45009d0bb3f19ce2ddaa661965102846d5f491cf6bf->leave($__internal_49929915070aae1e49f6c45009d0bb3f19ce2ddaa661965102846d5f491cf6bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/safe-traverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar obj = { foo: { bar: { lorem: 12 } } };
\ta(t(obj), obj, \"No props\");
\ta(t(obj, \"foo\"), obj.foo, \"One\");
\ta(t(obj, \"raz\"), undefined, \"One: Fail\");
\ta(t(obj, \"foo\", \"bar\"), obj.foo.bar, \"Two\");
\ta(t(obj, \"dsd\", \"raz\"), undefined, \"Two: Fail #1\");
\ta(t(obj, \"foo\", \"raz\"), undefined, \"Two: Fail #2\");
\ta(t(obj, \"foo\", \"bar\", \"lorem\"), obj.foo.bar.lorem, \"Three\");
\ta(t(obj, \"dsd\", \"raz\", \"fef\"), undefined, \"Three: Fail #1\");
\ta(t(obj, \"foo\", \"raz\", \"asdf\"), undefined, \"Three: Fail #2\");
\ta(t(obj, \"foo\", \"bar\", \"asd\"), undefined, \"Three: Fail #3\");
};
", "node_modules/es5-ext/test/object/safe-traverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/safe-traverse.js");
    }
}
