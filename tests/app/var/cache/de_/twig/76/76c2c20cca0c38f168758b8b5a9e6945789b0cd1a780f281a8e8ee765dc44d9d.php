<?php

/* node_modules/core-js/library/modules/core.object.classof.js */
class __TwigTemplate_ef80fd6eefc14f271705724fb51d77718c0bb08b116dee8a0015c7f1d0c0fc7c extends Twig_Template
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
        $__internal_aa7f108f504cb031ffde32112305f9a213798c5809f15d77afbd6ec9ad2a9c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7f108f504cb031ffde32112305f9a213798c5809f15d77afbd6ec9ad2a9c06->enter($__internal_aa7f108f504cb031ffde32112305f9a213798c5809f15d77afbd6ec9ad2a9c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.object.classof.js"));

        // line 1
        echo "var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { classof: require('./_classof') });
";
        
        $__internal_aa7f108f504cb031ffde32112305f9a213798c5809f15d77afbd6ec9ad2a9c06->leave($__internal_aa7f108f504cb031ffde32112305f9a213798c5809f15d77afbd6ec9ad2a9c06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.object.classof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');

\$export(\$export.S + \$export.F, 'Object', { classof: require('./_classof') });
", "node_modules/core-js/library/modules/core.object.classof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.object.classof.js");
    }
}
