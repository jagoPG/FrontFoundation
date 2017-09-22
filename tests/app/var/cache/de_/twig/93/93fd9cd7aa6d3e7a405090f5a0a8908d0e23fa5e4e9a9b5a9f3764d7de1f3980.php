<?php

/* node_modules/fresh/package.json */
class __TwigTemplate_6c5e49b8eff45c32f1bae21ab0f7ddb82c9f6ff564106220c22922fba6e5da0c extends Twig_Template
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
        $__internal_aa9be4046de94b43388e5dd90e655dd5f250d4252515fd8b29eef2b5d74ae57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9be4046de94b43388e5dd90e655dd5f250d4252515fd8b29eef2b5d74ae57d->enter($__internal_aa9be4046de94b43388e5dd90e655dd5f250d4252515fd8b29eef2b5d74ae57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fresh/package.json"));

        // line 1
        echo "{
  \"name\": \"fresh\",
  \"description\": \"HTTP response freshness testing\",
  \"version\": \"0.5.0\",
  \"author\": \"TJ Holowaychuk <tj@vision-media.ca> (http://tjholowaychuk.com)\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"fresh\",
    \"http\",
    \"conditional\",
    \"cache\"
  ],
  \"repository\": \"jshttp/fresh\",
  \"devDependencies\": {
    \"eslint\": \"3.16.0\",
    \"eslint-config-standard\": \"6.2.1\",
    \"eslint-plugin-promise\": \"3.4.2\",
    \"eslint-plugin-standard\": \"2.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"lint\": \"eslint .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_aa9be4046de94b43388e5dd90e655dd5f250d4252515fd8b29eef2b5d74ae57d->leave($__internal_aa9be4046de94b43388e5dd90e655dd5f250d4252515fd8b29eef2b5d74ae57d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fresh/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"fresh\",
  \"description\": \"HTTP response freshness testing\",
  \"version\": \"0.5.0\",
  \"author\": \"TJ Holowaychuk <tj@vision-media.ca> (http://tjholowaychuk.com)\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"fresh\",
    \"http\",
    \"conditional\",
    \"cache\"
  ],
  \"repository\": \"jshttp/fresh\",
  \"devDependencies\": {
    \"eslint\": \"3.16.0\",
    \"eslint-config-standard\": \"6.2.1\",
    \"eslint-plugin-promise\": \"3.4.2\",
    \"eslint-plugin-standard\": \"2.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"lint\": \"eslint .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/fresh/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fresh/package.json");
    }
}
