package com.hangmanserver.httpserver;

import com.hangmanserver.httpserver.config.Configuration;
import com.hangmanserver.httpserver.config.ConfigurationManager;
import com.hangmanserver.httpserver.core.ServerListenerThread;

import com.sun.org.slf4j.internal.Logger;
import com.sun.org.slf4j.internal.LoggerFactory;

import java.io.IOException;


/**
 *
 * Driver class for the Http Server
 *
 */

public class HttpServer {

    private final static Logger LOGGER = LoggerFactory.getLogger(HttpServer.class);

    public static void main(String[] args){

        LOGGER.debug("Server starting...");

        ConfigurationManager.getInstance().loadConfigurationFile("src/main/resources/http.json");
        Configuration conf = ConfigurationManager.getInstance().getCurrentConfiguration();

        LOGGER.debug("Using Port:" + conf.getPort());
        LOGGER.debug("Using Webroot:" + conf.getWebroot());

        try {
            ServerListenerThread serverListenerThread = new ServerListenerThread(conf.getPort(), conf.getWebroot());
            serverListenerThread.start();
        } catch (IOException e) {
            e.printStackTrace();
            //TODO handle later
        }

    }
}
