<?php

/* node_modules/es5-ext/math/cbrt/is-implemented.js */
class __TwigTemplate_88fb6b7a6db707710ce68b9c5df2682d459f1b4cf253dea9ccfae6f6839e730e extends Twig_Template
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
        $__internal_bd6785c8d862a8d3bb8f1e35fc480cc8210f433462c859a447cbf5142a4b9a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6785c8d862a8d3bb8f1e35fc480cc8210f433462c859a447cbf5142a4b9a4e->enter($__internal_bd6785c8d862a8d3bb8f1e35fc480cc8210f433462c859a447cbf5142a4b9a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/cbrt/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar cbrt = Math.cbrt;
\tif (typeof cbrt !== \"function\") return false;
\treturn cbrt(2) === 1.2599210498948732;
};
";
        
        $__internal_bd6785c8d862a8d3bb8f1e35fc480cc8210f433462c859a447cbf5142a4b9a4e->leave($__internal_bd6785c8d862a8d3bb8f1e35fc480cc8210f433462c859a447cbf5142a4b9a4e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/cbrt/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar cbrt = Math.cbrt;
\tif (typeof cbrt !== \"function\") return false;
\treturn cbrt(2) === 1.2599210498948732;
};
", "node_modules/es5-ext/math/cbrt/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/cbrt/is-implemented.js");
    }
}
