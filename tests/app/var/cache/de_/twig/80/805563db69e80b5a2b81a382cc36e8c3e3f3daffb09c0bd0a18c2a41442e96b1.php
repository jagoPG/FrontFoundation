<?php

/* node_modules/es5-ext/test/function/#/lock.js */
class __TwigTemplate_9e6e9f7cb5a87caaa4410b9c8b492ccb1791f89552802fd29a81530ee431b148 extends Twig_Template
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
        $__internal_c6cbad1501a4b014fb8a98efd60b9fbea4c2bc2f407d976da3658bb2649f13fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6cbad1501a4b014fb8a98efd60b9fbea4c2bc2f407d976da3658bb2649f13fb->enter($__internal_c6cbad1501a4b014fb8a98efd60b9fbea4c2bc2f407d976da3658bb2649f13fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/#/lock.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(function () {
\t\treturn arguments.length;
\t})(1, 2, 3), 0);
};
";
        
        $__internal_c6cbad1501a4b014fb8a98efd60b9fbea4c2bc2f407d976da3658bb2649f13fb->leave($__internal_c6cbad1501a4b014fb8a98efd60b9fbea4c2bc2f407d976da3658bb2649f13fb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/#/lock.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(function () {
\t\treturn arguments.length;
\t})(1, 2, 3), 0);
};
", "node_modules/es5-ext/test/function/#/lock.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/#/lock.js");
    }
}
