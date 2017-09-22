<?php

/* node_modules/jquery/src/core/nodeName.js */
class __TwigTemplate_836e94aba1d4959a252d3d6eaf5197b9de1ba28300fd758c07b0802f183a3e68 extends Twig_Template
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
        $__internal_84657eff89b2f61b34e4875b5a9f0cfe26ecfbe3c530cbfe35a71d018a1fbb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84657eff89b2f61b34e4875b5a9f0cfe26ecfbe3c530cbfe35a71d018a1fbb32->enter($__internal_84657eff89b2f61b34e4875b5a9f0cfe26ecfbe3c530cbfe35a71d018a1fbb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/nodeName.js"));

        // line 1
        echo "define( function() {

\"use strict\";

function nodeName( elem, name ) {

  return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

};

return nodeName;

} );
";
        
        $__internal_84657eff89b2f61b34e4875b5a9f0cfe26ecfbe3c530cbfe35a71d018a1fbb32->leave($__internal_84657eff89b2f61b34e4875b5a9f0cfe26ecfbe3c530cbfe35a71d018a1fbb32_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/nodeName.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {

\"use strict\";

function nodeName( elem, name ) {

  return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

};

return nodeName;

} );
", "node_modules/jquery/src/core/nodeName.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/nodeName.js");
    }
}
