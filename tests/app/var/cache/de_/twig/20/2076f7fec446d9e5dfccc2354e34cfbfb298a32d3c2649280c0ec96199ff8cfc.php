<?php

/* node_modules/vary/package.json */
class __TwigTemplate_83392ae0782e15c87f79859ee56ec745868301532221f674b0686291f415f8ec extends Twig_Template
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
        $__internal_0c9c63e3876cecba87d4654b1192bfe78c8014421cc3cee408eca891e1f90082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9c63e3876cecba87d4654b1192bfe78c8014421cc3cee408eca891e1f90082->enter($__internal_0c9c63e3876cecba87d4654b1192bfe78c8014421cc3cee408eca891e1f90082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/vary/package.json"));

        // line 1
        echo "{
  \"name\": \"vary\",
  \"description\": \"Manipulate the HTTP Vary header\",
  \"version\": \"1.1.1\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"http\",
    \"res\",
    \"vary\"
  ],
  \"repository\": \"jshttp/vary\",
  \"devDependencies\": {
    \"eslint\": \"3.18.0\",
    \"eslint-config-standard\": \"7.1.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.4\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"2.1.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"2.5.3\",
    \"supertest\": \"1.1.0\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"scripts\": {
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_0c9c63e3876cecba87d4654b1192bfe78c8014421cc3cee408eca891e1f90082->leave($__internal_0c9c63e3876cecba87d4654b1192bfe78c8014421cc3cee408eca891e1f90082_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/vary/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"vary\",
  \"description\": \"Manipulate the HTTP Vary header\",
  \"version\": \"1.1.1\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"http\",
    \"res\",
    \"vary\"
  ],
  \"repository\": \"jshttp/vary\",
  \"devDependencies\": {
    \"eslint\": \"3.18.0\",
    \"eslint-config-standard\": \"7.1.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.4\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"2.1.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"2.5.3\",
    \"supertest\": \"1.1.0\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"scripts\": {
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/vary/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/vary/package.json");
    }
}
