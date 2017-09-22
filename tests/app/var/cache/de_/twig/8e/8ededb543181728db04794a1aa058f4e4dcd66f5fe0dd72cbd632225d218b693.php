<?php

/* node_modules/es5-ext/test/number/is-nan/shim.js */
class __TwigTemplate_742b37c8d2d25a3925c7e01940fbedbf8ff6f474ad6a58f15acfd4955ead217b extends Twig_Template
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
        $__internal_3fa7f1054bfcd6b973c00aa3505117379516bc8c493b32a79c6f4c49091d1f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa7f1054bfcd6b973c00aa3505117379516bc8c493b32a79c6f4c49091d1f00->enter($__internal_3fa7f1054bfcd6b973c00aa3505117379516bc8c493b32a79c6f4c49091d1f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-nan/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(2), false, \"Number\");
\ta(t({}), false, \"Not numeric\");
\ta(t(NaN), true, \"NaN\");
};
";
        
        $__internal_3fa7f1054bfcd6b973c00aa3505117379516bc8c493b32a79c6f4c49091d1f00->leave($__internal_3fa7f1054bfcd6b973c00aa3505117379516bc8c493b32a79c6f4c49091d1f00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-nan/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(2), false, \"Number\");
\ta(t({}), false, \"Not numeric\");
\ta(t(NaN), true, \"NaN\");
};
", "node_modules/es5-ext/test/number/is-nan/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-nan/shim.js");
    }
}
