<?php

/* node_modules/loader-runner/README.md */
class __TwigTemplate_3cee7fabc7103e7d4364341711ff0c0c5ed60d9bc8b962dc04cbdb1fd664487e extends Twig_Template
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
        $__internal_00453e74fdf7c6f2e8737778f184130f16a1a1c578e3147af17ed4f3effcde4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00453e74fdf7c6f2e8737778f184130f16a1a1c578e3147af17ed4f3effcde4f->enter($__internal_00453e74fdf7c6f2e8737778f184130f16a1a1c578e3147af17ed4f3effcde4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-runner/README.md"));

        // line 1
        echo "# loader-runner

``` js
import { runLoaders } from \"loader-runner\";

runLoaders({
\tresource: \"/abs/path/to/file.txt?query\",
\t// String: Absolute path to the resource (optionally including query string)

\tloaders: [\"/abs/path/to/loader.js?query\"],
\t// String[]: Absolute paths to the loaders (optionally including query string)
\t// {loader, options}[]: Absolute paths to the loaders with options object

\tcontext: { minimize: true },
\t// Additional loader context which is used as base context

\treadResource: fs.readFile.bind(fs)
\t// A function to read the resource
\t// Must have signature function(path, function(err, buffer))

}, function(err, result) {
\t// err: Error?

\t// result.result: Buffer | String
\t// The result

\t// result.resourceBuffer: Buffer
\t// The raw resource as Buffer (useful for SourceMaps)

\t// result.cacheable: Bool
\t// Is the result cacheable or do it require reexecution?

\t// result.fileDependencies: String[]
\t// An array of paths (files) on which the result depends on

\t// result.contextDependencies: String[]
\t// An array of paths (directories) on which the result depends on
})
```

More documentation following...

";
        
        $__internal_00453e74fdf7c6f2e8737778f184130f16a1a1c578e3147af17ed4f3effcde4f->leave($__internal_00453e74fdf7c6f2e8737778f184130f16a1a1c578e3147af17ed4f3effcde4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-runner/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# loader-runner

``` js
import { runLoaders } from \"loader-runner\";

runLoaders({
\tresource: \"/abs/path/to/file.txt?query\",
\t// String: Absolute path to the resource (optionally including query string)

\tloaders: [\"/abs/path/to/loader.js?query\"],
\t// String[]: Absolute paths to the loaders (optionally including query string)
\t// {loader, options}[]: Absolute paths to the loaders with options object

\tcontext: { minimize: true },
\t// Additional loader context which is used as base context

\treadResource: fs.readFile.bind(fs)
\t// A function to read the resource
\t// Must have signature function(path, function(err, buffer))

}, function(err, result) {
\t// err: Error?

\t// result.result: Buffer | String
\t// The result

\t// result.resourceBuffer: Buffer
\t// The raw resource as Buffer (useful for SourceMaps)

\t// result.cacheable: Bool
\t// Is the result cacheable or do it require reexecution?

\t// result.fileDependencies: String[]
\t// An array of paths (files) on which the result depends on

\t// result.contextDependencies: String[]
\t// An array of paths (directories) on which the result depends on
})
```

More documentation following...

", "node_modules/loader-runner/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-runner/README.md");
    }
}
