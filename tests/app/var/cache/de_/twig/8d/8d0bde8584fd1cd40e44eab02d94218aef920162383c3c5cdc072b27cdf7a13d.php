<?php

/* node_modules/resolve/test/node_path/y/bbb/index.js */
class __TwigTemplate_519fdaab8c8c39159a46ee4c0401ec60f9562700d58b04cb876c63776847187e extends Twig_Template
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
        $__internal_205310df890f49543a2ee796d4e30601ff20df14beb381dab93c5858c285cd00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205310df890f49543a2ee796d4e30601ff20df14beb381dab93c5858c285cd00->enter($__internal_205310df890f49543a2ee796d4e30601ff20df14beb381dab93c5858c285cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/node_path/y/bbb/index.js"));

        // line 1
        echo "module.exports = 'B';
";
        
        $__internal_205310df890f49543a2ee796d4e30601ff20df14beb381dab93c5858c285cd00->leave($__internal_205310df890f49543a2ee796d4e30601ff20df14beb381dab93c5858c285cd00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/node_path/y/bbb/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 'B';
", "node_modules/resolve/test/node_path/y/bbb/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/node_path/y/bbb/index.js");
    }
}
