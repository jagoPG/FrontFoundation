<?php

/* node_modules/es5-ext/reg-exp/#/replace/is-implemented.js */
class __TwigTemplate_8e50ca278d9c04f166d7135a06aae59a077b69d0025561fe62fef634e0f9cb92 extends Twig_Template
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
        $__internal_d35678b1ed2fa663495efe8780d1dd593b63a212388cbd9a3b91bc2282b8b429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35678b1ed2fa663495efe8780d1dd593b63a212388cbd9a3b91bc2282b8b429->enter($__internal_d35678b1ed2fa663495efe8780d1dd593b63a212388cbd9a3b91bc2282b8b429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/replace/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var re = /foo/;

module.exports = function () {
\tif (typeof re.replace !== \"function\") return false;
\treturn re.replace(\"foobar\", \"mar\") === \"marbar\";
};
";
        
        $__internal_d35678b1ed2fa663495efe8780d1dd593b63a212388cbd9a3b91bc2282b8b429->leave($__internal_d35678b1ed2fa663495efe8780d1dd593b63a212388cbd9a3b91bc2282b8b429_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/replace/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var re = /foo/;

module.exports = function () {
\tif (typeof re.replace !== \"function\") return false;
\treturn re.replace(\"foobar\", \"mar\") === \"marbar\";
};
", "node_modules/es5-ext/reg-exp/#/replace/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/replace/is-implemented.js");
    }
}
