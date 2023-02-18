<?php

// Enums declaration 
enum HTTPMethods: string{
    
    case GET = 'GET';
    case POST = 'POST';
    case PATCH = 'PATCH';
    case DELETE = 'delete';
}

// Enums do not allow properties but they allow methods

enum HTTPStatus : int{
    case OK = 200;
    case created = 201;
    case ACCESS_DENIED = 403;
    case NOT_FOUND = 404;

    public static function getStatus($value): string {
        return match($value){
          HTTPStatus::OK => 'OK',
          HTTPStatus::ACCESS_DENIED => 'Access Denied',
          HTTPStatus::NOT_FOUND => 'Not Found 404',
          HTTPStatus::created => 'created 201',


            
        };
    }
}

echo HTTPStatus::getStatus(HTTPStatus::OK);