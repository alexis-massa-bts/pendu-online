package com.hangmanserver.httpserver.config;

public class HttpsConfiguratorException extends RuntimeException {
    public HttpsConfiguratorException() {
    }

    public HttpsConfiguratorException(String message) {
        super(message);
    }

    public HttpsConfiguratorException(String message, Throwable cause) {
        super(message, cause);
    }

    public HttpsConfiguratorException(Throwable cause) {
        super(cause);
    }
}
