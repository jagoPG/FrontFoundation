<?php

/* node_modules/buffer/package.json */
class __TwigTemplate_2dc9e4bddc68bdabfc3a559e38a245553ab296e64fb35e14442bbe3427b198dd extends Twig_Template
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
        $__internal_e14eb4befc2a358f25b82269f02c48aa95699af4742637caead1aad989d9d6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14eb4befc2a358f25b82269f02c48aa95699af4742637caead1aad989d9d6b7->enter($__internal_e14eb4befc2a358f25b82269f02c48aa95699af4742637caead1aad989d9d6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/package.json"));

        // line 1
        echo "{
  \"name\": \"buffer\",
  \"description\": \"Node.js Buffer API, for the browser\",
  \"version\": \"4.9.1\",
  \"author\": {
    \"name\": \"Feross Aboukhadijeh\",
    \"email\": \"feross@feross.org\",
    \"url\": \"http://feross.org\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/feross/buffer/issues\"
  },
  \"contributors\": [
    \"Romain Beauxis <toots@rastageeks.org>\",
    \"James Halliday <mail@substack.net>\"
  ],
  \"dependencies\": {
    \"base64-js\": \"^1.0.2\",
    \"ieee754\": \"^1.1.4\",
    \"isarray\": \"^1.0.0\"
  },
  \"devDependencies\": {
    \"benchmark\": \"^2.0.0\",
    \"browserify\": \"^13.0.0\",
    \"concat-stream\": \"^1.4.7\",
    \"hyperquest\": \"^2.0.0\",
    \"is-buffer\": \"^1.1.1\",
    \"is-nan\": \"^1.0.1\",
    \"split\": \"^1.0.0\",
    \"standard\": \"^7.0.0\",
    \"tape\": \"^4.0.0\",
    \"through2\": \"^2.0.0\",
    \"zuul\": \"^3.0.0\"
  },
  \"homepage\": \"https://github.com/feross/buffer\",
  \"jspm\": {
    \"map\": {
      \"./index.js\": {
        \"node\": \"@node/buffer\"
      }
    }
  },
  \"keywords\": [
    \"arraybuffer\",
    \"browser\",
    \"browserify\",
    \"buffer\",
    \"compatible\",
    \"dataview\",
    \"uint8array\"
  ],
  \"license\": \"MIT\",
  \"main\": \"index.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/feross/buffer.git\"
  },
  \"scripts\": {
    \"perf\": \"browserify --debug perf/bracket-notation.js > perf/bundle.js && open perf/index.html\",
    \"perf-node\": \"node perf/bracket-notation.js && node perf/concat.js && node perf/copy-big.js && node perf/copy.js && node perf/new-big.js && node perf/new.js && node perf/readDoubleBE.js && node perf/readFloatBE.js && node perf/readUInt32LE.js && node perf/slice.js && node perf/writeFloatBE.js\",
    \"size\": \"browserify -r ./ | uglifyjs -c -m | gzip | wc -c\",
    \"test\": \"standard && node ./bin/test.js\",
    \"test-browser-es5\": \"zuul --ui tape -- test/*.js\",
    \"test-browser-es5-local\": \"zuul --ui tape --local -- test/*.js\",
    \"test-browser-es6\": \"zuul --ui tape -- test/*.js test/node/*.js\",
    \"test-browser-es6-local\": \"zuul --ui tape --local -- test/*.js test/node/*.js\",
    \"test-node\": \"tape test/*.js test/node/*.js && OBJECT_IMPL=true tape test/*.js\",
    \"update-authors\": \"./bin/update-authors.sh\"
  },
  \"standard\": {
    \"ignore\": [
      \"test/node/*.js\",
      \"test/_polyfill.js\",
      \"perf/*.js\"
    ]
  }
}
";
        
        $__internal_e14eb4befc2a358f25b82269f02c48aa95699af4742637caead1aad989d9d6b7->leave($__internal_e14eb4befc2a358f25b82269f02c48aa95699af4742637caead1aad989d9d6b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"buffer\",
  \"description\": \"Node.js Buffer API, for the browser\",
  \"version\": \"4.9.1\",
  \"author\": {
    \"name\": \"Feross Aboukhadijeh\",
    \"email\": \"feross@feross.org\",
    \"url\": \"http://feross.org\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/feross/buffer/issues\"
  },
  \"contributors\": [
    \"Romain Beauxis <toots@rastageeks.org>\",
    \"James Halliday <mail@substack.net>\"
  ],
  \"dependencies\": {
    \"base64-js\": \"^1.0.2\",
    \"ieee754\": \"^1.1.4\",
    \"isarray\": \"^1.0.0\"
  },
  \"devDependencies\": {
    \"benchmark\": \"^2.0.0\",
    \"browserify\": \"^13.0.0\",
    \"concat-stream\": \"^1.4.7\",
    \"hyperquest\": \"^2.0.0\",
    \"is-buffer\": \"^1.1.1\",
    \"is-nan\": \"^1.0.1\",
    \"split\": \"^1.0.0\",
    \"standard\": \"^7.0.0\",
    \"tape\": \"^4.0.0\",
    \"through2\": \"^2.0.0\",
    \"zuul\": \"^3.0.0\"
  },
  \"homepage\": \"https://github.com/feross/buffer\",
  \"jspm\": {
    \"map\": {
      \"./index.js\": {
        \"node\": \"@node/buffer\"
      }
    }
  },
  \"keywords\": [
    \"arraybuffer\",
    \"browser\",
    \"browserify\",
    \"buffer\",
    \"compatible\",
    \"dataview\",
    \"uint8array\"
  ],
  \"license\": \"MIT\",
  \"main\": \"index.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/feross/buffer.git\"
  },
  \"scripts\": {
    \"perf\": \"browserify --debug perf/bracket-notation.js > perf/bundle.js && open perf/index.html\",
    \"perf-node\": \"node perf/bracket-notation.js && node perf/concat.js && node perf/copy-big.js && node perf/copy.js && node perf/new-big.js && node perf/new.js && node perf/readDoubleBE.js && node perf/readFloatBE.js && node perf/readUInt32LE.js && node perf/slice.js && node perf/writeFloatBE.js\",
    \"size\": \"browserify -r ./ | uglifyjs -c -m | gzip | wc -c\",
    \"test\": \"standard && node ./bin/test.js\",
    \"test-browser-es5\": \"zuul --ui tape -- test/*.js\",
    \"test-browser-es5-local\": \"zuul --ui tape --local -- test/*.js\",
    \"test-browser-es6\": \"zuul --ui tape -- test/*.js test/node/*.js\",
    \"test-browser-es6-local\": \"zuul --ui tape --local -- test/*.js test/node/*.js\",
    \"test-node\": \"tape test/*.js test/node/*.js && OBJECT_IMPL=true tape test/*.js\",
    \"update-authors\": \"./bin/update-authors.sh\"
  },
  \"standard\": {
    \"ignore\": [
      \"test/node/*.js\",
      \"test/_polyfill.js\",
      \"perf/*.js\"
    ]
  }
}
", "node_modules/buffer/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/package.json");
    }
}
