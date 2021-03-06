<?php

namespace BMM\CMSMove\Config\Craft;

use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Helper\QuestionHelper;

use BMM\CMSMove\Config\Config as BaseConfig;

class Config extends BaseConfig
{

    /**
     * Sync the templates
     */
    public function templates()
    {
        /* Get the template directory from the config file */
        $templateDir = $this->configVars->mappings->app . "/" . $this->configVars->mappings->templates;

        /* Get the remote directory */
        $remoteDir = $this->root . "/" . $templateDir;

        /* Sync it! */
        $this->syncIt($templateDir, $remoteDir, "templates");

    } // END templates() function

    /**
     * Sync the plugins
     */
    public function plugins()
    {
        /* Get the plugins directory from the config file */
        $pluginDir = $this->configVars->mappings->app . "/" . $this->configVars->mappings->plugins;

        /* Get the remote directory */
        $remoteDir = $this->root . "/" . $pluginDir;

        /* Sync it! */
        $this->syncIt($pluginDir, $remoteDir, "plugins");

    } // END plugins() function

    /**
     * Sync the config directory
     */
    public function config()
    {
        /* Get the config directory from the config file */
        $configDir = $this->configVars->mappings->app . "/" . $this->configVars->mappings->config;

        /* Get the remote directory */
        $remoteDir = $this->root . "/" . $configDir;

        /* Sync it! */
        $this->syncIt($configDir, $remoteDir, "config");

    } // END config() function

    /**
     * Sync the app directory
     */
    public function app()
    {
        /* Get the app directory from the config file */
        $appDir = $this->configVars->mappings->app;

        /* Get the remote directory */
        $remoteDir = $this->root . "/" . $appDir;

        /* Sync it! */
        $this->syncIt($appDir, $remoteDir, "app");

    } // END app() function

    /**
     * Sync the www directory
     */
    public function www()
    {
        /* Get the public directory from the config file */
        $publicDir = $this->configVars->mappings->www;

        /* Get the remote directory */
        $remoteDir = $this->root . "/" . $this->public;

        /* Sync it! */
        $this->syncIt($publicDir, $remoteDir, "public");

    } // END www() function

}