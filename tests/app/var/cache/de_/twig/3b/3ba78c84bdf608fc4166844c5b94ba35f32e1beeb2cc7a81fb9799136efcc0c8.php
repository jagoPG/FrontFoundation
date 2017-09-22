<?php

/* node_modules/on-finished/package.json */
class __TwigTemplate_b61cdc3262fd9e0280c78ca36d44928410bf94d1dfdd313d337731f2284cd1e3 extends Twig_Template
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
        $__internal_af1ba6a52be7fb41715a44cc16001687a83d0366e1900309babced76719e35e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1ba6a52be7fb41715a44cc16001687a83d0366e1900309babced76719e35e9->enter($__internal_af1ba6a52be7fb41715a44cc16001687a83d0366e1900309babced76719e35e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/on-finished/package.json"));

        // line 1
        echo "{
  \"name\": \"on-finished\",
  \"description\": \"Execute a callback when a request closes, finishes, or errors\",
  \"version\": \"2.3.0\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"jshttp/on-finished\",
  \"dependencies\": {
    \"ee-first\": \"1.1.1\"
  },
  \"devDependencies\": {
    \"istanbul\": \"0.3.9\",
    \"mocha\": \"2.2.5\"
  },
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"index.js\"
  ],
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_af1ba6a52be7fb41715a44cc16001687a83d0366e1900309babced76719e35e9->leave($__internal_af1ba6a52be7fb41715a44cc16001687a83d0366e1900309babced76719e35e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/on-finished/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"on-finished\",
  \"description\": \"Execute a callback when a request closes, finishes, or errors\",
  \"version\": \"2.3.0\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"jshttp/on-finished\",
  \"dependencies\": {
    \"ee-first\": \"1.1.1\"
  },
  \"devDependencies\": {
    \"istanbul\": \"0.3.9\",
    \"mocha\": \"2.2.5\"
  },
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"index.js\"
  ],
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/on-finished/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/on-finished/package.json");
    }
}
