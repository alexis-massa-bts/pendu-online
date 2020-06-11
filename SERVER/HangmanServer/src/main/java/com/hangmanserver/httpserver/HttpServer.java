package com.hangmanserver.httpserver;

import com.hangmanserver.httpserver.config.Configuration;
import com.hangmanserver.httpserver.config.ConfigurationManager;

import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;
import java.net.ServerSocket;
import java.net.Socket;

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

        try {
            ServerSocket serverSocket = new ServerSocket(conf.getPort());
            Socket socket = serverSocket.accept();

            InputStream inputStream = socket.getInputStream();
            OutputStream outputStream = socket.getOutputStream();

            String html = "<html><head><title>Java HTTP Server</title></head><body><h1>simple java HTTP Server</h1></body></html>";

            final String CRLF = "\n\r"; //(CRLF = character line feed)

            String response =
                    "HTTP/1.1 200 OK" + CRLF +  //Status Line : HTTP VERSION RESPONSE_CODE RESPONSE_MESSAGE
                    "Content-Length: " + html.getBytes().length + CRLF + //HEADER
                            CRLF +
                            html +
                            CRLF + CRLF;

            outputStream.write(response.getBytes());

            inputStream.close();
            outputStream.close();
            socket.close();
            serverSocket.close();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
