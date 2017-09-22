<?php

/* node_modules/finalhandler/package.json */
class __TwigTemplate_6ca0e217cef4348d9f81b2363baed41a98a3e824447cb09c6461f3460b3c08a5 extends Twig_Template
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
        $__internal_6c6c66b7e4119d7c25b162f84fe98a255f64ebfdd9bdd74858ec19431033208c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6c66b7e4119d7c25b162f84fe98a255f64ebfdd9bdd74858ec19431033208c->enter($__internal_6c6c66b7e4119d7c25b162f84fe98a255f64ebfdd9bdd74858ec19431033208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/finalhandler/package.json"));

        // line 1
        echo "{
  \"name\": \"finalhandler\",
  \"description\": \"Node.js final http responder\",
  \"version\": \"1.0.4\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"repository\": \"pillarjs/finalhandler\",
  \"dependencies\": {
    \"debug\": \"2.6.8\",
    \"encodeurl\": \"~1.0.1\",
    \"escape-html\": \"~1.0.3\",
    \"on-finished\": \"~2.3.0\",
    \"parseurl\": \"~1.3.1\",
    \"statuses\": \"~1.3.1\",
    \"unpipe\": \"~1.0.0\"
  },
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.6\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"2.5.3\",
    \"readable-stream\": \"2.3.3\",
    \"safe-buffer\": \"5.1.1\",
    \"supertest\": \"1.1.0\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"scripts\": {
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
";
        
        $__internal_6c6c66b7e4119d7c25b162f84fe98a255f64ebfdd9bdd74858ec19431033208c->leave($__internal_6c6c66b7e4119d7c25b162f84fe98a255f64ebfdd9bdd74858ec19431033208c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/finalhandler/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"finalhandler\",
  \"description\": \"Node.js final http responder\",
  \"version\": \"1.0.4\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"repository\": \"pillarjs/finalhandler\",
  \"dependencies\": {
    \"debug\": \"2.6.8\",
    \"encodeurl\": \"~1.0.1\",
    \"escape-html\": \"~1.0.3\",
    \"on-finished\": \"~2.3.0\",
    \"parseurl\": \"~1.3.1\",
    \"statuses\": \"~1.3.1\",
    \"unpipe\": \"~1.0.0\"
  },
  \"devDependencies\": {
    \"eslint\": \"3.19.0\",
    \"eslint-config-standard\": \"10.2.1\",
    \"eslint-plugin-import\": \"2.7.0\",
    \"eslint-plugin-markdown\": \"1.0.0-beta.6\",
    \"eslint-plugin-node\": \"5.1.1\",
    \"eslint-plugin-promise\": \"3.5.0\",
    \"eslint-plugin-standard\": \"3.0.1\",
    \"istanbul\": \"0.4.5\",
    \"mocha\": \"2.5.3\",
    \"readable-stream\": \"2.3.3\",
    \"safe-buffer\": \"5.1.1\",
    \"supertest\": \"1.1.0\"
  },
  \"files\": [
    \"LICENSE\",
    \"HISTORY.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"scripts\": {
    \"lint\": \"eslint --plugin markdown --ext js,md .\",
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-ci\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\"
  }
}
", "node_modules/finalhandler/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/finalhandler/package.json");
    }
}
