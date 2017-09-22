<?php

/* node_modules/es5-ext/test/date/#/format.js */
class __TwigTemplate_97c9ca4d3dc00d5b73ef38aed7c4e2a1b132c6b7b7127ce1de1afeb015fd95f1 extends Twig_Template
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
        $__internal_f45073b9b8d6ce1f8365ac0f33b2211042c4000ecbe73b80af8e8d622523adc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45073b9b8d6ce1f8365ac0f33b2211042c4000ecbe73b80af8e8d622523adc4->enter($__internal_f45073b9b8d6ce1f8365ac0f33b2211042c4000ecbe73b80af8e8d622523adc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/date/#/format.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar dt = new Date(2011, 2, 3, 3, 5, 5, 32);
\ta(t.call(dt, \" %Y.%y.%m.%d.%H.%M.%S.%L \"), \" 2011.11.03.03.03.05.05.032 \");
};
";
        
        $__internal_f45073b9b8d6ce1f8365ac0f33b2211042c4000ecbe73b80af8e8d622523adc4->leave($__internal_f45073b9b8d6ce1f8365ac0f33b2211042c4000ecbe73b80af8e8d622523adc4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/date/#/format.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar dt = new Date(2011, 2, 3, 3, 5, 5, 32);
\ta(t.call(dt, \" %Y.%y.%m.%d.%H.%M.%S.%L \"), \" 2011.11.03.03.03.05.05.032 \");
};
", "node_modules/es5-ext/test/date/#/format.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/date/#/format.js");
    }
}
