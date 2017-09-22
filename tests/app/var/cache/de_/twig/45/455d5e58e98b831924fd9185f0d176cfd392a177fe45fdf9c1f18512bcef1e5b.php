<?php

/* node_modules/es5-ext/test/object/is-copy-deep.js */
class __TwigTemplate_64454a6f709283d631296ddc24ff3d9f38e64068c6c0fff077de040edb3dc065 extends Twig_Template
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
        $__internal_9fa48afe82c68c2b426bf8e4b1ada71aa5a5512d03ddd1eb18acf953198240ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa48afe82c68c2b426bf8e4b1ada71aa5a5512d03ddd1eb18acf953198240ed->enter($__internal_9fa48afe82c68c2b426bf8e4b1ada71aa5a5512d03ddd1eb18acf953198240ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-copy-deep.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x, y;

\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2, 3: 3 }), true, \"Same\");
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2, 3: 4 }), false,
\t\t\"Different property value\");
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2 }), false,
\t\t\"Property only in source\");
\ta(t({ 1: 1, 2: 2 }, { 1: 1, 2: 2, 3: 4 }), false,
\t\t\"Property only in target\");

\ta(t(\"raz\", \"dwa\"), false, \"String: diff\");
\ta(t(\"raz\", \"raz\"), true, \"String: same\");
\ta(t(\"32\", 32), false, \"String & Number\");

\ta(t([1, \"raz\", true], [1, \"raz\", true]), true, \"Array: same\");
\ta(t([1, \"raz\", undefined], [1, \"raz\"]), false, \"Array: diff\");
\ta(t([\"foo\"], [\"one\"]), false, \"Array: One value comparision\");

\tx = { foo: { bar: { mar: {} } } };
\ty = { foo: { bar: { mar: {} } } };
\ta(t(x, y), true, \"Deep\");

\ta(t({ foo: { bar: { mar: \"foo\" } } }, { foo: { bar: { mar: {} } } }),
\t\tfalse, \"Deep: false\");

\tx = { foo: { bar: { mar: {} } } };
\tx.rec = { foo: x };

\ty = { foo: { bar: { mar: {} } } };
\ty.rec = { foo: x };

\ta(t(x, y), true, \"Object: Infinite Recursion: Same #1\");

\tx.rec.foo = y;
\ta(t(x, y), true, \"Object: Infinite Recursion: Same #2\");

\tx.rec.foo = x;
\ty.rec.foo = y;
\ta(t(x, y), true, \"Object: Infinite Recursion: Same #3\");

\ty.foo.bar.mar = \"raz\";
\ta(t(x, y), false, \"Object: Infinite Recursion: Diff\");
};
";
        
        $__internal_9fa48afe82c68c2b426bf8e4b1ada71aa5a5512d03ddd1eb18acf953198240ed->leave($__internal_9fa48afe82c68c2b426bf8e4b1ada71aa5a5512d03ddd1eb18acf953198240ed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-copy-deep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x, y;

\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2, 3: 3 }), true, \"Same\");
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2, 3: 4 }), false,
\t\t\"Different property value\");
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2 }), false,
\t\t\"Property only in source\");
\ta(t({ 1: 1, 2: 2 }, { 1: 1, 2: 2, 3: 4 }), false,
\t\t\"Property only in target\");

\ta(t(\"raz\", \"dwa\"), false, \"String: diff\");
\ta(t(\"raz\", \"raz\"), true, \"String: same\");
\ta(t(\"32\", 32), false, \"String & Number\");

\ta(t([1, \"raz\", true], [1, \"raz\", true]), true, \"Array: same\");
\ta(t([1, \"raz\", undefined], [1, \"raz\"]), false, \"Array: diff\");
\ta(t([\"foo\"], [\"one\"]), false, \"Array: One value comparision\");

\tx = { foo: { bar: { mar: {} } } };
\ty = { foo: { bar: { mar: {} } } };
\ta(t(x, y), true, \"Deep\");

\ta(t({ foo: { bar: { mar: \"foo\" } } }, { foo: { bar: { mar: {} } } }),
\t\tfalse, \"Deep: false\");

\tx = { foo: { bar: { mar: {} } } };
\tx.rec = { foo: x };

\ty = { foo: { bar: { mar: {} } } };
\ty.rec = { foo: x };

\ta(t(x, y), true, \"Object: Infinite Recursion: Same #1\");

\tx.rec.foo = y;
\ta(t(x, y), true, \"Object: Infinite Recursion: Same #2\");

\tx.rec.foo = x;
\ty.rec.foo = y;
\ta(t(x, y), true, \"Object: Infinite Recursion: Same #3\");

\ty.foo.bar.mar = \"raz\";
\ta(t(x, y), false, \"Object: Infinite Recursion: Diff\");
};
", "node_modules/es5-ext/test/object/is-copy-deep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-copy-deep.js");
    }
}
