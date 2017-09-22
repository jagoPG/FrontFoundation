<?php

/* node_modules/ee-first/package.json */
class __TwigTemplate_380d1c009b8b5f02a54b70f593169383b33f5b47e76a3de9cd2eaad36e02c676 extends Twig_Template
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
        $__internal_5e7881c85a347bd6d0e43730994313d92b1e22ad32587c96ec37468660a87253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7881c85a347bd6d0e43730994313d92b1e22ad32587c96ec37468660a87253->enter($__internal_5e7881c85a347bd6d0e43730994313d92b1e22ad32587c96ec37468660a87253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ee-first/package.json"));

        // line 1
        echo "{
  \"name\": \"ee-first\",
  \"description\": \"return the first event in a set of ee/event pairs\",
  \"version\": \"1.1.1\",
  \"author\": {
    \"name\": \"Jonathan Ong\",
    \"email\": \"me@jongleberry.com\",
    \"url\": \"http://jongleberry.com\",
    \"twitter\": \"https://twitter.com/jongleberry\"
  },
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"jonathanong/ee-first\",
  \"devDependencies\": {
    \"istanbul\": \"0.3.9\",
    \"mocha\": \"2.2.5\"
  },
  \"files\": [
    \"index.js\",
    \"LICENSE\"
  ],
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_5e7881c85a347bd6d0e43730994313d92b1e22ad32587c96ec37468660a87253->leave($__internal_5e7881c85a347bd6d0e43730994313d92b1e22ad32587c96ec37468660a87253_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ee-first/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"ee-first\",
  \"description\": \"return the first event in a set of ee/event pairs\",
  \"version\": \"1.1.1\",
  \"author\": {
    \"name\": \"Jonathan Ong\",
    \"email\": \"me@jongleberry.com\",
    \"url\": \"http://jongleberry.com\",
    \"twitter\": \"https://twitter.com/jongleberry\"
  },
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"jonathanong/ee-first\",
  \"devDependencies\": {
    \"istanbul\": \"0.3.9\",
    \"mocha\": \"2.2.5\"
  },
  \"files\": [
    \"index.js\",
    \"LICENSE\"
  ],
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/ee-first/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ee-first/package.json");
    }
}
