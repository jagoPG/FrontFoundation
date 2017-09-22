<?php

/* node_modules/es5-ext/test/safe-to-string.js */
class __TwigTemplate_f97a71db54b1b39eb453b630a3cee02e0afd992d039194c3f9b683e80484fc72 extends Twig_Template
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
        $__internal_e77c9ab3c101a236d822493a1270e3a1e45857402e14c8f0ff82c1294ac0386d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77c9ab3c101a236d822493a1270e3a1e45857402e14c8f0ff82c1294ac0386d->enter($__internal_e77c9ab3c101a236d822493a1270e3a1e45857402e14c8f0ff82c1294ac0386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/safe-to-string.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(), \"undefined\");
\ta(t(null), \"null\");
\ta(t(10), \"10\");
\ta(t(\"str\"), \"str\");
\ta(
\t\tt({
\t\t\ttoString: function () {
\t\t\t\treturn \"miszka\";
\t\t\t}
\t\t}),
\t\t\"miszka\"
\t);
\t// eslint-disable-next-line symbol-description
\tif (typeof Symbol === \"function\") a(t(Symbol()), \"Symbol()\");
\ta(t(Object.create(null)), \"<non-stringifiable value>\");
};
";
        
        $__internal_e77c9ab3c101a236d822493a1270e3a1e45857402e14c8f0ff82c1294ac0386d->leave($__internal_e77c9ab3c101a236d822493a1270e3a1e45857402e14c8f0ff82c1294ac0386d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/safe-to-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(), \"undefined\");
\ta(t(null), \"null\");
\ta(t(10), \"10\");
\ta(t(\"str\"), \"str\");
\ta(
\t\tt({
\t\t\ttoString: function () {
\t\t\t\treturn \"miszka\";
\t\t\t}
\t\t}),
\t\t\"miszka\"
\t);
\t// eslint-disable-next-line symbol-description
\tif (typeof Symbol === \"function\") a(t(Symbol()), \"Symbol()\");
\ta(t(Object.create(null)), \"<non-stringifiable value>\");
};
", "node_modules/es5-ext/test/safe-to-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/safe-to-string.js");
    }
}
