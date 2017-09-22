<?php

/* node_modules/remove-trailing-separator/index.js */
class __TwigTemplate_c4f726fdd43deba61b2f37bdf21cb1098152096ff23d66ac793dcb8b483b7148 extends Twig_Template
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
        $__internal_e7d5b047b43fe38e82058345537291abe19cbd94dfcaa38067d2a8812c1d335b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d5b047b43fe38e82058345537291abe19cbd94dfcaa38067d2a8812c1d335b->enter($__internal_e7d5b047b43fe38e82058345537291abe19cbd94dfcaa38067d2a8812c1d335b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/remove-trailing-separator/index.js"));

        // line 1
        echo "var isWin = process.platform === 'win32';

module.exports = function (str) {
\tvar i = str.length - 1;
\tif (i < 2) {
\t\treturn str;
\t}
\twhile (isSeparator(str, i)) {
\t\ti--;
\t}
\treturn str.substr(0, i + 1);
};

function isSeparator(str, i) {
\tvar char = str[i];
\treturn i > 0 && (char === '/' || (isWin && char === '\\\\'));
}
";
        
        $__internal_e7d5b047b43fe38e82058345537291abe19cbd94dfcaa38067d2a8812c1d335b->leave($__internal_e7d5b047b43fe38e82058345537291abe19cbd94dfcaa38067d2a8812c1d335b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/remove-trailing-separator/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isWin = process.platform === 'win32';

module.exports = function (str) {
\tvar i = str.length - 1;
\tif (i < 2) {
\t\treturn str;
\t}
\twhile (isSeparator(str, i)) {
\t\ti--;
\t}
\treturn str.substr(0, i + 1);
};

function isSeparator(str, i) {
\tvar char = str[i];
\treturn i > 0 && (char === '/' || (isWin && char === '\\\\'));
}
", "node_modules/remove-trailing-separator/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/remove-trailing-separator/index.js");
    }
}
