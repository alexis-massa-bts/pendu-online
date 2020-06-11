package com.hangmanserver.httpserver.util;

import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.*;

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

    public static JsonNode toJson(Object obj){
        return myOjectMapper.valueToTree(obj);
    }

    public static String stringify(JsonNode node) throws JsonProcessingException {
        return generateJson(node, false);
    }
    public static String stringifyPretty(JsonNode node) throws JsonProcessingException {
        return generateJson(node, true);
    }

    private static String generateJson(Object o, boolean pretty) throws JsonProcessingException {
        ObjectWriter objectWriter = myOjectMapper.writer();
        if (pretty){
            objectWriter = objectWriter.with(SerializationFeature.INDENT_OUTPUT);
        }
        return objectWriter.writeValueAsString(o);
    }


}
