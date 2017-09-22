<?php

/* node_modules/fsevents/node_modules/form-data/package.json */
class __TwigTemplate_b4546e619dbb568886dbe0371d340b39a8acc16bfe006be65796b74c54649155 extends Twig_Template
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
        $__internal_b09b46e4609726a6815d15d5eb00ad4095a6f42695e81f99d8ee4475a828db29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09b46e4609726a6815d15d5eb00ad4095a6f42695e81f99d8ee4475a828db29->enter($__internal_b09b46e4609726a6815d15d5eb00ad4095a6f42695e81f99d8ee4475a828db29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/form-data/package.json"));

        // line 1
        echo "{
  \"_args\": [
    [
      \"form-data@2.1.4\",
      \"/Users/eshanker/Code/fsevents\"
    ]
  ],
  \"_from\": \"form-data@2.1.4\",
  \"_id\": \"form-data@2.1.4\",
  \"_inBundle\": false,
  \"_integrity\": \"sha1-M8GDrPGTJ27KqYFDpp6Uv+4XUNE=\",
  \"_location\": \"/form-data\",
  \"_phantomChildren\": {},
  \"_requested\": {
    \"type\": \"version\",
    \"registry\": true,
    \"raw\": \"form-data@2.1.4\",
    \"name\": \"form-data\",
    \"escapedName\": \"form-data\",
    \"rawSpec\": \"2.1.4\",
    \"saveSpec\": null,
    \"fetchSpec\": \"2.1.4\"
  },
  \"_requiredBy\": [],
  \"_resolved\": \"https://registry.npmjs.org/form-data/-/form-data-2.1.4.tgz\",
  \"_spec\": \"2.1.4\",
  \"_where\": \"/Users/eshanker/Code/fsevents\",
  \"author\": {
    \"name\": \"Felix Geisendörfer\",
    \"email\": \"felix@debuggable.com\",
    \"url\": \"http://debuggable.com/\"
  },
  \"browser\": \"./lib/browser\",
  \"bugs\": {
    \"url\": \"https://github.com/form-data/form-data/issues\"
  },
  \"dependencies\": {
    \"asynckit\": \"^0.4.0\",
    \"combined-stream\": \"^1.0.5\",
    \"mime-types\": \"^2.1.12\"
  },
  \"description\": \"A library to create readable \\\"multipart/form-data\\\" streams. Can be used to submit forms and file uploads to other web applications.\",
  \"devDependencies\": {
    \"browserify\": \"^13.1.1\",
    \"browserify-istanbul\": \"^2.0.0\",
    \"coveralls\": \"^2.11.14\",
    \"cross-spawn\": \"^4.0.2\",
    \"eslint\": \"^3.9.1\",
    \"fake\": \"^0.2.2\",
    \"far\": \"^0.0.7\",
    \"formidable\": \"^1.0.17\",
    \"in-publish\": \"^2.0.0\",
    \"is-node-modern\": \"^1.0.0\",
    \"istanbul\": \"^0.4.5\",
    \"obake\": \"^0.1.2\",
    \"phantomjs-prebuilt\": \"^2.1.13\",
    \"pkgfiles\": \"^2.3.0\",
    \"pre-commit\": \"^1.1.3\",
    \"request\": \"2.76.0\",
    \"rimraf\": \"^2.5.4\",
    \"tape\": \"^4.6.2\"
  },
  \"engines\": {
    \"node\": \">= 0.12\"
  },
  \"homepage\": \"https://github.com/form-data/form-data#readme\",
  \"license\": \"MIT\",
  \"main\": \"./lib/form_data\",
  \"name\": \"form-data\",
  \"pre-commit\": [
    \"lint\",
    \"ci-test\",
    \"check\"
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/form-data/form-data.git\"
  },
  \"scripts\": {
    \"browser\": \"browserify -t browserify-istanbul test/run-browser.js | obake --coverage\",
    \"check\": \"istanbul check-coverage coverage/coverage*.json\",
    \"ci-lint\": \"is-node-modern 6 && npm run lint || is-node-not-modern 6\",
    \"ci-test\": \"npm run test && npm run browser && npm run report\",
    \"debug\": \"verbose=1 ./test/run.js\",
    \"files\": \"pkgfiles --sort=name\",
    \"get-version\": \"node -e \\\"console.log(require('./package.json').version)\\\"\",
    \"lint\": \"eslint lib/*.js test/*.js test/integration/*.js\",
    \"postpublish\": \"npm run restore-readme\",
    \"posttest\": \"istanbul report lcov text\",
    \"predebug\": \"rimraf coverage test/tmp\",
    \"prepublish\": \"in-publish && npm run update-readme || not-in-publish\",
    \"pretest\": \"rimraf coverage test/tmp\",
    \"report\": \"istanbul report lcov text\",
    \"restore-readme\": \"mv README.md.bak README.md\",
    \"test\": \"istanbul cover test/run.js\",
    \"update-readme\": \"sed -i.bak 's/\\\\/master\\\\.svg/\\\\/v'\$(npm --silent run get-version)'.svg/g' README.md\"
  },
  \"version\": \"2.1.4\"
}
";
        
        $__internal_b09b46e4609726a6815d15d5eb00ad4095a6f42695e81f99d8ee4475a828db29->leave($__internal_b09b46e4609726a6815d15d5eb00ad4095a6f42695e81f99d8ee4475a828db29_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/form-data/package.json";
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
      \"form-data@2.1.4\",
      \"/Users/eshanker/Code/fsevents\"
    ]
  ],
  \"_from\": \"form-data@2.1.4\",
  \"_id\": \"form-data@2.1.4\",
  \"_inBundle\": false,
  \"_integrity\": \"sha1-M8GDrPGTJ27KqYFDpp6Uv+4XUNE=\",
  \"_location\": \"/form-data\",
  \"_phantomChildren\": {},
  \"_requested\": {
    \"type\": \"version\",
    \"registry\": true,
    \"raw\": \"form-data@2.1.4\",
    \"name\": \"form-data\",
    \"escapedName\": \"form-data\",
    \"rawSpec\": \"2.1.4\",
    \"saveSpec\": null,
    \"fetchSpec\": \"2.1.4\"
  },
  \"_requiredBy\": [],
  \"_resolved\": \"https://registry.npmjs.org/form-data/-/form-data-2.1.4.tgz\",
  \"_spec\": \"2.1.4\",
  \"_where\": \"/Users/eshanker/Code/fsevents\",
  \"author\": {
    \"name\": \"Felix Geisendörfer\",
    \"email\": \"felix@debuggable.com\",
    \"url\": \"http://debuggable.com/\"
  },
  \"browser\": \"./lib/browser\",
  \"bugs\": {
    \"url\": \"https://github.com/form-data/form-data/issues\"
  },
  \"dependencies\": {
    \"asynckit\": \"^0.4.0\",
    \"combined-stream\": \"^1.0.5\",
    \"mime-types\": \"^2.1.12\"
  },
  \"description\": \"A library to create readable \\\"multipart/form-data\\\" streams. Can be used to submit forms and file uploads to other web applications.\",
  \"devDependencies\": {
    \"browserify\": \"^13.1.1\",
    \"browserify-istanbul\": \"^2.0.0\",
    \"coveralls\": \"^2.11.14\",
    \"cross-spawn\": \"^4.0.2\",
    \"eslint\": \"^3.9.1\",
    \"fake\": \"^0.2.2\",
    \"far\": \"^0.0.7\",
    \"formidable\": \"^1.0.17\",
    \"in-publish\": \"^2.0.0\",
    \"is-node-modern\": \"^1.0.0\",
    \"istanbul\": \"^0.4.5\",
    \"obake\": \"^0.1.2\",
    \"phantomjs-prebuilt\": \"^2.1.13\",
    \"pkgfiles\": \"^2.3.0\",
    \"pre-commit\": \"^1.1.3\",
    \"request\": \"2.76.0\",
    \"rimraf\": \"^2.5.4\",
    \"tape\": \"^4.6.2\"
  },
  \"engines\": {
    \"node\": \">= 0.12\"
  },
  \"homepage\": \"https://github.com/form-data/form-data#readme\",
  \"license\": \"MIT\",
  \"main\": \"./lib/form_data\",
  \"name\": \"form-data\",
  \"pre-commit\": [
    \"lint\",
    \"ci-test\",
    \"check\"
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/form-data/form-data.git\"
  },
  \"scripts\": {
    \"browser\": \"browserify -t browserify-istanbul test/run-browser.js | obake --coverage\",
    \"check\": \"istanbul check-coverage coverage/coverage*.json\",
    \"ci-lint\": \"is-node-modern 6 && npm run lint || is-node-not-modern 6\",
    \"ci-test\": \"npm run test && npm run browser && npm run report\",
    \"debug\": \"verbose=1 ./test/run.js\",
    \"files\": \"pkgfiles --sort=name\",
    \"get-version\": \"node -e \\\"console.log(require('./package.json').version)\\\"\",
    \"lint\": \"eslint lib/*.js test/*.js test/integration/*.js\",
    \"postpublish\": \"npm run restore-readme\",
    \"posttest\": \"istanbul report lcov text\",
    \"predebug\": \"rimraf coverage test/tmp\",
    \"prepublish\": \"in-publish && npm run update-readme || not-in-publish\",
    \"pretest\": \"rimraf coverage test/tmp\",
    \"report\": \"istanbul report lcov text\",
    \"restore-readme\": \"mv README.md.bak README.md\",
    \"test\": \"istanbul cover test/run.js\",
    \"update-readme\": \"sed -i.bak 's/\\\\/master\\\\.svg/\\\\/v'\$(npm --silent run get-version)'.svg/g' README.md\"
  },
  \"version\": \"2.1.4\"
}
", "node_modules/fsevents/node_modules/form-data/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/form-data/package.json");
    }
}
