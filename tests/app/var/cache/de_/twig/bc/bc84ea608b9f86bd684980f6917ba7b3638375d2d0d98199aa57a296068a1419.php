<?php

/* node_modules/serve-static/package.json */
class __TwigTemplate_ce8cbcd898a2c907d25252e249329277116725ac1a361edf24e23822a496ee3c extends Twig_Template
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
        $__internal_9abe557883bf60e534275f811f6ca92b3147f22c72bfa70314926f34244d8a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abe557883bf60e534275f811f6ca92b3147f22c72bfa70314926f34244d8a46->enter($__internal_9abe557883bf60e534275f811f6ca92b3147f22c72bfa70314926f34244d8a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/serve-static/package.json"));

        // line 1
        echo "{
  \"name\": \"serve-static\",
  \"description\": \"Serve static files\",
  \"version\": \"1.12.4\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"repository\": \"expressjs/serve-static\",
  \"dependencies\": {
    \"encodeurl\": \"~1.0.1\",
    \"escape-html\": \"~1.0.3\",
    \"parseurl\": \"~1.3.1\",
    \"send\": \"0.15.4\"
  },
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.6.1\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.6\",
    \"eslint-plugin-node\": \"5.1.0\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"2.5.3\",
    \"supertest\": \"1.1.0\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8.0\"
  },
  \"scripts\": {
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
";
        
        $__internal_9abe557883bf60e534275f811f6ca92b3147f22c72bfa70314926f34244d8a46->leave($__internal_9abe557883bf60e534275f811f6ca92b3147f22c72bfa70314926f34244d8a46_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/serve-static/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"serve-static\",
  \"description\": \"Serve static files\",
  \"version\": \"1.12.4\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"repository\": \"expressjs/serve-static\",
  \"dependencies\": {
    \"encodeurl\": \"~1.0.1\",
    \"escape-html\": \"~1.0.3\",
    \"parseurl\": \"~1.3.1\",
    \"send\": \"0.15.4\"
  },
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.6.1\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.6\",
    \"eslint-plugin-node\": \"5.1.0\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"2.5.3\",
    \"supertest\": \"1.1.0\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8.0\"
  },
  \"scripts\": {
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
", "node_modules/serve-static/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/serve-static/package.json");
    }
}
