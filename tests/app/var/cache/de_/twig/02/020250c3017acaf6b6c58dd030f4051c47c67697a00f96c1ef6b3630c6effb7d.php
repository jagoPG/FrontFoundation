<?php

/* node_modules/etag/package.json */
class __TwigTemplate_5d97dd0f28f46ad3c798db2c703c1641572415e94ec0e6aa0100fd83e39b473c extends Twig_Template
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
        $__internal_93432152e20a2d7235f7e49b8d6c3574f0dfa44ffdd228db8ae905bcc0a5d14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93432152e20a2d7235f7e49b8d6c3574f0dfa44ffdd228db8ae905bcc0a5d14e->enter($__internal_93432152e20a2d7235f7e49b8d6c3574f0dfa44ffdd228db8ae905bcc0a5d14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/etag/package.json"));

        // line 1
        echo "{
  \"name\": \"etag\",
  \"description\": \"Create simple HTTP ETags\",
  \"version\": \"1.8.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"David Björklund <david.bjorklund@gmail.com>\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"etag\",
    \"http\",
    \"res\"
  ],
  \"repository\": \"jshttp/etag\",
  \"devDependencies\": {
    \"beautify-benchmark\": \"0.2.4\",
    \"benchmark\": \"2.1.4\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.6\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"1.21.5\",
    \"safe-buffer\": \"5.1.1\",
    \"seedrandom\": \"2.4.3\"
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
    \"bench\": \"node benchmark/index.js\",
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_93432152e20a2d7235f7e49b8d6c3574f0dfa44ffdd228db8ae905bcc0a5d14e->leave($__internal_93432152e20a2d7235f7e49b8d6c3574f0dfa44ffdd228db8ae905bcc0a5d14e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/etag/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"etag\",
  \"description\": \"Create simple HTTP ETags\",
  \"version\": \"1.8.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"David Björklund <david.bjorklund@gmail.com>\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"etag\",
    \"http\",
    \"res\"
  ],
  \"repository\": \"jshttp/etag\",
  \"devDependencies\": {
    \"beautify-benchmark\": \"0.2.4\",
    \"benchmark\": \"2.1.4\",
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.6\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"1.21.5\",
    \"safe-buffer\": \"5.1.1\",
    \"seedrandom\": \"2.4.3\"
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
    \"bench\": \"node benchmark/index.js\",
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/etag/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/etag/package.json");
    }
}
