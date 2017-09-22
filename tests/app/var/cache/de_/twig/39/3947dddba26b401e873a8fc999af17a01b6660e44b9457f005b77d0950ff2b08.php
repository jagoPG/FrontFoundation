<?php

/* node_modules/fsevents/node_modules/readable-stream/package.json */
class __TwigTemplate_d78eef104d99b2f5bc1eb57d32381b0210fd8dbe8646c44013567b0281d651c5 extends Twig_Template
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
        $__internal_97fcc414c4e29c5b1767613715ff080e3cb594f9c790b57416a40955a5c6faf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fcc414c4e29c5b1767613715ff080e3cb594f9c790b57416a40955a5c6faf7->enter($__internal_97fcc414c4e29c5b1767613715ff080e3cb594f9c790b57416a40955a5c6faf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/readable-stream/package.json"));

        // line 1
        echo "{
  \"_args\": [
    [
      \"readable-stream@2.2.9\",
      \"/Users/eshanker/Code/fsevents\"
    ]
  ],
  \"_from\": \"readable-stream@2.2.9\",
  \"_id\": \"readable-stream@2.2.9\",
  \"_inBundle\": false,
  \"_integrity\": \"sha1-z3jsb0ptHrQ9JkiMrJfwQudLf8g=\",
  \"_location\": \"/readable-stream\",
  \"_phantomChildren\": {},
  \"_requested\": {
    \"type\": \"version\",
    \"registry\": true,
    \"raw\": \"readable-stream@2.2.9\",
    \"name\": \"readable-stream\",
    \"escapedName\": \"readable-stream\",
    \"rawSpec\": \"2.2.9\",
    \"saveSpec\": null,
    \"fetchSpec\": \"2.2.9\"
  },
  \"_requiredBy\": [],
  \"_resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.2.9.tgz\",
  \"_spec\": \"2.2.9\",
  \"_where\": \"/Users/eshanker/Code/fsevents\",
  \"browser\": {
    \"util\": false,
    \"./readable.js\": \"./readable-browser.js\",
    \"./writable.js\": \"./writable-browser.js\",
    \"./duplex.js\": \"./duplex-browser.js\",
    \"./lib/internal/streams/stream.js\": \"./lib/internal/streams/stream-browser.js\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/nodejs/readable-stream/issues\"
  },
  \"dependencies\": {
    \"buffer-shims\": \"~1.0.0\",
    \"core-util-is\": \"~1.0.0\",
    \"inherits\": \"~2.0.1\",
    \"isarray\": \"~1.0.0\",
    \"process-nextick-args\": \"~1.0.6\",
    \"string_decoder\": \"~1.0.0\",
    \"util-deprecate\": \"~1.0.1\"
  },
  \"description\": \"Streams3, a user-land copy of the stream library from Node.js\",
  \"devDependencies\": {
    \"assert\": \"~1.4.0\",
    \"babel-polyfill\": \"^6.9.1\",
    \"buffer\": \"^4.9.0\",
    \"nyc\": \"^6.4.0\",
    \"tap\": \"~0.7.1\",
    \"tape\": \"~4.5.1\",
    \"zuul\": \"~3.10.0\"
  },
  \"homepage\": \"https://github.com/nodejs/readable-stream#readme\",
  \"keywords\": [
    \"readable\",
    \"stream\",
    \"pipe\"
  ],
  \"license\": \"MIT\",
  \"main\": \"readable.js\",
  \"name\": \"readable-stream\",
  \"nyc\": {
    \"include\": [
      \"lib/**.js\"
    ]
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/nodejs/readable-stream.git\"
  },
  \"scripts\": {
    \"browser\": \"npm run write-zuul && zuul --browser-retries 2 -- test/browser.js\",
    \"cover\": \"nyc npm test\",
    \"local\": \"zuul --local 3000 --no-coverage -- test/browser.js\",
    \"report\": \"nyc report --reporter=lcov\",
    \"test\": \"tap test/parallel/*.js test/ours/*.js\",
    \"write-zuul\": \"printf \\\"ui: tape\\nbrowsers:\\n  - name: \$BROWSER_NAME\\n    version: \$BROWSER_VERSION\\n\\\">.zuul.yml\"
  },
  \"version\": \"2.2.9\"
}
";
        
        $__internal_97fcc414c4e29c5b1767613715ff080e3cb594f9c790b57416a40955a5c6faf7->leave($__internal_97fcc414c4e29c5b1767613715ff080e3cb594f9c790b57416a40955a5c6faf7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/readable-stream/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"_args\": [
    [
      \"readable-stream@2.2.9\",
      \"/Users/eshanker/Code/fsevents\"
    ]
  ],
  \"_from\": \"readable-stream@2.2.9\",
  \"_id\": \"readable-stream@2.2.9\",
  \"_inBundle\": false,
  \"_integrity\": \"sha1-z3jsb0ptHrQ9JkiMrJfwQudLf8g=\",
  \"_location\": \"/readable-stream\",
  \"_phantomChildren\": {},
  \"_requested\": {
    \"type\": \"version\",
    \"registry\": true,
    \"raw\": \"readable-stream@2.2.9\",
    \"name\": \"readable-stream\",
    \"escapedName\": \"readable-stream\",
    \"rawSpec\": \"2.2.9\",
    \"saveSpec\": null,
    \"fetchSpec\": \"2.2.9\"
  },
  \"_requiredBy\": [],
  \"_resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.2.9.tgz\",
  \"_spec\": \"2.2.9\",
  \"_where\": \"/Users/eshanker/Code/fsevents\",
  \"browser\": {
    \"util\": false,
    \"./readable.js\": \"./readable-browser.js\",
    \"./writable.js\": \"./writable-browser.js\",
    \"./duplex.js\": \"./duplex-browser.js\",
    \"./lib/internal/streams/stream.js\": \"./lib/internal/streams/stream-browser.js\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/nodejs/readable-stream/issues\"
  },
  \"dependencies\": {
    \"buffer-shims\": \"~1.0.0\",
    \"core-util-is\": \"~1.0.0\",
    \"inherits\": \"~2.0.1\",
    \"isarray\": \"~1.0.0\",
    \"process-nextick-args\": \"~1.0.6\",
    \"string_decoder\": \"~1.0.0\",
    \"util-deprecate\": \"~1.0.1\"
  },
  \"description\": \"Streams3, a user-land copy of the stream library from Node.js\",
  \"devDependencies\": {
    \"assert\": \"~1.4.0\",
    \"babel-polyfill\": \"^6.9.1\",
    \"buffer\": \"^4.9.0\",
    \"nyc\": \"^6.4.0\",
    \"tap\": \"~0.7.1\",
    \"tape\": \"~4.5.1\",
    \"zuul\": \"~3.10.0\"
  },
  \"homepage\": \"https://github.com/nodejs/readable-stream#readme\",
  \"keywords\": [
    \"readable\",
    \"stream\",
    \"pipe\"
  ],
  \"license\": \"MIT\",
  \"main\": \"readable.js\",
  \"name\": \"readable-stream\",
  \"nyc\": {
    \"include\": [
      \"lib/**.js\"
    ]
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/nodejs/readable-stream.git\"
  },
  \"scripts\": {
    \"browser\": \"npm run write-zuul && zuul --browser-retries 2 -- test/browser.js\",
    \"cover\": \"nyc npm test\",
    \"local\": \"zuul --local 3000 --no-coverage -- test/browser.js\",
    \"report\": \"nyc report --reporter=lcov\",
    \"test\": \"tap test/parallel/*.js test/ours/*.js\",
    \"write-zuul\": \"printf \\\"ui: tape\\nbrowsers:\\n  - name: \$BROWSER_NAME\\n    version: \$BROWSER_VERSION\\n\\\">.zuul.yml\"
  },
  \"version\": \"2.2.9\"
}
", "node_modules/fsevents/node_modules/readable-stream/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/readable-stream/package.json");
    }
}
