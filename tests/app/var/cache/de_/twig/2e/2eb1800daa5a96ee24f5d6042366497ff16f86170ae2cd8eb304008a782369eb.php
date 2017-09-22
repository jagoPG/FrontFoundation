<?php

/* node_modules/readdirp/package.json */
class __TwigTemplate_a8ef8cfe2e35f79eee36dbf109f7cc28683a3bd0c8055094c5cf5e41d471806a extends Twig_Template
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
        $__internal_faf0b21701b2bde6e9b6a4d5d7110c3a5ff563f74ba9681a86c8f3cbcf47b1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf0b21701b2bde6e9b6a4d5d7110c3a5ff563f74ba9681a86c8f3cbcf47b1e2->enter($__internal_faf0b21701b2bde6e9b6a4d5d7110c3a5ff563f74ba9681a86c8f3cbcf47b1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readdirp/package.json"));

        // line 1
        echo "{
  \"author\": \"Thorsten Lorenz <thlorenz@gmx.de> (thlorenz.com)\",
  \"name\": \"readdirp\",
  \"description\": \"Recursive version of fs.readdir with streaming api.\",
  \"version\": \"2.1.0\",
  \"homepage\": \"https://github.com/thlorenz/readdirp\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/thlorenz/readdirp.git\"
  },
  \"engines\": {
    \"node\": \">=0.6\"
  },
  \"keywords\": [
    \"recursive\",
    \"fs\",
    \"stream\",
    \"streams\",
    \"readdir\",
    \"filesystem\",
    \"find\",
    \"filter\"
  ],
  \"main\": \"readdirp.js\",
  \"scripts\": {
    \"test-main\": \"(cd test && set -e; for t in ./*.js; do node \$t; done)\",
    \"test-0.10\": \"nave use 0.10 npm run test-main\",
    \"test-0.12\": \"nave use 0.12 npm run test-main\",
    \"test-4\": \"nave use 4.4 npm run test-main\",
    \"test-6\": \"nave use 6.2 npm run test-main\",
    \"test-all\": \"npm run test-main && npm run test-0.10 && npm run test-0.12 && npm run test-4 && npm run test-6\",
    \"test\": \"if [ -e \$TRAVIS ]; then npm run test-all; else npm run test-main; fi\"
  },
  \"dependencies\": {
    \"graceful-fs\": \"^4.1.2\",
    \"minimatch\": \"^3.0.2\",
    \"readable-stream\": \"^2.0.2\",
    \"set-immediate-shim\": \"^1.0.1\"
  },
  \"devDependencies\": {
    \"nave\": \"^0.5.1\",
    \"proxyquire\": \"^1.7.9\",
    \"tap\": \"1.3.2\",
    \"through2\": \"^2.0.0\"
  },
  \"license\": \"MIT\"
}
";
        
        $__internal_faf0b21701b2bde6e9b6a4d5d7110c3a5ff563f74ba9681a86c8f3cbcf47b1e2->leave($__internal_faf0b21701b2bde6e9b6a4d5d7110c3a5ff563f74ba9681a86c8f3cbcf47b1e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readdirp/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"author\": \"Thorsten Lorenz <thlorenz@gmx.de> (thlorenz.com)\",
  \"name\": \"readdirp\",
  \"description\": \"Recursive version of fs.readdir with streaming api.\",
  \"version\": \"2.1.0\",
  \"homepage\": \"https://github.com/thlorenz/readdirp\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/thlorenz/readdirp.git\"
  },
  \"engines\": {
    \"node\": \">=0.6\"
  },
  \"keywords\": [
    \"recursive\",
    \"fs\",
    \"stream\",
    \"streams\",
    \"readdir\",
    \"filesystem\",
    \"find\",
    \"filter\"
  ],
  \"main\": \"readdirp.js\",
  \"scripts\": {
    \"test-main\": \"(cd test && set -e; for t in ./*.js; do node \$t; done)\",
    \"test-0.10\": \"nave use 0.10 npm run test-main\",
    \"test-0.12\": \"nave use 0.12 npm run test-main\",
    \"test-4\": \"nave use 4.4 npm run test-main\",
    \"test-6\": \"nave use 6.2 npm run test-main\",
    \"test-all\": \"npm run test-main && npm run test-0.10 && npm run test-0.12 && npm run test-4 && npm run test-6\",
    \"test\": \"if [ -e \$TRAVIS ]; then npm run test-all; else npm run test-main; fi\"
  },
  \"dependencies\": {
    \"graceful-fs\": \"^4.1.2\",
    \"minimatch\": \"^3.0.2\",
    \"readable-stream\": \"^2.0.2\",
    \"set-immediate-shim\": \"^1.0.1\"
  },
  \"devDependencies\": {
    \"nave\": \"^0.5.1\",
    \"proxyquire\": \"^1.7.9\",
    \"tap\": \"1.3.2\",
    \"through2\": \"^2.0.0\"
  },
  \"license\": \"MIT\"
}
", "node_modules/readdirp/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readdirp/package.json");
    }
}
