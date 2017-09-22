<?php

/* node_modules/resolve/test/resolver/incorrect_main/index.js */
class __TwigTemplate_0c2291cba45514c97e1c2136e6769b66e438935592ae1a4175eff302eb78a864 extends Twig_Template
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
        $__internal_064af630df40782b6a05bae84a8437c767fccb5b2424b8ebe056acdef4a4e0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064af630df40782b6a05bae84a8437c767fccb5b2424b8ebe056acdef4a4e0dd->enter($__internal_064af630df40782b6a05bae84a8437c767fccb5b2424b8ebe056acdef4a4e0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/incorrect_main/index.js"));

        // line 1
        echo "// this is the actual main file 'index.js', not 'wrong.js' like the package.json would indicate
module.exports = 1;
";
        
        $__internal_064af630df40782b6a05bae84a8437c767fccb5b2424b8ebe056acdef4a4e0dd->leave($__internal_064af630df40782b6a05bae84a8437c767fccb5b2424b8ebe056acdef4a4e0dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/incorrect_main/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// this is the actual main file 'index.js', not 'wrong.js' like the package.json would indicate
module.exports = 1;
", "node_modules/resolve/test/resolver/incorrect_main/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/incorrect_main/index.js");
    }
}
