<?php

/* node_modules/resolve/test/resolver/baz/package.json */
class __TwigTemplate_6d8950a34440cf3fefff808d9be0d69e94c7c693aecdc6e9a9967a12b9645154 extends Twig_Template
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
        $__internal_2a8c4bec7fe7dc79777defeb0fca61a1fd9aa14403d61444eb2355c5939cd782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8c4bec7fe7dc79777defeb0fca61a1fd9aa14403d61444eb2355c5939cd782->enter($__internal_2a8c4bec7fe7dc79777defeb0fca61a1fd9aa14403d61444eb2355c5939cd782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/baz/package.json"));

        // line 1
        echo "{
    \"main\": \"quux.js\"
}
";
        
        $__internal_2a8c4bec7fe7dc79777defeb0fca61a1fd9aa14403d61444eb2355c5939cd782->leave($__internal_2a8c4bec7fe7dc79777defeb0fca61a1fd9aa14403d61444eb2355c5939cd782_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/baz/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"main\": \"quux.js\"
}
", "node_modules/resolve/test/resolver/baz/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/baz/package.json");
    }
}