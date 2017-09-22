<?php

/* node_modules/es5-ext/to-short-string-representation.js */
class __TwigTemplate_f6eb111245d8560f7b8e79570e73309b91f435e2af3fb58f3fdaa053d00d55bf extends Twig_Template
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
        $__internal_b0e12dc5eec4ae576d4935ed3c3bb5b2fd2f66ca34e01656f70f3a8664ee82d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e12dc5eec4ae576d4935ed3c3bb5b2fd2f66ca34e01656f70f3a8664ee82d4->enter($__internal_b0e12dc5eec4ae576d4935ed3c3bb5b2fd2f66ca34e01656f70f3a8664ee82d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/to-short-string-representation.js"));

        // line 1
        echo "\"use strict\";

var safeToString = require(\"./safe-to-string\");

var reNewLine = /[\\n\\r\\u2028\\u2029]/g;

module.exports = function (value) {
\tvar string = safeToString(value);
\t// Trim if too long
\tif (string.length > 100) string = string.slice(0, 99) + \"…\";
\t// Replace eventual new lines
\tstring = string.replace(reNewLine, function (char) {
\t\treturn JSON.stringify(char).slice(1, -1);
\t});
\treturn string;
};
";
        
        $__internal_b0e12dc5eec4ae576d4935ed3c3bb5b2fd2f66ca34e01656f70f3a8664ee82d4->leave($__internal_b0e12dc5eec4ae576d4935ed3c3bb5b2fd2f66ca34e01656f70f3a8664ee82d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/to-short-string-representation.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var safeToString = require(\"./safe-to-string\");

var reNewLine = /[\\n\\r\\u2028\\u2029]/g;

module.exports = function (value) {
\tvar string = safeToString(value);
\t// Trim if too long
\tif (string.length > 100) string = string.slice(0, 99) + \"…\";
\t// Replace eventual new lines
\tstring = string.replace(reNewLine, function (char) {
\t\treturn JSON.stringify(char).slice(1, -1);
\t});
\treturn string;
};
", "node_modules/es5-ext/to-short-string-representation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/to-short-string-representation.js");
    }
}
