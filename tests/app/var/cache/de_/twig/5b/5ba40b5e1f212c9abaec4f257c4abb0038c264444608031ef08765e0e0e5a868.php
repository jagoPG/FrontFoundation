<?php

/* node_modules/es5-ext/test/object/compact.js */
class __TwigTemplate_6b00a7fb504a3b2f33778c08f552c9d7d4475378aac26c8bbc707eacc8cb161f extends Twig_Template
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
        $__internal_8fb8069be50d955703997c7cf70d6aa0122a19cc9698ebc943c1affd2b9b96af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb8069be50d955703997c7cf70d6aa0122a19cc9698ebc943c1affd2b9b96af->enter($__internal_8fb8069be50d955703997c7cf70d6aa0122a19cc9698ebc943c1affd2b9b96af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/compact.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {}, y = {}, z;
\tz = t(x);
\ta.not(z, x, \"Returns different object\");
\ta.deep(z, {}, \"Empty on empty\");

\tx = { foo: \"bar\",
a: 0,
b: false,
c: \"\",
d: \"0\",
e: null,
bar: y,
\t\telo: undefined };
\tz = t(x);
\ta.deep(z, { foo: \"bar\", a: 0, b: false, c: \"\", d: \"0\", bar: y },
\t\t\"Cleared null values\");
};
";
        
        $__internal_8fb8069be50d955703997c7cf70d6aa0122a19cc9698ebc943c1affd2b9b96af->leave($__internal_8fb8069be50d955703997c7cf70d6aa0122a19cc9698ebc943c1affd2b9b96af_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/compact.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x = {}, y = {}, z;
\tz = t(x);
\ta.not(z, x, \"Returns different object\");
\ta.deep(z, {}, \"Empty on empty\");

\tx = { foo: \"bar\",
a: 0,
b: false,
c: \"\",
d: \"0\",
e: null,
bar: y,
\t\telo: undefined };
\tz = t(x);
\ta.deep(z, { foo: \"bar\", a: 0, b: false, c: \"\", d: \"0\", bar: y },
\t\t\"Cleared null values\");
};
", "node_modules/es5-ext/test/object/compact.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/compact.js");
    }
}
