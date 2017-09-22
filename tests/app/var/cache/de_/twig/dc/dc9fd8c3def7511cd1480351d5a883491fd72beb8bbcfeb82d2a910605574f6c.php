<?php

/* node_modules/nan/nan_callbacks.h */
class __TwigTemplate_67bec6574fedfb17f41db80613782ddbed3005d3cc6f82768e643e2f0e22648e extends Twig_Template
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
        $__internal_cf09dc7db20eea9615c1e811f5e8ffc17d334bfecf7ca401595d10dffdfe5183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf09dc7db20eea9615c1e811f5e8ffc17d334bfecf7ca401595d10dffdfe5183->enter($__internal_cf09dc7db20eea9615c1e811f5e8ffc17d334bfecf7ca401595d10dffdfe5183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/nan_callbacks.h"));

        // line 1
        echo "/*********************************************************************
 * NAN - Native Abstractions for Node.js
 *
 * Copyright (c) 2017 NAN contributors
 *
 * MIT License <https://github.com/nodejs/nan/blob/master/LICENSE.md>
 ********************************************************************/

#ifndef NAN_CALLBACKS_H_
#define NAN_CALLBACKS_H_

template<typename T> class FunctionCallbackInfo;
template<typename T> class PropertyCallbackInfo;
template<typename T> class Global;

typedef void(*FunctionCallback)(const FunctionCallbackInfo<v8::Value>&);
typedef void(*GetterCallback)
    (v8::Local<v8::String>, const PropertyCallbackInfo<v8::Value>&);
typedef void(*SetterCallback)(
    v8::Local<v8::String>,
    v8::Local<v8::Value>,
    const PropertyCallbackInfo<void>&);
typedef void(*PropertyGetterCallback)(
    v8::Local<v8::String>,
    const PropertyCallbackInfo<v8::Value>&);
typedef void(*PropertySetterCallback)(
    v8::Local<v8::String>,
    v8::Local<v8::Value>,
    const PropertyCallbackInfo<v8::Value>&);
typedef void(*PropertyEnumeratorCallback)
    (const PropertyCallbackInfo<v8::Array>&);
typedef void(*PropertyDeleterCallback)(
    v8::Local<v8::String>,
    const PropertyCallbackInfo<v8::Boolean>&);
typedef void(*PropertyQueryCallback)(
    v8::Local<v8::String>,
    const PropertyCallbackInfo<v8::Integer>&);
typedef void(*IndexGetterCallback)(
    uint32_t,
    const PropertyCallbackInfo<v8::Value>&);
typedef void(*IndexSetterCallback)(
    uint32_t,
    v8::Local<v8::Value>,
    const PropertyCallbackInfo<v8::Value>&);
typedef void(*IndexEnumeratorCallback)
    (const PropertyCallbackInfo<v8::Array>&);
typedef void(*IndexDeleterCallback)(
    uint32_t,
    const PropertyCallbackInfo<v8::Boolean>&);
typedef void(*IndexQueryCallback)(
    uint32_t,
    const PropertyCallbackInfo<v8::Integer>&);

namespace imp {
typedef v8::Local<v8::AccessorSignature> Sig;

static const int kDataIndex =                    0;

static const int kFunctionIndex =                1;
static const int kFunctionFieldCount =           2;

static const int kGetterIndex =                  1;
static const int kSetterIndex =                  2;
static const int kAccessorFieldCount =           3;

static const int kPropertyGetterIndex =          1;
static const int kPropertySetterIndex =          2;
static const int kPropertyEnumeratorIndex =      3;
static const int kPropertyDeleterIndex =         4;
static const int kPropertyQueryIndex =           5;
static const int kPropertyFieldCount =           6;

static const int kIndexPropertyGetterIndex =     1;
static const int kIndexPropertySetterIndex =     2;
static const int kIndexPropertyEnumeratorIndex = 3;
static const int kIndexPropertyDeleterIndex =    4;
static const int kIndexPropertyQueryIndex =      5;
static const int kIndexPropertyFieldCount =      6;

}  // end of namespace imp

#if NODE_MODULE_VERSION > NODE_0_10_MODULE_VERSION
# include \"nan_callbacks_12_inl.h\"  // NOLINT(build/include)
#else
# include \"nan_callbacks_pre_12_inl.h\"  // NOLINT(build/include)
#endif

#endif  // NAN_CALLBACKS_H_
";
        
        $__internal_cf09dc7db20eea9615c1e811f5e8ffc17d334bfecf7ca401595d10dffdfe5183->leave($__internal_cf09dc7db20eea9615c1e811f5e8ffc17d334bfecf7ca401595d10dffdfe5183_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/nan_callbacks.h";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*********************************************************************
 * NAN - Native Abstractions for Node.js
 *
 * Copyright (c) 2017 NAN contributors
 *
 * MIT License <https://github.com/nodejs/nan/blob/master/LICENSE.md>
 ********************************************************************/

#ifndef NAN_CALLBACKS_H_
#define NAN_CALLBACKS_H_

template<typename T> class FunctionCallbackInfo;
template<typename T> class PropertyCallbackInfo;
template<typename T> class Global;

typedef void(*FunctionCallback)(const FunctionCallbackInfo<v8::Value>&);
typedef void(*GetterCallback)
    (v8::Local<v8::String>, const PropertyCallbackInfo<v8::Value>&);
typedef void(*SetterCallback)(
    v8::Local<v8::String>,
    v8::Local<v8::Value>,
    const PropertyCallbackInfo<void>&);
typedef void(*PropertyGetterCallback)(
    v8::Local<v8::String>,
    const PropertyCallbackInfo<v8::Value>&);
typedef void(*PropertySetterCallback)(
    v8::Local<v8::String>,
    v8::Local<v8::Value>,
    const PropertyCallbackInfo<v8::Value>&);
typedef void(*PropertyEnumeratorCallback)
    (const PropertyCallbackInfo<v8::Array>&);
typedef void(*PropertyDeleterCallback)(
    v8::Local<v8::String>,
    const PropertyCallbackInfo<v8::Boolean>&);
typedef void(*PropertyQueryCallback)(
    v8::Local<v8::String>,
    const PropertyCallbackInfo<v8::Integer>&);
typedef void(*IndexGetterCallback)(
    uint32_t,
    const PropertyCallbackInfo<v8::Value>&);
typedef void(*IndexSetterCallback)(
    uint32_t,
    v8::Local<v8::Value>,
    const PropertyCallbackInfo<v8::Value>&);
typedef void(*IndexEnumeratorCallback)
    (const PropertyCallbackInfo<v8::Array>&);
typedef void(*IndexDeleterCallback)(
    uint32_t,
    const PropertyCallbackInfo<v8::Boolean>&);
typedef void(*IndexQueryCallback)(
    uint32_t,
    const PropertyCallbackInfo<v8::Integer>&);

namespace imp {
typedef v8::Local<v8::AccessorSignature> Sig;

static const int kDataIndex =                    0;

static const int kFunctionIndex =                1;
static const int kFunctionFieldCount =           2;

static const int kGetterIndex =                  1;
static const int kSetterIndex =                  2;
static const int kAccessorFieldCount =           3;

static const int kPropertyGetterIndex =          1;
static const int kPropertySetterIndex =          2;
static const int kPropertyEnumeratorIndex =      3;
static const int kPropertyDeleterIndex =         4;
static const int kPropertyQueryIndex =           5;
static const int kPropertyFieldCount =           6;

static const int kIndexPropertyGetterIndex =     1;
static const int kIndexPropertySetterIndex =     2;
static const int kIndexPropertyEnumeratorIndex = 3;
static const int kIndexPropertyDeleterIndex =    4;
static const int kIndexPropertyQueryIndex =      5;
static const int kIndexPropertyFieldCount =      6;

}  // end of namespace imp

#if NODE_MODULE_VERSION > NODE_0_10_MODULE_VERSION
# include \"nan_callbacks_12_inl.h\"  // NOLINT(build/include)
#else
# include \"nan_callbacks_pre_12_inl.h\"  // NOLINT(build/include)
#endif

#endif  // NAN_CALLBACKS_H_
", "node_modules/nan/nan_callbacks.h", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/nan_callbacks.h");
    }
}
