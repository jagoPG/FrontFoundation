<?php

/* node_modules/es5-ext/test/object/get-property-names.js */
class __TwigTemplate_73269c74236a434ebc3d8cf729595974535d0ea5f7821e9fb3d4f2acc8120aa0 extends Twig_Template
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
        $__internal_f93473d6cef4de6981b3cb4641496b90306bc61db0610a31627b748dccfa6d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93473d6cef4de6981b3cb4641496b90306bc61db0610a31627b748dccfa6d62->enter($__internal_f93473d6cef4de6981b3cb4641496b90306bc61db0610a31627b748dccfa6d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/get-property-names.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o = { first: 1, second: 4 }, r1, r2;
\to = Object.create(o, {
\t\tthird: { value: null }
\t});
\to.first = 2;
\to = Object.create(o);
\to.fourth = 3;

\tr1 = t(o);
\tr1.sort();
\tr2 = [\"first\", \"second\", \"third\", \"fourth\"]
\t\t.concat(Object.getOwnPropertyNames(Object.prototype));
\tr2.sort();
\ta.deep(r1, r2);
};
";
        
        $__internal_f93473d6cef4de6981b3cb4641496b90306bc61db0610a31627b748dccfa6d62->leave($__internal_f93473d6cef4de6981b3cb4641496b90306bc61db0610a31627b748dccfa6d62_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/get-property-names.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o = { first: 1, second: 4 }, r1, r2;
\to = Object.create(o, {
\t\tthird: { value: null }
\t});
\to.first = 2;
\to = Object.create(o);
\to.fourth = 3;

\tr1 = t(o);
\tr1.sort();
\tr2 = [\"first\", \"second\", \"third\", \"fourth\"]
\t\t.concat(Object.getOwnPropertyNames(Object.prototype));
\tr2.sort();
\ta.deep(r1, r2);
};
", "node_modules/es5-ext/test/object/get-property-names.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/get-property-names.js");
    }
}
