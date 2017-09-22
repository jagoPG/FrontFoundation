<?php

/* node_modules/es5-ext/test/reg-exp/#/sticky/is-implemented.js */
class __TwigTemplate_cfcfb2e960cf9d1c64cd3c7baad169a0a42658460e4505d543ee084f0f434302 extends Twig_Template
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
        $__internal_37fdfa5840c752f90339f8938ed140d391c2fb0326777fd400903676b06f21df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fdfa5840c752f90339f8938ed140d391c2fb0326777fd400903676b06f21df->enter($__internal_37fdfa5840c752f90339f8938ed140d391c2fb0326777fd400903676b06f21df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/sticky/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_37fdfa5840c752f90339f8938ed140d391c2fb0326777fd400903676b06f21df->leave($__internal_37fdfa5840c752f90339f8938ed140d391c2fb0326777fd400903676b06f21df_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/sticky/is-implemented.js";
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
", "node_modules/es5-ext/test/reg-exp/#/sticky/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/sticky/is-implemented.js");
    }
}
