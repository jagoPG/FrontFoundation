<?php

/* node_modules/depd/package.json */
class __TwigTemplate_1bba87ea942f8949aa819da6242a0a958d8ab5f85b842275cd3614f4c9b9f4e1 extends Twig_Template
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
        $__internal_da13f99df4bb9d813d34189550bb9805c5aecdb53d30d95ba3aa2764f11e883d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da13f99df4bb9d813d34189550bb9805c5aecdb53d30d95ba3aa2764f11e883d->enter($__internal_da13f99df4bb9d813d34189550bb9805c5aecdb53d30d95ba3aa2764f11e883d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/depd/package.json"));

        // line 1
        echo "{
  \"name\": \"depd\",
  \"description\": \"Deprecate all the things\",
  \"version\": \"1.1.1\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"deprecate\",
    \"deprecated\"
  ],
  \"repository\": \"dougwilson/nodejs-depd\",
  \"browser\": \"lib/browser/index.js\",
  \"devDependencies\": {
    \"benchmark\": \"2.1.4\",
    \"beautify-benchmark\": \"0.2.4\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"7.1.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.7\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"2.3.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"~1.21.5\"
  },
  \"files\": [
    \"lib/\",
    \"History.md\",
    \"LICENSE\",
    \"index.js\",
    \"Readme.md\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"bench\": \"node benchmark/index.js\",
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --no-exit test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot test/\"
  }
}
";
        
        $__internal_da13f99df4bb9d813d34189550bb9805c5aecdb53d30d95ba3aa2764f11e883d->leave($__internal_da13f99df4bb9d813d34189550bb9805c5aecdb53d30d95ba3aa2764f11e883d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/depd/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"depd\",
  \"description\": \"Deprecate all the things\",
  \"version\": \"1.1.1\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"deprecate\",
    \"deprecated\"
  ],
  \"repository\": \"dougwilson/nodejs-depd\",
  \"browser\": \"lib/browser/index.js\",
  \"devDependencies\": {
    \"benchmark\": \"2.1.4\",
    \"beautify-benchmark\": \"0.2.4\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"7.1.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.7\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"2.3.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"~1.21.5\"
  },
  \"files\": [
    \"lib/\",
    \"History.md\",
    \"LICENSE\",
    \"index.js\",
    \"Readme.md\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"bench\": \"node benchmark/index.js\",
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --no-exit test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot test/\"
  }
}
", "node_modules/depd/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/depd/package.json");
    }
}
