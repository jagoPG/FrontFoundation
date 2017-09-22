<?php

/* node_modules/send/package.json */
class __TwigTemplate_a9c0a7f1e97bf9f16a185d8e2c21fd1c2fe849dcfc8bee043910a09c5729f9df extends Twig_Template
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
        $__internal_cf3d06ae4a4087d1cb0926d6eb84d36ba56b637ee3718a8184fc2b392295d9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3d06ae4a4087d1cb0926d6eb84d36ba56b637ee3718a8184fc2b392295d9ce->enter($__internal_cf3d06ae4a4087d1cb0926d6eb84d36ba56b637ee3718a8184fc2b392295d9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/send/package.json"));

        // line 1
        echo "{
  \"name\": \"send\",
  \"description\": \"Better streaming static file server with Range and conditional-GET support\",
  \"version\": \"0.15.4\",
  \"author\": \"TJ Holowaychuk <tj@vision-media.ca>\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"James Wyatt Cready <jcready@gmail.com>\",
    \"Jesús Leganés Combarro <piranna@gmail.com>\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"pillarjs/send\",
  \"keywords\": [
    \"static\",
    \"file\",
    \"server\"
  ],
  \"dependencies\": {
    \"debug\": \"2.6.8\",
    \"depd\": \"~1.1.1\",
    \"destroy\": \"~1.0.4\",
    \"encodeurl\": \"~1.0.1\",
    \"escape-html\": \"~1.0.3\",
    \"etag\": \"~1.8.0\",
    \"fresh\": \"0.5.0\",
    \"http-errors\": \"~1.6.2\",
    \"mime\": \"1.3.4\",
    \"ms\": \"2.0.0\",
    \"on-finished\": \"~2.3.0\",
    \"range-parser\": \"~1.2.0\",
    \"statuses\": \"~1.3.1\"
  },
  \"devDependencies\": {
    \"after\": \"0.8.2\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"7.1.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.6\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"2.3.1\",
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
    \"node\": \">= 0.8.0\"
  },
  \"scripts\": {
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --check-leaks --reporter spec --bail\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --check-leaks --reporter spec\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --check-leaks --reporter dot\"
  }
}
";
        
        $__internal_cf3d06ae4a4087d1cb0926d6eb84d36ba56b637ee3718a8184fc2b392295d9ce->leave($__internal_cf3d06ae4a4087d1cb0926d6eb84d36ba56b637ee3718a8184fc2b392295d9ce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/send/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"send\",
  \"description\": \"Better streaming static file server with Range and conditional-GET support\",
  \"version\": \"0.15.4\",
  \"author\": \"TJ Holowaychuk <tj@vision-media.ca>\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"James Wyatt Cready <jcready@gmail.com>\",
    \"Jesús Leganés Combarro <piranna@gmail.com>\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"pillarjs/send\",
  \"keywords\": [
    \"static\",
    \"file\",
    \"server\"
  ],
  \"dependencies\": {
    \"debug\": \"2.6.8\",
    \"depd\": \"~1.1.1\",
    \"destroy\": \"~1.0.4\",
    \"encodeurl\": \"~1.0.1\",
    \"escape-html\": \"~1.0.3\",
    \"etag\": \"~1.8.0\",
    \"fresh\": \"0.5.0\",
    \"http-errors\": \"~1.6.2\",
    \"mime\": \"1.3.4\",
    \"ms\": \"2.0.0\",
    \"on-finished\": \"~2.3.0\",
    \"range-parser\": \"~1.2.0\",
    \"statuses\": \"~1.3.1\"
  },
  \"devDependencies\": {
    \"after\": \"0.8.2\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"7.1.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.6\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"2.3.1\",
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
    \"node\": \">= 0.8.0\"
  },
  \"scripts\": {
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --check-leaks --reporter spec --bail\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --check-leaks --reporter spec\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --check-leaks --reporter dot\"
  }
}
", "node_modules/send/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/send/package.json");
    }
}
