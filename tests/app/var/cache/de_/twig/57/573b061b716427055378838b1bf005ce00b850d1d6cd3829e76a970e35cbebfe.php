<?php

/* node_modules/es5-ext/string/#/count.js */
class __TwigTemplate_acb21f713d975b95436a4794db1f42a0352a60a1a9d95d2ba704e173feb95d9e extends Twig_Template
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
        $__internal_0967ebe9b6182814eab6663bc794e53a1d2c702f36b43696c5fa0adfd839dba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0967ebe9b6182814eab6663bc794e53a1d2c702f36b43696c5fa0adfd839dba9->enter($__internal_0967ebe9b6182814eab6663bc794e53a1d2c702f36b43696c5fa0adfd839dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/count.js"));

        // line 1
        echo "\"use strict\";

var ensureString = require(\"../../object/validate-stringifiable-value\");

module.exports = function (search) {
\tvar string = ensureString(this), count = 0, index = 0;

\tsearch = ensureString(search);
\tif (!search) throw new TypeError(\"Search string cannot be empty\");
\twhile ((index = string.indexOf(search, index)) !== -1) {
\t\t++count;
\t\tindex += search.length;
\t}
\treturn count;
};
";
        
        $__internal_0967ebe9b6182814eab6663bc794e53a1d2c702f36b43696c5fa0adfd839dba9->leave($__internal_0967ebe9b6182814eab6663bc794e53a1d2c702f36b43696c5fa0adfd839dba9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/count.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var ensureString = require(\"../../object/validate-stringifiable-value\");

module.exports = function (search) {
\tvar string = ensureString(this), count = 0, index = 0;

\tsearch = ensureString(search);
\tif (!search) throw new TypeError(\"Search string cannot be empty\");
\twhile ((index = string.indexOf(search, index)) !== -1) {
\t\t++count;
\t\tindex += search.length;
\t}
\treturn count;
};
", "node_modules/es5-ext/string/#/count.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/count.js");
    }
}
