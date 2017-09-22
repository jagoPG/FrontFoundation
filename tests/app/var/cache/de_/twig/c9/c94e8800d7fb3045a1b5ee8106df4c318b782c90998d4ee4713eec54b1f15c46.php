<?php

/* node_modules/encodeurl/package.json */
class __TwigTemplate_1c557de3349f5527a5af919924aece62de88288f28390805aa07f6d2e0053524 extends Twig_Template
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
        $__internal_0d4629985a1d2eb2bc7e0a214bbb762f6f1732a3a7aef0cb075811625087ad2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4629985a1d2eb2bc7e0a214bbb762f6f1732a3a7aef0cb075811625087ad2d->enter($__internal_0d4629985a1d2eb2bc7e0a214bbb762f6f1732a3a7aef0cb075811625087ad2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/encodeurl/package.json"));

        // line 1
        echo "{
  \"name\": \"encodeurl\",
  \"description\": \"Encode a URL to a percent-encoded form, excluding already-encoded sequences\",
  \"version\": \"1.0.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"encode\",
    \"encodeurl\",
    \"url\"
  ],
  \"repository\": \"pillarjs/encodeurl\",
  \"devDependencies\": {
    \"eslint\": \"2.11.1\",
    \"eslint-config-standard\": \"5.3.1\",
    \"eslint-plugin-promise\": \"1.3.2\",
    \"eslint-plugin-standard\": \"1.3.2\",
    \"istanbul\": \"0.4.3\",
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
    \"lint\": \"eslint **/*.js\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_0d4629985a1d2eb2bc7e0a214bbb762f6f1732a3a7aef0cb075811625087ad2d->leave($__internal_0d4629985a1d2eb2bc7e0a214bbb762f6f1732a3a7aef0cb075811625087ad2d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/encodeurl/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"encodeurl\",
  \"description\": \"Encode a URL to a percent-encoded form, excluding already-encoded sequences\",
  \"version\": \"1.0.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"encode\",
    \"encodeurl\",
    \"url\"
  ],
  \"repository\": \"pillarjs/encodeurl\",
  \"devDependencies\": {
    \"eslint\": \"2.11.1\",
    \"eslint-config-standard\": \"5.3.1\",
    \"eslint-plugin-promise\": \"1.3.2\",
    \"eslint-plugin-standard\": \"1.3.2\",
    \"istanbul\": \"0.4.3\",
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
    \"lint\": \"eslint **/*.js\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/encodeurl/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/encodeurl/package.json");
    }
}
