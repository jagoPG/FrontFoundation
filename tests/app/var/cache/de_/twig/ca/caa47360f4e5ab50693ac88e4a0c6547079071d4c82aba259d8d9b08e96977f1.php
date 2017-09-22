<?php

/* node_modules/querystring/package.json */
class __TwigTemplate_2e3aae011cb52dcf7428a469626b3c093ea89df038060fbe2bec4f90f17a0706 extends Twig_Template
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
        $__internal_e7e7bbba6640c63ca7a89e1730c74396367d784fe4b5a13fce209611794f2305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e7bbba6640c63ca7a89e1730c74396367d784fe4b5a13fce209611794f2305->enter($__internal_e7e7bbba6640c63ca7a89e1730c74396367d784fe4b5a13fce209611794f2305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/querystring/package.json"));

        // line 1
        echo "{
  \"name\": \"querystring\",
  \"id\": \"querystring\",
  \"version\": \"0.2.0\",
  \"description\": \"Node's querystring module for all engines.\",
  \"keywords\": [ \"commonjs\", \"query\", \"querystring\" ],
  \"author\": \"Irakli Gozalishvili <rfobic@gmail.com>\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/Gozala/querystring.git\",
    \"web\": \"https://github.com/Gozala/querystring\"
  },
  \"bugs\": {
    \"url\": \"http://github.com/Gozala/querystring/issues/\"
  },
  \"devDependencies\": {
    \"test\": \"~0.x.0\",
    \"phantomify\": \"~0.x.0\",
    \"retape\": \"~0.x.0\",
    \"tape\": \"~0.1.5\"
  },
  \"engines\": {
    \"node\": \">=0.4.x\"
  },
  \"scripts\": {
    \"test\": \"npm run test-node && npm run test-browser && npm run test-tap\",
    \"test-browser\": \"node ./node_modules/phantomify/bin/cmd.js ./test/common-index.js\",
    \"test-node\": \"node ./test/common-index.js\",
    \"test-tap\": \"node ./test/tap-index.js\"
  },
  \"testling\": {
    \"files\": \"test/tap-index.js\",
    \"browsers\": {
      \"iexplore\": [
        9,
        10
      ],
      \"chrome\": [
        16,
        20,
        25,
        \"canary\"
      ],
      \"firefox\": [
        10,
        15,
        16,
        17,
        18,
        \"nightly\"
      ],
      \"safari\": [
        5,
        6
      ],
      \"opera\": [
        12
      ]
    }
  },
  \"licenses\": [{
    \"type\" : \"MIT\",
    \"url\" : \"https://github.com/Gozala/enchain/License.md\"
  }]
}
";
        
        $__internal_e7e7bbba6640c63ca7a89e1730c74396367d784fe4b5a13fce209611794f2305->leave($__internal_e7e7bbba6640c63ca7a89e1730c74396367d784fe4b5a13fce209611794f2305_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/querystring/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"querystring\",
  \"id\": \"querystring\",
  \"version\": \"0.2.0\",
  \"description\": \"Node's querystring module for all engines.\",
  \"keywords\": [ \"commonjs\", \"query\", \"querystring\" ],
  \"author\": \"Irakli Gozalishvili <rfobic@gmail.com>\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/Gozala/querystring.git\",
    \"web\": \"https://github.com/Gozala/querystring\"
  },
  \"bugs\": {
    \"url\": \"http://github.com/Gozala/querystring/issues/\"
  },
  \"devDependencies\": {
    \"test\": \"~0.x.0\",
    \"phantomify\": \"~0.x.0\",
    \"retape\": \"~0.x.0\",
    \"tape\": \"~0.1.5\"
  },
  \"engines\": {
    \"node\": \">=0.4.x\"
  },
  \"scripts\": {
    \"test\": \"npm run test-node && npm run test-browser && npm run test-tap\",
    \"test-browser\": \"node ./node_modules/phantomify/bin/cmd.js ./test/common-index.js\",
    \"test-node\": \"node ./test/common-index.js\",
    \"test-tap\": \"node ./test/tap-index.js\"
  },
  \"testling\": {
    \"files\": \"test/tap-index.js\",
    \"browsers\": {
      \"iexplore\": [
        9,
        10
      ],
      \"chrome\": [
        16,
        20,
        25,
        \"canary\"
      ],
      \"firefox\": [
        10,
        15,
        16,
        17,
        18,
        \"nightly\"
      ],
      \"safari\": [
        5,
        6
      ],
      \"opera\": [
        12
      ]
    }
  },
  \"licenses\": [{
    \"type\" : \"MIT\",
    \"url\" : \"https://github.com/Gozala/enchain/License.md\"
  }]
}
", "node_modules/querystring/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/querystring/package.json");
    }
}
