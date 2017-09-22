<?php

/* node_modules/es5-ext/boolean/index.js */
class __TwigTemplate_287a076da46f273e0d5998343a459f8493ab636cdb0713687c7275551080df40 extends Twig_Template
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
        $__internal_b37f3a9204832281ba566cfa4e176a6cf33662624051562bd095577412def508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37f3a9204832281ba566cfa4e176a6cf33662624051562bd095577412def508->enter($__internal_b37f3a9204832281ba566cfa4e176a6cf33662624051562bd095577412def508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/boolean/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\tisBoolean: require(\"./is-boolean\")
};
";
        
        $__internal_b37f3a9204832281ba566cfa4e176a6cf33662624051562bd095577412def508->leave($__internal_b37f3a9204832281ba566cfa4e176a6cf33662624051562bd095577412def508_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/boolean/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = {
\tisBoolean: require(\"./is-boolean\")
};
", "node_modules/es5-ext/boolean/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/boolean/index.js");
    }
}
