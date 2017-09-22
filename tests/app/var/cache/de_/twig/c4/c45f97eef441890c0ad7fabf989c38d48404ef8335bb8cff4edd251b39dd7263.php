<?php

/* node_modules/cookie/package.json */
class __TwigTemplate_b38c32152011de2af133cba54ef833272d25dc8faa1043d4550a072530c23766 extends Twig_Template
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
        $__internal_b13b6f27a9d23de2fddf032e1375698ff5392278edf30b69e8bfb72fc4555497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13b6f27a9d23de2fddf032e1375698ff5392278edf30b69e8bfb72fc4555497->enter($__internal_b13b6f27a9d23de2fddf032e1375698ff5392278edf30b69e8bfb72fc4555497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cookie/package.json"));

        // line 1
        echo "{
  \"name\": \"cookie\",
  \"description\": \"HTTP server cookie parsing and serialization\",
  \"version\": \"0.3.1\",
  \"author\": \"Roman Shtylman <shtylman@gmail.com>\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"cookie\",
    \"cookies\"
  ],
  \"repository\": \"jshttp/cookie\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.3\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
";
        
        $__internal_b13b6f27a9d23de2fddf032e1375698ff5392278edf30b69e8bfb72fc4555497->leave($__internal_b13b6f27a9d23de2fddf032e1375698ff5392278edf30b69e8bfb72fc4555497_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cookie/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"cookie\",
  \"description\": \"HTTP server cookie parsing and serialization\",
  \"version\": \"0.3.1\",
  \"author\": \"Roman Shtylman <shtylman@gmail.com>\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"cookie\",
    \"cookies\"
  ],
  \"repository\": \"jshttp/cookie\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.3\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
", "node_modules/cookie/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cookie/package.json");
    }
}
