<?php


namespace App\Traits;


trait ApiResponse
{
    public function successResponse($data=null, $message,$code=200)
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ],$code);
    }

    public function errorResponse($message='Something was wrong',$code=400)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ],$code);
    }

}
