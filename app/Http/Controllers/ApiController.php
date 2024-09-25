<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Fungsi statis untuk encode base64 URL-safe
    public static function base64UrlEncode($data)
    {
        // $base64 = base64_encode($data);
        // return str_replace(['+', '/', '='], ['-', '_', ''], $base64);

        return base64_encode($data);
    }

    // Fungsi statis untuk decode base64 URL-safe
    public static function base64UrlDecode($data)
    {
        $data = strtr($data, '-_', '+/');
        $remainder = strlen($data) % 4;
        if ($remainder) {
            $data .= str_repeat('=', 4 - $remainder);
        }
        return base64_decode($data);
    }

    public function token(Request $request)
    {
        // Kunci rahasia 256-bit yang dienkode dalam base64
        $secret = 'cc6fb3733ea4566cf29b2dc25c643b5edaec1cb4bd519282b6cf96d71824ea83';
        echo $base64Secret = self::base64UrlEncode($secret);
        echo "<br>";
        $authorizationHeader = $request->header('Authorization');
        $parts = explode(' ', $authorizationHeader);
        echo $token = $parts[1] ?? '';
        echo "<br>";
        $grantType = $request->header('grant_type');

        if ($token == $base64Secret && $grantType == 'client_credentials') {
            return response()->json([
                'Token' => $base64Secret,
                'Code' => 200,
                'Message' => 'Success',
            ]);
        }

        return response()->json([
            'Code' => 404,
            'Message' => 'Fail',
        ]);
    }

    public function encodeData(Request $request)
    {
        // Step 1: Create Header
        $header = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);

        // Step 2: Create Payload
        $payload = json_encode([
            'sub' => $request->input('sub'),
            'name' => $request->input('name'),
        ]);

        // Encode Header and Payload
        $base64UrlHeader = self::base64UrlEncode($header);
        $base64UrlPayload = self::base64UrlEncode($payload);

        // Secret key
        $secret = 'cc6fb3733ea4566cf29b2dc25c643b5edaec1cb4bd519282b6cf96d71824ea83';

        // Create Signature
        $signature = hash_hmac('sha256', $base64UrlHeader . '.' . $base64UrlPayload, $secret, true);
        $base64UrlSignature = self::base64UrlEncode($signature);

        // Generate JWT
        $jwt = $base64UrlHeader . '.' . $base64UrlPayload . '.' . $base64UrlSignature;

        return response()->json([
            'Secret Key (256-bit)' => $secret,
            'JWT' => $jwt,
        ]);
    }

    public function decodeData(Request $request)
    {
        // Ambil token dari body permintaan
        $token = $request->input('token');

        // Pisahkan header, payload, dan signature
        [$header, $payload, $signature] = explode('.', $token);

        // Decode header dan payload
        $decodedHeader = json_decode(self::base64UrlDecode($header), true);
        $decodedPayload = json_decode(self::base64UrlDecode($payload), true);

        // Secret key
        $secret = 'cc6fb3733ea4566cf29b2dc25c643b5edaec1cb4bd519282b6cf96d71824ea83';

        // Verifikasi signature
        $expectedSignature = hash_hmac('sha256', $header . '.' . $payload, $secret, true);
        $base64UrlExpectedSignature = self::base64UrlEncode($expectedSignature);

        $isSignatureValid = ($base64UrlExpectedSignature === $signature);

        return response()->json([
            'Header' => $decodedHeader,
            'Payload' => $decodedPayload,
            'Signature Valid' => $isSignatureValid ? 'Yes' : 'No',
        ]);
    }
}
