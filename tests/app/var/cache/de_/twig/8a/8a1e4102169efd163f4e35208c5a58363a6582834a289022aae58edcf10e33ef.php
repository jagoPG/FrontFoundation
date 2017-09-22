<?php

/* node_modules/nan/doc/script.md */
class __TwigTemplate_e96672b50539eccb3c3511fbc1ce4aa851ab3678f5b00e6907b21688c7ca5106 extends Twig_Template
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
        $__internal_124c674d6f4e43e5c25f70fb18406c6ac598c854378df635f758f781642054a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124c674d6f4e43e5c25f70fb18406c6ac598c854378df635f758f781642054a5->enter($__internal_124c674d6f4e43e5c25f70fb18406c6ac598c854378df635f758f781642054a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/doc/script.md"));

        // line 1
        echo "## Script

NAN provides a `v8::Script` helpers as the API has changed over the supported versions of V8.

 - <a href=\"#api_nan_compile_script\"><b><code>Nan::CompileScript()</code></b></a>
 - <a href=\"#api_nan_run_script\"><b><code>Nan::RunScript()</code></b></a>


<a name=\"api_nan_compile_script\"></a>
### Nan::CompileScript()

A wrapper around [`v8::Script::Compile()`](https://v8docs.nodesource.com/io.js-3.0/da/da5/classv8_1_1_script_compiler.html#a93f5072a0db55d881b969e9fc98e564b).

Note that `Nan::BoundScript` is an alias for `v8::Script`.

Signature:

```c++
Nan::MaybeLocal<Nan::BoundScript> Nan::CompileScript(
    v8::Local<v8::String> s,
    const v8::ScriptOrigin& origin);
Nan::MaybeLocal<Nan::BoundScript> Nan::CompileScript(v8::Local<v8::String> s);
```


<a name=\"api_nan_run_script\"></a>
### Nan::RunScript()

Calls `script->Run()` or `script->BindToCurrentContext()->Run(Nan::GetCurrentContext())`.

Note that `Nan::BoundScript` is an alias for `v8::Script` and `Nan::UnboundScript` is an alias for `v8::UnboundScript` where available and `v8::Script` on older versions of V8.

Signature:

```c++
Nan::MaybeLocal<v8::Value> Nan::RunScript(v8::Local<Nan::UnboundScript> script)
Nan::MaybeLocal<v8::Value> Nan::RunScript(v8::Local<Nan::BoundScript> script) 
```
";
        
        $__internal_124c674d6f4e43e5c25f70fb18406c6ac598c854378df635f758f781642054a5->leave($__internal_124c674d6f4e43e5c25f70fb18406c6ac598c854378df635f758f781642054a5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/doc/script.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## Script

NAN provides a `v8::Script` helpers as the API has changed over the supported versions of V8.

 - <a href=\"#api_nan_compile_script\"><b><code>Nan::CompileScript()</code></b></a>
 - <a href=\"#api_nan_run_script\"><b><code>Nan::RunScript()</code></b></a>


<a name=\"api_nan_compile_script\"></a>
### Nan::CompileScript()

A wrapper around [`v8::Script::Compile()`](https://v8docs.nodesource.com/io.js-3.0/da/da5/classv8_1_1_script_compiler.html#a93f5072a0db55d881b969e9fc98e564b).

Note that `Nan::BoundScript` is an alias for `v8::Script`.

Signature:

```c++
Nan::MaybeLocal<Nan::BoundScript> Nan::CompileScript(
    v8::Local<v8::String> s,
    const v8::ScriptOrigin& origin);
Nan::MaybeLocal<Nan::BoundScript> Nan::CompileScript(v8::Local<v8::String> s);
```


<a name=\"api_nan_run_script\"></a>
### Nan::RunScript()

Calls `script->Run()` or `script->BindToCurrentContext()->Run(Nan::GetCurrentContext())`.

Note that `Nan::BoundScript` is an alias for `v8::Script` and `Nan::UnboundScript` is an alias for `v8::UnboundScript` where available and `v8::Script` on older versions of V8.

Signature:

```c++
Nan::MaybeLocal<v8::Value> Nan::RunScript(v8::Local<Nan::UnboundScript> script)
Nan::MaybeLocal<v8::Value> Nan::RunScript(v8::Local<Nan::BoundScript> script) 
```
", "node_modules/nan/doc/script.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/doc/script.md");
    }
}
