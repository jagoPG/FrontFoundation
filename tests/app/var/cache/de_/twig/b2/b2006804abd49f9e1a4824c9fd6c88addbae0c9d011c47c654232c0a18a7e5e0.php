<?php

/* node_modules/es5-ext/test/string/#/plain-replace-all.js */
class __TwigTemplate_01a236703bce78005d284a7bfb697abd38674112b079901cbbc716bc192fc7b8 extends Twig_Template
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
        $__internal_a95371c7997d8c87e9f1f20e4250d39a04b10a87ee653dfa3cd33d880fe1c96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95371c7997d8c87e9f1f20e4250d39a04b10a87ee653dfa3cd33d880fe1c96d->enter($__internal_a95371c7997d8c87e9f1f20e4250d39a04b10a87ee653dfa3cd33d880fe1c96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/plain-replace-all.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"razdwatrzy\", \"dwa\", \"olera\"), \"razoleratrzy\", \"Basic\");
\ta(t.call(\"razdwatrzy\", \"dwa\", \"ole\$&a\"), \"razole\$&atrzy\", \"Inserts\");
\ta(t.call(\"razdwa\", \"ola\", \"sdfs\"), \"razdwa\", \"No replace\");

\ta(t.call(\"\$raz\$\$dwa\$trzy\$\", \"\$\", \"&&\"), \"&&raz&&&&dwa&&trzy&&\", \"Multi\");
\ta(t.call(\"\$raz\$\$dwa\$\$\$\$trzy\$\", \"\$\$\", \"&\"), \"\$raz&dwa&&trzy\$\",
\t\t\"Multi many chars\");
};
";
        
        $__internal_a95371c7997d8c87e9f1f20e4250d39a04b10a87ee653dfa3cd33d880fe1c96d->leave($__internal_a95371c7997d8c87e9f1f20e4250d39a04b10a87ee653dfa3cd33d880fe1c96d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/plain-replace-all.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"razdwatrzy\", \"dwa\", \"olera\"), \"razoleratrzy\", \"Basic\");
\ta(t.call(\"razdwatrzy\", \"dwa\", \"ole\$&a\"), \"razole\$&atrzy\", \"Inserts\");
\ta(t.call(\"razdwa\", \"ola\", \"sdfs\"), \"razdwa\", \"No replace\");

\ta(t.call(\"\$raz\$\$dwa\$trzy\$\", \"\$\", \"&&\"), \"&&raz&&&&dwa&&trzy&&\", \"Multi\");
\ta(t.call(\"\$raz\$\$dwa\$\$\$\$trzy\$\", \"\$\$\", \"&\"), \"\$raz&dwa&&trzy\$\",
\t\t\"Multi many chars\");
};
", "node_modules/es5-ext/test/string/#/plain-replace-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/plain-replace-all.js");
    }
}
