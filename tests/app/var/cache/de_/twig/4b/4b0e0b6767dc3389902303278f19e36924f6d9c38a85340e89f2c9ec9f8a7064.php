<?php

/* node_modules/es5-ext/test/object/primitive-set.js */
class __TwigTemplate_66294e4ff4641179a8d9699f4740f18883f831b1810eb5df8b596879c844b44e extends Twig_Template
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
        $__internal_56f2f4a263d48bf2467f9c46d69793d8b0c996916eac5e87ef4157a8a578371e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f2f4a263d48bf2467f9c46d69793d8b0c996916eac5e87ef4157a8a578371e->enter($__internal_56f2f4a263d48bf2467f9c46d69793d8b0c996916eac5e87ef4157a8a578371e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/primitive-set.js"));

        // line 1
        echo "\"use strict\";

var getPropertyNames = require(\"../../object/get-property-names\")
  , isPlainObject    = require(\"../../object/is-plain-object\");

module.exports = function (t, a) {
\tvar x = t();
\ta(isPlainObject(x), true, \"Plain object\");
\ta.deep(getPropertyNames(x), [], \"No properties\");
\tx.foo = \"bar\";
\ta.deep(getPropertyNames(x), [\"foo\"], \"Extensible\");

\ta.deep(t(\"raz\", \"dwa\", 3), { raz: true, dwa: true, 3: true },
\t\t\"Arguments handling\");
};
";
        
        $__internal_56f2f4a263d48bf2467f9c46d69793d8b0c996916eac5e87ef4157a8a578371e->leave($__internal_56f2f4a263d48bf2467f9c46d69793d8b0c996916eac5e87ef4157a8a578371e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/primitive-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var getPropertyNames = require(\"../../object/get-property-names\")
  , isPlainObject    = require(\"../../object/is-plain-object\");

module.exports = function (t, a) {
\tvar x = t();
\ta(isPlainObject(x), true, \"Plain object\");
\ta.deep(getPropertyNames(x), [], \"No properties\");
\tx.foo = \"bar\";
\ta.deep(getPropertyNames(x), [\"foo\"], \"Extensible\");

\ta.deep(t(\"raz\", \"dwa\", 3), { raz: true, dwa: true, 3: true },
\t\t\"Arguments handling\");
};
", "node_modules/es5-ext/test/object/primitive-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/primitive-set.js");
    }
}
