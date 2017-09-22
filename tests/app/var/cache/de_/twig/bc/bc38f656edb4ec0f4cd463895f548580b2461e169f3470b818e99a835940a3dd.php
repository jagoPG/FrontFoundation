<?php

/* node_modules/statuses/package.json */
class __TwigTemplate_b784d7df46c5025a8d5a6cc8fca21a6584769497408032131cbea5a0904d867c extends Twig_Template
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
        $__internal_767230b9d230542033a7b322fa75a1590d0ba96e37a10505ff5f0812cf4ac4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767230b9d230542033a7b322fa75a1590d0ba96e37a10505ff5f0812cf4ac4d9->enter($__internal_767230b9d230542033a7b322fa75a1590d0ba96e37a10505ff5f0812cf4ac4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/statuses/package.json"));

        // line 1
        echo "{
  \"name\": \"statuses\",
  \"description\": \"HTTP status utility\",
  \"version\": \"1.3.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\"
  ],
  \"repository\": \"jshttp/statuses\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"http\",
    \"status\",
    \"code\"
  ],
  \"files\": [
    \"HISTORY.md\",
    \"index.js\",
    \"codes.json\",
    \"LICENSE\"
  ],
  \"devDependencies\": {
    \"csv-parse\": \"1.1.7\",
    \"eslint\": \"3.10.0\",
    \"eslint-config-standard\": \"6.2.1\",
    \"eslint-plugin-promise\": \"3.3.2\",
    \"eslint-plugin-standard\": \"2.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"1.21.5\",
    \"stream-to-array\": \"2.3.0\"
  },
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"build\": \"node scripts/build.js\",
    \"fetch\": \"node scripts/fetch.js\",
    \"lint\": \"eslint .\",
    \"test\": \"mocha --reporter spec --check-leaks --bail test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"update\": \"npm run fetch && npm run build\"
  }
}
";
        
        $__internal_767230b9d230542033a7b322fa75a1590d0ba96e37a10505ff5f0812cf4ac4d9->leave($__internal_767230b9d230542033a7b322fa75a1590d0ba96e37a10505ff5f0812cf4ac4d9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/statuses/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"statuses\",
  \"description\": \"HTTP status utility\",
  \"version\": \"1.3.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\"
  ],
  \"repository\": \"jshttp/statuses\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"http\",
    \"status\",
    \"code\"
  ],
  \"files\": [
    \"HISTORY.md\",
    \"index.js\",
    \"codes.json\",
    \"LICENSE\"
  ],
  \"devDependencies\": {
    \"csv-parse\": \"1.1.7\",
    \"eslint\": \"3.10.0\",
    \"eslint-config-standard\": \"6.2.1\",
    \"eslint-plugin-promise\": \"3.3.2\",
    \"eslint-plugin-standard\": \"2.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"1.21.5\",
    \"stream-to-array\": \"2.3.0\"
  },
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"build\": \"node scripts/build.js\",
    \"fetch\": \"node scripts/fetch.js\",
    \"lint\": \"eslint .\",
    \"test\": \"mocha --reporter spec --check-leaks --bail test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"update\": \"npm run fetch && npm run build\"
  }
}
", "node_modules/statuses/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/statuses/package.json");
    }
}
