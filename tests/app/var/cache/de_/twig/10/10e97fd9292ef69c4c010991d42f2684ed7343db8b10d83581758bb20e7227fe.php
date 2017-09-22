<?php

/* node_modules/negotiator/package.json */
class __TwigTemplate_e7b697e70d875e00834fccbb68a06972eaeecf6f5f48e5386d340e2997cc438f extends Twig_Template
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
        $__internal_7571662f9fc5d52259af66f0b7ba86ec718e4c5bcf12a0dbcb95ca5b590c7c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7571662f9fc5d52259af66f0b7ba86ec718e4c5bcf12a0dbcb95ca5b590c7c3a->enter($__internal_7571662f9fc5d52259af66f0b7ba86ec718e4c5bcf12a0dbcb95ca5b590c7c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/negotiator/package.json"));

        // line 1
        echo "{
  \"name\": \"negotiator\",
  \"description\": \"HTTP content negotiation\",
  \"version\": \"0.6.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Federico Romero <federico.romero@outboxlabs.com>\",
    \"Isaac Z. Schlueter <i@izs.me> (http://blog.izs.me/)\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"http\",
    \"content negotiation\",
    \"accept\",
    \"accept-language\",
    \"accept-encoding\",
    \"accept-charset\"
  ],
  \"repository\": \"jshttp/negotiator\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.3\",
    \"mocha\": \"~1.21.5\"
  },
  \"files\": [
    \"lib/\",
    \"HISTORY.md\",
    \"LICENSE\",
    \"index.js\",
    \"README.md\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --check-leaks --bail test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_7571662f9fc5d52259af66f0b7ba86ec718e4c5bcf12a0dbcb95ca5b590c7c3a->leave($__internal_7571662f9fc5d52259af66f0b7ba86ec718e4c5bcf12a0dbcb95ca5b590c7c3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/negotiator/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"negotiator\",
  \"description\": \"HTTP content negotiation\",
  \"version\": \"0.6.1\",
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
    \"Federico Romero <federico.romero@outboxlabs.com>\",
    \"Isaac Z. Schlueter <i@izs.me> (http://blog.izs.me/)\"
  ],
  \"license\": \"MIT\",
  \"keywords\": [
    \"http\",
    \"content negotiation\",
    \"accept\",
    \"accept-language\",
    \"accept-encoding\",
    \"accept-charset\"
  ],
  \"repository\": \"jshttp/negotiator\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.3\",
    \"mocha\": \"~1.21.5\"
  },
  \"files\": [
    \"lib/\",
    \"HISTORY.md\",
    \"LICENSE\",
    \"index.js\",
    \"README.md\"
  ],
  \"engines\": {
    \"node\": \">= 0.6\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --check-leaks --bail test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/negotiator/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/negotiator/package.json");
    }
}
