<?php

/* node_modules/proxy-addr/package.json */
class __TwigTemplate_a4b07c8faf4a889d5cecb69c05cfd46097bd4cb8b43399454689491119e60f9d extends Twig_Template
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
        $__internal_bc69b6f472a6f018c946a89f765dc439128b8ffa99a4610ba72612e46ac82c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc69b6f472a6f018c946a89f765dc439128b8ffa99a4610ba72612e46ac82c7e->enter($__internal_bc69b6f472a6f018c946a89f765dc439128b8ffa99a4610ba72612e46ac82c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/proxy-addr/package.json"));

        // line 1
        echo "{
  \"name\": \"proxy-addr\",
  \"description\": \"Determine address of proxied request\",
  \"version\": \"1.1.5\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"ip\",
    \"proxy\",
    \"x-forwarded-for\"
  ],
  \"repository\": \"jshttp/proxy-addr\",
  \"dependencies\": {
    \"forwarded\": \"~0.1.0\",
    \"ipaddr.js\": \"1.4.0\"
  },
  \"devDependencies\": {
    \"benchmark\": \"2.1.4\",
    \"beautify-benchmark\": \"0.2.4\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"~1.21.5\"
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
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_bc69b6f472a6f018c946a89f765dc439128b8ffa99a4610ba72612e46ac82c7e->leave($__internal_bc69b6f472a6f018c946a89f765dc439128b8ffa99a4610ba72612e46ac82c7e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/proxy-addr/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"proxy-addr\",
  \"description\": \"Determine address of proxied request\",
  \"version\": \"1.1.5\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"ip\",
    \"proxy\",
    \"x-forwarded-for\"
  ],
  \"repository\": \"jshttp/proxy-addr\",
  \"dependencies\": {
    \"forwarded\": \"~0.1.0\",
    \"ipaddr.js\": \"1.4.0\"
  },
  \"devDependencies\": {
    \"benchmark\": \"2.1.4\",
    \"beautify-benchmark\": \"0.2.4\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"~1.21.5\"
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
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/proxy-addr/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/proxy-addr/package.json");
    }
}
