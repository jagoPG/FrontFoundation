<?php

/* node_modules/content-type/package.json */
class __TwigTemplate_a1416f7f158e3a00245069af39fa918a1414a2112ffbf9be054199072fc78e81 extends Twig_Template
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
        $__internal_71cdc26f2dd550f5b62f0a1845f1fd93c1e48cd54f9d0abb4c3058e731f267eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cdc26f2dd550f5b62f0a1845f1fd93c1e48cd54f9d0abb4c3058e731f267eb->enter($__internal_71cdc26f2dd550f5b62f0a1845f1fd93c1e48cd54f9d0abb4c3058e731f267eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/content-type/package.json"));

        // line 1
        echo "{
  \"name\": \"content-type\",
  \"description\": \"Create and parse HTTP Content-Type header\",
  \"version\": \"1.0.4\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"content-type\",
    \"http\",
    \"req\",
    \"res\",
    \"rfc7231\"
  ],
  \"repository\": \"jshttp/content-type\",
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
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
    \"lint\": \"eslint .\",
    \"test\": \"mocha --reporter spec --check-leaks --bail test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
";
        
        $__internal_71cdc26f2dd550f5b62f0a1845f1fd93c1e48cd54f9d0abb4c3058e731f267eb->leave($__internal_71cdc26f2dd550f5b62f0a1845f1fd93c1e48cd54f9d0abb4c3058e731f267eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/content-type/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"content-type\",
  \"description\": \"Create and parse HTTP Content-Type header\",
  \"version\": \"1.0.4\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"content-type\",
    \"http\",
    \"req\",
    \"res\",
    \"rfc7231\"
  ],
  \"repository\": \"jshttp/content-type\",
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
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
    \"lint\": \"eslint .\",
    \"test\": \"mocha --reporter spec --check-leaks --bail test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
", "node_modules/content-type/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/content-type/package.json");
    }
}
