<?php

/* node_modules/readable-stream/package.json */
class __TwigTemplate_ba612bdbc5bf4d52207a7885fe057011a4a44622eb4dea9edf12753f82f741be extends Twig_Template
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
        $__internal_d727c09ac99ea8781b7ae15c134955627207ba335d8e9a18ca5a2baab7b3cd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d727c09ac99ea8781b7ae15c134955627207ba335d8e9a18ca5a2baab7b3cd98->enter($__internal_d727c09ac99ea8781b7ae15c134955627207ba335d8e9a18ca5a2baab7b3cd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readable-stream/package.json"));

        // line 1
        echo "{
  \"name\": \"readable-stream\",
  \"version\": \"2.3.3\",
  \"description\": \"Streams3, a user-land copy of the stream library from Node.js\",
  \"main\": \"readable.js\",
  \"dependencies\": {
    \"core-util-is\": \"~1.0.0\",
    \"inherits\": \"~2.0.3\",
    \"isarray\": \"~1.0.0\",
    \"process-nextick-args\": \"~1.0.6\",
    \"safe-buffer\": \"~5.1.1\",
    \"string_decoder\": \"~1.0.3\",
    \"util-deprecate\": \"~1.0.1\"
  },
  \"devDependencies\": {
    \"assert\": \"~1.4.0\",
    \"babel-polyfill\": \"^6.9.1\",
    \"buffer\": \"^4.9.0\",
    \"nyc\": \"^6.4.0\",
    \"tap\": \"~0.7.1\",
    \"tape\": \"~4.5.1\",
    \"zuul\": \"~3.10.0\"
  },
  \"scripts\": {
    \"test\": \"tap test/parallel/*.js test/ours/*.js && node test/verify-dependencies.js\",
    \"browser\": \"npm run write-zuul && zuul --browser-retries 2 -- test/browser.js\",
    \"write-zuul\": \"printf \\\"ui: tape\\nbrowsers:\\n  - name: \$BROWSER_NAME\\n    version: \$BROWSER_VERSION\\n\\\">.zuul.yml\",
    \"local\": \"zuul --local 3000 --no-coverage -- test/browser.js\",
    \"cover\": \"nyc npm test\",
    \"report\": \"nyc report --reporter=lcov\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/nodejs/readable-stream\"
  },
  \"keywords\": [
    \"readable\",
    \"stream\",
    \"pipe\"
  ],
  \"browser\": {
    \"util\": false,
    \"./readable.js\": \"./readable-browser.js\",
    \"./writable.js\": \"./writable-browser.js\",
    \"./duplex.js\": \"./duplex-browser.js\",
    \"./lib/internal/streams/stream.js\": \"./lib/internal/streams/stream-browser.js\"
  },
  \"nyc\": {
    \"include\": [
      \"lib/**.js\"
    ]
  },
  \"license\": \"MIT\"
}
";
        
        $__internal_d727c09ac99ea8781b7ae15c134955627207ba335d8e9a18ca5a2baab7b3cd98->leave($__internal_d727c09ac99ea8781b7ae15c134955627207ba335d8e9a18ca5a2baab7b3cd98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readable-stream/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"readable-stream\",
  \"version\": \"2.3.3\",
  \"description\": \"Streams3, a user-land copy of the stream library from Node.js\",
  \"main\": \"readable.js\",
  \"dependencies\": {
    \"core-util-is\": \"~1.0.0\",
    \"inherits\": \"~2.0.3\",
    \"isarray\": \"~1.0.0\",
    \"process-nextick-args\": \"~1.0.6\",
    \"safe-buffer\": \"~5.1.1\",
    \"string_decoder\": \"~1.0.3\",
    \"util-deprecate\": \"~1.0.1\"
  },
  \"devDependencies\": {
    \"assert\": \"~1.4.0\",
    \"babel-polyfill\": \"^6.9.1\",
    \"buffer\": \"^4.9.0\",
    \"nyc\": \"^6.4.0\",
    \"tap\": \"~0.7.1\",
    \"tape\": \"~4.5.1\",
    \"zuul\": \"~3.10.0\"
  },
  \"scripts\": {
    \"test\": \"tap test/parallel/*.js test/ours/*.js && node test/verify-dependencies.js\",
    \"browser\": \"npm run write-zuul && zuul --browser-retries 2 -- test/browser.js\",
    \"write-zuul\": \"printf \\\"ui: tape\\nbrowsers:\\n  - name: \$BROWSER_NAME\\n    version: \$BROWSER_VERSION\\n\\\">.zuul.yml\",
    \"local\": \"zuul --local 3000 --no-coverage -- test/browser.js\",
    \"cover\": \"nyc npm test\",
    \"report\": \"nyc report --reporter=lcov\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/nodejs/readable-stream\"
  },
  \"keywords\": [
    \"readable\",
    \"stream\",
    \"pipe\"
  ],
  \"browser\": {
    \"util\": false,
    \"./readable.js\": \"./readable-browser.js\",
    \"./writable.js\": \"./writable-browser.js\",
    \"./duplex.js\": \"./duplex-browser.js\",
    \"./lib/internal/streams/stream.js\": \"./lib/internal/streams/stream-browser.js\"
  },
  \"nyc\": {
    \"include\": [
      \"lib/**.js\"
    ]
  },
  \"license\": \"MIT\"
}
", "node_modules/readable-stream/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readable-stream/package.json");
    }
}
