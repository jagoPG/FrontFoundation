<?php

/* node_modules/lodash/_freeGlobal.js */
class __TwigTemplate_4cd4a3d9e7b3c7be8acf3d34c9d49770aaf65c48508d7450d0db053ff8d0150b extends Twig_Template
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
        $__internal_3e639488c75210579ebaa28efea79e5040ee1143adaa1f3e3d0738ab68925d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e639488c75210579ebaa28efea79e5040ee1143adaa1f3e3d0738ab68925d90->enter($__internal_3e639488c75210579ebaa28efea79e5040ee1143adaa1f3e3d0738ab68925d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_freeGlobal.js"));

        // line 1
        echo "/** Detect free variable `global` from Node.js. */
var freeGlobal = typeof global == 'object' && global && global.Object === Object && global;

module.exports = freeGlobal;
";
        
        $__internal_3e639488c75210579ebaa28efea79e5040ee1143adaa1f3e3d0738ab68925d90->leave($__internal_3e639488c75210579ebaa28efea79e5040ee1143adaa1f3e3d0738ab68925d90_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_freeGlobal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Detect free variable `global` from Node.js. */
var freeGlobal = typeof global == 'object' && global && global.Object === Object && global;

module.exports = freeGlobal;
", "node_modules/lodash/_freeGlobal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_freeGlobal.js");
    }
}
