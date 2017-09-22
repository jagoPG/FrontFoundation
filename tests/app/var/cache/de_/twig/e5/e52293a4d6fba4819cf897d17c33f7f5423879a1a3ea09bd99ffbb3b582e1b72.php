<?php

/* node_modules/resolve/test/module_dir/zmodules/bbb/main.js */
class __TwigTemplate_5e20a84894c136fa0f76e1d2a319cbd2f8d40e31d9766fd880691a2d2c80f073 extends Twig_Template
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
        $__internal_656827ebeaa8a0bd3ab6daa67fd818e834762a9aa29363ecf95124b521c72af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656827ebeaa8a0bd3ab6daa67fd818e834762a9aa29363ecf95124b521c72af0->enter($__internal_656827ebeaa8a0bd3ab6daa67fd818e834762a9aa29363ecf95124b521c72af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/module_dir/zmodules/bbb/main.js"));

        // line 1
        echo "module.exports = function (n) { return n * 111; };
";
        
        $__internal_656827ebeaa8a0bd3ab6daa67fd818e834762a9aa29363ecf95124b521c72af0->leave($__internal_656827ebeaa8a0bd3ab6daa67fd818e834762a9aa29363ecf95124b521c72af0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/module_dir/zmodules/bbb/main.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (n) { return n * 111; };
", "node_modules/resolve/test/module_dir/zmodules/bbb/main.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/module_dir/zmodules/bbb/main.js");
    }
}
