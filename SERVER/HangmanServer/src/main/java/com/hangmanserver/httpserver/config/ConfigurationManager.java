package com.hangmanserver.httpserver.config;

public class ConfigurationManager {

    private static ConfigurationManager myConfigurationManager;
    private static Configuration myCurrentConfiguration;

    private ConfigurationManager() {
    }

    public static ConfigurationManager getInstance() {
        if (myConfigurationManager == null) {
            myConfigurationManager = new ConfigurationManager();
        }
        return myConfigurationManager;
    }

    /**
     * Used to load a configuration file by the path provider
     *
     * @param filePath
     */
    public void loadConfigurationFile(String filePath) {

    }

    /**
     * Returns the current loaded configuration
     */
    public void getCurrentConfiguration() {

    }

}
