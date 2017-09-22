<?php

/* composer.json */
class __TwigTemplate_bdf2b7b0088260a16dc4c26cce88fce9ec3681af0931d149e7b847660a6d8a48 extends Twig_Template
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
        $__internal_e55c1beaafc4bc3facc29aa46776ea21ca484d30dbb29e4d53b3c696aa035c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55c1beaafc4bc3facc29aa46776ea21ca484d30dbb29e4d53b3c696aa035c23->enter($__internal_e55c1beaafc4bc3facc29aa46776ea21ca484d30dbb29e4d53b3c696aa035c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "composer.json"));

        // line 1
        echo "{
    \"name\": \"lin3s/lin3s-front-foundation-test-app\",
    \"license\": \"MIT\",
    \"type\": \"project\",
    \"authors\": [
        {
            \"name\": \"LIN3S\",
            \"email\": \"info@lin3s.com\",
            \"homepage\": \"https://lin3s.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"symfony/asset\": \"^3.3\",
        \"symfony/framework-bundle\": \"3.3.*\",
        \"symfony/templating\": \"^3.3\",
        \"symfony/twig-bundle\": \"3.3.*\",
        \"symfony/web-server-bundle\": \"^3.3\",
        \"lin3s/front-foundation\": \"dev-master\"
    },
    \"autoload\": {
        \"files\": [
            \"Symfony.php\"
        ]
    },
    \"minimum-stability\": \"dev\"
}
";
        
        $__internal_e55c1beaafc4bc3facc29aa46776ea21ca484d30dbb29e4d53b3c696aa035c23->leave($__internal_e55c1beaafc4bc3facc29aa46776ea21ca484d30dbb29e4d53b3c696aa035c23_prof);

    }

    public function getTemplateName()
    {
        return "composer.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"name\": \"lin3s/lin3s-front-foundation-test-app\",
    \"license\": \"MIT\",
    \"type\": \"project\",
    \"authors\": [
        {
            \"name\": \"LIN3S\",
            \"email\": \"info@lin3s.com\",
            \"homepage\": \"https://lin3s.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"symfony/asset\": \"^3.3\",
        \"symfony/framework-bundle\": \"3.3.*\",
        \"symfony/templating\": \"^3.3\",
        \"symfony/twig-bundle\": \"3.3.*\",
        \"symfony/web-server-bundle\": \"^3.3\",
        \"lin3s/front-foundation\": \"dev-master\"
    },
    \"autoload\": {
        \"files\": [
            \"Symfony.php\"
        ]
    },
    \"minimum-stability\": \"dev\"
}
", "composer.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/composer.json");
    }
}
