<?php

/* node_modules/webpack/buildin/system.js */
class __TwigTemplate_95be25fedac5e561a4803045c39ef770ff1288eefcfe962939720e2050506acc extends Twig_Template
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
        $__internal_2dd93c902299061582c0945ab07cd4afeff11241bb539fc439529d09580bc6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd93c902299061582c0945ab07cd4afeff11241bb539fc439529d09580bc6c1->enter($__internal_2dd93c902299061582c0945ab07cd4afeff11241bb539fc439529d09580bc6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/buildin/system.js"));

        // line 1
        echo "// Provide a \"System\" global.
module.exports = {
\t// Make sure import is only used as \"System.import\"
\timport: function() {
\t\tthrow new Error(\"System.import cannot be used indirectly\");
\t}
};
";
        
        $__internal_2dd93c902299061582c0945ab07cd4afeff11241bb539fc439529d09580bc6c1->leave($__internal_2dd93c902299061582c0945ab07cd4afeff11241bb539fc439529d09580bc6c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/buildin/system.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Provide a \"System\" global.
module.exports = {
\t// Make sure import is only used as \"System.import\"
\timport: function() {
\t\tthrow new Error(\"System.import cannot be used indirectly\");
\t}
};
", "node_modules/webpack/buildin/system.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/buildin/system.js");
    }
}
