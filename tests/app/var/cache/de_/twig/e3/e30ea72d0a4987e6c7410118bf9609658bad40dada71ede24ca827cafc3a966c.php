<?php

/* node_modules/methods/package.json */
class __TwigTemplate_8a480f53d585e6ddcd63f624d726c70b9f2267cf1697539ebfeb2e495c9955e3 extends Twig_Template
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
        $__internal_0f39aff1de8cc0c5f913d66cef62bb722fb353d821c15d8afddf3de936157641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f39aff1de8cc0c5f913d66cef62bb722fb353d821c15d8afddf3de936157641->enter($__internal_0f39aff1de8cc0c5f913d66cef62bb722fb353d821c15d8afddf3de936157641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/methods/package.json"));

        // line 1
        echo "{
  \"name\": \"methods\",
  \"description\": \"HTTP methods that node supports\",
  \"version\": \"1.1.2\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\",
    \"TJ Holowaychuk <tj@vision-media.ca> (http://tjholowaychuk.com)\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"jshttp/methods\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.1\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"index.js\",
    \"HISTORY.md\",
    \"LICENSE\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  },
  \"browser\": {
    \"http\": false
  },
  \"keywords\": [
    \"http\",
    \"methods\"
  ]
}
";
        
        $__internal_0f39aff1de8cc0c5f913d66cef62bb722fb353d821c15d8afddf3de936157641->leave($__internal_0f39aff1de8cc0c5f913d66cef62bb722fb353d821c15d8afddf3de936157641_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/methods/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"methods\",
  \"description\": \"HTTP methods that node supports\",
  \"version\": \"1.1.2\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Jonathan Ong <me@jongleberry.com> (http://jongleberry.com)\",
    \"TJ Holowaychuk <tj@vision-media.ca> (http://tjholowaychuk.com)\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"jshttp/methods\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.1\",
    \"mocha\": \"1.21.5\"
  },
  \"files\": [
    \"index.js\",
    \"HISTORY.md\",
    \"LICENSE\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  },
  \"browser\": {
    \"http\": false
  },
  \"keywords\": [
    \"http\",
    \"methods\"
  ]
}
", "node_modules/methods/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/methods/package.json");
    }
}
