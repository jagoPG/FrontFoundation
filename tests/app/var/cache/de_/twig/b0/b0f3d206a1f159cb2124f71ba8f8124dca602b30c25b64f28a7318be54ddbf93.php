<?php

/* node_modules/media-typer/package.json */
class __TwigTemplate_9f5d479589c0a7c58a1f57aa8c1c8786ab596cbb86e67ccbe2c51ae16fe18979 extends Twig_Template
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
        $__internal_9f5e3ee53ef97c36a41d678b1977ca117facf9b41f04638c61928154121b4453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5e3ee53ef97c36a41d678b1977ca117facf9b41f04638c61928154121b4453->enter($__internal_9f5e3ee53ef97c36a41d678b1977ca117facf9b41f04638c61928154121b4453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/media-typer/package.json"));

        // line 1
        echo "{
  \"name\": \"media-typer\",
  \"description\": \"Simple RFC 6838 media type parser and formatter\",
  \"version\": \"0.3.0\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"repository\": \"jshttp/media-typer\",
  \"devDependencies\": {
    \"istanbul\": \"0.3.2\",
    \"mocha\": \"~1.21.4\",
    \"should\": \"~4.0.4\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --check-leaks --bail test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_9f5e3ee53ef97c36a41d678b1977ca117facf9b41f04638c61928154121b4453->leave($__internal_9f5e3ee53ef97c36a41d678b1977ca117facf9b41f04638c61928154121b4453_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/media-typer/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"media-typer\",
  \"description\": \"Simple RFC 6838 media type parser and formatter\",
  \"version\": \"0.3.0\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"repository\": \"jshttp/media-typer\",
  \"devDependencies\": {
    \"istanbul\": \"0.3.2\",
    \"mocha\": \"~1.21.4\",
    \"should\": \"~4.0.4\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --check-leaks --bail test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/media-typer/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/media-typer/package.json");
    }
}
