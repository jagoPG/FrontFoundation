<?php

/* node_modules/es5-ext/test/number/is-nan/is-implemented.js */
class __TwigTemplate_431d6ea0f6bc35ca58c91d256a4485c7faae212858031da2265773a31d94d807 extends Twig_Template
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
        $__internal_abe3b4571b8ab18aacdb75eceedd848964437d7e985bf32ab9f3fa98da4000f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe3b4571b8ab18aacdb75eceedd848964437d7e985bf32ab9f3fa98da4000f5->enter($__internal_abe3b4571b8ab18aacdb75eceedd848964437d7e985bf32ab9f3fa98da4000f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-nan/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_abe3b4571b8ab18aacdb75eceedd848964437d7e985bf32ab9f3fa98da4000f5->leave($__internal_abe3b4571b8ab18aacdb75eceedd848964437d7e985bf32ab9f3fa98da4000f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-nan/is-implemented.js";
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
", "node_modules/es5-ext/test/number/is-nan/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-nan/is-implemented.js");
    }
}
