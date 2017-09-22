<?php

/* node_modules/es5-ext/number/is-safe-integer/is-implemented.js */
class __TwigTemplate_9d712f8fab727e5afebd7e1b4576264548705290be798708b85920e33547ce5d extends Twig_Template
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
        $__internal_8060e4583e3610245e2f2b318952113bbf1e44a5139414304000fd81311dd9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8060e4583e3610245e2f2b318952113bbf1e44a5139414304000fd81311dd9f0->enter($__internal_8060e4583e3610245e2f2b318952113bbf1e44a5139414304000fd81311dd9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-safe-integer/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar isSafeInteger = Number.isSafeInteger;
\tif (typeof isSafeInteger !== \"function\") return false;
\treturn !isSafeInteger(\"23\") && isSafeInteger(34232322323) &&
\t\t\t!isSafeInteger(9007199254740992);
};
";
        
        $__internal_8060e4583e3610245e2f2b318952113bbf1e44a5139414304000fd81311dd9f0->leave($__internal_8060e4583e3610245e2f2b318952113bbf1e44a5139414304000fd81311dd9f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-safe-integer/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar isSafeInteger = Number.isSafeInteger;
\tif (typeof isSafeInteger !== \"function\") return false;
\treturn !isSafeInteger(\"23\") && isSafeInteger(34232322323) &&
\t\t\t!isSafeInteger(9007199254740992);
};
", "node_modules/es5-ext/number/is-safe-integer/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-safe-integer/is-implemented.js");
    }
}
