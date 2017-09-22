<?php

/* node_modules/request/node_modules/qs/package.json */
class __TwigTemplate_33b1481455fb8159e16a33b8c0f91632c5741e5736a4954689675fe3315cacd5 extends Twig_Template
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
        $__internal_d4ffef57d4bd1d5b5ee0a71635eff3a15db33ef1aa876e9c7bf061d1086595c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ffef57d4bd1d5b5ee0a71635eff3a15db33ef1aa876e9c7bf061d1086595c5->enter($__internal_d4ffef57d4bd1d5b5ee0a71635eff3a15db33ef1aa876e9c7bf061d1086595c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/request/node_modules/qs/package.json"));

        // line 1
        echo "{
  \"name\": \"qs\",
  \"description\": \"A querystring parser that supports nesting and arrays, with a depth limit\",
  \"homepage\": \"https://github.com/ljharb/qs\",
  \"version\": \"6.4.0\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/ljharb/qs.git\"
  },
  \"main\": \"lib/index.js\",
  \"contributors\": [
    {
      \"name\": \"Jordan Harband\",
      \"email\": \"ljharb@gmail.com\",
      \"url\": \"http://ljharb.codes\"
    }
  ],
  \"keywords\": [
    \"querystring\",
    \"qs\"
  ],
  \"engines\": {
    \"node\": \">=0.6\"
  },
  \"dependencies\": {},
  \"devDependencies\": {
    \"@ljharb/eslint-config\": \"^11.0.0\",
    \"browserify\": \"^14.1.0\",
    \"covert\": \"^1.1.0\",
    \"eslint\": \"^3.17.0\",
    \"evalmd\": \"^0.0.17\",
    \"iconv-lite\": \"^0.4.15\",
    \"mkdirp\": \"^0.5.1\",
    \"parallelshell\": \"^2.0.0\",
    \"qs-iconv\": \"^1.0.4\",
    \"safe-publish-latest\": \"^1.1.1\",
    \"tape\": \"^4.6.3\"
  },
  \"scripts\": {
    \"prepublish\": \"safe-publish-latest && npm run dist\",
    \"pretest\": \"npm run --silent readme && npm run --silent lint\",
    \"test\": \"npm run --silent coverage\",
    \"tests-only\": \"node test\",
    \"readme\": \"evalmd README.md\",
    \"lint\": \"eslint lib/*.js test/*.js\",
    \"coverage\": \"covert test\",
    \"dist\": \"mkdirp dist && browserify --standalone Qs lib/index.js > dist/qs.js\"
  },
  \"license\": \"BSD-3-Clause\"
}
";
        
        $__internal_d4ffef57d4bd1d5b5ee0a71635eff3a15db33ef1aa876e9c7bf061d1086595c5->leave($__internal_d4ffef57d4bd1d5b5ee0a71635eff3a15db33ef1aa876e9c7bf061d1086595c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/request/node_modules/qs/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"qs\",
  \"description\": \"A querystring parser that supports nesting and arrays, with a depth limit\",
  \"homepage\": \"https://github.com/ljharb/qs\",
  \"version\": \"6.4.0\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/ljharb/qs.git\"
  },
  \"main\": \"lib/index.js\",
  \"contributors\": [
    {
      \"name\": \"Jordan Harband\",
      \"email\": \"ljharb@gmail.com\",
      \"url\": \"http://ljharb.codes\"
    }
  ],
  \"keywords\": [
    \"querystring\",
    \"qs\"
  ],
  \"engines\": {
    \"node\": \">=0.6\"
  },
  \"dependencies\": {},
  \"devDependencies\": {
    \"@ljharb/eslint-config\": \"^11.0.0\",
    \"browserify\": \"^14.1.0\",
    \"covert\": \"^1.1.0\",
    \"eslint\": \"^3.17.0\",
    \"evalmd\": \"^0.0.17\",
    \"iconv-lite\": \"^0.4.15\",
    \"mkdirp\": \"^0.5.1\",
    \"parallelshell\": \"^2.0.0\",
    \"qs-iconv\": \"^1.0.4\",
    \"safe-publish-latest\": \"^1.1.1\",
    \"tape\": \"^4.6.3\"
  },
  \"scripts\": {
    \"prepublish\": \"safe-publish-latest && npm run dist\",
    \"pretest\": \"npm run --silent readme && npm run --silent lint\",
    \"test\": \"npm run --silent coverage\",
    \"tests-only\": \"node test\",
    \"readme\": \"evalmd README.md\",
    \"lint\": \"eslint lib/*.js test/*.js\",
    \"coverage\": \"covert test\",
    \"dist\": \"mkdirp dist && browserify --standalone Qs lib/index.js > dist/qs.js\"
  },
  \"license\": \"BSD-3-Clause\"
}
", "node_modules/request/node_modules/qs/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/request/node_modules/qs/package.json");
    }
}
