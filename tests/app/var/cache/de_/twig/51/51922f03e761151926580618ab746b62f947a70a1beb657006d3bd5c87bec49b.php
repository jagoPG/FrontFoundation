<?php

/* node_modules/uglifyjs-webpack-plugin/package.json */
class __TwigTemplate_b2669e2c003a3fd96e809e7fb986c446d388778815a0cab17110146ee3ec8bbf extends Twig_Template
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
        $__internal_ab7bf588ac7d88fd10b9a40c63de0b8b279dac59faf0a65ce5353abf112c77ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7bf588ac7d88fd10b9a40c63de0b8b279dac59faf0a65ce5353abf112c77ff->enter($__internal_ab7bf588ac7d88fd10b9a40c63de0b8b279dac59faf0a65ce5353abf112c77ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglifyjs-webpack-plugin/package.json"));

        // line 1
        echo "{
  \"name\": \"uglifyjs-webpack-plugin\",
  \"version\": \"0.4.6\",
  \"description\": \"UglifyJS plugin for webpack\",
  \"main\": \"./dist\",
  \"scripts\": {
    \"build\": \"babel src -d dist\",
    \"test:all\": \"npm run test:coverage && npm run test:lint\",
    \"test\": \"jest --\",
    \"test:coverage\": \"jest --coverage --\",
    \"test:watch\": \"jest --watch --\",
    \"test:lint\": \"eslint . --ext .js --ignore-path .gitignore --cache\",
    \"preversion\": \"npm run test:all && npm run build && git commit --allow-empty -am \\\"Update dist\\\"\",
    \"postinstall\": \"node lib/post_install.js\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/webpack-contrib/uglifyjs-webpack-plugin.git\"
  },
  \"keywords\": [
    \"webpack\",
    \"uglifyjs\",
    \"plugin\"
  ],
  \"files\": [
    \"dist\",
    \"lib\"
  ],
  \"jest\": {
    \"collectCoverage\": true,
    \"moduleFileExtensions\": [
      \"js\"
    ],
    \"moduleDirectories\": [
      \"node_modules\"
    ]
  },
  \"author\": \"\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/webpack-contrib/uglifyjs-webpack-plugin/issues\"
  },
  \"homepage\": \"https://github.com/webpack-contrib/uglifyjs-webpack-plugin\",
  \"peerDependencies\": {
    \"webpack\": \"^1.9 || ^2 || ^2.1.0-beta || ^2.2.0-rc || ^3.0.0\"
  },
  \"dependencies\": {
    \"source-map\": \"^0.5.6\",
    \"uglify-js\": \"^2.8.29\",
    \"webpack-sources\": \"^1.0.1\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.18.0\",
    \"babel-core\": \"^6.21.0\",
    \"babel-eslint\": \"^7.1.1\",
    \"babel-jest\": \"^18.0.0\",
    \"babel-plugin-syntax-object-rest-spread\": \"^6.13.0\",
    \"babel-plugin-transform-object-rest-spread\": \"^6.20.2\",
    \"babel-preset-es2015\": \"^6.18.0\",
    \"eslint\": \"^3.13.1\",
    \"eslint-config-airbnb\": \"^14.0.0\",
    \"eslint-plugin-import\": \"^2.2.0\",
    \"eslint-plugin-jsx-a11y\": \"^3.0.2\",
    \"eslint-plugin-node\": \"^4.0.1\",
    \"eslint-plugin-react\": \"^6.9.0\",
    \"git-prepush-hook\": \"^1.0.1\",
    \"jest\": \"^18.1.0\",
    \"sync-exec\": \"^0.6.2\",
    \"webpack\": \"^2.2.0\"
  },
  \"engines\": {
    \"node\": \">=4.3.0 <5.0.0 || >=5.10\"
  },
  \"pre-push\": [
    \"test:all\"
  ]
}
";
        
        $__internal_ab7bf588ac7d88fd10b9a40c63de0b8b279dac59faf0a65ce5353abf112c77ff->leave($__internal_ab7bf588ac7d88fd10b9a40c63de0b8b279dac59faf0a65ce5353abf112c77ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglifyjs-webpack-plugin/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"uglifyjs-webpack-plugin\",
  \"version\": \"0.4.6\",
  \"description\": \"UglifyJS plugin for webpack\",
  \"main\": \"./dist\",
  \"scripts\": {
    \"build\": \"babel src -d dist\",
    \"test:all\": \"npm run test:coverage && npm run test:lint\",
    \"test\": \"jest --\",
    \"test:coverage\": \"jest --coverage --\",
    \"test:watch\": \"jest --watch --\",
    \"test:lint\": \"eslint . --ext .js --ignore-path .gitignore --cache\",
    \"preversion\": \"npm run test:all && npm run build && git commit --allow-empty -am \\\"Update dist\\\"\",
    \"postinstall\": \"node lib/post_install.js\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/webpack-contrib/uglifyjs-webpack-plugin.git\"
  },
  \"keywords\": [
    \"webpack\",
    \"uglifyjs\",
    \"plugin\"
  ],
  \"files\": [
    \"dist\",
    \"lib\"
  ],
  \"jest\": {
    \"collectCoverage\": true,
    \"moduleFileExtensions\": [
      \"js\"
    ],
    \"moduleDirectories\": [
      \"node_modules\"
    ]
  },
  \"author\": \"\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/webpack-contrib/uglifyjs-webpack-plugin/issues\"
  },
  \"homepage\": \"https://github.com/webpack-contrib/uglifyjs-webpack-plugin\",
  \"peerDependencies\": {
    \"webpack\": \"^1.9 || ^2 || ^2.1.0-beta || ^2.2.0-rc || ^3.0.0\"
  },
  \"dependencies\": {
    \"source-map\": \"^0.5.6\",
    \"uglify-js\": \"^2.8.29\",
    \"webpack-sources\": \"^1.0.1\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.18.0\",
    \"babel-core\": \"^6.21.0\",
    \"babel-eslint\": \"^7.1.1\",
    \"babel-jest\": \"^18.0.0\",
    \"babel-plugin-syntax-object-rest-spread\": \"^6.13.0\",
    \"babel-plugin-transform-object-rest-spread\": \"^6.20.2\",
    \"babel-preset-es2015\": \"^6.18.0\",
    \"eslint\": \"^3.13.1\",
    \"eslint-config-airbnb\": \"^14.0.0\",
    \"eslint-plugin-import\": \"^2.2.0\",
    \"eslint-plugin-jsx-a11y\": \"^3.0.2\",
    \"eslint-plugin-node\": \"^4.0.1\",
    \"eslint-plugin-react\": \"^6.9.0\",
    \"git-prepush-hook\": \"^1.0.1\",
    \"jest\": \"^18.1.0\",
    \"sync-exec\": \"^0.6.2\",
    \"webpack\": \"^2.2.0\"
  },
  \"engines\": {
    \"node\": \">=4.3.0 <5.0.0 || >=5.10\"
  },
  \"pre-push\": [
    \"test:all\"
  ]
}
", "node_modules/uglifyjs-webpack-plugin/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglifyjs-webpack-plugin/package.json");
    }
}
