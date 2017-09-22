<?php

/* node_modules/process/package.json */
class __TwigTemplate_818394391cba8521dbc77ea9f769508ef84ff176d4081c238cf7d3f9a151207a extends Twig_Template
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
        $__internal_4bb7d0c770c90f0ff15474a81b343e46db11edd09da701b4e2eaf6031b11ade5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb7d0c770c90f0ff15474a81b343e46db11edd09da701b4e2eaf6031b11ade5->enter($__internal_4bb7d0c770c90f0ff15474a81b343e46db11edd09da701b4e2eaf6031b11ade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/process/package.json"));

        // line 1
        echo "{
  \"author\": \"Roman Shtylman <shtylman@gmail.com>\",
  \"name\": \"process\",
  \"description\": \"process information for node.js and browsers\",
  \"keywords\": [
    \"process\"
  ],
  \"scripts\": {
    \"test\": \"mocha test.js\",
    \"browser\": \"zuul --no-coverage --ui mocha-bdd --local 8080 -- test.js\"
  },
  \"version\": \"0.11.10\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/shtylman/node-process.git\"
  },
  \"license\": \"MIT\",
  \"browser\": \"./browser.js\",
  \"main\": \"./index.js\",
  \"engines\": {
    \"node\": \">= 0.6.0\"
  },
  \"devDependencies\": {
    \"mocha\": \"2.2.1\",
    \"zuul\": \"^3.10.3\"
  }
}
";
        
        $__internal_4bb7d0c770c90f0ff15474a81b343e46db11edd09da701b4e2eaf6031b11ade5->leave($__internal_4bb7d0c770c90f0ff15474a81b343e46db11edd09da701b4e2eaf6031b11ade5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/process/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"author\": \"Roman Shtylman <shtylman@gmail.com>\",
  \"name\": \"process\",
  \"description\": \"process information for node.js and browsers\",
  \"keywords\": [
    \"process\"
  ],
  \"scripts\": {
    \"test\": \"mocha test.js\",
    \"browser\": \"zuul --no-coverage --ui mocha-bdd --local 8080 -- test.js\"
  },
  \"version\": \"0.11.10\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/shtylman/node-process.git\"
  },
  \"license\": \"MIT\",
  \"browser\": \"./browser.js\",
  \"main\": \"./index.js\",
  \"engines\": {
    \"node\": \">= 0.6.0\"
  },
  \"devDependencies\": {
    \"mocha\": \"2.2.1\",
    \"zuul\": \"^3.10.3\"
  }
}
", "node_modules/process/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/process/package.json");
    }
}
