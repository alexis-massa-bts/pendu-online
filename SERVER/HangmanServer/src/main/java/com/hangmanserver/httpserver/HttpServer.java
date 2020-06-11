package com.hangmanserver.httpserver;

import com.hangmanserver.httpserver.config.Configuration;
import com.hangmanserver.httpserver.config.ConfigurationManager;

/**
 *
 * Driver class for the Http Server
 *
 */

public class HttpServer {

    public static void main(String[] args){

        System.out.println("Server starting...");

        ConfigurationManager.getInstance().loadConfigurationFile("src/main/resources/http.json");
        Configuration conf = ConfigurationManager.getInstance().getCurrentConfiguration();

        System.out.println("Using Port:" + conf.getPort());
        System.out.println("Using Webroot:" + conf.getWebroot());
    }
}
