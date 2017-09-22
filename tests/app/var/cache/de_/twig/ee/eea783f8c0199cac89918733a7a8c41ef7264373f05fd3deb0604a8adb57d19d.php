<?php

/* node_modules/qs/package.json */
class __TwigTemplate_479b6f1b03384ac7132ce6434c686ccb035e52968482dd33ba44efbb69082264 extends Twig_Template
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
        $__internal_4b4e0d5db3ff14679634e917e30277db53a456d73f1324ec60460c658254425a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4e0d5db3ff14679634e917e30277db53a456d73f1324ec60460c658254425a->enter($__internal_4b4e0d5db3ff14679634e917e30277db53a456d73f1324ec60460c658254425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/qs/package.json"));

        // line 1
        echo "{
    \"name\": \"qs\",
    \"description\": \"A querystring parser that supports nesting and arrays, with a depth limit\",
    \"homepage\": \"https://github.com/ljharb/qs\",
    \"version\": \"6.5.0\",
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
        \"browserify\": \"^14.4.0\",
        \"covert\": \"^1.1.0\",
        \"editorconfig-tools\": \"^0.1.1\",
        \"eslint\": \"^3.19.0\",
        \"evalmd\": \"^0.0.17\",
        \"iconv-lite\": \"^0.4.18\",
        \"mkdirp\": \"^0.5.1\",
        \"qs-iconv\": \"^1.0.4\",
        \"safe-publish-latest\": \"^1.1.1\",
        \"tape\": \"^4.7.0\"
    },
    \"scripts\": {
        \"prepublish\": \"safe-publish-latest && npm run dist\",
        \"pretest\": \"npm run --silent readme && npm run --silent lint\",
        \"test\": \"npm run --silent coverage\",
        \"tests-only\": \"node test\",
        \"readme\": \"evalmd README.md\",
        \"prelint\": \"editorconfig-tools check * lib/* test/*\",
        \"lint\": \"eslint lib/*.js test/*.js\",
        \"coverage\": \"covert test\",
        \"dist\": \"mkdirp dist && browserify --standalone Qs lib/index.js > dist/qs.js\"
    },
    \"license\": \"BSD-3-Clause\"
}
";
        
        $__internal_4b4e0d5db3ff14679634e917e30277db53a456d73f1324ec60460c658254425a->leave($__internal_4b4e0d5db3ff14679634e917e30277db53a456d73f1324ec60460c658254425a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/qs/package.json";
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
    \"version\": \"6.5.0\",
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
        \"browserify\": \"^14.4.0\",
        \"covert\": \"^1.1.0\",
        \"editorconfig-tools\": \"^0.1.1\",
        \"eslint\": \"^3.19.0\",
        \"evalmd\": \"^0.0.17\",
        \"iconv-lite\": \"^0.4.18\",
        \"mkdirp\": \"^0.5.1\",
        \"qs-iconv\": \"^1.0.4\",
        \"safe-publish-latest\": \"^1.1.1\",
        \"tape\": \"^4.7.0\"
    },
    \"scripts\": {
        \"prepublish\": \"safe-publish-latest && npm run dist\",
        \"pretest\": \"npm run --silent readme && npm run --silent lint\",
        \"test\": \"npm run --silent coverage\",
        \"tests-only\": \"node test\",
        \"readme\": \"evalmd README.md\",
        \"prelint\": \"editorconfig-tools check * lib/* test/*\",
        \"lint\": \"eslint lib/*.js test/*.js\",
        \"coverage\": \"covert test\",
        \"dist\": \"mkdirp dist && browserify --standalone Qs lib/index.js > dist/qs.js\"
    },
    \"license\": \"BSD-3-Clause\"
}
", "node_modules/qs/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/qs/package.json");
    }
}
