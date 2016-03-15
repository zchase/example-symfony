<?php

/* base.html.twig */
class __TwigTemplate_149132f0edf47033546c9d4a978e7a445ea265b79f51bfed432f0c68c7bc95d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09582969094d926245c7dc7bc1fab1b9232fe15fd1f113cf16bf92a829214d63 = $this->env->getExtension("native_profiler");
        $__internal_09582969094d926245c7dc7bc1fab1b9232fe15fd1f113cf16bf92a829214d63->enter($__internal_09582969094d926245c7dc7bc1fab1b9232fe15fd1f113cf16bf92a829214d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_09582969094d926245c7dc7bc1fab1b9232fe15fd1f113cf16bf92a829214d63->leave($__internal_09582969094d926245c7dc7bc1fab1b9232fe15fd1f113cf16bf92a829214d63_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_138bf86fecc0489db6332cc1f03fdb74f563b1601bfdea69f4a338bc4b696ca9 = $this->env->getExtension("native_profiler");
        $__internal_138bf86fecc0489db6332cc1f03fdb74f563b1601bfdea69f4a338bc4b696ca9->enter($__internal_138bf86fecc0489db6332cc1f03fdb74f563b1601bfdea69f4a338bc4b696ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_138bf86fecc0489db6332cc1f03fdb74f563b1601bfdea69f4a338bc4b696ca9->leave($__internal_138bf86fecc0489db6332cc1f03fdb74f563b1601bfdea69f4a338bc4b696ca9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d73b8560d4ee35930a0a981990d1e9c51613ce994aba33da2fe81ccdaf926faf = $this->env->getExtension("native_profiler");
        $__internal_d73b8560d4ee35930a0a981990d1e9c51613ce994aba33da2fe81ccdaf926faf->enter($__internal_d73b8560d4ee35930a0a981990d1e9c51613ce994aba33da2fe81ccdaf926faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d73b8560d4ee35930a0a981990d1e9c51613ce994aba33da2fe81ccdaf926faf->leave($__internal_d73b8560d4ee35930a0a981990d1e9c51613ce994aba33da2fe81ccdaf926faf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b382ae9a246fb326ee2e5a8c8af2fd42151f90429613ca62cda658da717b774 = $this->env->getExtension("native_profiler");
        $__internal_0b382ae9a246fb326ee2e5a8c8af2fd42151f90429613ca62cda658da717b774->enter($__internal_0b382ae9a246fb326ee2e5a8c8af2fd42151f90429613ca62cda658da717b774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b382ae9a246fb326ee2e5a8c8af2fd42151f90429613ca62cda658da717b774->leave($__internal_0b382ae9a246fb326ee2e5a8c8af2fd42151f90429613ca62cda658da717b774_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44eddfd3647702b65f68f5d169f48639046eb8d054b4ea65c7f8df6e12cef037 = $this->env->getExtension("native_profiler");
        $__internal_44eddfd3647702b65f68f5d169f48639046eb8d054b4ea65c7f8df6e12cef037->enter($__internal_44eddfd3647702b65f68f5d169f48639046eb8d054b4ea65c7f8df6e12cef037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44eddfd3647702b65f68f5d169f48639046eb8d054b4ea65c7f8df6e12cef037->leave($__internal_44eddfd3647702b65f68f5d169f48639046eb8d054b4ea65c7f8df6e12cef037_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
