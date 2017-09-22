<?php

/* node_modules/es5-ext/date/#/copy.js */
class __TwigTemplate_d8be66195df1dbe61c55d7037c7f6d249ed563fbf9ab1128fcb6f47a81a8dd11 extends Twig_Template
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
        $__internal_40d27e552a5cc8f05cae4f7ef49e18dc2d014b7898cca25226145eb3471156a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d27e552a5cc8f05cae4f7ef49e18dc2d014b7898cca25226145eb3471156a7->enter($__internal_40d27e552a5cc8f05cae4f7ef49e18dc2d014b7898cca25226145eb3471156a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/date/#/copy.js"));

        // line 1
        echo "\"use strict\";

var getTime = Date.prototype.getTime;

module.exports = function () {
 return new Date(getTime.call(this));
};
";
        
        $__internal_40d27e552a5cc8f05cae4f7ef49e18dc2d014b7898cca25226145eb3471156a7->leave($__internal_40d27e552a5cc8f05cae4f7ef49e18dc2d014b7898cca25226145eb3471156a7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/date/#/copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var getTime = Date.prototype.getTime;

module.exports = function () {
 return new Date(getTime.call(this));
};
", "node_modules/es5-ext/date/#/copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/date/#/copy.js");
    }
}
