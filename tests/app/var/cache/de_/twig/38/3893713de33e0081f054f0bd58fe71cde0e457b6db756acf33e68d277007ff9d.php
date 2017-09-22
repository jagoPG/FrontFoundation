<?php

/* node_modules/resolve/test/module_dir/ymodules/aaa/index.js */
class __TwigTemplate_331cbc452d682235d0ccefd7a0d1724c7283ec22878e194849826e247f61e1df extends Twig_Template
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
        $__internal_c8a4d5d85ffb557231a96d7c04bb5b5e81f272aa884eb16bfd7ddc60f3f24542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a4d5d85ffb557231a96d7c04bb5b5e81f272aa884eb16bfd7ddc60f3f24542->enter($__internal_c8a4d5d85ffb557231a96d7c04bb5b5e81f272aa884eb16bfd7ddc60f3f24542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/module_dir/ymodules/aaa/index.js"));

        // line 1
        echo "module.exports = function (x) { return x + 100; };
";
        
        $__internal_c8a4d5d85ffb557231a96d7c04bb5b5e81f272aa884eb16bfd7ddc60f3f24542->leave($__internal_c8a4d5d85ffb557231a96d7c04bb5b5e81f272aa884eb16bfd7ddc60f3f24542_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/module_dir/ymodules/aaa/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (x) { return x + 100; };
", "node_modules/resolve/test/module_dir/ymodules/aaa/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/module_dir/ymodules/aaa/index.js");
    }
}
