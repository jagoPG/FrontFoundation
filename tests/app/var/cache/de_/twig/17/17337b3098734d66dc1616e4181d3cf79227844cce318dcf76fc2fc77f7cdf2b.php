<?php

/* node_modules/strip-eof/index.js */
class __TwigTemplate_c4e014a80a5027e19dac918e3b09eafaefa5c94c29b0cbc9f963729429b13435 extends Twig_Template
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
        $__internal_fac8794ddca9007d326380339c12cd19216d49151857dfb4068ee882a22c15db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac8794ddca9007d326380339c12cd19216d49151857dfb4068ee882a22c15db->enter($__internal_fac8794ddca9007d326380339c12cd19216d49151857dfb4068ee882a22c15db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/strip-eof/index.js"));

        // line 1
        echo "'use strict';
module.exports = function (x) {
\tvar lf = typeof x === 'string' ? '\\n' : '\\n'.charCodeAt();
\tvar cr = typeof x === 'string' ? '\\r' : '\\r'.charCodeAt();

\tif (x[x.length - 1] === lf) {
\t\tx = x.slice(0, x.length - 1);
\t}

\tif (x[x.length - 1] === cr) {
\t\tx = x.slice(0, x.length - 1);
\t}

\treturn x;
};
";
        
        $__internal_fac8794ddca9007d326380339c12cd19216d49151857dfb4068ee882a22c15db->leave($__internal_fac8794ddca9007d326380339c12cd19216d49151857dfb4068ee882a22c15db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/strip-eof/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function (x) {
\tvar lf = typeof x === 'string' ? '\\n' : '\\n'.charCodeAt();
\tvar cr = typeof x === 'string' ? '\\r' : '\\r'.charCodeAt();

\tif (x[x.length - 1] === lf) {
\t\tx = x.slice(0, x.length - 1);
\t}

\tif (x[x.length - 1] === cr) {
\t\tx = x.slice(0, x.length - 1);
\t}

\treturn x;
};
", "node_modules/strip-eof/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/strip-eof/index.js");
    }
}
