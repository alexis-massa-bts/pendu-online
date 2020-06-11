package com.hangmanserver.httpserver.util;

import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.DeserializationFeature;
import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;

import java.io.IOException;

public class Json {

    private static ObjectMapper myOjectMapper = defaultObjectMapper();

    private static ObjectMapper defaultObjectMapper(){
        ObjectMapper om = new ObjectMapper();
        om.configure(DeserializationFeature.FAIL_ON_UNKNOWN_PROPERTIES, false);
        return om;
    }

    public static JsonNode parse(String jsonSrc) throws IOException {
        return myOjectMapper.readTree(jsonSrc);
    }

    public static <A> A fromJson(JsonNode node, Class<A> aClass) throws JsonProcessingException {
        return myOjectMapper.treeToValue(node, aClass);
    }

}
