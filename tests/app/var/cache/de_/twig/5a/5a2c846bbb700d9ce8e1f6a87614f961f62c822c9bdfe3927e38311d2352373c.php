<?php

/* node_modules/es5-ext/string/#/code-point-at/index.js */
class __TwigTemplate_e248522056b5e7f967e3508b9efc69e675821e3a0b0bf8e22aa6c6323cb95ec7 extends Twig_Template
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
        $__internal_f972022a64220eaf90ab1c555ec3c758cbdf4833ba45cf73456a8eb761625b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f972022a64220eaf90ab1c555ec3c758cbdf4833ba45cf73456a8eb761625b3a->enter($__internal_f972022a64220eaf90ab1c555ec3c758cbdf4833ba45cf73456a8eb761625b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/code-point-at/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.codePointAt
\t: require(\"./shim\");
";
        
        $__internal_f972022a64220eaf90ab1c555ec3c758cbdf4833ba45cf73456a8eb761625b3a->leave($__internal_f972022a64220eaf90ab1c555ec3c758cbdf4833ba45cf73456a8eb761625b3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/code-point-at/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.prototype.codePointAt
\t: require(\"./shim\");
", "node_modules/es5-ext/string/#/code-point-at/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/code-point-at/index.js");
    }
}
