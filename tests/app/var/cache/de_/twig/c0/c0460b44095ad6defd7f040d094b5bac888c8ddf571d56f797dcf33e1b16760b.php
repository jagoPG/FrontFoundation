<?php

/* node_modules/co/package.json */
class __TwigTemplate_4e45671b294406cf5b986c7c99af2be9183620615bd8746fb354a1d80725bde3 extends Twig_Template
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
        $__internal_3789d285120ef3602b7c46066a282b7cbd1bdd5f580bd8f9789f6d07dcfc2e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3789d285120ef3602b7c46066a282b7cbd1bdd5f580bd8f9789f6d07dcfc2e45->enter($__internal_3789d285120ef3602b7c46066a282b7cbd1bdd5f580bd8f9789f6d07dcfc2e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/co/package.json"));

        // line 1
        echo "{
  \"name\": \"co\",
  \"version\": \"4.6.0\",
  \"description\": \"generator async control flow goodness\",
  \"keywords\": [
    \"async\",
    \"flow\",
    \"generator\",
    \"coro\",
    \"coroutine\"
  ],
  \"devDependencies\": {
    \"browserify\": \"^10.0.0\",
    \"istanbul-harmony\": \"0\",
    \"mocha\": \"^2.0.0\",
    \"mz\": \"^1.0.2\"
  },
  \"scripts\": {
    \"test\": \"mocha --harmony\",
    \"test-cov\": \"node --harmony node_modules/.bin/istanbul cover ./node_modules/.bin/_mocha -- --reporter dot\",
    \"test-travis\": \"node --harmony node_modules/.bin/istanbul cover ./node_modules/.bin/_mocha --report lcovonly -- --reporter dot\",
    \"prepublish\": \"npm run browserify\",
    \"browserify\": \"browserify index.js -o ./co-browser.js -s co\"
  },
  \"files\": [
    \"index.js\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"tj/co\",
  \"engines\": {
    \"iojs\": \">= 1.0.0\",
    \"node\": \">= 0.12.0\"
  }
}
";
        
        $__internal_3789d285120ef3602b7c46066a282b7cbd1bdd5f580bd8f9789f6d07dcfc2e45->leave($__internal_3789d285120ef3602b7c46066a282b7cbd1bdd5f580bd8f9789f6d07dcfc2e45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/co/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"co\",
  \"version\": \"4.6.0\",
  \"description\": \"generator async control flow goodness\",
  \"keywords\": [
    \"async\",
    \"flow\",
    \"generator\",
    \"coro\",
    \"coroutine\"
  ],
  \"devDependencies\": {
    \"browserify\": \"^10.0.0\",
    \"istanbul-harmony\": \"0\",
    \"mocha\": \"^2.0.0\",
    \"mz\": \"^1.0.2\"
  },
  \"scripts\": {
    \"test\": \"mocha --harmony\",
    \"test-cov\": \"node --harmony node_modules/.bin/istanbul cover ./node_modules/.bin/_mocha -- --reporter dot\",
    \"test-travis\": \"node --harmony node_modules/.bin/istanbul cover ./node_modules/.bin/_mocha --report lcovonly -- --reporter dot\",
    \"prepublish\": \"npm run browserify\",
    \"browserify\": \"browserify index.js -o ./co-browser.js -s co\"
  },
  \"files\": [
    \"index.js\"
  ],
  \"license\": \"MIT\",
  \"repository\": \"tj/co\",
  \"engines\": {
    \"iojs\": \">= 1.0.0\",
    \"node\": \">= 0.12.0\"
  }
}
", "node_modules/co/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/co/package.json");
    }
}
