<?php

/* node_modules/nan/nan_converters_43_inl.h */
class __TwigTemplate_630fb4dcc6b11ebfa08e1ffd1aefcedcdb4fad537bd503b1081f049d099f6d00 extends Twig_Template
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
        $__internal_964666391318a6cc271f2d1abe217ffebbf4e1e7f6efca8f03bc878cf6f19a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964666391318a6cc271f2d1abe217ffebbf4e1e7f6efca8f03bc878cf6f19a77->enter($__internal_964666391318a6cc271f2d1abe217ffebbf4e1e7f6efca8f03bc878cf6f19a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/nan_converters_43_inl.h"));

        // line 1
        echo "/*********************************************************************
 * NAN - Native Abstractions for Node.js
 *
 * Copyright (c) 2017 NAN contributors
 *
 * MIT License <https://github.com/nodejs/nan/blob/master/LICENSE.md>
 ********************************************************************/

#ifndef NAN_CONVERTERS_43_INL_H_
#define NAN_CONVERTERS_43_INL_H_

#define X(TYPE)                                                                \\
imp::ToFactory<v8::TYPE>::return_t                                             \\
imp::ToFactory<v8::TYPE>::convert(v8::Local<v8::Value> val) {                  \\
  v8::Isolate *isolate = v8::Isolate::GetCurrent();                            \\
  v8::EscapableHandleScope scope(isolate);                                     \\
  return scope.Escape(                                                         \\
      val->To ## TYPE(v8::Isolate::GetCurrent()->GetCurrentContext())          \\
          .FromMaybe(v8::Local<v8::TYPE>()));                                  \\
}

X(Boolean)
X(Number)
X(String)
X(Object)
X(Integer)
X(Uint32)
X(Int32)

#undef X

#define X(TYPE, NAME)                                                          \\
imp::ToFactory<TYPE>::return_t                                                 \\
imp::ToFactory<TYPE>::convert(v8::Local<v8::Value> val) {                      \\
  v8::Isolate *isolate = v8::Isolate::GetCurrent();                            \\
  v8::HandleScope scope(isolate);                                              \\
  return val->NAME ## Value(isolate->GetCurrentContext());                     \\
}

X(bool, Boolean)
X(double, Number)
X(int64_t, Integer)
X(uint32_t, Uint32)
X(int32_t, Int32)

#undef X

#endif  // NAN_CONVERTERS_43_INL_H_
";
        
        $__internal_964666391318a6cc271f2d1abe217ffebbf4e1e7f6efca8f03bc878cf6f19a77->leave($__internal_964666391318a6cc271f2d1abe217ffebbf4e1e7f6efca8f03bc878cf6f19a77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/nan_converters_43_inl.h";
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

#ifndef NAN_CONVERTERS_43_INL_H_
#define NAN_CONVERTERS_43_INL_H_

#define X(TYPE)                                                                \\
imp::ToFactory<v8::TYPE>::return_t                                             \\
imp::ToFactory<v8::TYPE>::convert(v8::Local<v8::Value> val) {                  \\
  v8::Isolate *isolate = v8::Isolate::GetCurrent();                            \\
  v8::EscapableHandleScope scope(isolate);                                     \\
  return scope.Escape(                                                         \\
      val->To ## TYPE(v8::Isolate::GetCurrent()->GetCurrentContext())          \\
          .FromMaybe(v8::Local<v8::TYPE>()));                                  \\
}

X(Boolean)
X(Number)
X(String)
X(Object)
X(Integer)
X(Uint32)
X(Int32)

#undef X

#define X(TYPE, NAME)                                                          \\
imp::ToFactory<TYPE>::return_t                                                 \\
imp::ToFactory<TYPE>::convert(v8::Local<v8::Value> val) {                      \\
  v8::Isolate *isolate = v8::Isolate::GetCurrent();                            \\
  v8::HandleScope scope(isolate);                                              \\
  return val->NAME ## Value(isolate->GetCurrentContext());                     \\
}

X(bool, Boolean)
X(double, Number)
X(int64_t, Integer)
X(uint32_t, Uint32)
X(int32_t, Int32)

#undef X

#endif  // NAN_CONVERTERS_43_INL_H_
", "node_modules/nan/nan_converters_43_inl.h", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/nan_converters_43_inl.h");
    }
}
