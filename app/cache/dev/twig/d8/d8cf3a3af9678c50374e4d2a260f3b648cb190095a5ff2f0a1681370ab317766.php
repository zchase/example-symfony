<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0d2b8123cdcd5b728f685a291d76cd681cd03b410b2b445fba7987930d7426f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43f35c775d4929f1fd0dea782ef2832c85b3e6e956bbc75127a02faac9395a67 = $this->env->getExtension("native_profiler");
        $__internal_43f35c775d4929f1fd0dea782ef2832c85b3e6e956bbc75127a02faac9395a67->enter($__internal_43f35c775d4929f1fd0dea782ef2832c85b3e6e956bbc75127a02faac9395a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f35c775d4929f1fd0dea782ef2832c85b3e6e956bbc75127a02faac9395a67->leave($__internal_43f35c775d4929f1fd0dea782ef2832c85b3e6e956bbc75127a02faac9395a67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae8b903dda561c0da8d82ac4ac3774ec0787bc34f9611c8d4278c1c8b842cb0c = $this->env->getExtension("native_profiler");
        $__internal_ae8b903dda561c0da8d82ac4ac3774ec0787bc34f9611c8d4278c1c8b842cb0c->enter($__internal_ae8b903dda561c0da8d82ac4ac3774ec0787bc34f9611c8d4278c1c8b842cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae8b903dda561c0da8d82ac4ac3774ec0787bc34f9611c8d4278c1c8b842cb0c->leave($__internal_ae8b903dda561c0da8d82ac4ac3774ec0787bc34f9611c8d4278c1c8b842cb0c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b24fcbf960d8f3c4bbd56efba8a406e99bd54fc940e4146cd8866b559d072d5f = $this->env->getExtension("native_profiler");
        $__internal_b24fcbf960d8f3c4bbd56efba8a406e99bd54fc940e4146cd8866b559d072d5f->enter($__internal_b24fcbf960d8f3c4bbd56efba8a406e99bd54fc940e4146cd8866b559d072d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b24fcbf960d8f3c4bbd56efba8a406e99bd54fc940e4146cd8866b559d072d5f->leave($__internal_b24fcbf960d8f3c4bbd56efba8a406e99bd54fc940e4146cd8866b559d072d5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2fff7ca72241a09068195de156dc4451c347a2ab8fc164092e8a4d9f4d7345c = $this->env->getExtension("native_profiler");
        $__internal_a2fff7ca72241a09068195de156dc4451c347a2ab8fc164092e8a4d9f4d7345c->enter($__internal_a2fff7ca72241a09068195de156dc4451c347a2ab8fc164092e8a4d9f4d7345c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2fff7ca72241a09068195de156dc4451c347a2ab8fc164092e8a4d9f4d7345c->leave($__internal_a2fff7ca72241a09068195de156dc4451c347a2ab8fc164092e8a4d9f4d7345c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
