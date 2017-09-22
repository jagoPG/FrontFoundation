<?php

/* node_modules/es5-ext/string/#/camel-to-hyphen.js */
class __TwigTemplate_5b04583a660ffd4157102d57e3ce2e3930c4645004de28eaae3a684270ed076a extends Twig_Template
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
        $__internal_4f6c7f60d115d9aae155384d2eb165ed46e1106a2d8fd1a6b36a3469cca85906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6c7f60d115d9aae155384d2eb165ed46e1106a2d8fd1a6b36a3469cca85906->enter($__internal_4f6c7f60d115d9aae155384d2eb165ed46e1106a2d8fd1a6b36a3469cca85906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/camel-to-hyphen.js"));

        // line 1
        echo "\"use strict\";

var replace = String.prototype.replace
  , re = /([A-Z])/g;

module.exports = function () {
\tvar str = replace.call(this, re, \"-\$1\").toLowerCase();
\tif (str[0] === \"-\") str = str.slice(1);
\treturn str;
};
";
        
        $__internal_4f6c7f60d115d9aae155384d2eb165ed46e1106a2d8fd1a6b36a3469cca85906->leave($__internal_4f6c7f60d115d9aae155384d2eb165ed46e1106a2d8fd1a6b36a3469cca85906_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/camel-to-hyphen.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var replace = String.prototype.replace
  , re = /([A-Z])/g;

module.exports = function () {
\tvar str = replace.call(this, re, \"-\$1\").toLowerCase();
\tif (str[0] === \"-\") str = str.slice(1);
\treturn str;
};
", "node_modules/es5-ext/string/#/camel-to-hyphen.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/camel-to-hyphen.js");
    }
}
