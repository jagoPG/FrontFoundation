<?php

/* node_modules/nan/nan_converters_pre_43_inl.h */
class __TwigTemplate_405dd0c11a98bf0f653d873856168ab97803c41f7ba1be42dad35161687597cf extends Twig_Template
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
        $__internal_bbdc76746afe2edf838bff8f5aa0ae438cfd6c7676e5e81585e39b538bb54ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdc76746afe2edf838bff8f5aa0ae438cfd6c7676e5e81585e39b538bb54ec1->enter($__internal_bbdc76746afe2edf838bff8f5aa0ae438cfd6c7676e5e81585e39b538bb54ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/nan_converters_pre_43_inl.h"));

        // line 1
        echo "/*********************************************************************
 * NAN - Native Abstractions for Node.js
 *
 * Copyright (c) 2017 NAN contributors
 *
 * MIT License <https://github.com/nodejs/nan/blob/master/LICENSE.md>
 ********************************************************************/

#ifndef NAN_CONVERTERS_PRE_43_INL_H_
#define NAN_CONVERTERS_PRE_43_INL_H_

#define X(TYPE)                                                                \\
imp::ToFactory<v8::TYPE>::return_t                                             \\
imp::ToFactory<v8::TYPE>::convert(v8::Local<v8::Value> val) {                  \\
  return val->To ## TYPE();                                                    \\
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
  return Just(val->NAME ## Value());                                           \\
}

X(bool, Boolean)
X(double, Number)
X(int64_t, Integer)
X(uint32_t, Uint32)
X(int32_t, Int32)

#undef X

#endif  // NAN_CONVERTERS_PRE_43_INL_H_
";
        
        $__internal_bbdc76746afe2edf838bff8f5aa0ae438cfd6c7676e5e81585e39b538bb54ec1->leave($__internal_bbdc76746afe2edf838bff8f5aa0ae438cfd6c7676e5e81585e39b538bb54ec1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/nan_converters_pre_43_inl.h";
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

#ifndef NAN_CONVERTERS_PRE_43_INL_H_
#define NAN_CONVERTERS_PRE_43_INL_H_

#define X(TYPE)                                                                \\
imp::ToFactory<v8::TYPE>::return_t                                             \\
imp::ToFactory<v8::TYPE>::convert(v8::Local<v8::Value> val) {                  \\
  return val->To ## TYPE();                                                    \\
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
  return Just(val->NAME ## Value());                                           \\
}

X(bool, Boolean)
X(double, Number)
X(int64_t, Integer)
X(uint32_t, Uint32)
X(int32_t, Int32)

#undef X

#endif  // NAN_CONVERTERS_PRE_43_INL_H_
", "node_modules/nan/nan_converters_pre_43_inl.h", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/nan_converters_pre_43_inl.h");
    }
}
