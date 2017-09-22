<?php

/* node_modules/es5-ext/test/date/#/floor-year.js */
class __TwigTemplate_0655169124a1b3ebed7dc45d0dee9355ec080639da687872d842cdf255681656 extends Twig_Template
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
        $__internal_7ffaca727e34b1c7c72a6582a4c8dc7400c36702fc67eda985166cc3bed6787f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffaca727e34b1c7c72a6582a4c8dc7400c36702fc67eda985166cc3bed6787f->enter($__internal_7ffaca727e34b1c7c72a6582a4c8dc7400c36702fc67eda985166cc3bed6787f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/date/#/floor-year.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(new Date(2000, 5, 13, 13, 32, 34, 234)).valueOf(),
\t\tnew Date(2000, 0, 1).valueOf());
};
";
        
        $__internal_7ffaca727e34b1c7c72a6582a4c8dc7400c36702fc67eda985166cc3bed6787f->leave($__internal_7ffaca727e34b1c7c72a6582a4c8dc7400c36702fc67eda985166cc3bed6787f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/date/#/floor-year.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(new Date(2000, 5, 13, 13, 32, 34, 234)).valueOf(),
\t\tnew Date(2000, 0, 1).valueOf());
};
", "node_modules/es5-ext/test/date/#/floor-year.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/date/#/floor-year.js");
    }
}
