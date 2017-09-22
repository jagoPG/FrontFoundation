<?php

/* node_modules/constants-browserify/build.sh */
class __TwigTemplate_d16d4b97b61dec1aa35b57cb02dca09fd39e2e4ab46ae78ff587efa135e16896 extends Twig_Template
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
        $__internal_f35f0aa712092689ada9b81fb07e3582f4953949a36211edb40ae24fe2bd1ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35f0aa712092689ada9b81fb07e3582f4953949a36211edb40ae24fe2bd1ec9->enter($__internal_f35f0aa712092689ada9b81fb07e3582f4953949a36211edb40ae24fe2bd1ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/constants-browserify/build.sh"));

        // line 1
        echo "node -pe 'JSON.stringify(require(\"constants\"), null, \"  \")' > constants.json
";
        
        $__internal_f35f0aa712092689ada9b81fb07e3582f4953949a36211edb40ae24fe2bd1ec9->leave($__internal_f35f0aa712092689ada9b81fb07e3582f4953949a36211edb40ae24fe2bd1ec9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/constants-browserify/build.sh";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("node -pe 'JSON.stringify(require(\"constants\"), null, \"  \")' > constants.json
", "node_modules/constants-browserify/build.sh", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/constants-browserify/build.sh");
    }
}
