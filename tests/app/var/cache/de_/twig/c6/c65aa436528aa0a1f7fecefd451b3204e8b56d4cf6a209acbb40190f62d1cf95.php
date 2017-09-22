<?php

/* node_modules/parseurl/package.json */
class __TwigTemplate_85a4a30b458b4560d7f1b03d081ae8e0e25a03b71ccdd2fe67186f570f28d69b extends Twig_Template
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
        $__internal_be94e4eb1341be86ffada7318e4c7b37163b3d525f607f61569d7a1ad22d9eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be94e4eb1341be86ffada7318e4c7b37163b3d525f607f61569d7a1ad22d9eea->enter($__internal_be94e4eb1341be86ffada7318e4c7b37163b3d525f607f61569d7a1ad22d9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parseurl/package.json"));

        // line 1
        echo "{
  \"name\": \"parseurl\",
  \"description\": \"parse a url with memoization\",
  \"version\": \"1.3.2\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\"
  ],
  \"repository\": \"pillarjs/parseurl\",
  \"license\": \"MIT\",
  \"devDependencies\": {
    \"beautify-benchmark\": \"0.2.4\",
    \"benchmark\": \"2.1.4\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"fast-url-parser\": \"1.1.3\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"2.5.3\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"README.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"scripts\": {
    \"bench\": \"node benchmark/index.js\",
    \"lint\": \"eslint .\",
    \"test\": \"mocha --check-leaks --bail --reporter spec test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --check-leaks --reporter dot test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --check-leaks --reporter spec test/\"
  }
}
";
        
        $__internal_be94e4eb1341be86ffada7318e4c7b37163b3d525f607f61569d7a1ad22d9eea->leave($__internal_be94e4eb1341be86ffada7318e4c7b37163b3d525f607f61569d7a1ad22d9eea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parseurl/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"parseurl\",
  \"description\": \"parse a url with memoization\",
  \"version\": \"1.3.2\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\"
  ],
  \"repository\": \"pillarjs/parseurl\",
  \"license\": \"MIT\",
  \"devDependencies\": {
    \"beautify-benchmark\": \"0.2.4\",
    \"benchmark\": \"2.1.4\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"fast-url-parser\": \"1.1.3\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"2.5.3\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"README.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"scripts\": {
    \"bench\": \"node benchmark/index.js\",
    \"lint\": \"eslint .\",
    \"test\": \"mocha --check-leaks --bail --reporter spec test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --check-leaks --reporter dot test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --check-leaks --reporter spec test/\"
  }
}
", "node_modules/parseurl/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parseurl/package.json");
    }
}
