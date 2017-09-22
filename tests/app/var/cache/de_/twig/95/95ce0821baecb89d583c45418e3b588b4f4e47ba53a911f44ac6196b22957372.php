<?php

/* node_modules/es5-ext/test/object/normalize-options.js */
class __TwigTemplate_b1a11ccbfbc169429d4d15c4234b463a47aa4a8148926f98f212e10c7ec6690c extends Twig_Template
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
        $__internal_c672d9eb8323857b65e9e79306f2357ea351af6db5b62b538ef9fd1837c0fab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c672d9eb8323857b65e9e79306f2357ea351af6db5b62b538ef9fd1837c0fab8->enter($__internal_c672d9eb8323857b65e9e79306f2357ea351af6db5b62b538ef9fd1837c0fab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/normalize-options.js"));

        // line 1
        echo "\"use strict\";

var create = Object.create, defineProperty = Object.defineProperty;

module.exports = function (t, a) {
\tvar x = { foo: \"raz\", bar: \"dwa\" }, y;
\ty = t(x);
\ta.not(y, x, \"Returns copy\");
\ta.deep(y, x, \"Plain\");

\tx = { raz: \"one\", dwa: \"two\" };
\tdefineProperty(x, \"get\", {
\t\tconfigurable: true,
\t\tenumerable: true,
\t\tget: function () {
 return this.dwa;
}
\t});
\tx = create(x);
\tx.trzy = \"three\";
\tx.cztery = \"four\";
\tx = create(x);
\tx.dwa = \"two!\";
\tx.trzy = \"three!\";
\tx.piec = \"five\";
\tx.szesc = \"six\";

\ta.deep(t(x), { raz: \"one\",
dwa: \"two!\",
trzy: \"three!\",
cztery: \"four\",
\t\tpiec: \"five\",
szesc: \"six\",
get: \"two!\" }, \"Deep object\");

\ta.deep(t({ marko: \"raz\", raz: \"foo\" }, x, { szesc: \"elo\", siedem: \"bibg\" }),
\t\t{ marko: \"raz\",
raz: \"one\",
dwa: \"two!\",
trzy: \"three!\",
cztery: \"four\",
\t\t\tpiec: \"five\",
szesc: \"elo\",
siedem: \"bibg\",
get: \"two!\" }, \"Multiple options\");
};
";
        
        $__internal_c672d9eb8323857b65e9e79306f2357ea351af6db5b62b538ef9fd1837c0fab8->leave($__internal_c672d9eb8323857b65e9e79306f2357ea351af6db5b62b538ef9fd1837c0fab8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/normalize-options.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var create = Object.create, defineProperty = Object.defineProperty;

module.exports = function (t, a) {
\tvar x = { foo: \"raz\", bar: \"dwa\" }, y;
\ty = t(x);
\ta.not(y, x, \"Returns copy\");
\ta.deep(y, x, \"Plain\");

\tx = { raz: \"one\", dwa: \"two\" };
\tdefineProperty(x, \"get\", {
\t\tconfigurable: true,
\t\tenumerable: true,
\t\tget: function () {
 return this.dwa;
}
\t});
\tx = create(x);
\tx.trzy = \"three\";
\tx.cztery = \"four\";
\tx = create(x);
\tx.dwa = \"two!\";
\tx.trzy = \"three!\";
\tx.piec = \"five\";
\tx.szesc = \"six\";

\ta.deep(t(x), { raz: \"one\",
dwa: \"two!\",
trzy: \"three!\",
cztery: \"four\",
\t\tpiec: \"five\",
szesc: \"six\",
get: \"two!\" }, \"Deep object\");

\ta.deep(t({ marko: \"raz\", raz: \"foo\" }, x, { szesc: \"elo\", siedem: \"bibg\" }),
\t\t{ marko: \"raz\",
raz: \"one\",
dwa: \"two!\",
trzy: \"three!\",
cztery: \"four\",
\t\t\tpiec: \"five\",
szesc: \"elo\",
siedem: \"bibg\",
get: \"two!\" }, \"Multiple options\");
};
", "node_modules/es5-ext/test/object/normalize-options.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/normalize-options.js");
    }
}
