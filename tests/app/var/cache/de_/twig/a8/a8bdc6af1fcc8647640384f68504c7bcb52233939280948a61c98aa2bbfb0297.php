<?php

/* node_modules/unpipe/package.json */
class __TwigTemplate_f2299d2fd492821cac59152c102743dd43b8b147316a3964b7077ddecdcc6f5e extends Twig_Template
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
        $__internal_907be88b3bfbc05c2fe26820731954b06bba5467a2becb41fdde10532b8a4a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907be88b3bfbc05c2fe26820731954b06bba5467a2becb41fdde10532b8a4a8c->enter($__internal_907be88b3bfbc05c2fe26820731954b06bba5467a2becb41fdde10532b8a4a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/unpipe/package.json"));

        // line 1
        echo "{
  \"name\": \"unpipe\",
  \"description\": \"Unpipe a stream from all destinations\",
  \"version\": \"1.0.0\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"repository\": \"stream-utils/unpipe\",
  \"devDependencies\": {
    \"istanbul\": \"0.3.15\",
    \"mocha\": \"2.2.5\",
    \"readable-stream\": \"1.1.13\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
";
        
        $__internal_907be88b3bfbc05c2fe26820731954b06bba5467a2becb41fdde10532b8a4a8c->leave($__internal_907be88b3bfbc05c2fe26820731954b06bba5467a2becb41fdde10532b8a4a8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/unpipe/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"unpipe\",
  \"description\": \"Unpipe a stream from all destinations\",
  \"version\": \"1.0.0\",
  \"author\": \"Douglas Christopher Wilson <doug@somethingdoug.com>\",
  \"license\": \"MIT\",
  \"repository\": \"stream-utils/unpipe\",
  \"devDependencies\": {
    \"istanbul\": \"0.3.15\",
    \"mocha\": \"2.2.5\",
    \"readable-stream\": \"1.1.13\"
  },
  \"files\": [
    \"HISTORY.md\",
    \"LICENSE\",
    \"README.md\",
    \"index.js\"
  ],
  \"engines\": {
    \"node\": \">= 0.8\"
  },
  \"scripts\": {
    \"test\": \"mocha --reporter spec --bail --check-leaks test/\",
    \"test-cov\": \"istanbul cover node_modules/mocha/bin/_mocha -- --reporter dot --check-leaks test/\",
    \"test-travis\": \"istanbul cover node_modules/mocha/bin/_mocha --report lcovonly -- --reporter spec --check-leaks test/\"
  }
}
", "node_modules/unpipe/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/unpipe/package.json");
    }
}
