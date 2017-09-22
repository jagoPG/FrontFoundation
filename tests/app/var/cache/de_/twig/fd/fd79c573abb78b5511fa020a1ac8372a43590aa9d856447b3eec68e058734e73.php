<?php

/* node_modules/destroy/package.json */
class __TwigTemplate_6e4093b6eeba092c66419c00babf7036a9d2facb327f3b6549c314ac29c436f6 extends Twig_Template
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
        $__internal_beaba699ec99a505cb29b7aff474296953a86bba73da330ea59b4487e719c3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beaba699ec99a505cb29b7aff474296953a86bba73da330ea59b4487e719c3fc->enter($__internal_beaba699ec99a505cb29b7aff474296953a86bba73da330ea59b4487e719c3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/destroy/package.json"));

        // line 1
        echo "{
  \"name\": \"destroy\",
  \"description\": \"destroy a stream if possible\",
  \"version\": \"1.0.4\",
  \"author\": {
    \"name\": \"Jonathan Ong\",
    \"email\": \"me@jongleberry.com\",
    \"url\": \"http://jongleberry.com\",
    \"twitter\": \"https://twitter.com/jongleberry\"
  },
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"stream-utils/destroy\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.2\",
    \"mocha\": \"2.3.4\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter dot\"
  },
  \"files\": [
    \"index.js\",
    \"LICENSE\"
  ],
  \"keywords\": [
    \"stream\",
    \"streams\",
    \"destroy\",
    \"cleanup\",
    \"leak\",
    \"fd\"
  ]
}
";
        
        $__internal_beaba699ec99a505cb29b7aff474296953a86bba73da330ea59b4487e719c3fc->leave($__internal_beaba699ec99a505cb29b7aff474296953a86bba73da330ea59b4487e719c3fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/destroy/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"destroy\",
  \"description\": \"destroy a stream if possible\",
  \"version\": \"1.0.4\",
  \"author\": {
    \"name\": \"Jonathan Ong\",
    \"email\": \"me@jongleberry.com\",
    \"url\": \"http://jongleberry.com\",
    \"twitter\": \"https://twitter.com/jongleberry\"
  },
  \"contributors\": [
    \"Douglas Christopher Wilson <doug@somethingdoug.com>\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"stream-utils/destroy\",
  \"devDependencies\": {
    \"istanbul\": \"0.4.2\",
    \"mocha\": \"2.3.4\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter dot\"
  },
  \"files\": [
    \"index.js\",
    \"LICENSE\"
  ],
  \"keywords\": [
    \"stream\",
    \"streams\",
    \"destroy\",
    \"cleanup\",
    \"leak\",
    \"fd\"
  ]
}
", "node_modules/destroy/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/destroy/package.json");
    }
}
