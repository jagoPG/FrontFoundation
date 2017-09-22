<?php

/* node_modules/es5-ext/test/function/#/to-string-tokens.js */
class __TwigTemplate_3b695ae0f242369aae35ed9e8b90ad35d66c53b2a75f38f8fbb4121c7c22225f extends Twig_Template
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
        $__internal_c6039506a9ffbf76193f716a707c9e1e9d437cfe7ccbcc4e70032650b5cb12a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6039506a9ffbf76193f716a707c9e1e9d437cfe7ccbcc4e70032650b5cb12a4->enter($__internal_c6039506a9ffbf76193f716a707c9e1e9d437cfe7ccbcc4e70032650b5cb12a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/#/to-string-tokens.js"));

        // line 1
        echo "/* eslint no-eval: \"off\" */

\"use strict\";

module.exports = function (t, a) {
\ta.deep(
\t\tt.call(function (a, b) {
\t\t\treturn this[a] + this[b];
\t\t}),
\t\t{ args: \"a, b\", body: \"\\n\\t\\t\\treturn this[a] + this[b];\\n\\t\\t\" }
\t);
\ta.deep(t.call(function () {}), { args: \"\", body: \"\" });
\t// eslint-disable-next-line no-unused-vars
\ta.deep(t.call(function (raz) {}), { args: \"raz\", body: \"\" });
\ta.deep(
\t\tt.call(function () {
\t\t\tObject();
\t\t}),
\t\t{ args: \"\", body: \"\\n\\t\\t\\tObject();\\n\\t\\t\" }
\t);

\ttry {
\t\teval(\"(() => {})\");
\t} catch (e) {
\t\t// Non ES2015 env
\t\treturn;
\t}

\ta.deep(t.call(eval(\"(() => {})\")), { args: \"\", body: \"\" });
\ta.deep(t.call(eval(\"((elo) => foo)\")), { args: \"elo\", body: \"foo\" });
\ta.deep(t.call(eval(\"(elo => foo)\")), { args: \"elo\", body: \"foo\" });
\ta.deep(t.call(eval(\"((elo, bar) => foo())\")), { args: \"elo, bar\", body: \"foo()\" });
};
";
        
        $__internal_c6039506a9ffbf76193f716a707c9e1e9d437cfe7ccbcc4e70032650b5cb12a4->leave($__internal_c6039506a9ffbf76193f716a707c9e1e9d437cfe7ccbcc4e70032650b5cb12a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/#/to-string-tokens.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-eval: \"off\" */

\"use strict\";

module.exports = function (t, a) {
\ta.deep(
\t\tt.call(function (a, b) {
\t\t\treturn this[a] + this[b];
\t\t}),
\t\t{ args: \"a, b\", body: \"\\n\\t\\t\\treturn this[a] + this[b];\\n\\t\\t\" }
\t);
\ta.deep(t.call(function () {}), { args: \"\", body: \"\" });
\t// eslint-disable-next-line no-unused-vars
\ta.deep(t.call(function (raz) {}), { args: \"raz\", body: \"\" });
\ta.deep(
\t\tt.call(function () {
\t\t\tObject();
\t\t}),
\t\t{ args: \"\", body: \"\\n\\t\\t\\tObject();\\n\\t\\t\" }
\t);

\ttry {
\t\teval(\"(() => {})\");
\t} catch (e) {
\t\t// Non ES2015 env
\t\treturn;
\t}

\ta.deep(t.call(eval(\"(() => {})\")), { args: \"\", body: \"\" });
\ta.deep(t.call(eval(\"((elo) => foo)\")), { args: \"elo\", body: \"foo\" });
\ta.deep(t.call(eval(\"(elo => foo)\")), { args: \"elo\", body: \"foo\" });
\ta.deep(t.call(eval(\"((elo, bar) => foo())\")), { args: \"elo, bar\", body: \"foo()\" });
};
", "node_modules/es5-ext/test/function/#/to-string-tokens.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/#/to-string-tokens.js");
    }
}
