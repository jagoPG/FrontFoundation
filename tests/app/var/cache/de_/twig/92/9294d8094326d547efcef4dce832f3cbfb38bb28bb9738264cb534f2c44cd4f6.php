<?php

/* node_modules/forwarded/package.json */
class __TwigTemplate_3b06e6ab8b5bf4e5e5d7a856e2140b03956c5f6c4c4ca78dee73e48735013e7c extends Twig_Template
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
        $__internal_f47d0246930a41ed0ab01375407d50ca9002c8ecf42c952cb832100284277926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47d0246930a41ed0ab01375407d50ca9002c8ecf42c952cb832100284277926->enter($__internal_f47d0246930a41ed0ab01375407d50ca9002c8ecf42c952cb832100284277926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/forwarded/package.json"));

        // line 1
        echo "{
  \"name\": \"forwarded\",
  \"description\": \"Parse HTTP X-Forwarded-For header\",
  \"version\": \"0.1.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"x-forwarded-for\",
    \"http\",
    \"req\"
  ],
  \"repository\": \"jshttp/forwarded\",
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-node\": \"5.1.0\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"README.md\",
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
        
        $__internal_f47d0246930a41ed0ab01375407d50ca9002c8ecf42c952cb832100284277926->leave($__internal_f47d0246930a41ed0ab01375407d50ca9002c8ecf42c952cb832100284277926_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/forwarded/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"forwarded\",
  \"description\": \"Parse HTTP X-Forwarded-For header\",
  \"version\": \"0.1.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"x-forwarded-for\",
    \"http\",
    \"req\"
  ],
  \"repository\": \"jshttp/forwarded\",
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-node\": \"5.1.0\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"README.md\",
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
", "node_modules/forwarded/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/forwarded/package.json");
    }
}
