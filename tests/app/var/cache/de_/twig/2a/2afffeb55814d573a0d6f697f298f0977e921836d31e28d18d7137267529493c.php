<?php

/* node_modules/es5-ext/test/number/#/pad.js */
class __TwigTemplate_31943c2d3561310aad5bbb5e4f56173f1643bd95e615947ab6e238fb7487b097 extends Twig_Template
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
        $__internal_336f152378fce75583d7b7700305ccb4e40c82f0ef0c45ea64b235f43c5fd853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336f152378fce75583d7b7700305ccb4e40c82f0ef0c45ea64b235f43c5fd853->enter($__internal_336f152378fce75583d7b7700305ccb4e40c82f0ef0c45ea64b235f43c5fd853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/#/pad.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(78, 4), \"0078\");
\ta(t.call(65.12323, 4, 3), \"0065.123\", \"Precision\");
\ta(t.call(65, 4, 3), \"0065.000\", \"Precision integer\");
};
";
        
        $__internal_336f152378fce75583d7b7700305ccb4e40c82f0ef0c45ea64b235f43c5fd853->leave($__internal_336f152378fce75583d7b7700305ccb4e40c82f0ef0c45ea64b235f43c5fd853_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/#/pad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(78, 4), \"0078\");
\ta(t.call(65.12323, 4, 3), \"0065.123\", \"Precision\");
\ta(t.call(65, 4, 3), \"0065.000\", \"Precision integer\");
};
", "node_modules/es5-ext/test/number/#/pad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/#/pad.js");
    }
}
