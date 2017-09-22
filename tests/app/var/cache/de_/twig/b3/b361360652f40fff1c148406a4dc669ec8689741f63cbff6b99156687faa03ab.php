<?php

/* node_modules/es5-ext/test/number/to-uint32.js */
class __TwigTemplate_96b871a9919308a484dd8688fc587fb700f098991e1fcf5bf946a417048a364a extends Twig_Template
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
        $__internal_720c403c0266f0604da3f91e5d81aa55b110dfb57f1022447ff211a4079cfe31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720c403c0266f0604da3f91e5d81aa55b110dfb57f1022447ff211a4079cfe31->enter($__internal_720c403c0266f0604da3f91e5d81aa55b110dfb57f1022447ff211a4079cfe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/to-uint32.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), 0, \"Not numeric\");
\ta(t(-4), 4294967292, \"Negative\");
\ta(t(133432), 133432, \"Positive\");
\ta(t(8589934592), 0, \"Greater than maximum\");
};
";
        
        $__internal_720c403c0266f0604da3f91e5d81aa55b110dfb57f1022447ff211a4079cfe31->leave($__internal_720c403c0266f0604da3f91e5d81aa55b110dfb57f1022447ff211a4079cfe31_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/to-uint32.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), 0, \"Not numeric\");
\ta(t(-4), 4294967292, \"Negative\");
\ta(t(133432), 133432, \"Positive\");
\ta(t(8589934592), 0, \"Greater than maximum\");
};
", "node_modules/es5-ext/test/number/to-uint32.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/to-uint32.js");
    }
}
