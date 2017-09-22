<?php

/* node_modules/es5-ext/string/#/plain-replace-all.js */
class __TwigTemplate_14cf1429f1a1c23f343a93cfd418607301059c51a329bcf28e54034a0f04cee9 extends Twig_Template
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
        $__internal_3ce65b018c6283b09584ea4b7c4470311af506c42ad45493ed2666d11775fc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce65b018c6283b09584ea4b7c4470311af506c42ad45493ed2666d11775fc0b->enter($__internal_3ce65b018c6283b09584ea4b7c4470311af506c42ad45493ed2666d11775fc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/plain-replace-all.js"));

        // line 1
        echo "\"use strict\";

var value = require(\"../../object/valid-value\");

module.exports = function (search, replace) {
\tvar index, pos = 0, str = String(value(this)), sl, rl;
\tsearch = String(search);
\treplace = String(replace);
\tsl = search.length;
\trl = replace.length;
\twhile ((index = str.indexOf(search, pos)) !== -1) {
\t\tstr = str.slice(0, index) + replace + str.slice(index + sl);
\t\tpos = index + rl;
\t}
\treturn str;
};
";
        
        $__internal_3ce65b018c6283b09584ea4b7c4470311af506c42ad45493ed2666d11775fc0b->leave($__internal_3ce65b018c6283b09584ea4b7c4470311af506c42ad45493ed2666d11775fc0b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/plain-replace-all.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value = require(\"../../object/valid-value\");

module.exports = function (search, replace) {
\tvar index, pos = 0, str = String(value(this)), sl, rl;
\tsearch = String(search);
\treplace = String(replace);
\tsl = search.length;
\trl = replace.length;
\twhile ((index = str.indexOf(search, pos)) !== -1) {
\t\tstr = str.slice(0, index) + replace + str.slice(index + sl);
\t\tpos = index + rl;
\t}
\treturn str;
};
", "node_modules/es5-ext/string/#/plain-replace-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/plain-replace-all.js");
    }
}
