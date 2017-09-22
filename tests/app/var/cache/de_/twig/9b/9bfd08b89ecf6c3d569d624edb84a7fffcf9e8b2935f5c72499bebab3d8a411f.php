<?php

/* node_modules/es5-ext/test/math/fround/is-implemented.js */
class __TwigTemplate_04a31d115e2df04691d3da12b80366e0bf43d406d624f6d5602b620bd55f4683 extends Twig_Template
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
        $__internal_e6f66add665a1037701bf1821e02e358ecadd7a8986ff64f5bf0409051d856a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f66add665a1037701bf1821e02e358ecadd7a8986ff64f5bf0409051d856a0->enter($__internal_e6f66add665a1037701bf1821e02e358ecadd7a8986ff64f5bf0409051d856a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/fround/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_e6f66add665a1037701bf1821e02e358ecadd7a8986ff64f5bf0409051d856a0->leave($__internal_e6f66add665a1037701bf1821e02e358ecadd7a8986ff64f5bf0409051d856a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/fround/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/math/fround/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/fround/is-implemented.js");
    }
}
