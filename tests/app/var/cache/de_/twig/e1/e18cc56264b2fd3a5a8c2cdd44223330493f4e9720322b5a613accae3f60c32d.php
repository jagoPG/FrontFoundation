<?php

/* node_modules/resolve/test/module_dir/xmodules/aaa/index.js */
class __TwigTemplate_d93b15f7bad43c09b326524d7a5d2754e1491ccd6f2bf8cd450c349987056227 extends Twig_Template
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
        $__internal_f2a9a7b91970d08219bf609cd878826aa3d0df9690c8fc884c3644753008997a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a9a7b91970d08219bf609cd878826aa3d0df9690c8fc884c3644753008997a->enter($__internal_f2a9a7b91970d08219bf609cd878826aa3d0df9690c8fc884c3644753008997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/module_dir/xmodules/aaa/index.js"));

        // line 1
        echo "module.exports = function (x) { return x * 100; };
";
        
        $__internal_f2a9a7b91970d08219bf609cd878826aa3d0df9690c8fc884c3644753008997a->leave($__internal_f2a9a7b91970d08219bf609cd878826aa3d0df9690c8fc884c3644753008997a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/module_dir/xmodules/aaa/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (x) { return x * 100; };
", "node_modules/resolve/test/module_dir/xmodules/aaa/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/module_dir/xmodules/aaa/index.js");
    }
}
