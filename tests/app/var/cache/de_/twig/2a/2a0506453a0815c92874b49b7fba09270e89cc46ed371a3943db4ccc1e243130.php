<?php

/* node_modules/stream-http/package.json */
class __TwigTemplate_69401f25c2bd32729b5db5784f75dffdb69733735aaf0f210e58a5e99621ae86 extends Twig_Template
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
        $__internal_c77eb0b6c2b74e18b4685d93cbaedcade264df276c211c32e434a9a9069bbfd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77eb0b6c2b74e18b4685d93cbaedcade264df276c211c32e434a9a9069bbfd4->enter($__internal_c77eb0b6c2b74e18b4685d93cbaedcade264df276c211c32e434a9a9069bbfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/package.json"));

        // line 1
        echo "{
  \"name\": \"stream-http\",
  \"version\": \"2.7.2\",
  \"description\": \"Streaming http in the browser\",
  \"main\": \"index.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/jhiesey/stream-http.git\"
  },
  \"scripts\": {
    \"test\": \"npm run test-node && ([ -n \\\"\${TRAVIS_PULL_REQUEST}\\\" -a \\\"\${TRAVIS_PULL_REQUEST}\\\" != 'false' ] || npm run test-browser)\",
    \"test-node\": \"tape test/node/*.js\",
    \"test-browser\": \"zuul --no-coverage -- test/browser/*.js\",
    \"test-browser-local\": \"zuul --local 8080 --no-coverage -- test/browser/*.js\"
  },
  \"author\": \"John Hiesey\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/jhiesey/stream-http/issues\"
  },
  \"homepage\": \"https://github.com/jhiesey/stream-http#readme\",
  \"keywords\": [
    \"http\",
    \"stream\",
    \"streaming\",
    \"xhr\",
    \"http-browserify\"
  ],
  \"dependencies\": {
    \"builtin-status-codes\": \"^3.0.0\",
    \"inherits\": \"^2.0.1\",
    \"readable-stream\": \"^2.2.6\",
    \"to-arraybuffer\": \"^1.0.0\",
    \"xtend\": \"^4.0.0\"
  },
  \"devDependencies\": {
    \"basic-auth\": \"^1.0.3\",
    \"brfs\": \"^1.4.0\",
    \"cookie-parser\": \"^1.4.3\",
    \"express\": \"^4.15.2\",
    \"tape\": \"^4.0.0\",
    \"ua-parser-js\": \"^0.7.7\",
    \"webworkify\": \"^1.0.2\",
    \"zuul\": \"^3.10.3\"
  }
}
";
        
        $__internal_c77eb0b6c2b74e18b4685d93cbaedcade264df276c211c32e434a9a9069bbfd4->leave($__internal_c77eb0b6c2b74e18b4685d93cbaedcade264df276c211c32e434a9a9069bbfd4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"stream-http\",
  \"version\": \"2.7.2\",
  \"description\": \"Streaming http in the browser\",
  \"main\": \"index.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/jhiesey/stream-http.git\"
  },
  \"scripts\": {
    \"test\": \"npm run test-node && ([ -n \\\"\${TRAVIS_PULL_REQUEST}\\\" -a \\\"\${TRAVIS_PULL_REQUEST}\\\" != 'false' ] || npm run test-browser)\",
    \"test-node\": \"tape test/node/*.js\",
    \"test-browser\": \"zuul --no-coverage -- test/browser/*.js\",
    \"test-browser-local\": \"zuul --local 8080 --no-coverage -- test/browser/*.js\"
  },
  \"author\": \"John Hiesey\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/jhiesey/stream-http/issues\"
  },
  \"homepage\": \"https://github.com/jhiesey/stream-http#readme\",
  \"keywords\": [
    \"http\",
    \"stream\",
    \"streaming\",
    \"xhr\",
    \"http-browserify\"
  ],
  \"dependencies\": {
    \"builtin-status-codes\": \"^3.0.0\",
    \"inherits\": \"^2.0.1\",
    \"readable-stream\": \"^2.2.6\",
    \"to-arraybuffer\": \"^1.0.0\",
    \"xtend\": \"^4.0.0\"
  },
  \"devDependencies\": {
    \"basic-auth\": \"^1.0.3\",
    \"brfs\": \"^1.4.0\",
    \"cookie-parser\": \"^1.4.3\",
    \"express\": \"^4.15.2\",
    \"tape\": \"^4.0.0\",
    \"ua-parser-js\": \"^0.7.7\",
    \"webworkify\": \"^1.0.2\",
    \"zuul\": \"^3.10.3\"
  }
}
", "node_modules/stream-http/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/package.json");
    }
}
