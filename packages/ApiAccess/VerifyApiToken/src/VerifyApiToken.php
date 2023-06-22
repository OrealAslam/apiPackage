<?php

namespace Apiaccess\Verifyapitoken;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Client;

class VerifyApiToken
{

    public function apiData(Request $request)
    {
        $targetArray = [];
        foreach ($request->headers as $target) {
            array_push($targetArray, $target);
        }
        $url = $targetArray[8][0];
        try {
            if ($request->has('apiKey')) {
                $client = Client::where('api_key', $request->apiKey)->first();
                if ($client && $request->apiKey === $client->api_key) {
                    if ($url === $client->domain) {
                        $jsonFile = public_path('assets/psycological-test.json');
                        $jsonData = file_get_contents($jsonFile);
                        $decoded_json = json_decode($jsonData, false);
                        return response(['status' => 'success', 'message' => 'api fetched', 'data' => $decoded_json], Response::HTTP_OK);
                    }
                    return response(['status' => 'failed', 'message' => "you must have to purchase our api for this Domain name"], Response::HTTP_OK); // domain name doesn't match
                }
                return response(['status' => 'success', 'message' => 'Invalid API Key'], Response::HTTP_OK);
            } else {
                return response(['status' => 'failed', 'message' => 'API key mandatory'], Response::HTTP_OK);
            }
        } catch (\Throwable $th) {
            return response(['status' => 'failed', 'message' => $th->getMessage()], Response::HTTP_LOCKED);
        }
    }
}
