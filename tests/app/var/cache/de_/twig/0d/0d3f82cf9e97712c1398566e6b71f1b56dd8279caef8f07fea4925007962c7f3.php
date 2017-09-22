<?php

/* node_modules/es5-ext/test/number/epsilon/index.js */
class __TwigTemplate_5cd1fde291757e1fea1ffa68bd4b2365bfe5eaa2c9558a42de64e630dc91aea5 extends Twig_Template
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
        $__internal_9305afec7c51ab1f266eaa2780665bfc568619c9b118c6926b1164927bd5a84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9305afec7c51ab1f266eaa2780665bfc568619c9b118c6926b1164927bd5a84c->enter($__internal_9305afec7c51ab1f266eaa2780665bfc568619c9b118c6926b1164927bd5a84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/epsilon/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(typeof t, \"number\");
};
";
        
        $__internal_9305afec7c51ab1f266eaa2780665bfc568619c9b118c6926b1164927bd5a84c->leave($__internal_9305afec7c51ab1f266eaa2780665bfc568619c9b118c6926b1164927bd5a84c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/epsilon/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(typeof t, \"number\");
};
", "node_modules/es5-ext/test/number/epsilon/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/epsilon/index.js");
    }
}
