<?php

/* node_modules/es5-ext/number/to-uint32.js */
class __TwigTemplate_01c6d8d218cbe75ef90ecfdb698fff3926eaf99e2a797618777cce11a86f5462 extends Twig_Template
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
        $__internal_d786232f922b76664ece14f1ba5990f2bfa8db84af28620f3c99175c7021d507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d786232f922b76664ece14f1ba5990f2bfa8db84af28620f3c99175c7021d507->enter($__internal_d786232f922b76664ece14f1ba5990f2bfa8db84af28620f3c99175c7021d507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/to-uint32.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (value) {
\t// eslint-disable-next-line no-bitwise
\treturn value >>> 0;
};
";
        
        $__internal_d786232f922b76664ece14f1ba5990f2bfa8db84af28620f3c99175c7021d507->leave($__internal_d786232f922b76664ece14f1ba5990f2bfa8db84af28620f3c99175c7021d507_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/to-uint32.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (value) {
\t// eslint-disable-next-line no-bitwise
\treturn value >>> 0;
};
", "node_modules/es5-ext/number/to-uint32.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/to-uint32.js");
    }
}
