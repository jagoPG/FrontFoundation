<?php

/* node_modules/es5-ext/test/array/#/some-right.js */
class __TwigTemplate_8051f5399815b27b19044a6e9187a8c3d8aadc1f80aa6c6066594ce0876a1988 extends Twig_Template
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
        $__internal_df21fa4fcf996b771cd8c02d304e5f241be8f65f752bf177f4d6b1f418fa7d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df21fa4fcf996b771cd8c02d304e5f241be8f65f752bf177f4d6b1f418fa7d59->enter($__internal_df21fa4fcf996b771cd8c02d304e5f241be8f65f752bf177f4d6b1f418fa7d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/some-right.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\tvar count = 0, first, last, x, icount = this.length;
\t\tt.call(this, function (item, index, col) {
\t\t\t++count;
\t\t\tif (!first) {
\t\t\t\tfirst = item;
\t\t\t}
\t\t\tlast = item;
\t\t\tx = col;
\t\t\ta(index, --icount, \"Index\");
\t\t});
\t\ta(count, this.length, \"Iterated\");
\t\ta(first, this[this.length - 1], \"First is last\");
\t\ta(last, this[0], \"Last is first\");
\t\ta.deep(x, Object(this), \"Collection as third argument\"); // Jslint: skip
\t},
\t\"\": function (t, a) {
\t\tvar x = {}, y, count;
\t\tt.call(
\t\t\t[1],
\t\t\tfunction () {
\t\t\t\ty = this;
\t\t\t},
\t\t\tx
\t\t);
\t\ta(y, x, \"Scope\");
\t\ty = 0;
\t\tt.call([3, 4, 4], function (a, i) {
\t\t\ty += i;
\t\t});
\t\ta(y, 3, \"Indexes\");

\t\tx = [1, 3];
\t\tx[5] = \"x\";
\t\ty = 0;
\t\tcount = 0;
\t\ta(
\t\t\tt.call(x, function (a, i) {
\t\t\t\t++count;
\t\t\t\ty += i;
\t\t\t}),
\t\t\tfalse,
\t\t\t\"Return\"
\t\t);
\t\ta(y, 6, \"Misssing Indexes\");
\t\ta(count, 3, \"Misssing Indexes, count\");

\t\tcount = 0;
\t\ta(
\t\t\tt.call([-2, -3, -4, 2, -5], function (item) {
\t\t\t\t++count;
\t\t\t\treturn item > 0;
\t\t\t}),
\t\t\ttrue,
\t\t\t\"Return\"
\t\t);
\t\ta(count, 2, \"Break after true is returned\");
\t}
};
";
        
        $__internal_df21fa4fcf996b771cd8c02d304e5f241be8f65f752bf177f4d6b1f418fa7d59->leave($__internal_df21fa4fcf996b771cd8c02d304e5f241be8f65f752bf177f4d6b1f418fa7d59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/some-right.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\tvar count = 0, first, last, x, icount = this.length;
\t\tt.call(this, function (item, index, col) {
\t\t\t++count;
\t\t\tif (!first) {
\t\t\t\tfirst = item;
\t\t\t}
\t\t\tlast = item;
\t\t\tx = col;
\t\t\ta(index, --icount, \"Index\");
\t\t});
\t\ta(count, this.length, \"Iterated\");
\t\ta(first, this[this.length - 1], \"First is last\");
\t\ta(last, this[0], \"Last is first\");
\t\ta.deep(x, Object(this), \"Collection as third argument\"); // Jslint: skip
\t},
\t\"\": function (t, a) {
\t\tvar x = {}, y, count;
\t\tt.call(
\t\t\t[1],
\t\t\tfunction () {
\t\t\t\ty = this;
\t\t\t},
\t\t\tx
\t\t);
\t\ta(y, x, \"Scope\");
\t\ty = 0;
\t\tt.call([3, 4, 4], function (a, i) {
\t\t\ty += i;
\t\t});
\t\ta(y, 3, \"Indexes\");

\t\tx = [1, 3];
\t\tx[5] = \"x\";
\t\ty = 0;
\t\tcount = 0;
\t\ta(
\t\t\tt.call(x, function (a, i) {
\t\t\t\t++count;
\t\t\t\ty += i;
\t\t\t}),
\t\t\tfalse,
\t\t\t\"Return\"
\t\t);
\t\ta(y, 6, \"Misssing Indexes\");
\t\ta(count, 3, \"Misssing Indexes, count\");

\t\tcount = 0;
\t\ta(
\t\t\tt.call([-2, -3, -4, 2, -5], function (item) {
\t\t\t\t++count;
\t\t\t\treturn item > 0;
\t\t\t}),
\t\t\ttrue,
\t\t\t\"Return\"
\t\t);
\t\ta(count, 2, \"Break after true is returned\");
\t}
};
", "node_modules/es5-ext/test/array/#/some-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/some-right.js");
    }
}
